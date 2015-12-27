<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel
 * Date: 27.12.2015
 * Time: 16:34
 */

if (!function_exists('mysqli_init') && !extension_loaded('mysqli')) {
    echo 'We don\'t have mysqli!!!';
} else {
    echo 'Phew we have it!';
}

$servername = "localhost";
$username = "web51679";
$password = "^zYa765s";

// Create connection
$conn = new mysqli($servername,$username,$password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br><br>";

$sql = "USE web51679_db";
$conn->query($sql);
$sql = "SELECT * FROM Items";
$result = $conn->query($sql);


$conn->close();
?>