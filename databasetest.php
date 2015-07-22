<?php
// Variables for connecting to the mySQL server
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "elp model 1";

// Player id
$playerId = 1;

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT first_name, last_name, dob, grad_year, height, weight, throws, bats, city, state, school_id FROM player_details WHERE player_id=" . $playerId;
$result = $conn->query($query);
$row = $result->fetch_assoc(); // puts the first row of the table into an array
$schoolId = $row["school_id"];
?>

First name: <?php echo $row["first_name"]?><br>
Last name: <?php echo $row["last_name"]?><br>
Date of birth: <?php echo $row["dob"]?><br>
Grad year: <?php echo $row["grad_year"]?><br>
Height: <?php echo $row["height"]?> cm<br>
Weight: <?php echo $row["weight"]?> kg<br>
Throws: <?php echo $row["throws"]?><br>
Bats: <?php echo $row["bats"]?><br>
City/State: <?php echo $row["city"]?>, <?php echo $row["state"]?><br>

<?php
// Get school data from school table using schoolId
$query = "SELECT name, city, state FROM school WHERE school_id=" . $schoolId;
$result = $conn->query($query);
$row = $result->fetch_assoc(); // puts the first row of the table into an array
?>

School: <?php echo $row["name"]?>, <?php echo $row["city"]?>, <?php echo $row["state"]?><br>

<?php
$conn->close();
?>
