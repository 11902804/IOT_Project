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

//code sensoren to data base
class dht11{
 public $link='';
 function __construct($temperature, $humidity){
  $this->connect();
  $this->storeInDB($temperature, $humidity);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'<Your Database Name>') or die('Cannot select the DB');
 }
 
 function storeInDB($temperature, $humidity){
  $query = "insert into <Your table name> set humidity='".$humidity."', temperature='".$temperature."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['temperature'] != '' and  $_GET['humidity'] != ''){
 $dht11=new dht11($_GET['temperature'],$_GET['humidity']);
}
// einde code
$conn->close();
?>
