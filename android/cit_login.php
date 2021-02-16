<?php 
 // define('HOST','localhost');
 // define('USER','root');
 // define('PASS','');
 // define('DB','sharetotheworld');
 
 // $con = mysqli_connect(HOST,USER,PASS,DB);
 
 include 'config/config.php';
 if($_SERVER['REQUEST_METHOD']=='POST'){

 $username = $_POST['username'];
 $password = $_POST['password'];
 
 
 $sql = "SELECT * FROM `citizens` WHERE username='".$username."' AND password='".$password."'";
 

 $result = mysqli_query($con,$sql);
 

 $check = mysqli_fetch_array($result);
 

  $sqli = "SELECT `id`, `names`, `username`, `password` FROM `citizens` WHERE username='".$username."' AND username='".$password."'";

   $resulti = mysqli_query($con,$sqli);
   while($row=mysqli_fetch_assoc($resulti)){
     $data=array();
	 $name["sucsses"]=false;
   $data=$name+$row;
         echo json_encode($data);
   }
 }else{
 echo "failure";
 }
 mysqli_close($con);
 

 ?>