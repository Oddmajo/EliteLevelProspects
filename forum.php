<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Jacob Nash">

    <title>Coaches Forum</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/dropdown.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="commonstyles.css" rel="stylesheet" type="text/css">
    <link href="forum.css" rel="stylesheet" type="text/css">

    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
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

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
