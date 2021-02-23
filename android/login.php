<?php
require "init.php";
$IDNUMBER= $_POST['number'];
$sql= "SELECT c_id,names,username,password,idno,phone,sector,cell,village,t_date FROM citizens WHERE idno like '".$IDNUMBER."';";
$result= mysqli_query($con,$sql)or die(mysqli_error($con));
$response= array();
if (mysqli_num_rows($result)>0) {
	$row = mysqli_fetch_row($result);
	$id=$row[0];
	$idno= $row[4];
	$name = $row[1];
	$code="login_success";
	array_push($response,array("code"=>$code,"c_id"=>$id,"idno"=>$idno,"names"=>$name));
	echo json_encode($response);

}else{
	$code="login_failed";
	$message="User not found...Please try again...";
	array_push($response,array("code"=>$code,"message"=>$message));
}
mysqli_close($con);
?>