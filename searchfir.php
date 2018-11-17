<html>
<head>
	<title>Search FIR details</title>
</head>
<?php 
include("header.php")
?>
<link rel="stylesheet" type="text/css" href="firsearch.css">
<h1 align = "center "style="color: black">POLICE STATION MANAGEMENT SYSTEM</h1>
<h3 align = "center "style="color: black">FIR Database</h3>
<center>
<body>
	<img src = "fir.jpg" width="350" height="400" />
	<br><br>
	<form action="" method="post">
		<table width="450px">
		</tr>
		<tr>
		    <td>
		        <label style="color: black" for="Name">Name</label><br><br>
	        </td>
	        <td>
	    	    <input type="text" name="name" maxlength="50" size="30"><br><br>
	        </td>
	    </tr>
	    <tr>
	    	<td>
	    		<label style="color: black" for="Prisoner_ID">FIR NO</label><br><br>
	    	</td>
	    	<td>
	    		 <input type="text" name="fid" maxlength="50" size="30"><br><br>
	    	</td>
	    	<td>
	    		<input type="submit" name="submit" value="Submit"><br><br>
	    	</td>
	    </tr>
	</table>
</form>
<?php
include "conn.php";
if(isset($_POST['submit']))
{
	@$name =$_POST['name'];
    @$fid =$_POST['fid'];
    $qry = mysqli_query($db,"SELECT * FROM fir WHERE name = '$name' AND fid ='$fid' ");
    $count = mysqli_num_rows($qry);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
     if($count == 1) {
     	while ($rows = mysqli_fetch_assoc($qry)) {
     	$fid=$rows['fid'];
     	$name = $rows['name'];
        $address = $rows['address'];
        $place = $rows['place'];
        $date = $rows['date'];
        $accused = $rows['accused'];
        $mobile=$rows['mobile'];
        $email=$rows['email'];
        $crime=$rows['crime'];
        echo "FIR NO. :- $fid <br> Name :- $name<br>Address :- $address<br>Date of Incident :- $date<br> Place :- $place<br> Crime :- $crime<br> Accused :- $accused<br> Mobile No. :- $mobile <br> Email :- $email <br> <br><br>";
    }
    }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

</body>
</html>