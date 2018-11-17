<html>
<head>
	<title>Missing Persons</title>
</head>
<body bgcolor="pink">
	<?php
	include "miscon.php";
if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };
$start_from = ($page-1) * $results_per_page;
$qry = mysqli_query($db,"SELECT * FROM missing ORDER BY sno ");
?> 
<table border="1" cellpadding="10">
<tr>
    <td bgcolor="#CCCCCC"><strong>S No</strong></td>
    <td bgcolor="#CCCCCC"><strong>Name</strong></td><td bgcolor="#CCCCCC"><strong>Age</strong></td>
     <td bgcolor="#CCCCCC"><strong>Height</strong></td>
    <td bgcolor="#CCCCCC"><strong>Colour</strong></td><td bgcolor="#CCCCCC"><strong>Missing Since</strong></td>
     <td bgcolor="#CCCCCC"><strong>Fathers Name</strong></td>
    <td bgcolor="#CCCCCC"><strong>Address </strong></td>
</tr>
<?php 
 while($rows = mysqli_fetch_assoc($qry)) {
?>
            <tr>
            <td> <? $sno = $rows['sno'];echo $sno ?></td>
            <td><? $name = $rows['name'];echo $name ?></td>
            <td><? $age = $rows['age']; echo $age ?></td>
            <td><? $height = $rows['height'];echo $height?></td>
            <td><? $colour = $rows['colour']; echo $colour?></td>
            <td><? $sincedate = $rows['sincedate']; echo $sincedate?></td>
            <td><? $father = $rows['father']; echo $father?></td>
            <td><?$address = $rows['address']; echo $address ?> </td>
            </tr>
<?php 
}; 
?> 
</table>
 
 
 
<?php 
$sql = "SELECT COUNT(sno) AS total FROM missing";
$result = $db->query($sql);
$row = $result->fetch_assoc();
$total_pages = ceil($row["total"] / $results_per_page); // calculate total pages with results
  
for ($i=1; $i<=$total_pages; $i++) {  // print links for all pages
            echo "<a href='missing.php?page=".$i."'";
            if ($i==$page)  echo " class='curPage'";
            echo ">".$i."</a> "; 
}; 
?>

</body></html>