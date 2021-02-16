<?php
include 'db.php';
$l_id=$_GET['id'];
$sql = "select * from leaders where l_id=$l_id";
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_array($result))
{

?>
<form method="POST">
<table border="0" cellpadding="2" cellspacing="0"  >             
<tbody>
<tr>
    <th>ID</th>
    <td><input type="text" name="id" value="<?php  echo $row['l_id'];?>"  readonly></td>
    </tr>
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
    <th>Title</th>
    <td><input type="text" name="title" value="<?php  echo $row['title'];?>" ></td>
    </tr>
    <th>Email</th>
    <td><input type="text" name="email" value="<?php  echo $row['email'];?>" ></td>
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
    <th>Status</th>
    <td><input type="text" name="status" value="<?php  echo $row['status'];?>" ></td>
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
  	$l_id=$_GET['id'];
	//Getting Post Values
    $names=$_POST['names'];
    $idno=$_POST['idno'];
    $phone=$_POST['phone'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $status=$_POST['status'];
    $title=$_POST['title'];
    $email=$_POST['email'];


    //Query for data updation
     $query=mysqli_query($con, "update  leaders set names='$names',idno='$idno', phone='$phone', title='$title', email='$email', username='$username', password='$password', status='$status' where l_id='$l_id'");
     
    if ($query==1) {
    echo "<script>alert('Leader Updated!!!');</script>";
    echo "<script > document.location ='leaders_ret.php'; </script>";
  }
  else
    {
      echo "<script>alert('Something Went Wrong. Please try again');</script>";
      echo "<script > document.location ='leaders_ret.php'; </script>";
    }
}
?>
