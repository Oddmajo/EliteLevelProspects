<?php

session_start();
require('connect.php');

if (isset($_GET['login'])) {
    // get the username, password, and user type from the login form's results
    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype = $_POST['usertype'];

    // query the database for the user. select from different tables based on user type
    $query = "";
    if ($usertype == 'coach')
        $query = "SELECT * FROM `coaches` WHERE username='$username' and password='$password'";
    else if ($usertype == 'player')
        $query = "SELECT * FROM `players` WHERE username='$username' and password='$password'";
    $result = mysql_query($query) or die(mysql_error());
    $count = mysql_num_rows($result);

    // if a result was found, redirect the user to their intended page
    if ($count == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['usertype'] = $usertype;

        if (isset($_SESSION['dest'])) {
            $dest = $_SESSION['dest'];
            unset($_SESSION['dest']);
            header("Location: " . $dest);
        } else
            header("Location: home.php");//($usertype == 'coach' ? "forum.php" : "players.php"));
        exit;
    } else { ?>
        <!-- Tell the user their password was incorrect -->
        <p>Wrong username or password!</p>
 <?php }
}
?>

<head>
    <title>Sign In</title>

    <link href='commonstyles.css' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="login.css">

    <!-- Google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
    include_once('navbar.php');
?>
<div class="content">
    <div class="content-column-center">
        <form class="form-signin" action="?login=1" method="post">
            <h2 class="form-signin-heading">Member sign in</h2>
            <!--<label for="inputUsername" class="sr-only">Username</label>-->
            <input type="username" id="inputUsername" name="username" class="form-control" placeholder="Username" required autofocus>
            <!--<label for="inputPassword" class="sr-only">Password</label>-->
            <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
            <div class="checkbox">
                <label>
                I am a: <input type="radio" name="usertype" value="coach" checked>Coach
                <input type="radio" name="usertype" value="player">Player
                </label>
            </div>
            <button type="submit">Sign in</button>
        </form>
    </div>
</div>
</body>
