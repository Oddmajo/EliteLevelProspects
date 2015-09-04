<!DOCTYPE html>
<html lang="en">
<?php
// Variables for connecting to the mySQL server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elitelevelprospects";

// Player id
if(isset($_GET['player']))
{
	$playerId = $_GET['player'];
}

$projectionSteps = 3;


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function Project($data, $statNames, $steps = 3) {
	$slopes = array(); //array where stat name maps to average slope of stat
	$projections = array();
	$arraySize = count($data);

	if ($arraySize >= $steps) {
		// Find the average slope of the last <projectionSteps> entries
		foreach($statNames as $statName)
			$slopes[$statName] = 0;

		$count = 0;
		for($i = $arraySize - $steps; $i < $arraySize - 1; $i++) {
			$count++;

			$x1 = strtotime($data[$i]["date_stats_collected"]);
			$x2 = strtotime($data[$i + 1]["date_stats_collected"]);

			foreach($statNames as $statName) {
				$y1 = $data[$i][$statName];
				$y2 = $data[$i + 1][$statName];
				$slopes[$statName] += ($y2-$y1)/($x2-$x1);
			}
		}

		$i = $arraySize - 1;
		$row = array();
		$row["date_stats_collected"] = $data[$i]["date_stats_collected"];
		$timespan = strtotime($data[$arraySize - 1]["date_stats_collected"]) - strtotime($data[$arraySize - $steps]["date_stats_collected"]);
		$row2 = array();
		$row2["date_stats_collected"] = date("Y-m-d", strtotime($data[$arraySize - 1]["date_stats_collected"]) + $timespan);

		foreach($statNames as $statName) {
			$slopes[$statName] /= $count;
			$row[$statName] = $data[$i][$statName];
			$row2[$statName] = $row[$statName] + $slopes[$statName] * $timespan;
		}

		$projections[] = $row;
		$projections[] = $row2;
	}

	return $projections;
}

function WriteName($row) {
	echo $row["first_name"] . " " . $row["last_name"];// . " (" . $row["player_id"] . ")";
}

function PlotStat($array, $xAxisName, $yAxisName) {
	foreach ($array as $row) {
		echo "{ x: new Date('" . $row[$xAxisName] . "'), y: " . $row[$yAxisName] . " },";
	}
}

