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
			<div class="space">
				<div class="ssegment">
					<div class="fourtab">
						<div class="sspace">
							Tab
						</div>
					</div>
					<div class="fourtab">
						<div class="sspace">
							Tab
						</div>
					</div>
					<div class="fourtab">
						<div class="sspace">
							Tab
						</div>
					</div>
					<div class="fourtab">
						<div class="sspace">
							Tab
						</div>
					</div>
				</div>
			</div>
			<div class="tabbedsegment">
				<div class="space">
					<div class="ssegment">
						<div class="threetab">
							<div class="sspace">
								Tab
							</div>
						</div>
						<div class="threetab">
							<div class="sspace">
								Tab
							</div>
						</div>
						<div class="threetab">
							<div class="sspace">
								Tab
							</div>
						</div>
					</div>
				</div>
				<div class="space">
					Here is the video and stats
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
