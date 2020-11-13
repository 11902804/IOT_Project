<?php

$servername = "localhost";
$username = "student_11902804";
$password = "eJ9z69mNneiR";
$dbname = "student_11902804";

$conn = new mysqli($servername, $username, $password, $dbname);// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT ID, Waarde, Tijd
FROM Waarde WHERE ID = ?";

$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($Waarde, $ID, $Tijd);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<td>" . $ID . "</td>";
echo "<th>Waarde</th>";
echo "<td>" . $Waard . "</td>";
echo "<th>Tijd</th>";
echo "<td>" . 'Tijd' . "</td>";
echo "</tr>";
echo "</table>";
?>