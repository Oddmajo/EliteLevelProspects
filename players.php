<head>
    <title>Player: Roll Fizzlebeef</title>

    <link rel="stylesheet" type="text/css" href="players.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<script src="tabcontent.js" type="text/javascript"></script>
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
			<h1 class="small">
			This will be the user profile
			</h1>
		</div>
	</div>
	<div class="main">
		<div class="space">
			<div class="basesegment">
				<div class="space">
					<h1>
					Roll Fizzlebeef
					</h1>
				</div>
				<div class="space">
					<div class="profilepicture">
						<div class="space">
							<img class="players" src="images/hitter.jpg">
						</div>
					</div>

					<div class="mediachoice">
						<div class="space">
							Here would be additional choices for media
						</div>
					</div>
					
					<div class="basestatistics">
						<div class="space">
							<p>
								Stat 1:  <br><br>
								Stat 2:  <br><br>
								Stat 3:  <br><br>
								Stat 4:  <br><br>
								Stat 5:  <br><br>
							</p>
						</div>
					</div>

					
				</div>
			</div>
			<div class="sspace">
				<ul class="tabs">
					<li><a href="#vids">Videos</a></li>
					<li><a href="#anal">Analysis</a></li>
					<li><a href="#project">Projections</a></li>
					<li><a href="#misc">Misc</a></li>
					<li class="selected"><a href="#default">Bio</a></li>
				</ul>
			</div>
			<div class="tabcontents">
				<div id="default">
				</div>
					<div id="vids">
						<div class="tabbedsegment">
							<ul class="tabs">
								<li><a href="#bat1">Hitting</a></li>
								<li><a href="#ball1">Pitching/Fielding</a></li>
								<li><a href="#run1">Running</a></li>
							</ul>
							<div class="tabcontent" padding="30px">
								<div id="bat1">
									Test 1.1
								</div>
								<div id="ball1">
									Test 1.2
								</div>
								<div id="run1">
									Test 1.3
								</div>
							</div>
						</div>
						</div>
						<div id="anal">
						<div class="tabbedsegment">
							<ul class="tabs">
								<li><a href="#bat2">Hitting</a></li>
								<li><a href="#ball2">Pitching/Fielding</a></li>
								<li><a href="#run2">Running</a></li>
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
								<li><a href="#run3">Running</a></li>
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
						<div id="misc">
						<div class="tabbedsegment">
							<ul class="tabs">
								<li><a href="#bat4">Hitting</a></li>
								<li><a href="#ball4">Pitching/Fielding</a></li>
								<li><a href="#run4">Running</a></li>
							</ul>
							<div class="tabcontent">
								<div id="bat4">
									Test 4.1
								</div>
								<div id="ball4">
									Test 4.2
								</div>
								<div id="run4">
									Test 4.3
								</div>
							</div>
						</div>
						</div>
				
				
			</div>
			
		</div>
		
		
		
		
	</div>
	<div class="bg-right">
		<div class="space">
			<h1 class="small">
			Here is a right side margin
			</h1>
			</div>
	</div>
    </div>
</body>
