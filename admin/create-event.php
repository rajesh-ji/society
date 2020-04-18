<?php include('include/header.php'); 

$queryselect = mysqli_query($conn,"select * from areas");
?>
       
        <div class="page-wrapper">
            <div class="row">
                 <div class="col-md-12">
                        <div class="card card-body">
                            <h3 class="box-title m-b-0">Create Event</h3>
                            <p class="text-muted m-b-30 font-13"></p>
                            <div class="row">
                                <div class="col-sm-12 col-xs-12">
                                    <form action="create-event.php" method="POST" enctype="multipart/form-data">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="name">Name</label>
                                                            <input type="text" name="event_name" class="form-control" placeholder="Enter Event name" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image upload</label>
                                                            <input type="file" class="form-control" name="event_image" id="exampleInputFile" aria-describedby="fileHelp" required="">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="name">Place</label>
                                                            <input type="text" name="event_place" class="form-control" placeholder="Enter Place" required>
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
                                                            <label for="name">Show Area </label>
                                                            <select class="form-control" name="show_area">                                                       
                                                                    <option value="">choose</option>
                                                                    <?php while($row = mysqli_fetch_assoc($queryselect)){ ?>
                                                                    <option value="<?php echo $row['areasname']; ?>"><?php echo $row['areasname']; ?></option>                           
                                                                <?php }?>
                                                            </select>  
                                                        </div>                                                      
                                                        <div class="form-group row">
                                                             <div class="col-md-6">
                                                                <label for="name">Event Start Date</label>
                                                                <input type="date" name="eventstart" class="form-control" placeholder="Enter Area" required>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <label>Event End date</label>
                                                                <input type="date" name="eventend" class="form-control" placeholder="Enter City" required>                 
                                                            </div>
                                                        </div> 
                                                        <div class="form-group">
                                                            <label for="name">Created by</label>
                                                            <input type="text" name="created_by" class="form-control" placeholder="Enter ....." required>
                                                        </div>                                                      
                                                        <div class="form-group">    
                                                            <label for="name">Details</label>
                                                            <textarea rows="2" name="details" class="form-control form-control-line" required></textarea>
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

                                if(isset($_FILES['event_image'])){
                                  $errors= array();
                                  $event_image = $_FILES['event_image']['name'];
                                  $file_size =$_FILES['event_image']['size'];
                                  $file_tmp =$_FILES['event_image']['tmp_name'];
                                  $file_type=$_FILES['event_image']['type'];
                                  $file_ext=strtolower(end(explode('.',$_FILES['event_image']['name'])));
                                  
                                  $extensions= array("jpeg","jpg","png");
                                  
                                  if(in_array($file_ext,$extensions)=== false){
                                     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                                  }
                                  
                                  if($file_size > 2097152){
                                     $errors[]='File size must be excately 2 MB';
                                  }
                                  
                                  if(empty($errors)==true){
                                     move_uploaded_file($file_tmp,"eventimages/".$event_image);
                                     echo "Success";
                                  }else{
                                     print_r($errors);
                                  }
                               }
                               else{
                                   $areas_icon = '';
                               }
                                 // $sql = "INSERT INTO `event`(`event_name`, `event_image`, `event_details`, `event_place`, `event_showarea`, `event_startdate`, `event_enddate`, `status`, `created_by`, `created_at`) VALUES ('$event_name','$event_image','$details','$event_place','$show_area','$eventstart','$eventend','$status','$created_by')";

       $query = "INSERT INTO `event`(`event_name`, `event_image`, `event_details`, `event_place`, `event_showarea`, `event_startdate`, `event_enddate`, `status`, `created_by`) VALUES ('$event_name','$event_image','$details','$event_place','$show_area','$eventstart','$eventend','$status','$created_by')";
        $result = mysqli_query($conn, $query);

         if($result){
                echo "<script>alert('event successfully Added');</script>";
            }else{
               echo "<script>alert('error');</script>";
            }
        
}
?>