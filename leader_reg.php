<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Leader Registration</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['names'])){
        
    $names = stripslashes($_REQUEST['names']);
        
    $names = mysqli_real_escape_string($con,$names);
    $idno = stripslashes($_REQUEST['idno']);
    $idno = mysqli_real_escape_string($con,$idno); 
    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($con,$phone);
    $title = stripslashes($_REQUEST['title']);
    $title = mysqli_real_escape_string($con,$title);
    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con,$email);
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $status = stripslashes($_REQUEST['status']);
    $status = mysqli_real_escape_string($con,$status);


    $t_date = date("Y-m-d H:i:s");
        
    $query = "INSERT into `leaders`(names,idno,phone,title,email,username,password,status,t_date)
VALUES ('$names','$idno','$phone','$title','$email','$username','".md5($password)."','$status', '$t_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>1 Leader registered!!!</h3>
<br/>Click here to <a href='leader_login.php'>Login</a></div>";
        }
    }else{
?>
<center>
<h1>Leaders Registration</h1>
<form name="" action="" method="post">
    <table border="0" cellspacing="2"cellpadding="3">
        <tr>
            <td><input type="text" name="names" placeholder="Full Names" required /></td>
        </tr>
        <tr>
            <td><input type="text" name="idno" placeholder="Enter ID" required /></td>
        </tr>
        <tr>
            <td><input type="text" name="phone" placeholder="Phone Number" required /></td>
        </tr>
        <tr>
            <td><input type="text" name="title" placeholder="Enter Your Title" required />
            </td>
        </tr>
        <tr>
            <td><input type="email" name="email" placeholder="Enter Email" required /></td>
        </tr>
        <tr>
            <td><input type="text" name="username" placeholder="Enter Username" required /></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="Enter Password" required />
            </td>
        </tr>
        <tr>
            <td>
            <select name="status">
            <option value="1">--SELECT STATUS--</option>
            <option value="1">1</option>
            </select>
            </td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Register" /></td>
        </tr>
    </table>
</form>
</center>
<?php } ?>
</body>
</html>