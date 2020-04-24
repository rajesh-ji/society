<?php 
include('include/header.php');
if (isset($_POST['mgs'])) {
    extract($_POST);
    print_r($_POST);
    $id = $_POST['id'];

     
   $sql = mysqli_query($conn,"UPDATE `pages` SET `page_name`='$page_name',`page_icon`='$page_icon',`status`='$status',`selectpage`='$selectpage' WHERE id='$id'");
}
  
?>

