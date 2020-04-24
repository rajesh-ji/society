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
                        <h3 class="text-themecolor m-b-0 m-t-0">List Advetisement</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">List Advetisement</li>
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
                                $query = mysqli_query($conn,"select *from advertisement ");
                                 $number =1;
                            ?> 
                            <div class="card-body">
                                <h4 class="card-title">List Advetisement</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Type</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Status</th>                                                
                                                <th>Action</th>                                                
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Name</th>
                                                <th>Image</th>
                                                <th>Type</th>
                                                <th>Start Time</th>
                                                <th>End Time</th>
                                                <th>Status</th>                                                
                                                <th>Action</th> 
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php while ($row=mysqli_fetch_assoc($query)) { ?>
                                            <tr id="<?php echo $row['id'];?>">
                                                <td><?php echo $number; ?></td>
                                                <td data-target="adv_name"><?php echo $row['adv_name'];?></td>        
                                                <td data-target="adv_image"><img src="images/<?php echo $row['adv_image'] ?>"  Width="30px" height="30px"></td>
                                                <td data-target="adv_type"><?php echo $row['adv_type']; ?></td>
                                                <td data-target="adv_starttime"><?php echo $row['adv_starttime']; ?></td>
                                                <td data-target="adv_endtime"><?php echo $row['adv_endtime']; ?></td>
                                                <td data-target="status"><?php echo $row['status']; ?></td>
                                                 <td>
                                                    <button type="submit" data-role="adv_update" data-id="<?php echo $row['id']?>"  class="btn btn-primary edit_area">Edit</button>
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
                <!-- End PAge Content -->
                
            </div>
           
            <footer class="footer"> © 2017 Material Pro Admin by wrappixel.com </footer>
           
        </div>
      
    </div>
   
   <!-- modal -->
         <div class="modal fade" id="advModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header bg-primary">
                            <h5 class="modal-title text-white" id="exampleModalLabel">Edit / Update Ad. </h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form enctype="multipart/form-data">
                               
                                <div class="form-group">
                                    <label>Ad Name</label>
                                    <input type="text" class="form-control" name="" id="adv_name" >
                                </div>
                                 <div class="form-group">
                                    <label>Image upload</label>
                                    <input type="file" class="form-control upload_image" name="adv_image" id="adv_image" aria-describedby="fileHelp">
                                </div>
                                 <div class="form-group">
                                    <label>Ad Type</label>
                                    <input type="text" class="form-control" name="" id="adv_type" >
                                </div>
                                <div class="form-group">
                                    <label>Ad Start Time</label>
                                    <input type="date" class="form-control" name="" id="adv_starttime" >
                                </div>
                                <div class="form-group">
                                    <label>Ad End Time</label>
                                    <input type="date" class="form-control" name="" id="adv_endtime" >
                                </div>
                                <div class="form-group">
                                    <label>Ad Status</label>
                                    <input type="text" class="form-control" name="" id="status" >
                                </div>
                                    <input type="hidden" id="userId"  >
                                    
                            
                        </div>
                        <div class="modal-footer">                            
                            <button type="submit" name="" id="save_adv" class="btn btn-primary">Update</button>
                            <button type="submit" name="cancel" class="btn btn-danger" data-dismiss="modal">Close</button>
                           <!--  <input type="hidden" name="" id="hidden_id"> -->
                            </form>
                        </div>
                        </div>
                    </div>
                    </div>

    <?php include('include/footer.php');?>
   <!-- end modal -->
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
            $(document).on('click','button[data-role=adv_update]',function(){
                 // alert($(this).data('id'));
                 //append values in input fields
                var id = $(this).data('id');
                var adv_name = $('#'+id).children('td[data-target=adv_name]').text();
                var adv_image = $('#'+id).children('td[data-target=adv_image]').text();
                var adv_type = $('#'+id).children('td[data-target=adv_type]').text();
                var adv_starttime = $('#'+id).children('td[data-target=adv_starttime]').text();
                var adv_endtime = $('#'+id).children('td[data-target=adv_endtime]').text();
                var status = $('#'+id).children('td[data-target=status]').text();

                $('#adv_name').val(adv_name);
                $('#adv_image').html(adv_image);
                $('#adv_type').val(adv_type);
                $('#adv_starttime').val(adv_starttime);
                $('#adv_endtime').val(adv_endtime);
                $('#status').val(status);
                $('#userId').val(id);
                $('#advModal').modal('toggle');

            })
            // now create event to get data from  fields and updated in database
              $('#save_adv').click(function(){
                var id = $('#userId').val();
                var adv_name = $('#adv_name').val();
                var adv_image =$('#adv_image').val();
                var adv_type = $('#adv_type').val();
                var adv_starttime =$('#adv_starttime').val();
                var adv_endtime =$('#adv_endtime').val();
                var status =$('#status').val();

                    $.ajax({
                        url     :"adv_update.php",
                        method  :"POST",
                        data    :{
                            mgs:'update',
                            adv_name:adv_name,
                            adv_image:adv_image,
                            adv_type:adv_type,
                            adv_starttime:adv_starttime,
                            adv_endtime:adv_endtime,
                            status:status,
                            id:id
                        },
                        success:function(response){
                            
                            //now update user record in table

                            $('#'+id).children('td[data-target=adv_name]').text(adv_name);
                            $('#'+id).children('td[data-target=adv_image]').text(adv_image);
                            $('#'+id).children('td[data-target=adv_type]').text(adv_type);
                            $('#'+id).children('td[data-target=adv_starttime]').text(adv_starttime);
                            $('#'+id).children('td[data-target=adv_endtime]').text(adv_endtime);
                            $('#'+id).children('td[data-target=status]').text(status);
                            $('#advModal').modal('toggle');
                            alert('updated');
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
