<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="author" content="Joe Sorgea">

    <title>Top Prospects</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/dropdown.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <!-- <link href="commonstyles.css" rel="stylesheet" type="text/css"> -->

    <script src="bootstrap/assets/js/ie-emulation-modes-warning.js"></script>
</head>

<body>
    <?php
        //include_once('navbar.php');

        // Variables for connecting to the mySQL server
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "elp bio";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    ?>
    <div class="container">
        <h2>Hitting</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Bat speed</th>
                    <th>Exit velocity</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // query the player details and bat speed tables and select the latest bat speed entry for each player, then order the table by bat speed
                    $query = "SELECT first_name, last_name, bat_speed, exit_velocity, player_details.player_id, batspeed_stats.player_id, MAX(date_stats_collected)
                    FROM player_details, batspeed_stats
                    WHERE player_details.player_id = batspeed_stats.player_id
                    GROUP BY player_details.player_id
                    ORDER BY bat_speed DESC";
                    $result = $conn->query($query);

                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["first_name"] . " " . $row["last_name"]?></td>
                            <td><?php echo $row["bat_speed"]?></td>
                            <td><?php echo $row["exit_velocity"]?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>

        <h2>Pitching</h2>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Curveball</th>
                    <th>Changeball</th>
                    <th>Knuckleball</th>
                    <th>Slider</th>
                    <th>Two-seem</th>
                    <th>Four-seem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // query the player details and bat speed tables and select the latest bat speed entry for each player, then order the table by bat speed
                    $query = "SELECT first_name, last_name, curveball, changeball, knuckleball, slider, two_seem, four_seem, player_details.player_id, pitcher_stats.player_id, MAX(date_stats_collected)
                    FROM player_details, pitcher_stats
                    WHERE player_details.player_id = pitcher_stats.player_id
                    GROUP BY player_details.player_id
                    ORDER BY curveball DESC";
                    $result = $conn->query($query);

                    while($row = $result->fetch_assoc()) {
                        ?>
                        <tr>
                            <td><?php echo $row["first_name"] . " " . $row["last_name"]?></td>
                            <td><?php echo $row["curveball"]?></td>
                            <td><?php echo $row["changeball"]?></td>
                            <td><?php echo $row["knuckleball"]?></td>
                            <td><?php echo $row["slider"]?></td>
                            <td><?php echo $row["two_seem"]?></td>
                            <td><?php echo $row["four_seem"]?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Bootstrap core JavaScript -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap/assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
