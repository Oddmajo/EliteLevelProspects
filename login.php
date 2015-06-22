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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Joe Sorgea">

    <title>Sign In</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/dropdown.css" rel="stylesheet">

    <!-- Custom styles -->
    <link href="commonstyles.css" rel="stylesheet" type="text/css">
    <link href="login.css" rel="stylesheet" type="text/css">

    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
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
                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
