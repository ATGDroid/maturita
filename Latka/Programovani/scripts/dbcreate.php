<?php
$servername = "localhost";
$username = "root";
$password = "";

// Vytvo�it p�ipojen�
$conn = new mysqli($servername, $username, $password);
// Zkontrolov�n� p�ipojen�
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Vytvo�en� datab�ze
$sql = "CREATE DATABASE test1";
if ($conn->query($sql) === TRUE) {
    echo "Databaze uspesne vytvorena.";
} else {
    echo "Chyba pri vytvareni databaze: " . $conn->error;
}

$conn->close();
?>