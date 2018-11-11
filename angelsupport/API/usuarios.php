<?php
header("Content-type: application/json; charset=utf-8");

$servername = "localhost";
$username = "id7125045_root";
$password = "Vargasgg";
$dbname = "id7125045_angelsupport";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $registros=array();
    $i=0;
    // output data of each row
    while($row = $result->fetch_assoc()) {
      $registros[$i]=$row;
      $i++;
    }
    echo  json_encode($registros);
} else {
    echo "{}";
}

$conn->close();
?>