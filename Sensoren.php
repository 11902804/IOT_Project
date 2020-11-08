<!DOCTYPE php>
<?php
$servername = "localhost";
$username = "student_11902804";
$password = "eJ9z69mNneiR";
$dbname = "student_11902804";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$command = escapeshellcmd('C:\Users\Olaf van Beers\Documents\sensoren\test.py');
$output = shell_exec($command);


$Waarde = filter_input(INPUT_POST, 'Waarde');
$ID = filter_input(INPUT_POST, 'ID');

if (!empty($Waarde)){
if (!empty($ID)){
$host = "localhost";

$sql = "INSERT INTO Data (Waarde, ID)
VALUES ('$Waarde','$ID')";
}}

if ($conn->query($sql) === TRUE) {
  echo "OK <br>" ;//. $sql;
} 
else {
  echo "NOK" . $sql . "<br>" . $conn->error;
}
$sql = "UPDATE Sensoren SET ID='ID' WHERE nr=1";

$conn->close();
?>
