<?php
require "init.php";

    $id = $_POST["id"];
    $reg_number=$_POST['reg_number'];

    // $query = "SELECT student.id,student.regnumber_student,student.firstname_student,student.lastname_student,payment.amount_payment,academic_year.year,payment.date_payment FROM payment,student,academic_year WHERE payment.id_student='".$id."' AND student.regnumber_student='".$reg_number."' AND academic_year.year";

    // $result = mysqli_query($con, $query);
    // $number_of_rows = mysqli_num_rows($result);

    // $response = array();

    // if($number_of_rows > 0) {
    //     while($row = mysqli_fetch_assoc($result)) {
    //         $response['regnumber_student'] = $row;
    //     }
    // }
    // echo json_encode(array("payments"=>$response));
    // mysqli_close($con);


    $stmt = $con->prepare("SELECT student.id,student.regnumber_student,payment.amount_payment,payment.date_payment FROM payment,student WHERE payment.id_student='".$id."' AND student.regnumber_student='".$reg_number."'");

$stmt ->execute();
$stmt -> bind_result($title, $price, $rating, $image);

$products = array();

while($stmt ->fetch()){

    $temp = array();
	
	$temp['id'] = $title;
	$temp['regnumber_student'] = $price;
	$temp['amount_payment'] = $rating;
	$temp['date_payment'] = $image;

	array_push($products,$temp);
	}

	echo json_encode($products);

?>