function ResultToArray($result) {
	$resultArray = array();
	while($row = $result->fetch_assoc()) {
		$resultArray[] = $row;
	}
	return $resultArray;
}
?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Jacob Nash">
	
    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/dropdown.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="commonstyles.css" rel="stylesheet" type="text/css">
    <link href="players.css" rel="stylesheet" type="text/css">
	<script src="tabcontent.js" type="text/javascript"></script>
    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Russo+One|Pathway+Gothic+One' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato|Oswald|Montserrat' rel='stylesheet' type='text/css'>
	
	
	<?php
	//Coach Follows
	$query = " SELECT coach_follows.player_id, coach_follows.account_id, player_details.player_id, player_details.first_name, player_details.last_name
		
		FROM coach_follows, player_details
		
		WHERE coach_follows.account_id = 4 AND player_details.player_id = coach_follows.player_id
		
		ORDER BY follows_id"; //This will need to be dynamic
	$coachfollows = $conn->query($query);
		
		
	
	if(isset($playerId))
	{
		$query = "SELECT 
				player_details.*, 
				school.*, 
				player_position.*, positions.*
				
			FROM 
				player_details, school, player_position, positions
				
				
			WHERE player_details.player_id = " . $playerId . " 
			AND player_details.school_id = school.school_id 
			AND player_position.player_id = " . $playerId . " AND positions.pos_id = player_position.pos_id";
			
			
		
		$result = $conn->query($query);
		$pedigree = $result->fetch_assoc(); // puts the first row of the table into an array
		$feet = floor($pedigree["height"] / 12);
		$inches = round(($pedigree["height"] / 12 - floor($pedigree["height"] / 12)) * 12);
		
		if($pedigree["pos_id"]=="1")
		{
			$field = "Pitching";
		}
		else
		{
			$field = "Fielding";
		}
	
	
		//Batting Stats
		$query = "SELECT q1.* 
		
			FROM batspeed_stats q1 
			LEFT OUTER JOIN batspeed_stats q2 
			ON (q1.player_id = q2.player_id AND q1.date_stats_collected < q2.date_stats_collected) 
			
			WHERE q2.player_id IS NULL AND q1.player_id = " . $playerId;
			
		$result = $conn->query($query);
		$batting = $result->fetch_assoc();
		
		//Strength Stats
		$query = "SELECT q1.* 
		
			FROM player_strength q1 
			LEFT OUTER JOIN player_strength q2 
			ON (q1.player_id = q2.player_id AND q1.date_stats_collected < q2.date_stats_collected) 
			
			WHERE q2.player_id IS NULL AND q1.player_id = " . $playerId;
			
		$result = $conn->query($query);
		$strength = $result->fetch_assoc();
		
		//Fielding Stats
		if($pedigree['pos_id']==1)
		{
			//Pitching Stats
			$query = "SELECT q1.* 
		
			FROM pitcher_stats q1 
			LEFT OUTER JOIN pitcher_stats q2 
			ON (q1.player_id = q2.player_id AND q1.date_stats_collected < q2.date_stats_collected) 
			
			WHERE q2.player_id IS NULL AND q1.player_id = " . $playerId;
		}
		else 
		{
			//Catching Stats
			$query = "SELECT q1.* 
		
				FROM catcher_stats q1 
				LEFT OUTER JOIN catcher_stats q2 
				ON (q1.player_id = q2.player_id AND q1.date_stats_collected < q2.date_stats_collected) 
				
				WHERE q2.player_id IS NULL AND q1.player_id = " . $playerId;
			
			$result = $conn->query($query);
			$catching = $result->fetch_assoc();
			
			if($pedigree['pos_id']>=2 && $pedigree['pos_id']<=6)
			{
				//Infielder Stats
				$query = "SELECT q1.* 
		
				FROM infielder_stats q1 
				LEFT OUTER JOIN infielder_stats q2 
				ON (q1.player_id = q2.player_id AND q1.date_stats_collected < q2.date_stats_collected) 
				
				WHERE q2.player_id IS NULL AND q1.player_id = " . $playerId;
			}
			else
			{
				//Outfielder Stats
				$query = "SELECT q1.* 
		
				FROM outfielder_stats q1 
				LEFT OUTER JOIN outfielder_stats q2 
				ON (q1.player_id = q2.player_id AND q1.date_stats_collected < q2.date_stats_collected) 
				
				WHERE q2.player_id IS NULL AND q1.player_id = " . $playerId;
			}
		}
		$result = $conn->query($query);
		$fielding = $result->fetch_assoc();
		
		//Speed Stats
		$query = "SELECT q1.* 

			FROM player_speed q1 
			LEFT OUTER JOIN player_speed q2 
			ON (q1.player_id = q2.player_id AND q1.date_stats_collected < q2.date_stats_collected) 
			
			WHERE q2.player_id IS NULL AND q1.player_id = " . $playerId;
		
		$result = $conn->query($query);
		$speed = $result->fetch_assoc();
		
		//Batting Graph
		$query = "SELECT *
		FROM batspeed_stats
		WHERE player_id = " . $playerId . "
		ORDER BY date_stats_collected";
		$result = $conn->query($query);
		$battingGraphData = ResultToArray($result);
		$batGraph = array("bat_speed", "exit_velocity");
		
		//Pitching Graph
		//if($pedigree['pos_id']==1)
		{
		$query = "SELECT *
		FROM pitcher_stats
		WHERE player_id = " . $playerId . "
		ORDER BY date_stats_collected";
		
		$result = $conn->query($query);
		$pitchingGraphData = ResultToArray($result);
		$pitchingGraph = array("two_seem", "four_seem","changeball","curveball","slider","knuckleball");
		}
		//Fielding Graph
		//else
		{
			
			
		}
		
		//Speed Graph
		$query = "SELECT *
		FROM player_speed
		WHERE player_id = " . $playerId . "
		ORDER BY date_stats_collected";
		
		$result = $conn->query($query);
		$speedGraphData = ResultToArray($result);
		$speedGraph = array("sixty_yard_time", "onetwenty_yard_time", "vertical_leap", "shuttle_run", "reach");
			

	}
	?>
	<?php if(isset($_GET['player'])) { ?>
    <title>Prospect: <?php echo $pedigree["first_name"]?>&nbsp<?php echo $pedigree["last_name"]?> </title>
	<?php } else { ?>
	<title>Prospect Lookup</title>
	<?php } ?>
</head>




