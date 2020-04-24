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
                        <h3 class="text-themecolor m-b-0 m-t-0">List Blood donor</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">List Blood donor</li>
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
                                $query = mysqli_query($conn,"select *from blood_doner ");
                                $number=1;
                            ?>
                            <div class="card-body">
                                <h4 class="card-title">List Blood donor</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Blood Group</th>
                                                <th>Area</th>
                                                <th>Mobile</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Blood Group</th>
                                                <th>Area</th>
                                                <th>Mobile</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>  
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php while ($row=mysqli_fetch_assoc($query)) { ?>
                                            <tr id="<?php echo $row['id'];?>">
                                                <td><?php echo $number; ?></td>
                                                <td data-target="donor_name"><?php echo $row['donor_name'];?></td>
                                                <td data-target="donor_bloodgroup"><?php echo $row['donor_bloodgroup']; ?></td>
                                                <td data-target="donor_area"><?php echo $row['donor_area']; ?></td>
                                                <td data-target="donor_mobile"><?php echo $row['donor_mobile']; ?></td>
                                                <td data-target="status"><?php echo $row['status']; ?></td>
                                                 <td>
                                                    <button type="submit" data-role="update" data-id="<?php echo $row['id']?>"  class="btn btn-primary edit_area">Edit</button>
                                                    <button type="submit"  delete_id="<?php echo $row['id']?>"  class="btn btn-danger delete_area">Delete</button>
                                                </td>
                                                <!-- <td class="text-nowrap">
                                                    <a href="#" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                                    <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                                                </td>  -->                                                                                     
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
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
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
                            <form enctype="multipart/form-data">
                               
                                <div class="form-group">
                                    <label>Donor Name</label>
                                    <input type="text" class="form-control" name="" id="donor_name" >
                                </div>
                                 <div class="form-group">
                                    <label>Donor Blood Group</label>
                                    <input type="text" class="form-control" name="" id="donor_bloodgroup" >
                                </div>
                                <div class="form-group">
                                    <label>Donor Area</label>
                                    <input type="text" class="form-control" name="" id="donor_area" >
                                </div>
                                <div class="form-group">
                                    <label>Donor Mobile</label>
                                    <input type="text" class="form-control" name="" id="donor_mobile" >
                                </div>
                                <div class="form-group">
                                    <label>Donor Status</label>
                                    <input type="text" class="form-control" name="" id="status" >
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
            var donor_name = $('#'+id).children('td[data-target=donor_name]').text();
            var donor_bloodgroup = $('#'+id).children('td[data-target=donor_bloodgroup]').text();
            var donor_area = $('#'+id).children('td[data-target=donor_area]').text();
            var donor_mobile = $('#'+id).children('td[data-target=donor_mobile]').text();
            var status = $('#'+id).children('td[data-target=status]').text();

            $('#donor_name').val(donor_name);
            $('#donor_bloodgroup').val(donor_bloodgroup);
            $('#donor_area').val(donor_area);
            $('#donor_mobile').val(donor_mobile);
            $('#status').val(status);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
        });

        // now create event to get data from  fields and updated in database

      $('#save').click(function(){
        var id = $('#userId').val();
        var donor_name = $('#donor_name').val();
        var donor_bloodgroup =$('#donor_bloodgroup').val();
        var donor_area = $('#donor_area').val();
        var donor_mobile =$('#donor_mobile').val();
        var status =$('#status').val();

        $.ajax({
            url     :"donor_update.php",
            method  :"POST",
            data    :{
                mgs:'update',
                donor_name:donor_name,
                donor_bloodgroup:donor_bloodgroup,
                donor_area:donor_area,
                donor_mobile:donor_mobile,
                status:status,
                id:id
            },
            success:function(response){
                
                //now update user record in table

                $('#'+id).children('td[data-target=donor_name]').text(donor_name);
                $('#'+id).children('td[data-target=donor_bloodgroup]').text(donor_bloodgroup);
                $('#'+id).children('td[data-target=donor_area]').text(donor_area);
                $('#'+id).children('td[data-target=donor_mobile]').text(donor_mobile);
                $('#'+id).children('td[data-target=status]').text(status);
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
