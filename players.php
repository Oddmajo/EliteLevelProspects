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
			
				<img class="players" src="images/coach.jpg">
				<?php
						$username = $_SESSION['username'];
				?>
				<h1 class="small">
					<?php echo $username; ?>
				</h1>
				<ul class="sidebar">
					<li>1. <img class ="sidebar" src="images/hitter.jpg">&nbsp;&nbsp;<a>Roll Fizzlebeef</a></li>
					<li>2. <img class ="sidebar" src="images/hitter.jpg">&nbsp;&nbsp;<a>Big McLargehuge</a></li>
					<li>3. <img class ="sidebar" src="images/hitter.jpg">&nbsp;&nbsp;<a>Joel Macklehit</a></li>
					<li>4. <img class ="sidebar" src="images/hitter.jpg">&nbsp;&nbsp;<a>Two Legs Johnny</a></li>
					<li>5. <img class ="sidebar" src="images/hitter.jpg">&nbsp;&nbsp;<a>One Leg Jerry</a></li>
					<li>6. <img class ="sidebar" src="images/hitter.jpg">&nbsp;&nbsp;<a>Gene Ricname</a></li>
				</ul>
			
		</div>
	</div>
	<div class="main">
		<div class="space">
			<div class="basesegment">
					<ul class="name">
						<li>Roll Fizzlebeef</li>
						<li>Shortstop/Inf</li>
						<li>2016</li>
					</ul>
				<div class="space">
					<div class="profilepicture">
						<div class="space">
							<img class="players" src="images/hitter.jpg">
						</div>
					</div>

					
					<div class="basestatistics">
						<div class="space">
							<ul class="profile">
								<li class="cat">Height: </li>
								<li class="stat">6'4"</li>
								<li class="cat">Weight: </li>
								<li class="stat">200 lbs</li>
								<li class="cat">Age: </li>
								<li class="stat">18</li>
								<li class="cat">School: </li>
								<li class="stat">Hard Knocks</li>
								<li class="cat">Year: </li>
								<li class="stat">2016</li>
								<li class="cat">City: </li>
								<li class="stat">P-town</li>
								<li class="cat">Rank: </li>
								<li class="stat">-1</li>
								<li class="cat">State: </li>
								<li class="stat">Illinois</li>
								<li class="cat">GPA: </li>
								<li class="stat">5.0</li>
								<li class="cat">ACT Score: </li>
								<li class="stat">36</li>
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
			
			
			<div class="tabcontent" style="padding:0px;margin-top:25px;">
				<div id="default">
				</div>
				<div id="vids">
					<div class="tabbedsegment">
						<ul class="tabs">
							<li><a href="#bat1">Hitting</a></li>
							<li><a href="#ball1">Pitching/Fielding</a></li>
							<li><a href="#run1">Speed</a></li>
						</ul>
						<div class="tabcontent">
							<div id="bat1">
								
									<div class="leftbox">
										<iframe width="100%" height="480" src="https://www.youtube.com/embed/wlXuqdzA1nY" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="rightbox">
										<ul class="stats">
											<li class="cat">Stat 1:</li>
											<li class="stat">numbers</li>
											<li class="cat">Stat 2:</li>
											<li class="stat">numbers</li>
											<li class="cat">Stat 3:</li>
											<li class="stat">numbers</li>
											<li class="cat">Stat 4:</li>
											<li class="stat">numbers</li>
										</ul>
									</div>
								
							</div>
							<div id="ball1">
								
									<div class="leftbox">
										<iframe width="100%" height="480" src="https://www.youtube.com/embed/wlXuqdzA1nY" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="rightbox">
										<ul class="stats">
											<li class="cat">Stat 1:</li>
											<li class="stat">numbers</li>
											<li class="cat">Stat 2:</li>
											<li class="stat">numbers</li>
											<li class="cat">Stat 3:</li>
											<li class="stat">numbers</li>
											<li class="cat">Stat 4:</li>
											<li class="stat">numbers</li>
										</ul>
									</div>
								
							</div>
							<div id="run1">
								
									<div class="leftbox">
										<iframe width="100%" height="480" src="https://www.youtube.com/embed/wlXuqdzA1nY" frameborder="0" allowfullscreen></iframe>
									</div>
									<div class="rightbox">
										<ul class="stats">
											<li class="cat">Stat 1:</li>
											<li class="stat">numbers</li>
											<li class="cat">Stat 2:</li>
											<li class="stat">numbers</li>
											<li class="cat">Stat 3:</li>
											<li class="stat">numbers</li>
											<li class="cat">Stat 4:</li>
											<li class="stat">numbers</li>
										</ul>
									</div>
								
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
					<div class="commentsegment">
						<div class="space" style="margin:10px;">
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
			<div class="input-group">
				<input type="text" class="form-control" placeholder="Search Prospects">
				<span class="input-group-btn">
					<button class="btn btn-default" type="button">Go!</button>
				</span>
			</div>
			<div class="space">
				<h1 class="small">
				Graduation Year
				</h1>
			</div>
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
