<?php include('include/header.php'); ?>
       
        <div class="page-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-body">
                            <h4 class="card-title">Create Blogs</h4>                          
                            <form class="form-horizontal m-t-40" action="create_blogs.php" method="POST" enctype="multipart/form-data">                                                               
                                <div class="form-group">
                                    <label>Blog Title</label>
                                    <input type="text" class="form-control" name="blog_name" placeholder="blog name.." required="">
                                </div>
                                 <div class="form-group">
                                    <label>Image upload</label>
                                    <input type="file" class="form-control" name="blog_icon" id="exampleInputFile" aria-describedby="fileHelp" required="">
                                </div>
                                <div class="form-group">
                                    <label>Blog link</label>
                                    <input type="text" class="form-control" name="blog_link" placeholder="blog link.." required="">
                                </div>
                                <div class="form-group">
                                    <label>Blog Writer</label>
                                    <input type="text" class="form-control" name="blog_writer" placeholder="blog writer.." required="">
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <!-- <input type="text" class="form-control" placeholder="area status.."> -->
                                    <select class="form-control" name="status" >
                                        <option value="">select</option>
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

        $blog_name =  $_POST['blog_name'];
        $checking = mysqli_query($conn, "select * from areas where blog_name = '$blog_name'");
        $countResult = mysqli_num_rows($checking);
         if($countResult>0){
            echo "<script>alert('This Blogs Title already exists, please try new one');</script>";
        }else{

                                if(isset($_FILES['blog_icon'])){
                                  $errors= array();
                                  $blog_icon = $_FILES['blog_icon']['name'];
                                  $file_size =$_FILES['blog_icon']['size'];
                                  $file_tmp =$_FILES['blog_icon']['tmp_name'];
                                  $file_type=$_FILES['blog_icon']['type'];
                                  $file_ext=strtolower(end(explode('.',$_FILES['blog_icon']['name'])));
                                  
                                  $extensions= array("jpeg","jpg","png");
                                  
                                  if(in_array($file_ext,$extensions)=== false){
                                     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                                  }
                                  
                                  if($file_size > 2097152){
                                     $errors[]='File size must be excately 2 MB';
                                  }
                                  
                                  if(empty($errors)==true){
                                     move_uploaded_file($file_tmp,"images/".$blog_icon);
                                     echo "Success";
                                  }else{
                                     print_r($errors);
                                  }
                               }
                               else{
                                   $blog_icon = '';
                               }
                               // echo $add_area = mysqli_query($conn, "INSERT INTO `areas`( `areasname`, `blog_icon`, `area_details`, `areas_status`) VALUES (`areasname`,`blog_icon`,`area_details`,`1`)");

       $query = "INSERT INTO `blog`(`blog_name`, `blog_icon`, `blog_link`, `blog_writer`, `status`) VALUES ('$blog_name','$blog_icon','$blog_link','$blog_writer','$status')";
        $result = mysqli_query($conn, $query);

         if($result){
                echo "<script>alert('successfully Added');</script>";
            }else{
               echo "<script>alert('error');</script>";
            }
        }
}
?>