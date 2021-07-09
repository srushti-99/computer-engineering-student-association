<?php

require('db.php');
include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Dashboard - Secured Page</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome to Dashboard <?php echo $_SESSION['username']; ?>!</p>

<p><a href="index.php">Home</a><p>
<p><a href="view.php">View  All Entries</a></p>
<p><a href="logout.php">Logout</a></p>


<br /><br /><br /><br />
</div>
</body>
</html>
