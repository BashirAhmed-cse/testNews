<?php 
 if($_SESSION["user_role"]==0){
    header("Location: http://localhost/testNews/admin/post.php");
   }
include "config.php";
$user_id=$_GET['id'];
$sql="DELETE FROM user WHERE user_id={$user_id}";


if(mysqli_query($conn,$sql)){
    header("Location: http://localhost/testNews/admin/users.php");
}


?>