<?php
include_once 'db.php';
$result = mysqli_query($con,"SELECT * FROM citizens");
?>
<!DOCTYPE html>
<html>
<head>
<title> Citizens Retrieve</title>
</head>
<body>
<table border="1" cellpadding="2" cellspacing="0">
<tr>
<th>ID</th>
<th>Names</th>
<th>ID No</th>
<th>Phone</th>
<th>Username</th>
<th>Password</th>
<th>Sector</th>
<th>Cell</th>
<th>Village</th>
<th>Time</th>
<th>Edit</th>
</tr>
<?php
while($row = mysqli_fetch_array($result)) {
	?>
<tr>
<td><?php echo $row["c_id"]; ?></td>
<td><?php echo $row["names"]; ?></td>
<td><?php echo $row["idno"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><?php echo $row["sector"]; ?></td>
<td><?php echo $row["cell"]; ?></td>
<td><?php echo $row["village"]; ?></td>
<td><?php echo $row["t_date"]; ?></td>
<td><a href="edit_cit.php?id=<?php echo $row['c_id'] ;?>">Edit</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html> 