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
    <style>
        body {
            background-image: none;
            background-color: black;
        }
    </style>
    <div class="cover-container">
        <video id="myVideo" width="1280" height="720" autoplay preload="auto">
          <source src="videos/intro.mp4" type="video/mp4">
        Your browser does not support the video tag.
        </video>
    </div>
</body>
