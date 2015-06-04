<head>
    <title>Player Bios</title>

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
			<div class="segment">
				<div class="space">
					<h1>
					Roll Fizzlebeef
					</h1>
				</div>

				<div class="leftmedia">
					<div class="space">
						<img class="players" src="images/hitter.jpg">
					</div>
				</div>

				<div class="mediachoice">
					<div class="space">
						Here would be additional choices for media
					</div>
				</div>

				<div class="rightmedia">
					<div class="space">
						<img class="vid" src="images/4by3.jpg">
					</div>
				</div>
			</div>
			<div class="segment">
				<div class="leftbox">
					<div class="sspace">
						<h1 class="light">
						General Attributes
						</h1>
						<p>
							Name:			Roll Fizzlebeef<br><br>
							Height:			5ft 10in<br><br>
							Weight:			140 lbs<br><br>
							Date of Birth:	January 1st, 1999<br><br>
							School:			Richwoods<br><br>
							City:			Peoria<br><br>
							State:			Illinois<br><br>
							Current Team:	RHS Knights<br><br>
						</p>
					</div>
				</div>
				<div class="rightbox">
					<div class="sspace">
						<h1 class="light">
						Playing Statistics
						</h1>
						<p>
							Position:				<br><br>
							Bat Speed:				<br><br>
							Arm Speed:				<br><br>
							60 Yard Dash:			<br><br>
							40 Yard Dash:			<br><br>
							Bat Average:			<br><br>
							Runs Scored:			<br><br>
							Stolen Bases:			<br><br>
						</p>
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
