<head>
    <link href="navbar.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Oswald|Pathway+Gothic+One' rel='stylesheet' type='text/css'>
</head>

<div class="masthead-container">
    <div class="masthead">
        <div class="masthead-inner">
            <img class="masthead-brand" src="images/logo.png" alt="Elite Level Prospects" width="60" height="60">
            <!--<h2 class="masthead-brand">Elite Level Prospects</h3>-->
            <nav>
                <ul class="masthead-nav">
                    <li class="active"><a href="home.php">Home</a></li>
                    <li><a href="test.php">Coaches Forum</a></li>
                    <li><a href="test.php">Player Bios</a></li>
                    <li><a href="test.php">Contact Us</a></li>
                    <?php
                    if (isset($_SESSION['username'])) { ?>
                        <li><a href="account.php">My Account</a></li>
                    <?php } else { ?>
                        <li><a href="login.php">Sign In</a></li>
                    <?php } ?>
                </ul>
            </nav>
			<img class="masthead-brand-right" src="images/logo.png" alt="Elite Level Prospects" width="60" height="60">
            <!--<h2 class="masthead-brand">Elite Level Prospects</h3>-->
        </div>
    </div>
</div>
