<?php 
include('include/header.php');
if (isset($_POST['mgs'])) {
    extract($_POST);
    print_r($_POST);
    $id = $_POST['id'];

     
   $sql = mysqli_query($conn,"UPDATE `tbl_user` SET `username`='$username',`father_name`='$father_name',`gotra_name`='$gotra_name',`user_mobile`='$user_mobile',`age`='$age',`gender`='$gender',`user_areaname`='$user_areaname',`user_subareaname`='$user_subareaname',`zipcode`='$zipcode',`address_current`='$address_current',`address_fix`='$address_fix' WHERE id='$id'");
}
  
?>

