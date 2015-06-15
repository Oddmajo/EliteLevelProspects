<head>
    <title>Elite Level Prospects</title>

    <link href="home.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans|Russo+One' rel='stylesheet' type='text/css'>
</head>

<body>
    <?php
        session_start();
        include_once('navbar.php');
    ?>

    <style>
        .navbar {
            background: none;
        }
    </style>

    <div class="cover-container">
        <div class="cover-copy">
            <img src="images/logo.png" alt="Elite Level Prospects" width="200" height="191">
            <h1 class="cover-heading">The best baseball recruiting website in the midwest.</h1>
            <p class="lead">With all the statistics that major league baseball scouts are looking for, as well as personalized player biographies, our site is engineered to give coaches and scouts the most information possible about you as an athlete and as a person.</p>
            <form action="home-video.php" method="get">
                <button class="cover-button" type="submit">Play video</a>
            </form>
        </div>
    </div>
</body>
