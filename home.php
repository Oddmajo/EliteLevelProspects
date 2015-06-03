<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="The home page for Elite Level Prospects, a baseball scouting website.">
    <meta name="author" content="Joe Sorgea">

    <title>Elite Level Prospects</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="common.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="home.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat|Jockey+One|Russo+One' rel='stylesheet' type='text/css'>
</head>

<body>
    <div class="site-wrapper">
    <div class="site-wrapper-inner">

    <?php
        session_start();
        include_once('navbar.php');
    ?>

    <!-- override navbar.css styles so the navbar is white -->
    <style>
        .masthead-brand {
          color: white;
        }

        .masthead-nav > li > a {
          color: rgba(255,255,255,.75);
        }
        .masthead-nav > li > a:hover,
        .masthead-nav > li > a:focus {
          border-bottom-color: rgba(255,255,255,.25);
        }
        .masthead-nav > .active > a,
        .masthead-nav > .active > a:hover,
        .masthead-nav > .active > a:focus {
          color: white;
          border-bottom-color: white;
        }
    </style>

    <div class="cover-container">
        <div class="inner cover">
            <h1 class="cover-heading">The best baseball recruiting website in the midwest.</h1>
            <p class="lead">With all the statistics that major league baseball scouts are looking for, as well as personalized player biographies, our site is engineered to give coaches and scouts the most information possible about you as an athlete and as a person.</p>
            <p class="lead">
                <a href="https://www.youtube.com/embed/wlXuqdzA1nY" class="btn btn-lg btn-default">Play video</a>
            </p>
        </div>

        <div class="mastfoot">
            <div class="inner">
                <p></p>
            </div>
        </div>
    </div>

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
</html>
