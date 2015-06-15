<head>
    <link href="layout.css" rel="stylesheet" type="text/css">
    <link href="navbar.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Oswald|Pathway+Gothic+One' rel='stylesheet' type='text/css'>
</head>

<div class="navbar">
    <div class="navbar-column"><img src="images/logo small final.png" alt="Elite Level Prospects" width="60" height="56"></div>
    <div class="navbar-column"><a href="home-main.php">Home</a></div>
    <div class="navbar-column"><a href="forum.php">Coaches Forum</a></div>
    <div class="navbar-column"><a href="forum.php">Scouts</a></div>
    <div class="navbar-column"><a href="players.php">Top Prospects</a></div>
    <div class="navbar-column"><a href="test.php">About</a></div>
    <div class="navbar-column">
        <?php
        if (isset($_SESSION['username'])) { ?>
            <a href="account.php">My Account</a>
        <?php } else { ?>
            <a href="login.php">Sign In</a>
        <?php } ?>
    </div>
</div>
