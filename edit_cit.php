<?php
include 'db.php';
$c_id=$_GET['id'];
$sql = "select * from citizens where c_id=$c_id";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{

?>
<form method="POST">
<table border="0" cellpadding="2" cellspacing="0"  >             
<tbody>
 <tr>
    <th>Names</th>
    <td><input type="text" name="names" value="<?php  echo $row['names'];?>" ></td>
    </tr>
    <tr>
    <th>ID NO</th>
    <td><input type="text" name="idno" value="<?php  echo $row['idno'];?>" ></td>
  </tr>
  <tr>
    <th>Phone</th>
    <td><input type="text" name="phone" value="<?php  echo $row['phone'];?>" required="true" maxlength="10" pattern="[0-9]+"></td>
    </tr>
    <tr>
    <th>Username</th>
    <td><input type="text" name="username" value="<?php  echo $row['username'];?>" ></td>
  </tr>
  <tr>
    <th>Password</th>
    <td><input type="text" name="password" value="<?php  echo $row['password'];?>" ></td>
    </tr>
    <tr>
    <th>Sector</th>
    <td><input type="text" name="sector" value="<?php  echo $row['sector'];?>" ></td>
    </tr>
    <tr>
    <th>Cell</th>
    <td><input type="text" name="cell" value="<?php  echo $row['cell'];?>" ></td>
    </tr>
    <tr>
    <th>Village</th>
    <td><input type="text" name="village" value="<?php  echo $row['village'];?>" ></td>
  </tr>
  <tr>
    <th></th>
    <td><input type="submit" name="submit" value="Save" ></td>
  </tr>
<?php 
}
?>
                 
</tbody>
</table>
</form>

<?php 
if(isset($_POST['submit']))
  {
  	$c_id=$_GET['id'];
	//Getting Post Values
    $names=$_POST['names'];
    $idno=$_POST['idno'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $sector=$_POST['sector'];
    $cell=$_POST['cell'];
    $village=$_POST['village'];


    //Query for data updation
     $query=mysqli_query($con, "update  citizens set names='$names',idno='$idno', phone='$phone', username='$username', password='$password', sector='$sector', cell='$cell', village='$village' where c_id='$c_id'");
     
    if ($query==1) {
    echo "<script>alert('Citizen Updated!!!');</script>";
    echo "<script > document.location ='citizens_ret.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
      echo "<script > document.location ='citizens_ret.php'; </script>";
    }
}
?>
