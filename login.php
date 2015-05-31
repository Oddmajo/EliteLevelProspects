<?php

session_start();
require('navbar.php');
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
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
<section class="container">
<div class="login">
<h1>Member Sign In</h1>
<form action="?login=1" method="post">
<input type="text" name="username" placeholder="Username" required>
<br>
<input type="password" name="password" placeholder="Password" required>
<p class="usertype">I am a: <input type="radio" name="usertype" value="coach" checked>Coach
<input type="radio" name="usertype" value="player">Player</p>
<p class="submit"><input type="submit" value="Sign in"></p>
</form>
</div>
</section>
</body>
