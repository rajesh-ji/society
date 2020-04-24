<?php 
include('include/header.php');
if (isset($_POST['mgs'])) {
    extract($_POST);
    print_r($_POST);
    $id = $_POST['id'];
   
   $sql1 = mysqli_query($conn,"UPDATE `advertisement` SET `adv_name`='$adv_name',`adv_image`='$adv_image',`adv_type`='$adv_type',`adv_starttime`='$adv_starttime',`adv_endtime`='$adv_endtime',`status`='$status' WHERE id='$id'");
   if ($sql1) {
       alert('success');
   }else
   {
    alert('error');
   }
      
}
  
?>