<?php include('include/header.php');

?>
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">List Contact</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">List Contact</li>
                        </ol>
                    </div>
                   
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <?php
                                $query = mysqli_query($conn,"select *from tbl_user ");
                                $number=1;
                            ?>
                            <div class="card-body">
                                <h4 class="card-title">List Contact</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Father's Name</th>
                                                <th>Gotra</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Mobile</th>
                                                <th>Area</th>
                                                <th>City</th>
                                                <th>Current Address</th>
                                                <th>Permanent Address</th>
                                                <th>gotra_name</th>
                                                <th>Zip Code</th>
                                                <th>Operation</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Father's Name</th>
                                                <th>Gotra</th>
                                                <th>Age</th>
                                                <th>Gender</th>
                                                <th>Mobile</th>
                                                <th>City</th>
                                                <th>Area</th>                                    
                                                <th>Current Address</th>
                                                <th>Permanent Address</th>
                                                <th>gotra_name</th>
                                                <th>Zip Code</th>
                                                <th>Operation</th>
                                               
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php while ($row=mysqli_fetch_assoc($query)) { ?>
                                            <tr id="<?php echo $row['id'];?>">
                                                <td><?php echo $number; ?></td>
                                                <td data-target="username"><?php echo $row['username'];?></td>        
                                                <td data-target="father_name"><?php echo $row['father_name']; ?></td>
                                                <td data-target="gotra_name"><?php echo $row['gotra_name']; ?></td>
                                                <td data-target="age"><?php echo $row['age']; ?></td>
                                                <td data-target="gender"><?php echo $row['gender']; ?></td>
                                                <td data-target="user_mobile"><?php echo $row['user_mobile']; ?></td>
                                                <td data-target="user_areaname"><?php echo $row['user_areaname']; ?></td>
                                                <td data-target="user_subareaname"><?php echo $row['user_subareaname']; ?></td>
                                                <td data-target="address_current"><?php echo $row['address_current']; ?></td>
                                                <td data-target="address_fix"><?php echo $row['address_fix']; ?></td>
                                                <td data-target="gotra_name"><?php echo $row['gotra_name'];?></td>
                                                <td data-target="zipcode"><?php echo $row['zipcode'];?></td>
                                                 <td>
                                                    <button type="submit" data-role="update" data-id="<?php echo $row['id']?>"  class="btn btn-primary edit_area">Edit</button>
                                                    <button type="submit"  delete_id="<?php echo $row['id']?>"  class="btn btn-danger delete_area">Delete</button>
                                                </td>
                                                
                                            </tr>
                                           <?php $number++; }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                       
                       
                    </div>
                </div>
                <!-- ============================================================== -->
               
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

      <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Edit / Update Area. </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form >
                               
                                <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" class="form-control" name="" id="username" >
                                </div>
                                 <div class="form-group">
                                    <label>Father's Name</label>
                                    <input type="text" class="form-control" name="" id="father_name" >
                                </div>
                                 <div class="form-group">
                                    <label>Gotra Name</label>
                                    <input type="text" class="form-control" name="" id="gotra_name" >
                                </div>
                                 <div class="form-group">
                                    <label>Age</label>
                                    <input type="text" class="form-control" name="" id="age" >
                                </div>
                                 <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" class="form-control" name="" id="gender" >
                                </div>
                                 <div class="form-group">
                                    <label>Contact No</label>
                                    <input type="text" class="form-control" name="" id="user_mobile" >
                                </div>
                                 <div class="form-group">
                                    <label>User Area</label>
                                    <input type="text" class="form-control" name="" id="user_areaname" >
                                </div>
                                 <div class="form-group">
                                    <label>City</label>
                                    <input type="text" class="form-control" name="" id="user_subareaname" >
                                </div>
                                 <div class="form-group">
                                    <label>Current Address</label>
                                    <input type="text" class="form-control" name="" id="address_current" >
                                </div>
                                 <div class="form-group">
                                    <label>Permanent Address</label>
                                    <input type="text" class="form-control" name="" id="address_fix" >
                                </div>
                                 <div class="form-group">
                                    <label>Zip Code</label>
                                    <input type="text" class="form-control" name="" id="zipcode" >
                                </div>
                                
                                    <input type="hidden" id="userId">
                                    
                            
                        </div>
                        <div class="modal-footer">                            
                            <button type="submit" name="" id="save" class="btn btn-primary">Update</button>
                            <button type="submit" name="cancel" class="btn btn-danger" data-dismiss="modal">Close</button>
                           <!--  <input type="hidden" name="" id="hidden_id"> -->
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>
    <?php include('include/footer.php');?>
    <!-- end - This is for export functionality only -->
    <script>
    $(document).ready(function() {
        $('#myTable').DataTable();
        $(document).ready(function() {
            var table = $('#example').DataTable({
                "columnDefs": [{
                    "visible": false,
                    "targets": 2
                }],
                "order": [
                    [2, 'asc']
                ],
                "displayLength": 25,
                "drawCallback": function(settings) {
                    var api = this.api();
                    var rows = api.rows({
                        page: 'current'
                    }).nodes();
                    var last = null;
                    api.column(2, {
                        page: 'current'
                    }).data().each(function(group, i) {
                        if (last !== group) {
                            $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                            last = group;
                        }
                    });
                }
            });
            // Order by the grouping
            $('#example tbody').on('click', 'tr.group', function() {
                var currentOrder = table.order()[0];
                if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                    table.order([2, 'desc']).draw();
                } else {
                    table.order([2, 'asc']).draw();
                }
            });
        });
    });
    $('#example23').DataTable({
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 'pdf', 'print'
        ]
    });
    </script>
    <!-- ============================================================== -->
    <!-- Style switcher -->
    <!-- ============================================================== -->
    <script src="../assets/plugins/styleswitcher/jQuery.style.switcher.js"></script>

