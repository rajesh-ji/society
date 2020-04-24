<?php include('include/header.php');

?>
        <div class="page-wrapper">
           
            <div class="container-fluid">
                <div class="row">
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            
                            <div class="row">
                            
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">
                                   <?php
                                        // echo   $today_area = "SELECT count(*) as abc FROM areas where DATE(created) = DATE(NOW())";
                                        $today_area = "SELECT count(*) as abc FROM areas where DATE(created) = DATE(NOW())";
                                           $area_count = mysqli_query($conn,$today_area);
                                           $row = mysqli_fetch_assoc($area_count);
                                           $today_area_record = $row['abc'];
                                            echo $today_area_record;

                                           ?>
                                    </h2>
                                    <h6 class="text-muted">Today Area</h6></div>
                            
                                <!-- <div class="col text-right align-self-center">
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-info css-bar-20"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                           
                            <div class="row">
                                
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">
                                    <?php
                                    $qt = mysqli_query($conn,"SELECT count(*) as abc from advertisement");
                                    $row = mysqli_fetch_assoc($qt);
                                    $record = $row['abc'];
                                    echo $record;
                                    ?>
                                    </h2>
                                    <h6 class="text-muted">Total Adv.</h6></div>
                                
                                <!-- <div class="col text-right align-self-center">
                                    <div data-label="30%" class="css-bar m-b-0 css-bar-success css-bar-20"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                     
                            <div class="row">
                     
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">
                                         <?php
                                        // echo   $today_area = "SELECT count(*) as abc FROM areas where DATE(created) = DATE(NOW())";
                                        $today_area = "SELECT count(*) as abc FROM tbl_user where DATE(created) = DATE(NOW())";
                                           $area_count = mysqli_query($conn,$today_area);
                                           $row = mysqli_fetch_assoc($area_count);
                                           $today_area_record = $row['abc'];
                                            echo $today_area_record;

                                           ?>
                                    </h2>
                                    <h6 class="text-muted">Today Contacts</h6></div>
                     
                               <!--  <div class="col text-right ">
                                    <div data-label="40%" class="css-bar m-b-0 css-bar-primary css-bar-40"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                    
                            <div class="row">
                    
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">
                                    <?php
                                    $qt = mysqli_query($conn,"SELECT count(*) as abc from tbl_user");
                                    $row = mysqli_fetch_assoc($qt);
                                    $record = $row['abc'];
                                    echo $record;
                                    ?>
                                    </h2>
                                    <h6 class="text-muted">Total People</h6></div>
                    
                               <!--  <div class="col text-right align-self-center">
                                    <div data-label="60%" class="css-bar m-b-0 css-bar-danger css-bar-60"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                 <div class="row">
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                            
                            <div class="row">
                            
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">
                                         <?php
                                        // echo   $today_area = "SELECT count(*) as abc FROM areas where DATE(created) = DATE(NOW())";
                                        $today_area = "SELECT count(*) as abc FROM event where DATE(created_at) = DATE(NOW())";
                                           $area_count = mysqli_query($conn,$today_area);
                                           $row = mysqli_fetch_assoc($area_count);
                                           $today_area_record = $row['abc'];
                                            echo $today_area_record;

                                           ?>
                                    </h2>
                                    <h6 class="text-muted">Today Events</h6></div>
                            
                               <!--  <div class="col text-right align-self-center">
                                    <div data-label="20%" class="css-bar m-b-0 css-bar-info css-bar-20"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                           
                            <div class="row">
                                
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">
                                    <?php
                                    $qt = mysqli_query($conn,"SELECT count(*) as abc from blood_doner");
                                    $row = mysqli_fetch_assoc($qt);
                                    $record = $row['abc'];
                                    echo $record;
                                    ?>
                                    </h2>
                                    <h6 class="text-muted">Total Blood Dooner</h6></div>
                                
                               <!--  <div class="col text-right align-self-center">
                                    <div data-label="30%" class="css-bar m-b-0 css-bar-success css-bar-20"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                     
                            <div class="row">
                     
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">
                                    <?php
                                    $qt = mysqli_query($conn,"SELECT count(*) as abc from blog");
                                    $row = mysqli_fetch_assoc($qt);
                                    $record = $row['abc'];
                                    echo $record;
                                    ?>
                                    </h2>
                                    <h6 class="text-muted">Today Blogs</h6></div>
                     
                               <!--  <div class="col text-right ">
                                    <div data-label="40%" class="css-bar m-b-0 css-bar-primary css-bar-40"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-md-6 col-lg-3">
                        <div class="card card-body">
                    
                            <div class="row">
                    
                                <div class="col p-r-0 align-self-center">
                                    <h2 class="font-light m-b-0">36870</h2>
                                    <h6 class="text-muted">Total Matrimonial</h6>
                                </div>
                    
                               <!--  <div class="col text-right align-self-center">
                                    <div data-label="60%" class="css-bar m-b-0 css-bar-danger css-bar-60"></div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                     <div class="col-lg-4">
                        <div class="card">
                            <?php 
                                        $q= "select * from tbl_user limit 5";
                                        $q1 = mysqli_query($conn,$q);
                                       ?>
                            <div class="card-body">
                            <button type="button" class="btn btn-success" style="float:right;">View All</button>
                                <h4 class="card-title">Recent Add Contacts</h4>
                                <div class="table-responsive m-t-20">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Name</th>                                             
                                                <th>Date</th>
                                                
                                            </tr>
                                        </thead>
                                       <tbody>
                                            <?php while($row=mysqli_fetch_assoc($q1)){?>
                                           <tr>
                                               <td style="width:50px;"><span class="round"><?php $username = $row['username']; echo substr($username,0,1)?></span></td>
                                               <td>
                                               
                                                <h6><?php echo $row['username'];?></h6></td>       
                                               <td><span class=""><?php  echo date("d M y g:i A", time()); ?></span></td>
                                           </tr>  
                                           <?php } ?> 
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <?php 
                                        $q= "select * from event limit 5";
                                        $q1 = mysqli_query($conn,$q);
                                       ?>
                            <div class="card-body">
                            <button type="button" class="btn btn-success" style="float:right;">View All</button>
                                <h4 class="card-title">Recent Add Event</h4>
                                <div class="table-responsive m-t-20">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Event Name</th>
                                               
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row=mysqli_fetch_assoc($q1)){?>
                                           <tr>
                                               <td style="width:50px;"><span class="round"><?php $event_name = $row['event_name']; echo substr($event_name,0,1)?></span></td>
                                               <td>
                                               
                                                <h6><?php echo $row['event_name'];?></h6></td>       
                                               <td><span class=""><?php  echo date("d M y g:i A", time()); ?></span></td>
                                           </tr>  
                                           <?php } ?> 
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="card">
                         <?php 
                                        $q= "select * from event where `status` = '1' limit 5";
                                        $q1 = mysqli_query($conn,$q);
                                       ?>
                            <div class="card-body">
                            <button type="button" class="btn btn-success" style="float:right;">View All</button>
                                <h4 class="card-title">Recent Coming Event</h4>
                                <div class="table-responsive m-t-20">
                                    <table class="table stylish-table">
                                        <thead>
                                            <tr>
                                                <th colspan="2">Event Name</th>
                                               
                                                <th>Date</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php while($row=mysqli_fetch_assoc($q1)){?>
                                           <tr>
                                               <td style="width:50px;"><span class="round"><?php $event_name = $row['event_name']; echo substr($event_name,0,1)?></span></td>
                                               <td>
                                               
                                                <h6><?php echo $row['event_name'];?></h6></td>       
                                               <td><span class=""><?php  echo date("d M y g:i A", time()); ?></span></td>
                                           </tr>  
                                           <?php } ?> 
                                            
                                           
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- Row -->
                <div class="row">
                    <div class="col-lg-4 col-md-12">
                    </div>
                    <div class="col-lg-4 col-md-12">
                    </div>
                </div>
                
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
            </div>
         </div>
    <?php include('include/footer.php');?>