<html>
<head>
	<title>Search Prisoner Database</title>
</head>
<?php 
include("header.php")
?>
<h1 align = "center "style="color: black">POLICE STATION MANAGEMENT SYSTEM</h1>
<h3 align = "center "style="color: black">Prisoner Database</h3>
<center>
<body>
	<img src = "search.jpg" width="350" height="400" />
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
	    		<label style="color: black" for="Prisoner_ID">Criminal Id</label><br><br>
	    	</td>
	    	<td>
	    		 <input type="text" name="pno" maxlength="50" size="30"><br><br>
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
    @$pno =$_POST['pno'];
    $qry = mysqli_query($db,"SELECT * FROM prisoners WHERE name = '$name' AND pno ='$pno' ");
    $count = mysqli_num_rows($qry);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
     if($count == 1) {
     	while ($rows = mysqli_fetch_assoc($qry)) {
     	$name = $rows['name'];
        $address = $rows['address'];
        $height = $rows['height'];
        $date = $rows['date'];
        $fappearance = $rows['fappearance'];
        $imarks=$rows['imarks'];
        echo "Name :- $name<br>Address :- $address<br>Date of Arrest:- $date<br> Facial Appearance :- $fappearance<br> Identification Marks :- $imarks<br><br>";
    }
    }else {
         $error = "Your Login Name or Password is invalid";
      }
   }
?>

</body>
</html>