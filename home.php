<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="The home page for Elite Level Prospects, a baseball scouting website.">
    <meta name="author" content="Joe Sorgea">

    <title>Elite Level Prospects</title>

    <!-- Custom styles for this template -->
    <link href="home.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Russo+One' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php
        session_start();
        include_once('navbar.php');
    ?>

    <div class="cover-container">
        <div class="cover-copy">
            <img src="images/logo.png" alt="Elite Level Prospects" width="200" height="191">
            <h1 class="cover-heading">The best baseball recruiting website in the midwest.</h1>
            <p class="lead">With all the statistics that major league baseball scouts are looking for, as well as personalized player biographies, our site is engineered to give coaches and scouts the most information possible about you as an athlete and as a person.</p>
            <p class="lead"><a class="cover-button" href="https://www.youtube.com/embed/wlXuqdzA1nY">Play video</a></p>
        </div>
    </div>
</body>
</html>
