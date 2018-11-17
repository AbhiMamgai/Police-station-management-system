<?php
   $datatable = "students"; // MySQL table name
   $results_per_page = 20;
   $db = mysqli_connect('localhost','root','','cms');
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
} 
?>