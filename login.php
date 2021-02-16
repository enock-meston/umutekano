<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['email'])){
        // removes backslashes
 $email = stripslashes($_REQUEST['email']);
        //escapes special characters in a string
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `leaders` WHERE email='$email'
and password='".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['email'] = $email;
            // Redirect user to index.php
     header("Location: index.php");
         }else{
 echo "<div class='form'>
<h3>Email/password is incorrect.</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
 }
    }else{
?>
<div class="form">
<center>
<h1>LogIn</h1>
<form name="login_leader" action="" method="post">
    <table border="0" cellspacing="2"cellpadding="10">
        <tr>
            <td><input type="email" name="email" placeholder="Email" required /></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="Password" required /></td>
        </tr>
        <tr>
            <td><input type="submit" name="submit" value="Register" /></td>
        </tr>
        
    </table>
</form>
<p>Not registered yet? <a href='#'>Request Admin</a></p>
</center>
</div>
<?php } ?>
</body>
</html>