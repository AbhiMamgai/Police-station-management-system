
<?php
   include('session.php');
?>
<html>
<head>
	<title>CriminalRecord</title>

	<link rel="stylesheet" type="text/css" href="prisonerRecord.css">
</head>
<?php 
include("header.php")
?>
<h1 align = "center "style="color: white">POLICE STATION MANAGEMENT SYSTEM</h1>
<h3 align = "center "style="color: white"> Criminal Info</h3>
<center>
<body>
	<img src = "pablo.JPG" width="350" height="400" />
	<form action="" method="post">
		<table width="450px">
		<tr>
		    <td>
		        <label style="color: white" for="Pno">Criminal No</label><br><br>
	        </td>
	        <td>
	    	    <input type="text" name="pno" maxlength="50" size="30"><br><br>
	        </td>
	    </tr>
	    <tr>
		    <td>
		        <label style="color: white" for="Name">Name</label><br><br>
	        </td>
	        <td>
	    	    <input type="text" name="name" maxlength="50" size="30"><br><br>
	        </td>
	    </tr>
	    <tr>
            <td>
			    <label style="color: white" for="Height">Height in cm</label><br><br>
		    </td>	
		    <td>
			    <input type="text" name="height" maxlength="80" size="30"><br><br>
		    </td>
	    </tr>
	    <tr>
	    	<td>
	    		<label style="color: white" for = "Date & TIme of Arrest">Date of arrest(YYYY-MM-DD HH:MM:SS)</label><br><br>
	    	</td>
	    	<td>
	    		<input type="text" name="date"/><br><br>
	    	</td>
	    </tr>
	    <tr>
	    	<td>
	    		<label style="color: white" for="Facial Appearance">Facial appearance</label><br><br>
	    	</td>
	    	<td>
	    		<input type="text" name="fappearance" maxlength="80" size="30"><br><br>
	    	</td>
	    </tr>
	    <tr>
	    	<td>
	    		<label style="color: white" for="Identification Marks">Identification marks (if any)</label><br><br>
	    	</td>
	    	<td>
	    		<input type="text" name="imarks" maxlength="80" size="30"><br><br>
	    	</td>
	    </tr>
	    <tr>
	    	<td>
	    		<label style="color: white" for="Address">Address</label><br><br>
	    	</td>
	    	<td>
	    		<input type="text" name="address" maxlength="500" size="30"><br><br>
	    		<input type="submit" name="submit" value="Submit">
	    	</td>
	    </tr>
	</table>   
	</form>
	<br><br>
	<h3><a href="searchPrisoner.php" style="color: #cc0000"> Search Criminal Record </a></h3>
	<?php
	@$pno=$_POST['pno'];
	@$name=$_POST['name'];
	@$height=$_POST['height'];
	@$date=$_POST['date'];
	@$fappearance=$_POST['fappearance'];
	@$imarks=$_POST['imarks'];
	@$address=$_POST['address'];
	include "conn.php";
	if(isset($_POST['submit']))
	{
		$qury="INSERT INTO prisoners(pno,name, height, date, fappearance, iMarks, address)
		values('$pno','$name', '$height', '$date', '$fappearance', 
		'$imarks', '$address')";
		echo "==".$qury."==";
		$res=$db->query($qury);
		if($res){
		echo "<script>alert('succesfully saved script')</script>";
	}
	else
	{
		echo "<script> alert('Prisoner no already exists')</script>";
	}
	}
	?>
</body>
</html>