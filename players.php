<head>
    <title>Player: Roll Fizzlebeef</title>

    <link rel="stylesheet" type="text/css" href="players.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
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
								Here is where the stats will be
							</p>
						</div>
					</div>

					
				</div>
			</div>
			<div class="sspace">
				<div class="tabbar">
					<div class="tabbar-tab4">
						Videos
					</div>
					<div class="tabbar-tab4">
						Analysis
					</div>
					<div class="tabbar-tab4">
						Projections
					</div>
					<div class="tabbar-tab4">
						Misc
					</div>
				</div>
			</div>
			<div class="tabbedsegment">
				<div class="space">
					<div class="tabcontents">
						<div id="videos">
							<div class="tabbar">
								<div class="tabbar-tab3">
									Batting
								</div>
								<div class="tabbar-tab3">
									Pitching
								</div>
								<div class="tabbar-tab3">
									Running
								</div>
							</div>
							<div class="space">
								<div class="leftbox">
									<img class="vid" src="images/4by3.jpg">
								</div>
								<div class="rightbox">
									<p>
										 Stat 1: <br><br>
										 Stat 2: <br><br>
										 Stat 3: <br><br>
										 Stat 4: <br><br>
										 Stat 5: <br><br>
										 Stat 6: <br><br>
										 Stat 7: <br><br>
										 Stat 8: <br><br>
										 Stat 9: <br><br>
								</div>
								<div class="commentbox">
									<p>
										Here would be some comments <br><br>
									</p>
								</div>
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
