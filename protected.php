<?php

    session_start();

    if (isset($_SESSION['usertype'])) {
        $usertype = $_SESSION['usertype'];

        // redirect the user to the login page if they're trying to access a page they don't have privileges for
        if (($usertype == 'player' && !isset($allowPlayers)) || ($usertype == 'coach' && !isset($allowCoaches))) {
            unset($_SESSION['dest']); // unset destination so user is not stuck in a redirect loop
            header("Location: login.php");
            exit;
        }
    } else {
        // store the page we're trying to get to so we can get back if we need to log in
        $_SESSION['dest'] = basename($_SERVER['PHP_SELF']);
        // redirect the user to the login page if they haven't been logged in yet
        $_SESSION['redirect'] = true;
        header("Location: login.php");
        exit;
    }
?>
