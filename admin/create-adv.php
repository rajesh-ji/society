<?php include('include/header.php'); ?>
       
        <div class="page-wrapper">
            <div class="row">
                 <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Create Advertisement</h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="create-adv.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="adv_name" class="form-control" placeholder="Enter name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Mobile</label>
                                                            <input type="number" name="adv_mobile" class="form-control" placeholder="Enter mobile" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Type</label>
                                                            <input type="text" name="adv_type" class="form-control" placeholder="Enter Adv. Type" required>
                                                        </div>
                                                        
                                                        <div class="form-group">
                                                            <label for="name">Area</label>
                                                            <input type="text" name="adv_area" class="form-control" placeholder="Enter Area" required>
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
                                                            <label>Image upload</label>
                                                            <input type="file" class="form-control" name="adv_image" id="exampleInputFile" aria-describedby="fileHelp" required="">
                                                        </div> <div class="form-group">
                                                            <label for="name">Url</label>
                                                            <input type="text" name="adv_url" class="form-control" placeholder="Enter URL:" required>
                                                        </div>                                                     
                                                        <div class="form-group row">
                                                             <div class="col-md-6">
                                                                <label for="name">Event Start Date</label>
                                                                <input type="date" name="adv_starttime" class="form-control" placeholder="Enter Area" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Event End date</label>
                                                                <input type="date" name="adv_endtime" class="form-control" placeholder="Enter City" required>                 
                                                            </div>
                                                        </div>                                                       
                                                        <div class="form-group">    
                                                            <label for="name">Position Page</label>
                                                            <textarea rows="5" name="adv_position" class="form-control form-control-line" required></textarea>
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

                                if(isset($_FILES['adv_image'])){
                                  $errors= array();
                                  $adv_image = $_FILES['adv_image']['name'];
                                  $file_size =$_FILES['adv_image']['size'];
                                  $file_tmp =$_FILES['adv_image']['tmp_name'];
                                  $file_type=$_FILES['adv_image']['type'];
                                  $file_ext=strtolower(end(explode('.',$_FILES['adv_image']['name'])));
                                  
                                  $extensions= array("jpeg","jpg","png");
                                  
                                  if(in_array($file_ext,$extensions)=== false){
                                     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                                  }
                                  
                                  if($file_size > 2097152){
                                     $errors[]='File size must be excately 2 MB';
                                  }
                                  
                                  if(empty($errors)==true){
                                     move_uploaded_file($file_tmp,"advimages/".$adv_image);
                                     echo "Success";
                                  }else{
                                     print_r($errors);
                                  }
                               }
                               else{
                                   $areas_icon = '';
                               }
                               // echo $query = "INSERT INTO `advertisement`(`adv_name`, `adv_image`, `adv_mobile`, `adv_type`, `adv_starttime`, `adv_endtime`, `adv_position`, `adv_area`, `adv_url`, `status`) VALUES ('$adv_name','$adv_image','$adv_mobile','$adv_type','$adv_starttime','$adv_endtime','$adv_position','$adv_area','$adv_url','$status')";

       $query = "INSERT INTO `advertisement`(`adv_name`, `adv_image`, `adv_mobile`, `adv_type`, `adv_starttime`, `adv_endtime`, `adv_position`, `adv_area`, `adv_url`, `status`) VALUES ('$adv_name','$adv_image','$adv_mobile','$adv_type','$adv_starttime','$adv_endtime','$adv_position','$adv_area','$adv_url','$status')";
        $result = mysqli_query($conn, $query);

         if($result){
                echo "<script>alert('Adv. successfully Added');</script>";
            }else{
               echo "<script>alert('error');</script>";
            }
        
}
?>