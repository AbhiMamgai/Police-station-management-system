<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mis.css">
	<title>Missing persons</title>
</head>
<body bgcolor="rgba(255, 99, 71, 1)">
	<div class="background-image"></div>
	<div class="content">
<?php
include("topnav.php");
include("header.php");
$con=mysqli_connect("localhost","root","","cms");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM missing");

echo "<table border='1' cellpadding='10' width='1350px'>
<tr>
<th>S.No</th>
<th>Name</th>
<th>Age</th>
<th>Height</th>
<th>Colour</th>
<th>Missing Date</th>
<th>Father's Name</th>
<th>Address</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['sno'] . "</td>";
echo "<td>" . $row['name'] . "</td>";
echo "<td>" . $row['age'] . "</td>";
echo "<td>" . $row['height'] . "</td>";
echo "<td>" . $row['colour'] . "</td>";
echo "<td>" . $row['sincedate'] . "</td>";
echo "<td>" . $row['father'] . "</td>";
echo "<td>" . $row['address'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($con);
?>
</div>
</body>
</html>