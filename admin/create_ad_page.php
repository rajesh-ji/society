<?php include('include/header.php'); ?>
       
        <div class="page-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-body">
                            <h4 class="card-title">Create Ad Page</h4>                          
                            <form class="form-horizontal m-t-40" action="create_ad_page.php" method="POST" enctype="multipart/form-data">                                                               
                                <div class="form-group">
                                    <label>Ad Name</label>
                                    <input type="text" class="form-control" name="adname" placeholder="Ad name.." required="">
                                </div>                                
                                <div class="form-group">
                                    <label>Select Page</label>
                                    <!-- <input type="text" class="form-control" placeholder="area status.."> -->
                                    <select class="form-control" name="selectpage" >
                                        <option value="">select</option>
                                        <option value="1">active</option>
                                        <option value="2">inactive</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" class="form-control" name="status" placeholder="Ad status" required="">
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

        $adname =  $_POST['adname'];
        $checking = mysqli_query($conn, "select * from ad_page where adname = '$adname'");
        $countResult = mysqli_num_rows($checking);
         if($countResult>0){
            echo "<script>alert('This Ad page already exists, please try new one');</script>";
        }else{
       

        $query = "INSERT INTO `ad_page`(`adname`, `selectpage`, `status`) VALUES ('$adname','$selectpage','$status')";
        $result = mysqli_query($conn, $query);

         if($result){
                echo "<script>alert('successfully Added');</script>";
            }else{
               echo "<script>alert('error');</script>";
            }
        }
}
?>