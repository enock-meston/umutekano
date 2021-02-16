<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Leader Login</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<?php
require('db.php');
session_start();
// If form submitted, insert values into the database.
if (isset($_POST['username'])){
        // removes backslashes
 $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $password = md5($password); 
 //Checking is user existing in the database or not
        $query = "SELECT * FROM `leaders` WHERE username='$username' and password='$password'";
        $password = md5($password);
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1)
        {
     $_SESSION['username'] = $username;
            // Redirect user to index.php
     header("Location: leader_home.php");
         }
         else{
 echo "<div class='form'>
<h3>Username/password is incorrect.</h3>
<br/>Click here to <a href='leader_login.php'>Login</a></div>";
 }
    }else{
?>
<div class="form">
<<center>
<h1>Leader Login</h1>
<form name="citizen_reg" action="" method="post">
    <table border="0" cellspacing="2"cellpadding="5">
        <tr>
            <td><input type="text" name="username" placeholder="Username" required /></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="Password" required />
            </td>
        </tr>
        
        <tr>
            <td><input type="submit" name="submit" value="Login" /></td>
        </tr>
    </table>
</form>
<p>Not registered yet? <a href='#'>REQUEST TO ADMIN</a></p>
</center>

</div>
<?php } ?>
</body>
</html>