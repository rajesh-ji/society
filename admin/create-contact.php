<?php include('include/header.php'); ?>
       
        <div class="page-wrapper">
            <div class="row">
                 <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Create Contact</h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="create-contact.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="name" class="form-control" placeholder="Enter name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Gotra</label>
                                                            <input type="text" name="gotra" class="form-control" placeholder="Enter Gotra" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Mobile </label>
                                                            <input type="number" name="mobile" class="form-control" placeholder="Enter mobile number...." required>
                                                        </div>
                                                        <div class="form-group">    
                                                            <label for="name">Current Address</label>
                                                            <textarea rows="5" name="address1" class="form-control form-control-line" required></textarea>
                                                        </div>
                                                       <div class="form-group">
                                                                <label>Status</label>
                                                                <select class="form-control" name="status">
                                                                    <option value="">choose</option>
                                                                    <option value="1">Active</option>
                                                                    <option value="2">Inactive</option>
                                                                </select>                      
                                                        </div>
                                                         
                                                </div>
                                                <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="name">Father's Name</label>
                                                            <input type="text" name="fname" class="form-control" placeholder="Enter Father's Name" required>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-md-6">
                                                                <label for="name">Age</label>
                                                                <input type="text" name="age" class="form-control" placeholder="Enter Age" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Gender</label>
                                                                <select class="form-control" name="gender">
                                                                    <option value="">choose</option>
                                                                    <option value="M">Male</option>
                                                                    <option value="F">Female</option>
                                                                </select>                      
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                             <div class="col-md-6">
                                                                <label for="name">Area</label>
                                                                <input type="text" name="area" class="form-control" placeholder="Enter Area" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>City</label>
                                                                <input type="text" name="city" class="form-control" placeholder="Enter City" required>                 
                                                            </div>
                                                        </div>                                                       
                                                        <div class="form-group">    
                                                            <label for="name">Permanent Address</label>
                                                            <textarea rows="5" name="address2" class="form-control form-control-line" required></textarea>
                                                        </div>
                                                        <div class=" form-group">
                                                                <label for="name">Zip Code</label>
                                                                <input type="text" name="zipcode" class="form-control" placeholder="Enter Zip" required>
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
              
       
        $query = "INSERT INTO `tbl_user`(`username`, `father_name`, `gotra_name`, `user_mobile`, `age`, `gender`,`user_areaname`,`user_subareaname`, `zipcode`, `address_current`, `address_fix`, `status`) VALUES ('$name','$fname','$gotra','$mobile','$age','$gender','$area','$city','$zipcode','$address1','$address2','$status')";
        $result = mysqli_query($conn, $query);

         if($result){
                echo "<script>alert('Contact Successfully Created!');</script>";
            }else{
               echo "<script>alert('error!');</script>";
            }
        }
?>