<?php
include_once 'db.php';
$result = mysqli_query($con,"SELECT * FROM leaders");

?>
<!DOCTYPE html>
<html>
<head>
<title> Leaders Retrieve</title>
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
<th>Username</th>
<th>Password</th>
<th>Status</th>
<th>Time</th>
<th colspan='2'>Action</th>
</tr>
<?php
while($row = mysqli_fetch_array($result)) {
	?>
<tr>
<td><?php echo $row["l_id"]; ?></td>
<td><?php echo $row["names"]; ?></td>
<td><?php echo $row["idno"]; ?></td>
<td><?php echo $row["phone"]; ?></td>
<td><?php echo $row["title"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["username"]; ?></td>
<td><?php echo $row["password"]; ?></td>
<td><?php echo $row["status"]; ?></td>
<td><?php echo $row["t_date"]; ?></td>
<td><a href="edit_lead.php?id=<?php echo $row['l_id'] ;?>">Edit</a></td>
<td><a href="remove_lead.php?del=<?php echo $row['l_id'] ;?>">Remove</a></td>
</tr>
<?php
}
?>
</table>
</body>
</html> 