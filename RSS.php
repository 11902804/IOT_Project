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
$sql="SELECT * FROM Data";
while($row = mysqli_fetch_array($result)) {	
	$laatstetemp=$row['Waarde'];
	$laatsteTijd=$row['Tijd'];
}

$sql= mysqli_query($con, "SELECT MAX( Waarde ) AS max2 FROM Data WHERE ID =2;" );
$res = mysqli_fetch_array( $sql);
$maxlicht = $res['max2'];
$sql= mysqli_query($con, "SELECT MIN( Waarde ) AS min2 FROM Data WHERE ID =2;" );
$res = mysqli_fetch_array( $sql);
$minlicht = $res['min1'];
$sql= mysqli_query($con, "SELECT AVG( Waarde ) AS avg2 FROM Data WHERE ID = 2;");
$res = mysqli_fetch_array( $sql);
$avglicht = $res['avg2'];
$sql="SELECT * FROM Data";
while($row = mysqli_fetch_array($result)) {	
	$laatstelicht=$row['Waarde'];
	$laatsteTijd2=$row['Tijd'];
}
mysqli_close($con);

header("Content-type: text/xml"); 

echo "<?xml version='1.0' encoding='UTF-8'?>
<rss version='2.0'>
<channel>
<title>RSS Feed</title>
<item>
<title>Temperatuur</title>
<title>maximum</title>
<description>"$maxtemp"</description>
<title>minimum</title>
<description>"$mintemp"</description>
<title>gemiddelde laatste 24 uur</title>
<description>"$avgtemp"</description>
<title>nieuwste Waarde</title>
<description>"$laatstetemp"</description>
<title>nieuwste tijdstempel</title>
<description>"$laatsteTijd"</description>
</item>

<item>
<title>Licht</title>
<title>maximum</title>
<description>"$maxlicht"</description>
<title>minimum</title>
<description>"$minlicht"</description>
<title>gemiddelde laatste 24 uur</title>
<description>"$avglicht"</description>
<title>nieuwste Waarde</title>
<description>"$laatstelicht"</description>
<title>nieuwste tijdstempel</title>
<description>"$laatsteTijd2"</description>
</item>
</channel></rss>"; 

?>