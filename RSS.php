<?php 
$servername = "localhost";
$username = "student_11902804";
$password = "eJ9z69mNneiR";
$dbname = "student_11902804";
$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

$sql= mysqli_query($con, "SELECT MAX( Waarde ) AS max FROM Data WHERE ID =1;" );
$res = mysqli_fetch_array( $sql);
$maxtemp = $res['max'];
$sql= mysqli_query($con, "SELECT MIN( Waarde ) AS min FROM Data WHERE ID =1;" );
$res = mysqli_fetch_array( $sql);
$mintemp = $res['min'];
$sql= mysqli_query($con, "SELECT AVG( Waarde ) AS avg FROM Data WHERE ID = 1;");
$res = mysqli_fetch_array( $sql);
$avgtemp = $res['avg'];
$sql="SELECT * FROM Data WHERE ID = 1";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {	
	$laatstetemp=$row['Waarde'];
	$laatsteTijd=$row['Tijd'];
}

$sql= mysqli_query($con, "SELECT MAX( Waarde ) AS max2 FROM Data WHERE ID =2;" );
$res = mysqli_fetch_array( $sql);
$maxlicht = $res['max2'];
$sql= mysqli_query($con, "SELECT MIN( Waarde ) AS min2 FROM Data WHERE ID =2;" );
$res = mysqli_fetch_array( $sql);
$minlicht = $res['min2'];
$sql= mysqli_query($con, "SELECT AVG( Waarde ) AS avg2 FROM Data WHERE ID = 2;");
$res = mysqli_fetch_array( $sql);
$avglicht = $res['avg2'];
$sql="SELECT * FROM Data WHERE ID = 1";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result)) {	
	$laatstelicht=$row['Waarde'];
	$laatsteTijd2=$row['Tijd'];
}
header('Content-type: text/xml;charset=iso-8859-1');
echo "<?xml version='1.0'  encoding='UTF-8' ?> ";"<br>";
echo "<rss version='2.0'>";"<br>";
echo "<channel>";"<br>";

echo "<title>RSS Feed</title>";"<br>";

echo "<title>TemperatuurSensor</title>";"<br>";
echo "<title>gemiddelde</title>";"<br>";
echo "<description>".$avgtemp."</description>";"<br>";
echo "<title>Laatste tijd</title>";"<br>";
echo "<description>".$laatsteTijd."</description>";"<br>";
echo "<title>Laatste waarde</title>";"<br>";
echo "<description>".$laatstetemp."</description>";"<br>";
echo "<title>minimum</title>";"<br>";
echo "<description>".$mintemp."</description>";"<br>";
echo "<title>maximum</title>";"<br>";
echo "<description>".$maxtemp."</description>";"<br>";
echo "<title>LichtSensor</title>";"<br>";
echo "<title>Laatste waarde</title>";"<br>";
echo "<description>".$laatstelicht."</description>";"<br>";
echo "<title>Laatste tijd</title>";"<br>";
echo "<description>".$laatsteTijd2."</description>";"<br>";
echo "<title>gemiddelde</title>";"<br>";
echo "<description>".$avglicht."</description>";"<br>";
echo "<title>minimum</title>";"<br>";
echo "<description>".$minlicht."</description>";"<br>";
echo "<title>maximum</title>";"<br>";
echo "<description>".$maxlicht."</description>";"<br>";


echo "</channel>";"<br>";
echo "</rss>";"<br>";

mysqli_close($con);
?>