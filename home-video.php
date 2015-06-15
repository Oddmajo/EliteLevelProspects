<head>
    <title>Elite Level Prospects</title>

    <link href="home.css" rel="stylesheet">
    <link href="layout.css" rel="stylesheet">

    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Oswald|Pathway+Gothic+One' rel='stylesheet' type='text/css'>

    <script type="text/javascript" src="http://code.jquery.com/jquery-1.4.2.min.js">
    </script>
    <script type="text/javascript">
      $(document).ready(function(){
       $("#myVideo").bind('ended', function(){
          location.href="home-main.php";
       });
      });
    </script>
</head>

<body>
    <div class="cover-container">
        <video id="myVideo" width="1280" height="720" autoplay controls preload="none">
          <source src="videos/main.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>
        <form action="home-main.php" method="get">
            <button class="cover-button" type="submit">Exit video</a>
        </form>
    </div>
</body>
