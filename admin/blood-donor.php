<?php include('include/header.php'); ?>
       
        <div class="page-wrapper">
            <div class="row">
                 <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Blood Donor</h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="blood-donor.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="donor_name" class="form-control" placeholder="Enter name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Blood Group</label>
                                                            <input type="text" name="bloodgroup" class="form-control" placeholder="Enter Blood Group" required>
                                                        </div>
                                                         <div class="form-group">
                                                            <label for="name">Date Birth</label>
                                                            <input type="date" name="donor_dob" class="form-control" placeholder="Enter DOB" required>
                                                        </div>                                                  
                                                        <div class="form-group">
                                                            <label for="name">Area</label>
                                                            <input type="text" name="donor_area" class="form-control" placeholder="Enter Area" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Mobile No.</label>
                                                            <input type="number" name="donor_mobile" class="form-control" placeholder="Enter mobile no" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image upload</label>
                                                            <input type="file" class="form-control" name="donor_image" id="exampleInputFile" aria-describedby="fileHelp" required="">
                                                        </div>
                                                        <div class="form-group">
                                                           <label>Status</label>
                                                                <select class="form-control" name="status">
                                                                    <option value="">select</option>
                                                                    <option value="1">Active</option>
                                                                    <option value="2">Inactive</option>
                                                                </select>  
                                                        </div>     
                                                </div>                                                
                                            </div>
                                            <button name="submit" type="submit" class="btn btn-info text-uppercase">Add</button>
                                        </form>
                                </div>
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

                                if(isset($_FILES['donor_image'])){
                                  $errors= array();
                                  $donor_image = $_FILES['donor_image']['name'];
                                  $file_size =$_FILES['donor_image']['size'];
                                  $file_tmp =$_FILES['donor_image']['tmp_name'];
                                  $file_type=$_FILES['donor_image']['type'];
                                  $file_ext=strtolower(end(explode('.',$_FILES['donor_image']['name'])));
                                  
                                  $extensions= array("jpeg","jpg","png");
                                  
                                  if(in_array($file_ext,$extensions)=== false){
                                     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                                  }
                                  
                                  if($file_size > 2097152){
                                     $errors[]='File size must be excately 2 MB';
                                  }
                                  
                                  if(empty($errors)==true){
                                     move_uploaded_file($file_tmp,"blooddoner/".$donor_image);
                                     echo "Success";
                                  }else{
                                     print_r($errors);
                                  }
                               }
                               else{
                                   $areas_icon = '';
                               }
                                 // $sql = "INSERT INTO `event`(`event_name`, `event_image`, `event_details`, `event_place`, `event_showarea`, `event_startdate`, `event_enddate`, `status`, `created_by`, `created_at`) VALUES ('$event_name','$event_image','$details','$event_place','$show_area','$eventstart','$eventend','$status','$created_by')";

       $query = "INSERT INTO `blood_doner`(`donor_name`, `donor_bloodgroup`, `donor_dob`, `donor_area`, `donor_mobile`, `donor_image`, `status`) VALUES ('$donor_name','$bloodgroup','$donor_dob','$donor_area','$donor_mobile','$donor_image','$status')";
        $result = mysqli_query($conn, $query);

         if($result){
                echo "<script>alert('Blood donor successfully Added');</script>";
            }else{
               echo "<script>alert('error');</script>";
            }
        
}
?>