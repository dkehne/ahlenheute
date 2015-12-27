<?php
/**
 * Created by IntelliJ IDEA.
 * User: Daniel
 * Date: 27.12.2015
 * Time: 16:34
 */


$servername = "localhost";
$username = "web51679";
$password = "^zYa765s";

// Create connection
$conn = new mysqli($servername,$username,$password);

// Check connection
//if ($conn->connect_error) {
//    die("Connection failed: " . $conn->connect_error);
//}
//echo "Connected successfully<br><br>";

$sql = "USE web51679_db";
$conn->query($sql);
$sql = "SELECT * FROM Items";
$result = $conn->query($sql);


$conn->close();
?>