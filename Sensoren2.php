<!DOCTYPE php>
<?php

$servername = "localhost";
$username = "student_11902804";
$password = "eJ9z69mNneiR";
$dbname = "student_11902804";

$localIP = getHostByName(getHostName());
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$Waarde = htmlspecialchars($_REQUEST["Waarde"]);
$ID = htmlspecialchars($_REQUEST["ID"]);


if (!empty($Waarde)){
if (!empty($ID)){
$host = "localhost";

$sql = "INSERT INTO Data (Waarde, ID)
VALUES ('$Waarde','$ID')";


if ($conn->query($sql) === TRUE) {
  echo "OK <br>" ;//. $sql;
} 
else {
  echo "NOK" . $sql . "<br>" . $conn->error;
}
if ($ID == 1){
	$sql = "UPDATE Sensoren SET Naam = 'Temperatuur_Sensor', IP_adres = '84.195.35.26' WHERE ID = $ID";
	
}
else {
	$sql = "UPDATE Sensoren SET Naam = 'Licht_Sensor', IP_adres = '84.195.35.26' WHERE ID = $ID";
}

if ($conn->query($sql) === TRUE) {
  echo "OK <br>" ;//. $sql;
} 
else {
  echo "NOK" . $sql . "<br>" . $conn->error;
}}}

$conn->close();

?>
