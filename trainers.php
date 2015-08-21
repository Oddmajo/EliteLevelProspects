<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="Joe Sorgea">

    <title>Trainers</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/dropdown.css" rel="stylesheet">

    <!-- Custom styles -->
    <!--<link href="commonstyles.css" rel="stylesheet" type="text/css">-->
    <link href="forum.css" rel="stylesheet" type="text/css">

    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
</head>

<body>
    <?php
        $allowCoaches = true;
        require('protected.php');
        include_once('navbar.php');
    ?>
<div class="custom-container">
<div class="row">
<div class="col-md-3">
</div>
<div class="col-md-6">
    <form class="form-inline">
        <div class="form-group">
            <label for="usr">Search for trainers </label>
            <input type="text" class="form-control" id="usr">
            <button class="btn btn-primary" type="submit">Search</button>
        </div>
    </form>

    <div class="panel panel-default">
        <div class="panel-body">
            <img src="http://placehold.it/200">
            <h2>Johnny Sage</h2>
        </div>
    </div>
</div>
<div class="col-md-3">
</div>
</div>
</div>
    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
