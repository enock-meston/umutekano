<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Admin Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>
<p>This is secure area.</p>
<p><a href="dashboard.php">Dashboard</a></p>
<p><a href="leader_reg.php">Leaders</a></p>
<p><a href="citizen_reg.php">Citizens</a></p>
<a href="logout.php">Logout</a>
</div>
</body>
</html>