<body>
    <?php
        $allowCoaches = true;
        $allowPlayers = true;
        require('protected.php');
        require('navbar.php');
    ?>
    <div class="content">
		<div class="bg-left">
			<div class="space">
				<img class="players" src="images/coach.jpg" style="border-color:#666666;">
				<?php
						$username = $_SESSION['username'];
				?>
				<h1 style="border-top:none;border-bottom:none;">
					<?php echo $username; ?>
				</h1>
				<ul class="sidebar">
					<?php 
					$count = 1;
					while($row = $coachfollows->fetch_assoc()) { ?>
					
					<li class="left"><?php echo $count ?>. <img class ="sidebar" src="images/hitter.jpg">&nbsp;&nbsp;<a href="players.php?player= <?php echo $row['player_id']?>&tempFollow=1&tempMod=0"><?php echo $row['first_name']?> <?php echo $row['last_name']?></a></li>
						
					<?php 
					$count++;
					} ?>
				</ul>
			</div>
		</div>
		<div class="main">
			<div class="space" style="margin:0px;">
				<div class="search"style="float:left;">
				</div>
				<div class="search"style="display:inline-block;width:26%;">
					<img class="players" src="images/logo.png" style="border:none;height:100%;">
				</div>
				<div class="search"style="float:right;">
				</div>
				<div class="space"style="margin-left:250px;margin-right:250px;">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search Prospects">
						<span class="input-group-btn">
							<button class="btn btn-default" type="button">Go!</button>
						</span>
					</div>
					<ul class="search">
						<li class="dropdown" style="width:25%;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">2015 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="players.php">Hitting</a></li>
								<li><a href="players.php">Pitching/Fielding</a></li>
								<li><a href="players.php">Speed</a></li>
							</ul>
						</li>
						<li class="dropdown" style="width:25%;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">2016 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="players.php">Hitting</a></li>
								<li><a href="players.php">Pitching/Fielding</a></li>
								<li><a href="players.php">Speed</a></li>
							</ul>
						</li>
						<li class="dropdown" style="width:25%;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">2017 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="players.php">Hitting</a></li>
								<li><a href="players.php">Pitching/Fielding</a></li>
								<li><a href="players.php">Speed</a></li>
							</ul>
						</li>
						<li class="dropdown" style="width:25%;">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">2018 <span class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="players.php">Hitting</a></li>
								<li><a href="players.php">Pitching/Fielding</a></li>
								<li><a href="players.php">Speed</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="bg-right">
			<div class="space">
				
			</div>
		</div>	
    </div>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
    <!-- Custom js libraries -->
    <script type="text/javascript" src="tablesorter/js/jquery.tablesorter.js"></script>
    <script src="Chart.js/Chart.min.js"></script>
    <script src="Chart.Scatter.js/Chart.Scatter.min.js"></script>
	
	<script>
        $(document).ready(function(){
            $(function(){
                $("table").tablesorter();
				
				var optionsMPH = {
					scaleFontColor : "#ffffff",
					scaleGridLineColor: "#656565",
					scaleLineColor: "#656565",
                    bezierCurve: false,
                    scaleType: "date",
                    scaleDateFormat: "mmm",
                    scaleDateTimeFormat: "mmm d, yyyy",
                    scaleLabel: "<%=value%> mph"
                };
				var optionsSEC = {
					scaleFontColor : "#ffffff",
					scaleGridLineColor: "#656565",
					scaleLineColor: "#656565",
                    bezierCurve: false,
                    scaleType: "date",
                    scaleDateFormat: "mmm",
                    scaleDateTimeFormat: "mmm d, yyyy",
                    scaleLabel: "<%=value%> sec"
                };
				
                var battingCTX = $("#battingGraph").get(0).getContext("2d");
                var battingData = [
                    {
                        label: 'Bat speed',
                        strokeColor: "#8dc8e0",
                        pointColor: "#8dc8e0",
                        data: [
                            <?php
                            PlotStat($battingGraphData, "date_stats_collected", "bat_speed");
                            ?>
                        ]
                    },
                    {
                        label: 'Exit velocity',
                        strokeColor: "#029EDC",
                        pointColor: "#029EDC",
                        data: [
                            <?php
                            PlotStat($battingGraphData, "date_stats_collected", "exit_velocity");
                            ?>
                        ]
                    },
                ];
				var myBattingChart = new Chart(battingCTX).Scatter(battingData, optionsMPH);
				
				<?php if($pedigree["pos_id"]==1) { ?>
				var pitchingCTX = $("#pitchingGraph").get(0).getContext("2d");
                var pitchingData = [
                    {
                        label: 'Two Seem',
                        strokeColor: "#8dc8e0",
                        pointColor: "#8dc8e0",
                        data: [
                            <?php
                            PlotStat($pitchingGraphData, "date_stats_collected", "two_seem");
                            ?>
                        ]
                    },
                    {
                        label: 'Four Seem',
                        strokeColor: "#029EDC",
                        pointColor: "#029EDC",
                        data: [
                            <?php
                            PlotStat($pitchingGraphData, "date_stats_collected", "four_seem");
                            ?>
                        ]
                    },
					{
                        label: 'Changeball',
                        strokeColor: "#5edee5",
                        pointColor: "#5edee5",
                        data: [
                            <?php
                            PlotStat($pitchingGraphData, "date_stats_collected", "changeball");
                            ?>
                        ]
                    },
                    {
                        label: 'Curveball',
                        strokeColor: "#c9c9c9",
                        pointColor: "#c9c9c9",
                        data: [
                            <?php
                            PlotStat($pitchingGraphData, "date_stats_collected", "curveball");
                            ?>
                        ]
                    },
					{
                        label: 'Slider',
                        strokeColor: "#ffffff",
                        pointColor: "#ffffff",
                        data: [
                            <?php
                            PlotStat($pitchingGraphData, "date_stats_collected", "slider");
                            ?>
                        ]
                    },
                    {
                        label: 'Knuckleball',
                        strokeColor: "#00bfa5",
                        pointColor: "#00bfa5",
                        data: [
                            <?php
                            PlotStat($pitchingGraphData, "date_stats_collected", "knuckleball");
                            ?>
                        ]
                    },
                ];
				var myPitchingingChart = new Chart(pitchingCTX).Scatter(pitchingData, optionsMPH);
				<?php } ?>
				
				var speedCTX = $("#speedGraph").get(0).getContext("2d");
                var speedData = [
                    {
						label: '60 Yard Dash',
                        strokeColor: "#8dc8e0",
                        pointColor: "#8dc8e0",
                        data: [
                            <?php
                            PlotStat($speedGraphData, "date_stats_collected", "sixty_yard_time");
                            ?>
                        ]
                    },
                    {
                        label: '120 Yard Dash',
                        strokeColor: "#029EDC",
                        pointColor: "#029EDC",
                        data: [
                            <?php
                            PlotStat($speedGraphData, "date_stats_collected", "onetwenty_yard_time");
                            ?>
                        ]
                    },
					{
                        label: 'Shuttle Run',
                        strokeColor: "#5edee5",
                        pointColor: "#5edee5",
                        data: [
                            <?php
                            PlotStat($speedGraphData, "date_stats_collected", "shuttle_run");
                            ?>
                        ]
                    },
                ];
				var mySpeedChart = new Chart(speedCTX).Scatter(speedData, optionsSEC);
				
				
                ctx = $("#myRadarChart").get(0).getContext("2d");
                data = {
                    labels: ["Running Speed", "Arm Strength", "Hitting for Average", "Hitting for Power", "Fielding"],
                    datasets: [
                        {
                            label: "Five-Tool Model",
                            fillColor: "rgba(2, 158, 220, 0.2)",
                            strokeColor: "rgba(2, 158, 220, 1)",
                            pointColor: "rgba(2, 158, 220, 1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [0.75, 0.9, 0.7, 0.65, 0.6]
                        }
                    ]
                }
                options = {
					// String - Colour of the grid lines
					scaleGridLineColor: "rgba(220,220,220,1)",
					
                    //Boolean - Whether to show lines for each scale point
                    scaleShowLine : true,

                    //Boolean - Whether we show the angle lines out of the radar
                    angleShowLineOut : true,

                    //Boolean - Whether to show labels on the scale
                    scaleShowLabels : false,

                    // Boolean - Whether the scale should begin at zero
                    scaleBeginAtZero : true,
					
					scaleFontColor : "#ffffff",

                    //String - Colour of the angle line
                    angleLineColor : "rgba(0,0,0,.1)",

                    //Number - Pixel width of the angle line
                    angleLineWidth : 1,

                    //String - Point label font declaration
                    pointLabelFontFamily : "'Arial'",

                    //String - Point label font weight
                    pointLabelFontStyle : "normal",

                    //Number - Point label font size in pixels
                    pointLabelFontSize : 10,

                    //String - Point label font colour
                    pointLabelFontColor : "#666",

                    //Boolean - Whether to show a dot for each point
                    pointDot : true,

                    //Number - Radius of each point dot in pixels
                    pointDotRadius : 3,

                    //Number - Pixel width of point dot stroke
                    pointDotStrokeWidth : 1,

                    //Number - amount extra to add to the radius to cater for hit detection outside the drawn point
                    pointHitDetectionRadius : 20,

                    //Boolean - Whether to show a stroke for datasets
                    datasetStroke : true,

                    //Number - Pixel width of dataset stroke
                    datasetStrokeWidth : 2,

                    //Boolean - Whether to fill the dataset with a colour
                    datasetFill : true,

                    //String - A legend template
                    legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<datasets.length; i++){%><li><span style=\"background-color:<%=datasets[i].strokeColor%>\"></span><%if(datasets[i].label){%><%=datasets[i].label%><%}%></li><%}%></ul>"

                }
                var myRadarChart = new Chart(ctx).Radar(data, options);
                // bind to sort events
                $("table")
                .bind("sortStart",function(e, table) {
                    $("table#" + e.target.id + " > thead > tr > th").removeClass("sorted-column");
                });

                $("th").click(function() {
                    $(this).addClass("sorted-column");
                });
            });
        });
    </script>
</body>