<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$servername = "localhost";
$username = "student_11902804";
$password = "eJ9z69mNneiR";
$dbname = "student_11902804";
$q =isset($_GET['q'])? intval($_GET['q']):0;


$con = mysqli_connect($servername,$username,$password,$dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"ajax_demo");
if($q>0)
{
$sql="SELECT * FROM Data WHERE ID = '".$q."'";
}
else
{
$sql="SELECT * FROM Data";
}
$result = mysqli_query($con,$sql);
echo "<table>
<tr>
<th>ID</th>
<th>Waarde</th>
<th>Tijd</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['ID'] . "</td>";
  echo "<td>" . $row['Waarde'] . "</td>";
  echo "<td>" . $row['Tijd'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>

</body>
</html>