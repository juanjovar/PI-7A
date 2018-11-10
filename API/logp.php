<?php
header("Content-type: application/json; charset=utf-8");

$servername = "localhost";
$username = "id7125045_root";
$password = "Vargasgg";
$dbname = "id7125045_angelsupport";

$user=$_GET['user'];
$pass=$_GET['password'];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM usuarios WHERE user='$user' && password='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    $row = $result->fetch_assoc();
        echo json_encode($row);
} else {
    echo "{}";
}
$conn->close();
?>