<?php

$allowCoaches = true;
$allowPlayers = true;
require('protected.php');
require('navbar.php');

?>

<head>
    <link rel="stylesheet" type="text/css" href="account.css">
</head>

<body>
This is your account page.
<!-- sign out form. sets logout to 1 when the user presses sign out -->
<form action="?logout=1" method="post">
<input type="submit" value="Sign out">
</form>
</body>

<?php
// if the user wants to log out, send them to the home page
if (isset($_GET['logout'])) {
    session_start();
    session_destroy();
    header("Location: home.php");
}
?>
