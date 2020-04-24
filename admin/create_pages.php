<?php include('include/header.php'); ?>
       
        <div class="page-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-body">
                            <h4 class="card-title">Create Pages</h4>                          
                            <form class="form-horizontal m-t-40" action="create_pages.php" method="POST" enctype="multipart/form-data">                                                               
                                <div class="form-group">
                                    <label>Page Name</label>
                                    <input type="text" class="form-control" name="page_name" placeholder="page name.." required="">
                                </div>
                                 <div class="form-group">
                                    <label>Image upload</label>
                                    <input type="file" class="form-control" name="page_icon" id="exampleInputFile" aria-describedby="fileHelp" required="">
                                </div>                        
                                <div class="form-group">
                                    <label>Area Status</label>
                                    <!-- <input type="text" class="form-control" placeholder="area status.."> -->
                                    <select class="form-control" name="status" >
                                        <option value="">select</option>
                                        <option value="1">active</option>
                                        <option value="2">inactive</option>
                                    </select>
                                </div>
                                <div class="form-group">                                  
                                   <input type="checkbox" id="parentpage" name="" value="yes">
                                    <label for="parentpage">select parent page</label>                     
                                    <select class="form-control" id="selectpage" name="selectpage" >
                                        <option>(choose one)</option>
                                        <option value="margaritha">margaritha</option>
                                        <option value="hawai">hawai</option>
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
<!-- select with checkbox -->
     <script>
          var parentselect = function () {
            if ($("#parentpage").is(":checked")) {
                $('#selectpage').prop('disabled', false);
            }
            else {
                $('#selectpage').prop('disabled', 'disabled');
            }
        };

        $(parentselect);
        $("#parentpage").change(parentselect);
     </script>
<!-- end select with checkbox -->
     <?php
        if(isset($_POST['submit'])){
            extract($_POST);
            print_r($_POST);

        $page_name =  $_POST['page_name'];
        $checking = mysqli_query($conn, "select * from pages where page_name = '$page_name'");
        $countResult = mysqli_num_rows($checking);
         if($countResult>0){
            echo "<script>alert('This Page name already exists, please try new one');</script>";
        }else{

                                if(isset($_FILES['page_icon'])){
                                  $errors= array();
                                  $page_icon = $_FILES['page_icon']['name'];
                                  $file_size =$_FILES['page_icon']['size'];
                                  $file_tmp =$_FILES['page_icon']['tmp_name'];
                                  $file_type=$_FILES['page_icon']['type'];
                                  $file_ext=strtolower(end(explode('.',$_FILES['page_icon']['name'])));
                                  
                                  $extensions= array("jpeg","jpg","png");
                                  
                                  if(in_array($file_ext,$extensions)=== false){
                                     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                                  }
                                  
                                  if($file_size > 2097152){
                                     $errors[]='File size must be excately 2 MB';
                                  }
                                  
                                  if(empty($errors)==true){
                                     move_uploaded_file($file_tmp,"images/".$page_icon);
                                     echo "Success";
                                  }else{
                                     print_r($errors);
                                  }
                               }
                               else{
                                   $page_icon = '';
                               }
                               // echo $add_area = mysqli_query($conn, "INSERT INTO `areas`( `page_name`, `page_icon`, `area_details`, `areas_status`) VALUES (`page_name`,`page_icon`,`area_details`,`1`)");

       $query = "INSERT INTO `pages`(`page_name`, `page_icon`, `status`, `selectpage`) VALUES ('$page_name','$page_icon','$status','$selectpage')";
        $result = mysqli_query($conn, $query);

         if($result){
                echo "<script>alert('successfully Added');</script>";
            }else{
               echo "<script>alert('error');</script>";
            }
        }
}
?>