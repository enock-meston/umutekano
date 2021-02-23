<?php
session_start();
require "init.php";
$query = "SELECT id,regnumber_student,student_names FROM student;";
$result2= mysqli_query($con,$query) OR die(mysqli_error($con));
$response2 = array();

if (mysqli_num_rows($result2)>0) {
	$row = mysqli_fetch_row($result2);
	$id=$row[0];
	$regno= $row[1];
	$stu_name = $row[2];
	$code1="selected";
	array_push($response2,array("code1"=>$code1,"id"=>$id,"regnumber_student"=>$regno,"student_names"=>$stu_name));
	echo json_encode($response2);
	
}else{
	$code2="not_selected";
	$message="User not found...Please try again...";
	array_push($response2,array("code1"=>$code2,"message"=>$message));

}
//ends of select student and he's or she's payments

mysqli_close($con);

?>