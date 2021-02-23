<?php
session_start();
require "init.php";
if (isset($_POST['save'])) {
	# code...
$name= $_POST['number'];
$sql= "SELECT id,regnumber_student,firstname_student,lastname_student,student_names FROM student WHERE regnumber_student like '".$name."';";
$result= mysqli_query($con,$sql)or die(mysqli_error($con));
$response= array();
if (mysqli_num_rows($result)>0) {
	$row = mysqli_fetch_row($result);
	$id=$row[0];
	$reg= $row[1];
	$name = $row[4];
	$code="login_success";
	array_push($response,array("code"=>$code,"regnumber_student"=>$reg,"student_names"=>$name));
	echo json_encode($response);


	// select student's payements

	$query="SELECT student.id,student.regnumber_student,student.firstname_student,student.lastname_student,payment.amount_payment FROM payment,student WHERE payment.id_student=student.id AND student.regnumber_student='".$name."'";

	$result1= mysqli_query($con,$query);
	$payment= array();
	if (mysqli_num_rows($result1)>0) {
		$r=mysqli_fetch_row($result1);
		$amount=$r[8];
		$co="selected";
		array_push($payment,array("code1"=>$co,"amount_payment"=>$amount));
		echo json_encode($payment);
		echo $amount;
	}else{
		$co="not_selected";
		$message="not_selected Please try again...";
		array_push($payment,array("code1"=>$co,"message"=>$message));
	}
//ends of selection of student's payment


}else{
	$code="login_failed";
	$message="User not found...Please try again...";
	array_push($response,array("code"=>$code,"message"=>$message));
}
}
mysqli_close($con);
?>
<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>
	<center>
		<h1>test</h1>

	<form method="POST">
		<input type="test" name="number" placeholder="Enter Reg number"><br><br>
		<input type="submit" name="save" value="save">
		
	</form>
</center>
</body>
</html>