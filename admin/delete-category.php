<?php
include "config.php";
$category_id=$_GET['id'];

$sql="DELETE FROM category WHERE category_id={$category_id}";

if(mysqli_query($conn,$sql)){
    header("Location: http://localhost/testNews/admin/category.php");
}

?>