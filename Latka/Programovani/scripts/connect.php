<?php
$servername = "localhost";
$username = "root";
$password = "";

// Vytvo�it p�ipojen�
$conn = new mysqli($servername, $username, $password);

// Zkontrolovat p�ipojen�
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Uspesne pripojeno.";
?>