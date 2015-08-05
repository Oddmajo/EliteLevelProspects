<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Joe Sorgea">

    <title>Top Prospects</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/dropdown.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="commonstyles.css" rel="stylesheet" type="text/css"> -->

    <style>
        .sorted-column {
            color: #029EDC;
        }
    </style>
</head>

<body>
    <?php
        //include_once('navbar.php');

        // Variables for connecting to the mySQL server
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "elp bio";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>
    <div class="container">
        <h2>Progression</h2>
        <canvas id="myChart" width="800" height="400"></canvas>
        <h2>Five-Tool Model</h2>
        <canvas id="myRadarChart" width="400" height="400"></canvas>

        <div class="alert alert-info">
          <strong>Tip:</strong> To sort the table by a column, click the column title you want to sort by.
        </div>

        <h2>Hitting</h2>
        <table class="table table-striped table-hover tablesorter" id="hittingTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <!-- <span class="glyphicon glyphicon-chevron-up"> -->
                    <th class="lockedOrder-desc sorted-column">Rank</span></th>
                    <th class="lockedOrder-desc">Bat speed</span></th>
                    <th class="lockedOrder-desc">Exit velocity</th>
                    <th class="lockedOrder-desc">Bench press</th>
                    <th class="lockedOrder-desc">Deadlift</th>
                    <th class="lockedOrder-desc">Squat</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // query the player details and bat speed tables and select the latest bat speed entry for each player, then order the table by bat speed
                    $query = "SELECT first_name, last_name, bat_speed, exit_velocity, bench_press, dead_lift, squat, player_details.player_id, batspeed_stats.player_id, player_strength.player_id, MAX(batspeed_stats.date_stats_collected)
                    FROM player_details, batspeed_stats, player_strength
                    WHERE player_details.player_id = batspeed_stats.player_id AND player_details.player_id = player_strength.player_id
                    GROUP BY player_details.player_id";
                    $result = $conn->query($query);

                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["first_name"] . " " . $row["last_name"]?></td>
                            <td>N/A</td>
                            <td><?php echo $row["bat_speed"]?> mph</td>
                            <td><?php echo $row["exit_velocity"]?> mph</td>
                            <td><?php echo $row["bench_press"]?> lb</td>
                            <td><?php echo $row["dead_lift"]?> lb</td>
                            <td><?php echo $row["squat"]?> lb</td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>

        <h2>Pitching</h2>
        <table class="table table-striped table-hover tablesorter" id="pitchingTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="lockedOrder-desc sorted-column">Curveball</th>
                    <th class="lockedOrder-desc">Changeup</th>
                    <th class="lockedOrder-desc">Two-seem</th>
                    <th class="lockedOrder-desc">Four-seem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // query the player details and bat speed tables and select the latest bat speed entry for each player, then order the table by bat speed
                    $query = "SELECT first_name, last_name, curveball, changeball, two_seem, four_seem, player_details.player_id, pitcher_stats.player_id, MAX(date_stats_collected)
                    FROM player_details, pitcher_stats
                    WHERE player_details.player_id = pitcher_stats.player_id
                    GROUP BY player_details.player_id
                    ORDER BY curveball DESC";
                    $result = $conn->query($query);

                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["first_name"] . " " . $row["last_name"]?></td>
                            <td><?php echo $row["curveball"]?> mph</td>
                            <td><?php echo $row["changeball"]?> mph</td>
                            <td><?php echo $row["two_seem"]?> mph</td>
                            <td><?php echo $row["four_seem"]?> mph</td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>

        <h2>Fielding</h2>
        <table class="table table-striped table-hover tablesorter" id="fieldingTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="lockedOrder-desc sorted-column">Outfield throwing speed</th>
                    <th class="lockedOrder-desc">Infield throwing speed</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // query the player details and bat speed tables and select the latest bat speed entry for each player, then order the table by bat speed
                    $query = "SELECT first_name, last_name, outfielder_stats.throwing_speed as outfield_throwing_speed, infielder_stats.throwing_speed as infield_throwing_speed, player_details.player_id, outfielder_stats.player_id, infielder_stats.player_id, MAX(outfielder_stats.date_stats_collected)
                    FROM player_details, outfielder_stats, infielder_stats
                    WHERE player_details.player_id = infielder_stats.player_id AND player_details.player_id = outfielder_stats.player_id
                    GROUP BY player_details.player_id
                    ORDER BY outfielder_stats.throwing_speed";
                    $result = $conn->query($query);

                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["first_name"] . " " . $row["last_name"]?></td>
                            <td><?php echo $row["outfield_throwing_speed"]?> mph</td>
                            <td><?php echo $row["infield_throwing_speed"]?> mph</td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>

        <h2>Speed</h2>
        <table class="table table-striped table-hover tablesorter" id="speedTable">
            <thead>
                <tr>
                    <th>Name</th>
                    <th class="lockedOrder-desc sorted-column">Rank</span></th>
                    <th class="lockedOrder-desc">60 yard time</th>
                    <th class="lockedOrder-desc">120 yard time</th>
                    <th class="lockedOrder-desc">Vertical leap</th>
                    <th class="lockedOrder-desc">Shuttle run</th>
                    <th class="lockedOrder-desc">Reach</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // query the player details and bat speed tables and select the latest bat speed entry for each player, then order the table by bat speed
                    $query = "SELECT first_name, last_name, sixty_yard_time, vertical_leap, shuttle_run, reach, player_details.player_id, infielder_stats.player_id, MAX(date_stats_collected)
                    FROM player_details, infielder_stats
                    WHERE player_details.player_id = infielder_stats.player_id
                    GROUP BY player_details.player_id";
                    $result = $conn->query($query);

                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["first_name"] . " " . $row["last_name"]?></td>
                            <td>N/A</td>
                            <td><?php echo $row["sixty_yard_time"]?> s</td>
                            <td>N/A</td>
                            <td><?php echo $row["vertical_leap"]?> in</td>
                            <td><?php echo $row["shuttle_run"]?> s</td>
                            <td><?php echo $row["reach"]?> in</td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
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
    <script src="Chart.js/Chart.js"></script>

    <script>
        $(document).ready(function(){
            $(function(){
                $("table").tablesorter();

                var ctx = $("#myChart").get(0).getContext("2d");
                var data = {
                    labels: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(2, 158, 220, 0.2)",
                            strokeColor: "rgba(2, 158, 220, 1)",
                            pointColor: "rgba(2, 158, 220, 1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [30, 32, 33, 35, 37, 39, 40, 45, 49, 55, 62, 71]
                        }
                    ]
                };
                var options = {
                    ///Boolean - Whether grid lines are shown across the chart
                    scaleShowGridLines : true,

                    //String - Colour of the grid lines
                    scaleGridLineColor : "rgba(0,0,0,.05)",

                    //Number - Width of the grid lines
                    scaleGridLineWidth : 1,

                    //Boolean - Whether to show horizontal lines (except X axis)
                    scaleShowHorizontalLines: true,

                    //Boolean - Whether to show vertical lines (except Y axis)
                    scaleShowVerticalLines: true,

                    //Boolean - Whether the line is curved between points
                    bezierCurve : true,

                    //Number - Tension of the bezier curve between points
                    bezierCurveTension : 0.4,

                    //Boolean - Whether to show a dot for each point
                    pointDot : true,

                    //Number - Radius of each point dot in pixels
                    pointDotRadius : 4,

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

                };
                var myLineChart = new Chart(ctx).Line(data, options);

                ctx = $("#myRadarChart").get(0).getContext("2d");
                data = {
                    labels: ["Speed", "Arm Strength", "Hitting for Average", "Hitting for Power", "Fielding"],
                    datasets: [
                        {
                            label: "My First dataset",
                            fillColor: "rgba(2, 158, 220, 0.2)",
                            strokeColor: "rgba(2, 158, 220, 1)",
                            pointColor: "rgba(2, 158, 220, 1)",
                            pointStrokeColor: "#fff",
                            pointHighlightFill: "#fff",
                            pointHighlightStroke: "rgba(220,220,220,1)",
                            data: [0.85, 0.9, 0.7, 0.6, 0.4]
                        }
                    ]
                }
                options = {
                    //Boolean - Whether to show lines for each scale point
                    scaleShowLine : true,

                    //Boolean - Whether we show the angle lines out of the radar
                    angleShowLineOut : true,

                    //Boolean - Whether to show labels on the scale
                    scaleShowLabels : false,

                    // Boolean - Whether the scale should begin at zero
                    scaleBeginAtZero : true,

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
