<?php
   include('session.php');
?>
?>
<html>
<head> 
<title> FIR Registration
</title>
<link rel="stylesheet" type="text/css" href="main.css">
</head>
<?php
   include('topnav.php');
?>
<div class="navigation">
    <ul>
      <li> <a href="home.php" style="color: #cc0000">Home</a> </li>
      <li> <a href="index.php" style="color: #cc0000"> FIR Reg </a></li>
      <li> <a href="mis.php" style="color: #cc0000"> Missing Persons </a></li>
      <li> <a href="faq.php" style="color: #cc0000">FAQ</a> </li>
      <li> <a href="fedms.php" style="color: #cc0000">Criminal Records </a> </li>
      <li> <a href = "logout.php" style="color: #cc0000">Sign Out</a></li>
    </ul>
  </div>
<body align="center" style="background-color: black;"">
    <h1 align = "center "style="color: white">POLICE STATION MANAGEMENT SYSTEM</h1>
<h2 style="color: Green; font-size: 30px">FIR Registration form</h2>
<form action="" method="post">
    <div align="center">
    <table>
        <tr>
            <td>
	<label style="color: Grey"> FIR NO.  </label><br><br>
</td>
<td>
    <input type="text" name="fid"><br><br>
</td>
</tr>
<tr>
<td>
    <label style="color: Grey"> Name of person  </label><br><br>
</td>
<td>
	<input type="text" name="name"><br><br>
</td>
</tr>
<tr>
    <td>
    <label style="color: Grey"> Full Address  </label><br><br>
    </td>
<td>
    <input type="text" name="address"><br><br>
    </td>
</tr>
<tr>
    <td>
	<label style="color: Grey"> Mobile </label><br><br>
    </td>
<td>
    <input type="number" name="mobile"><br><br>
    </td>
</tr>
<tr>
    <td>
    <label style="color: Grey"> Email </label><br><br>
    </td>
<td>
    <input type="email" name="email"><br><br>
    </td>
</tr>
<tr>
    <td>
    <label style="color: Grey"> Crime Or Incident  </label><br><br>
    </td>
<td>
    <input id="textboxid" type="multiline" mode="multiline" name="crime"><br><br>
    </td>
</tr>
<tr>
    <td>
    <label style="color: Grey"> Place of Crime  </label><br><br>
    </td>
<td>
    <input type="text" name="place"><br><br>
    </td>
</tr>
<tr>
    <td>
    <label style="color: Grey"> Person Accused  </label><br><br>
    </td>
<td>
    <input type="text" name="accused"><br><br>
    </td>
</tr>
<tr>
    <td>
    <label style="color: Grey"> Date and time of Incident  </label><br><br>
    </td>
<td>
    <input type="text" name="date"><br><br>
    </td>
</tr>
<tr>
    <td>
    <input type="submit" name="submit" value="Submit"><br><br>
    </td>
</tr>
</table>
</div>
</form>
<br><br>
<a href="searchfir.php" style="color: #cc0000">Search Fir Details </a>
<br><br>
<?php 
@$fid=$_POST['fid'];
@$name=$_POST['name'];
@$accused=$_POST['accused'];
@$place=$_POST['place'];
@$mobile=$_POST['mobile'];
@$email=$_POST['email'];
@$crime=$_POST['crime'];
@$address=$_POST['address'];
@$date=$_POST['date'];
include "conn.php";
if(isset($_POST['submit']))
{
$qry="INSERT INTO fir(fid,name,email,mobile,address,place,accused,date,crime)
values('$fid','$name','$email','$mobile','$address','$place','$accused','$date','$crime')";
echo "==".$qry."==";
$res=$db->query($qry);
if($res){
	echo "<script>alert('Successfully Saved')</script>";
}
}
?>
</body>
</html>