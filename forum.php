<head>
    <title>Coaches Forum</title>

    <link rel="stylesheet" type="text/css" href="forum.css">
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
    $allowCoaches = true;
    require('protected.php');
    include_once('navbar.php');
?>
<div class="content">
<div class="bg-left">
	<div class="space">
		<h1 class="small">
			This will be the user profile
		</h2>
	</div>
</div>

<div class = "main">
	<h1 class="light">
	Stay up to date on athletes that other coaches are following or promoting
	</h1>
	<div class="space">
		<div class="post">
			<div class="space">
				<h1> One of my athletes just hit 2 home runs in a single game </h1>
				<div class="leftpic">
					<div class="space">
						<img class="forum" src="images/hitter.jpg">
					</div>
				</div>
				<div class="righttext">
					<div class = "space">
						<h2>
						Name: Roll Fizzlebeef <br><br>
						Age: 16 <br><br>
						Height: 5ft 10in <br><br>
						Weight: 140 <br><br>
						</h2>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="space">
		<div class="post">
			<div class="space">
				<h1> I just scouted a game where this kid threw a near-perfect game </h1>

				<div class="lefttext">
					<div class="space">
						<h2>
						Name: Big McLargehuge <br><br>
						Age: 18 <br><br>
						Height: 6ft 2in <br><br>
						Weight: 190 <br><br>
						</h2>
					</div>
				</div>

				<div class="rightpic">
					<div class="space">
						<img class="forum" src="images/pitcher.jpg">
					</div>
				</div>

			</div>
		</div>
	</div>

</div>

<div class="bg-right">
	<div class="space">
		<h1 class="small">
			This will be a checkbox
		</h1>
	</div>
</div>
</div>
</body>
