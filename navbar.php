<?php

    // store the name of the current page
    $current = basename($_SERVER['PHP_SELF']);

    if (isset($_SESSION['redirect']) && $_SESSION['redirect']) {
        $current = $_SESSION['dest'];
        $_SESSION['redirect'] = false;
    }

?>

<head>
    <link rel="stylesheet" type="text/css" href="navbar.css">
</head>

<body>
<ul>
    <li><img src="images/elp.png" alt="ELP Logo" width="161" height="55"></li>
    <!-- if the page is the current page, set its class to current -->
    <li><a href="home.php" class=<?php echo ($current == 'home.php' ? "current" : "")?>>Home</a></li>
    <li><a href="forum.php" class=<?php echo ($current == 'forum.php' ? "current" : "")?>>Coaches Forum</a></li>
    <li><a href="players.php" class=<?php echo ($current == 'players.php' ? "current" : "")?>>Player Bios</a></li>
<?php
    // if the user is logged in, display their name and a link to their account page
    if (isset($_SESSION['username'])) {
        $username = $_SESSION['username'];
?>
    <li><a href="account.php" class=<?php echo ($current == 'account.php' ? "current" : "")?>><?php echo $username?></a></li>
<?php
    // if the user is not logged in, display a link to the login page
    } else {
?>
    <li><a href="login.php" class=<?php echo ($current == 'login.php' ? "current" : "")?>>Sign In</a></li>
<?php } ?>
</ul>
</body>
