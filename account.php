<head>
    <title>My Account</title>

    <link rel="stylesheet" type="text/css" href="login.css">

    <!-- Google fonts-->
    <link href='http://fonts.googleapis.com/css?family=Roboto|Source+Sans+Pro' rel='stylesheet' type='text/css'>
</head>

<body>
<?php
    $allowCoaches = true;
    $allowPlayers = true;
    require('protected.php');
    include_once('navbar.php');
?>

<div class="content">
    <div class="content-column-center">
        <!-- sign out form. sets logout to 1 when the user presses sign out -->
        <form class="form-signin" action="?logout=1" method="post">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign out</button>
        </form>
    </div>
</div>
</body>

<?php
// if the user wants to log out, send them to the home page
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header("Location: home.php");
}
?>
