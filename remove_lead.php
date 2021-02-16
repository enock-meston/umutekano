<?php
include_once 'db.php';
if($_GET['del'])
{
    $l_id=intval($_GET['del']);
    $st=0;
    $query=mysqli_query($con,"update leaders set status='$st' where l_id='$l_id'");
    if($query)
    {
        echo "<script>alert('Leader Removed!!!');</script>";
        echo "<script > document.location ='leaders_ret.php'; </script>";
    }
    else{
        echo "<script>alert('Leader Not removed!!!');</script>";
        echo "<script > document.location ='leaders_ret.php'; </script>";
    }
}
?>