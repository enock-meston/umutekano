<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Citizens Registration</title>
<link rel="stylesheet" href="css/style.css" /></head>
<body>
<?php
require('db.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['names'])){
        
    $names = stripslashes($_REQUEST['names']);
        
    $names = mysqli_real_escape_string($con,$names); 
    $username = stripslashes($_REQUEST['username']);
    $username = mysqli_real_escape_string($con,$username);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con,$password);
    $idno = stripslashes($_REQUEST['idno']);
    $idno = mysqli_real_escape_string($con,$idno);
    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($con,$phone);
    
    $sector = stripslashes($_REQUEST['sector']);
    $sector = mysqli_real_escape_string($con,$sector);
    $cell = stripslashes($_REQUEST['cell']);
    $cell = mysqli_real_escape_string($con,$cell);
    $village = stripslashes($_REQUEST['village']);
    $village = mysqli_real_escape_string($con,$village);

    $t_date = date("Y-m-d H:i:s");
        
    $query = "INSERT into `citizens`(names,username,password,idno,phone,sector,cell,village,t_date)
VALUES ('$names', '$username','".md5($password)."','$idno','$phone','$sector','$cell','$village', '$t_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>1 Citizen registered!!!</h3>
<br/>Click here to <a href='login.php'>Login</a></div>";
        }
    }else{
?>
<center>
<form name="citizen_reg" action="" method="post">
    <h5>Citizens Registration</h5>
    <table border="0" cellspacing="2"cellpadding="3">
        <tr>
            <td><input type="text" name="names" placeholder="Full Names" required /></td>
        </tr>
        <tr>
            <td><input type="text" name="username" placeholder="Enter Username" required /></td>
        </tr>
        <tr>
            <td><input type="password" name="password" placeholder="Enter Password" required />
            </td>
        </tr>
        <tr>
            <td><input type="text" name="idno" placeholder="Enter ID" required="true" maxlength="16"/></td>
        </tr>
        <tr>
            <td><input type="text" name="phone" placeholder="Phone Number" required="true" maxlength="10" pattern="[0-9]+></td>
        </tr>
        
        <tr>
            <td><input type="text" name="sector" placeholder="Enter Sector" required /></td>
        </tr>
        <tr>
            <td><input type="text" name="cell" placeholder="Enter Cell" required />
            </td>
        </tr>
        <tr>
            <td><input type="text" name="village" placeholder="Enter village" required />
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