<script>
    $(document).ready(function(){
        // alert('ajax');
        $(document).on('click','button[data-role=update]',function(){
            // alert($(this).data('id'));
            // append values in input fields

            var id = $(this).data('id');
            var username = $('#'+id).children('td[data-target=username]').text();
            var father_name = $('#'+id).children('td[data-target=father_name]').text();
            var gotra_name = $('#'+id).children('td[data-target=gotra_name]').text();
            var age = $('#'+id).children('td[data-target=age]').text();
            var gender = $('#'+id).children('td[data-target=gender]').text();
            var user_mobile = $('#'+id).children('td[data-target=user_mobile]').text();
            var user_areaname = $('#'+id).children('td[data-target=user_areaname]').text();
            var user_subareaname = $('#'+id).children('td[data-target=user_subareaname]').text();
            var address_current = $('#'+id).children('td[data-target=address_current]').text();
            var address_fix = $('#'+id).children('td[data-target=address_fix]').text();
            var zipcode = $('#'+id).children('td[data-target=zipcode]').text();

            $('#username').val(username);
            $('#father_name').val(father_name);
            $('#gotra_name').val(gotra_name);
            $('#age').val(age);
            $('#gender').val(gender);
            $('#user_mobile').val(user_mobile);
            $('#user_areaname').val(user_areaname);
            $('#user_subareaname').val(user_subareaname);
            $('#address_current').val(address_current);
            $('#address_fix').val(address_fix);
            $('#zipcode').val(zipcode);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
        });

        // now create event to get data from  fields and updated in database

      $('#save').click(function(){
        var id = $('#userId').val();
        var username = $('#username').val();
        var father_name =$('#father_name').val();
        var gotra_name = $('#gotra_name').val();
        var age =$('#age').val();
        var gender = $('#gender').val();
        var user_mobile = $('#user_mobile').val();
        var user_areaname = $('#user_areaname').val();
        var user_subareaname = $('#user_subareaname').val();
        var address_current = $('#address_current').val();
        var address_fix = $('#address_fix').val();
        var zipcode = $('#zipcode').val();
        
        $.ajax({
            url     :"contact_update.php",
            method  :"POST",
            data    :{
                mgs:'update',
                username:username,
                father_name:father_name,
                gotra_name:gotra_name,
                age:age,
                gender:gender,
                user_mobile:user_mobile,
                user_areaname:user_areaname,
                user_subareaname:user_subareaname,
                address_current:address_current,
                address_fix:address_fix,
                zipcode:zipcode,
                id:id
            },
            success:function(response){
                
                //now update user record in table

                $('#'+id).children('td[data-target=username]').text(username);
                $('#'+id).children('td[data-target=father_name]').text(father_name);
                $('#'+id).children('td[data-target=gotra_name]').text(gotra_name);
                $('#'+id).children('td[data-target=age]').text(age);
                $('#'+id).children('td[data-target=gender]').text(gender);
                $('#'+id).children('td[data-target=user_mobile]').text(user_mobile);
                $('#'+id).children('td[data-target=user_areaname]').text(user_areaname);
                $('#'+id).children('td[data-target=user_subareaname]').text(user_subareaname);
                $('#'+id).children('td[data-target=address_current]').text(address_current);
                $('#'+id).children('td[data-target=address_fix]').text(address_fix);
                $('#'+id).children('td[data-target=zipcode]').text(zipcode);
                $('#myModal').modal('toggle');
            }
        });
      });

        


        //delete record.....

        $(".delete_area").click(function(){
            var delete_id = $(this).attr("delete_id");
            // alert(delete_id);
            var conf = confirm("are you sure");
            if (conf == true) {
                $.ajax({
                    url:"delete_list.php",
                    type:"post",
                    data:{
                         mgs:'delete',
                        delete_id:delete_id
                    },
                    success:function(){
                    // alert("Deleted Record");
                    location.reload(true);
                
            }
                });
            }
            
    });
  });
</script>
