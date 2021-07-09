<?php

require('db1.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM new_reg WHERE id=$id"; 
$result = mysqli_query($con,$query) or die ( mysqli_error());
header("Location: view.php"); 
?>