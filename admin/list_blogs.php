<?php include('include/header.php'); ?>

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
                        <h3 class="text-themecolor m-b-0 m-t-0">List Area</h3>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                            <li class="breadcrumb-item active">List Area</li>
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
                                $query = mysqli_query($conn,"select *from blog ");
                                $number =1;
                            ?>
                            <div class="card-body">
                                <h4 class="card-title">List Blogs</h4>
                                <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF & Print</h6>
                                <div class="table-responsive m-t-40">
                                    <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Blog Title</th>
                                                <th>Writer</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                               
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>S.No</th>
                                                <th>Blog Title</th>
                                                <th>Writer</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                           <?php while ($row=mysqli_fetch_assoc($query)) { 
                                            ?>
                                            <tr id="<?php echo $row['id'];?>">
                                                <td><?php echo $number; ?></td>
                                                <td data-target="blog_name"><?php echo $row['blog_name'];?></td>
                                                <td data-target="blog_writer"><?php echo $row['blog_writer'];?></td>
                                                <td data-target="created_at"><?php echo $row['created_at'];?></td>
                                                <td data-target="status"><?php echo $row['status'];?></td>
                                                <td>
                                                    <button type="submit" data-role="update" data-id="<?php echo $row['id']?>"  class="btn btn-primary edit_area">Edit</button>
                                                    <button type="submit"  delete_id="<?php echo $row['id']?>"  class="btn btn-danger delete_area">Delete</button>
                                                </td>
                                                <!-- <td><input type="hidden" name="" id="hidden_id"></td> -->
                                            </tr>
                                           <?php $number++; }?>
                                        </tbody>
                                    </table>
                                </div>
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
                            <form enctype="multipart/form-data">
                               
                                <div class="form-group">
                                    <label>Blog Title</label>
                                    <input type="text" class="form-control" name="" id="blog_name" >
                                </div>
                                 <div class="form-group">
                                    <label>Blog Writer</label>
                                    <input type="text" class="form-control" name="" id="blog_writer" >
                                </div>
                                <div class="form-group">
                                    <label>Blog Date</label>
                                    <input type="date" class="form-control" name="" id="created_at" >
                                </div>
                                <div class="form-group">
                                    <label>Status</label>
                                    <!-- <input type="text" class="form-control" placeholder="area status.."> -->
                                    <select class="form-control" id="status" >
                                        <option value="">select</option>
                                        <option value="1">active</option>
                                        <option value="2">inactive</option>
                                    </select>
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
            var blog_name = $('#'+id).children('td[data-target=blog_name]').text();
            var blog_writer = $('#'+id).children('td[data-target=blog_writer]').text();
            var created_at = $('#'+id).children('td[data-target=created_at]').text();
            var status = $('#'+id).children('td[data-target=status]').text();

            $('#blog_name').val(blog_name);
            $('#blog_writer').val(blog_writer);
            $('#created_at').val(created_at);
            $('#status').val(status);
            $('#userId').val(id);
            $('#myModal').modal('toggle');
        });

        // now create event to get data from  fields and updated in database

      $('#save').click(function(){
        var id = $('#userId').val();
        var blog_name = $('#blog_name').val();
        var blog_writer = $('#blog_writer').val();
        var created_at =$('#created_at').val();
        var status =$('#status').val();

        $.ajax({
            url     :"blog_update.php",
            method  :"POST",
            data    :{
                mgs:'update',
                blog_name:blog_name,
                blog_writer:blog_writer,
                created_at:created_at,
                status:status,
                id:id
            },
            success:function(response){
                
                //now update user record in table

                $('#'+id).children('td[data-target=blog_name]').text(blog_name);
                $('#'+id).children('td[data-target=blog_writer]').text(blog_writer);
                $('#'+id).children('td[data-target=created_at]').text(created_at);
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
