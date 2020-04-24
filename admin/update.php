<?php 
include('include/header.php');
if (isset($_POST['mgs'])) {
    extract($_POST);
    print_r($_POST);
    $id = $_POST['id'];

      // if(isset($_FILES['areas_icon'])){
      //                             $errors= array();
      //                             $areas_icon = $_FILES['areas_icon']['name'];
      //                             $file_size =$_FILES['areas_icon']['size'];
      //                             $file_tmp =$_FILES['areas_icon']['tmp_name'];
      //                             $file_type=$_FILES['areas_icon']['type'];
      //                             $file_ext=strtolower(end(explode('.',$_FILES['areas_icon']['name'])));
                                  
      //                             $extensions= array("jpeg","jpg","png");
                                  
      //                             if(in_array($file_ext,$extensions)=== false){
      //                                $errors[]="extension not allowed, please choose a JPEG or PNG file.";
      //                             }
                                  
      //                             if($file_size > 2097152){
      //                                $errors[]='File size must be excately 2 MB';
      //                             }
                                  
      //                             if(empty($errors)==true){
      //                                move_uploaded_file($file_tmp,"images/".$areas_icon);
      //                                echo "Success";
      //                             }else{
      //                                print_r($errors);
      //                             }
      //                          }
      //                          else{
      //                              $areas_icon = '';
      //                          }
   
   $sql = mysqli_query($conn,"UPDATE `areas` SET `areasname`='$areasname',`areas_icon`='$areas_icon',`zipcode`='$zipcode',`area_details`='$area_details' WHERE id='$id'");
}
  
?>

