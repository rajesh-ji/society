<?php 
include('include/header.php');
if (isset($_POST['mgs'])) {
    extract($_POST);
    print_r($_POST);
    $id = $_POST['id'];

    
   $sql = mysqli_query($conn,"UPDATE `ad_page` SET `adname`='$adname',`selectpage`='$selectpage',`status`='$status' WHERE id='$id'");
}
  
?>

