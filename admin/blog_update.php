<?php 
include('include/header.php');
if (isset($_POST['mgs'])) {
    extract($_POST);
    print_r($_POST);
    $id = $_POST['id'];

    
   $sql = mysqli_query($conn,"UPDATE `blog` SET `blog_name`='$blog_name',`blog_writer`='$blog_writer',`status`='$status',`created_at`='$created_at' WHERE id='$id'");
}
  
?>

