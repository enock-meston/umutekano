
<!DOCTYPE html>
<html>
<head>
<title> List of Active Leaders</title>
</head>
<body>
<table border="1" cellpadding="2" cellspacing="0">
<tr>
<th>ID</th>
<th>Names</th>
<th>ID No</th>
<th>Phone</th>
<th>Title</th>
<th>Email</th>
<th>Time</th>
</tr>
<?php
include_once 'db.php';
$status=1;
$result = mysqli_query($con,"SELECT * FROM leaders WHERE status='$status'");
?>
while($row = mysqli_fetch_array($result)) {
	?>
<tr>
<td><?php echo $row["l_id"]; ?></td>
<td><?php echo $row["names"]; ?></td>
<td><?php echo $row["idno"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["title"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["t_date"]; ?></td>
</tr>
<?php
}
?>
</table>
</body>
</html> 