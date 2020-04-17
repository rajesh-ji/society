<?php include('include/header.php'); ?>
       
        <div class="page-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-body">
                            <h4 class="card-title">Create Area</h4>                          
                            <form class="form-horizontal m-t-40" action="create_area.php" method="POST" enctype="multipart/form-data">                                                               
                                <div class="form-group">
                                    <label>Area Name</label>
                                    <input type="text" class="form-control" name="areasname" placeholder="area name.." required="">
                                </div>
                                 <div class="form-group">
                                    <label>Image upload</label>
                                    <input type="file" class="form-control" name="areas_icon" id="exampleInputFile" aria-describedby="fileHelp" required="">
                                </div>
                                <div class="form-group">
                                    <label>Area Full Details</label>
                                    <textarea class="form-control" name="area_details" rows="5" required=""></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Area Zip</label>
                                    <input type="text" class="form-control" name="areaszip" placeholder="area zip.." required="">
                                </div>
                                <div class="form-group">
                                    <label>Area Status</label>
                                    <!-- <input type="text" class="form-control" placeholder="area status.."> -->
                                    <select class="form-control" >
                                        <option value="0">select</option>
                                        <option value="1">active</option>
                                        <option value="2">inactive</option>
                                    </select>
                                </div>
                                <button type="submit" name ="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <a class="btn btn-inverse waves-effect waves-light" href="index.php">Cancel</a> 
                            </form>
                        </div>
                    </div>
            </div>        
        </div>
                <!-- Row -->
               
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
            </div>
         </div>
     <?php include('include/footer.php');?>

     <?php
        if(isset($_POST['submit'])){
            extract($_POST);
            print_r($_POST);

        $areasname =  $_POST['areasname'];
        $checking = mysqli_query($conn, "select * from areas where areasname = '$areasname'");
        $countResult = mysqli_num_rows($checking);
         if($countResult>0){
            echo "<script>alert('This areasname already exists, please try new one');</script>";
        }else{

                                if(isset($_FILES['areas_icon'])){
                                  $errors= array();
                                  $areas_icon = $_FILES['areas_icon']['name'];
                                  $file_size =$_FILES['areas_icon']['size'];
                                  $file_tmp =$_FILES['areas_icon']['tmp_name'];
                                  $file_type=$_FILES['areas_icon']['type'];
                                  $file_ext=strtolower(end(explode('.',$_FILES['areas_icon']['name'])));
                                  
                                  $extensions= array("jpeg","jpg","png");
                                  
                                  if(in_array($file_ext,$extensions)=== false){
                                     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                                  }
                                  
                                  if($file_size > 2097152){
                                     $errors[]='File size must be excately 2 MB';
                                  }
                                  
                                  if(empty($errors)==true){
                                     move_uploaded_file($file_tmp,"images/".$areas_icon);
                                     echo "Success";
                                  }else{
                                     print_r($errors);
                                  }
                               }
                               else{
                                   $areas_icon = '';
                               }
                               // echo $add_area = mysqli_query($conn, "INSERT INTO `areas`( `areasname`, `areas_icon`, `area_details`, `areas_status`) VALUES (`areasname`,`areas_icon`,`area_details`,`1`)");

       $query = "INSERT INTO `areas`( `areasname`, `areas_icon`, `area_details`,`zipcode`, `areas_status`) VALUES ('$areasname', '$areas_icon', '$area_details','$areaszip','1')";
        $result = mysqli_query($conn, $query);

         if($result){
                echo "<script>alert('successfully Added');</script>";
            }else{
               echo "<script>alert('error');</script>";
            }
        }
}
?>