<head>
    <title>My Account</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="common.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="login.css">

    <!--<link rel="stylesheet" type="text/css" href="forum.css">-->

    <!-- Google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>

<body>
<div class="site-wrapper">
<div class="site-wrapper-inner">

<?php
    $allowCoaches = true;
    $allowPlayers = true;
    require('protected.php');
    include_once('navbar.php');
?>

<!-- sign out form. sets logout to 1 when the user presses sign out -->
<form class="form-signin" action="?logout=1" method="post">
    <button class="btn btn-lg btn-primary btn-block" type="submit">Sign out</button>
</form>

</div>
</div>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="bootstrap/ie10-viewport-bug-workaround.js"></script>
</body>

<?php
// if the user wants to log out, send them to the home page
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header("Location: home.php");
}
?>
