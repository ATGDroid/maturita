<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Vytvo�en� p�ipojen�
$conn = new mysqli($servername, $username, $password, $dbname);
// Zkontrolov�n� p�ipojen�
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT id, vstriky, prezdivka FROM vyfuk";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
 // v�stupn� data z ka�d�ho ��dku
while($row = $result->fetch_assoc()) {
 echo "id: " . $row["id"]. " - Pocet: " . $row["vstriky"]. " " . $row["prezdivka"]. " <br>";
 }
} else {
 echo "0 Results";
}
$conn->close();
?>