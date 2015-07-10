<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Jacob Nash">

    <title>Player: Roll Fizzlebeef</title>

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
			<img class="players" src="images/hitter.jpg">
			<?php
                    $username = $_SESSION['username'];
			?>
			<h1 class="small">
				<?php echo $username; ?>
			</h1>
			<ul class="profile" id="single">
				<li>1</li>
				<li>2</li>
				<li>3</li>
				<li>4</li>
				<li>5</li>
			</ul>
		</div>
	</div>
	<div class="main">
		<div class="space">
			<div class="basesegment">
				<div class="space">
					<ul class="name"id="triple">
						<li>Roll Fizzlebeef</li>
						<li>Shortstop/Inf</li>
						<li>2016</li>
					</ul>
					
				</div>
				<div class="space">
					<div class="profilepicture">
						<div class="space">
							<img class="players" src="images/hitter.jpg">
						</div>
					</div>

					
					<div class="basestatistics">
						<div class="space">
							<ul class="profile"id="quadruple">
								<li style="color:#adadad;">Height: </li>
								<li><b>6'4"</b></li>
								<li style="color:#adadad;">Weight: </li>
								<li><b>200 lbs</b></li>
								<li style="color:#adadad;">Age: </li>
								<li><b>18</b></li>
								<li style="color:#adadad;">School: </li>
								<li><b>Hard Knocks</b></li>
								<li style="color:#adadad;">Year: </li>
								<li><b>2016</b></li>
								<li style="color:#adadad;">City: </li>
								<li><b>P-town</b></li>
								<li style="color:#adadad;">Rank: </li>
								<li><b>-1</b></li>
								<li style="color:#adadad;">State: </li>
								<li><b>Illinois</b></li>
								<li style="color:#adadad;">GPA: </li>
								<li><b>5.0</b></li>
								<li style="color:#adadad;">ACT Score: </li>
								<li><b>36</b></li>
							</ul>
						</div>
						<ul class="tabs">
							<li><a href="#vids">Videos</a></li>
							<li><a href="#anal">Analysis</a></li>
							<li><a href="#project">Projections</a></li>
							<li class="selected"><a href="#default">Bio</a></li>
						</ul>
					</div>


				</div>
			</div>
			<!--<div class="sspace">-->
				
			<!--</div>-->
			
			<div class="tabcontents">
				<div id="default">
				</div>
				<div id="vids">
					<div class="tabbedsegment">
						<ul class="tabs">
							<li><a href="#bat1">Hitting</a></li>
							<li><a href="#ball1">Pitching/Fielding</a></li>
							<li><a href="#run1">Speed</a></li>
						</ul>
						<div class="tabcontent" padding="30px">
							<div id="bat1">
								<!--<div class="space">-->
									<div class="leftbox">
										<iframe width="100%" height="480" src="https://www.youtube.com/embed/wlXuqdzA1nY" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="rightbox">
										<ul class="stats"id="single">
											<li>Bat Percentage:</li>
											<li>110%</li>
											<li>&nbsp;</li>
											<li>Bat Speed:</li>
											<li>Mach 10</li>
											<li>&nbsp;</li>
											<li>Stat 3:</li>
											<li>numbers</li>
											<li>&nbsp;</li>
											<li>Stat 4:</li>
											<li>numbers</li>
										</ul>
									</div>
								<!--</div>-->
							</div>
							<div id="ball1">
								<!--<div class="space">-->
									<div class="leftbox">
										<iframe width="100%" height="480" src="https://www.youtube.com/embed/wlXuqdzA1nY" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="rightbox">
										<ul class="stats"id="single">
											<li>Stat 1:</li>
											<li>numbers</li>
											<li>&nbsp;</li>
											<li>Stat 2:</li>
											<li>numbers</li>
											<li>&nbsp;</li>
											<li>Stat 3:</li>
											<li>numbers</li>
											<li>&nbsp;</li>
											<li>Stat 4:</li>
											<li>numbers</li>
										</ul>
									</div>
								<!--</div>-->
							</div>
							<div id="run1">
								<!--<div class="space">-->
									<div class="leftbox">
										<iframe width="100%" height="480" src="https://www.youtube.com/embed/wlXuqdzA1nY" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="rightbox">
										<ul class="stats"id="single">
											<li>Stat 1:</li>
											<li>numbers</li>
											<li>&nbsp;</li>
											<li>Stat 2:</li>
											<li>numbers</li>
											<li>&nbsp;</li>
											<li>Stat 3:</li>
											<li>numbers</li>
											<li>&nbsp;</li>
											<li>Stat 4:</li>
											<li>numbers</li>
										</ul>
									</div>
								<!--</div>-->
							</div>
						</div>
					</div>
				</div>
				<div id="anal">
					<div class="tabbedsegment">
						<ul class="tabs">
							<li><a href="#bat2">Hitting</a></li>
							<li><a href="#ball2">Pitching/Fielding</a></li>
							<li><a href="#run2">Speed</a></li>
						</ul>
						<div class="tabcontent">
							<div id="bat2">
								Test 2.1
							</div>
							<div id="ball2">
								Test 2.2
							</div>
							<div id="run2">
								Test 2.3
							</div>
						</div>
					</div>
				</div>
				<div id="project">
					<div class="tabbedsegment">
						<ul class="tabs">
							<li><a href="#bat3">Hitting</a></li>
							<li><a href="#ball3">Pitching/Fielding</a></li>
							<li><a href="#run3">Speed</a></li>
						</ul>
						<div class="tabcontent">
							<div id="bat3">
								Test 3.1
							</div>
							<div id="ball3">
								Test 3.2
							</div>
							<div id="run3">
								Test 3.3
							</div>
						</div>
					</div>
				</div>
				


			</div>
			 <?php
				if($usertype == 'coach'){ 
			?>
					<div class="commentbox">
						<div class="sspace">
							<div class="detailBox">
								<div class="titleBox">
								  <label>Comment Box</label>
								</div>
								<div class="actionBox">
									<ul class="commentList">
										<li>
											<div class="commenterImage">
											  <img src="http://lorempixel.com/50/50/people/6" />
											</div>
											<div class="commentText">
												<p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

											</div>
										</li>
										<li>
											<div class="commenterImage">
											  <img src="http://lorempixel.com/50/50/people/7" />
											</div>
											<div class="commentText">
												<p class="">Hello this is a test comment and this comment is particularly very long and it goes on and on and on.</p> <span class="date sub-text">on March 5th, 2014</span>

											</div>
										</li>
										<li>
											<div class="commenterImage">
											  <img src="http://lorempixel.com/50/50/people/9" />
											</div>
											<div class="commentText">
												<p class="">Hello this is a test comment.</p> <span class="date sub-text">on March 5th, 2014</span>

											</div>
										</li>
									</ul>
									<form class="form-inline" role="form">
										<div class="form-group">
											<input class="form-control" type="text" placeholder="Your comments" />
										</div>
										<div class="form-group">
											<button class="btn btn-default">Add</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
			<?php
				}
			?>
			

		</div>




	</div>
	<div class="bg-right">
		<div class="space">
			<h1 class="small">
			Right margin
			</h1>
			</div>
	</div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
