        <style>
       table {border-collapse:collapse; table-layout:fixed; width:310px;}
       table td {border:solid 1px #fab; width:150px; white-space: normal;}
       table th {border:solid 1px #fab; width:150px; word-wrap:normal;}
       </style>
        <div id="content" class="clearfix">

            <div class="header">

                <h1 class="page-title">Bank Updations</h1>


            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Bank Updations 
            </div>

            <div class="wrp clearfix">
                <div class="fluid">

                    <div class="widget grid12">
                        <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Bank Updations 
                            </div>
                        </div> <!-- /widget-header -->

                        <div class="widget-content pad20f">

                            <div class="fluid" id="search_view">
                                <table class="display" id="userListTable" cellpadding="0" cellspacing="0" width="310px" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                                    <thead>
                                        <tr>
                                            <th class="table_head">Id</th>
                                            <th class="table_head">User Id</th>
                                            <th class="table_head">Client Code</th>
                                            <th class="table_head">Account Number </th>
                                            <th class="table_head">Account Holder </th>
                                            <th class="table_head">IFSC Code</th>
                                            <th class="table_head">Bank Name</th>
                                            <th class="table_head">Bank Address</th>
                                            <th class="table_head">MICR</th>
                                            <th class="table_head">Existing Account Number </th>
                                            <th class="table_head">Existing IFSC </th>
                                            <th class="table_head">Created At </th>
                                            <th class="table_head">Confirm</th>
                                            <th class="table_head">Reject</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($allAccountUpdations){
                                            for($i=0;$i<$pageLength;$i++){ ?>
                                                <tr>
                                                    <td style="padding:5px; text-align:center;"><?php echo$allAccountUpdations[$i]['id'
                                                    ] ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo$allAccountUpdations[$i]['user_id'] ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountUpdations[$i]['user_code']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountUpdations[$i]['acc_number']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountUpdations[$i]['holder_name']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountUpdations[$i]['ifsccode']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountUpdations[$i]['bankname']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountUpdations[$i]['bankaddress']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountUpdations[$i]['micr_no']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountUpdations[$i]['existing_acc_number']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountUpdations[$i]['existing_ifsccode']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo date('Y-m-d H:i',strtotime($allAccountUpdations[$i]['created_on'])); ?></td>
                                                    <td style="padding:5px; text-align:center;">
                                                        <button onClick="update(<?php echo $allAccountUpdations[$i]['id']; ?>,'<?php echo $allAccountUpdations[$i]['next_step']; ?>')" value ="<?php echo $allAccountUpdations[$i]['id']; ?>"><?php echo $allAccountUpdations[$i]['next_step']; ?> Done</button>
                                                    </td>
                                                    <td style="padding:5px; text-align:center;">
                                                        <?php if ($allAccountUpdations[$i]['next_step'] =='Kyc'){?>
                                                        <button onClick="reject(<?php echo $allAccountUpdations[$i]['id']; ?>)" value ="<?php echo $allAccountUpdations[$i]['id']; ?>">Reject</button>
                                                    <?php } ?>
                                                    </td>

                                                </tr>
                                            <?php } 
                                        } 
                                        else{?>
                                        <tr>
                                            <td colspan="8" style="padding:5px; text-align:center;">No Data Found</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
                                <div id="pagination">
                                    <ul class="tsc_pagination">
                                    <?php foreach ($links as $link) {
                                    echo "<li>". $link."</li>";
                                    }   ?>
                                    </ul>
                                </div>
                                    


                            </div> <!-- /fluid -->








                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->
                </div>


            </div> <!-- /wrp -->

        </div> <!-- /content -->
        <!-- poup-->

        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <form action="<?php echo base_url(); ?>admin/addCodeModal" method="post">
                        <p>Please enter your client code</p>
                        <input type="text" placeholder="Client Code" name="client_code" id="client_code" />
                        <input type="hidden" name="user" id="user">
                        <input type="hidden" name="type" id="type">
                        <select name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">In Active</option>
                        </select>
                        <input type="submit" placeholder=""  value="Submit" />
                    </form>
                </div>
            </div>
        </div>




<script type="text/javascript">
    function addCode(id,type,status){
    //alert();
    window.location.href='#popup1';
    $('#user').val(id);    
    $('#type').val(type);
    $('#status').val(status);    
}

$('#userListTable').DataTable( {
    language: {
        "search": "",
        searchPlaceholder: "Type to Search Here...."
    },
    // "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50, 100,"All"]],
    dom: 'lBfrtip',

    buttons: [
    {
        text:'Export as Csv',
        extend: 'csv',
        title: 'All_User_<?php echo date('dmY');?>',
        //exportOptions: {columns: ':visible'}
        exportOptions: { 
            modifier: { search: 'applied' },
            rows: { selected: true },
            columns: ':visible',
            rows: ':visible',
            modifier: {selected: true},
            
        }
    },
    {
        text:'Column Visibility',
        extend: 'colvis',
    }
    ],
    paging: false,
    order: [[0,"desc"]],
    autoWidth: false
    /* columnDefs: [ {
    targets: -1,
    visible: false
}] */

});

function update(id,step) {
    var Confirm = prompt("Enter password : ", "your password");
   if (Confirm=='!@#456'){
    $.ajax({
        type: "POST",
        url:'<?php echo base_url(); ?>admin/updateBankModStatus',
        data:{id: id,status:1,step: step},
        dataType: "JSON",
        success: function(data){
            location.reload();
        },
        error: function(e){
            alert('Update Failed');
        }
    })
   }   
}
function reject(id) {
    var Confirm = prompt("Enter password : ", "your password");
   if (Confirm=='!@#456'){
    $.ajax({
        type: "POST",
        url:'<?php echo base_url(); ?>admin/updateBankModStatus',
        data:{id: id,status:2},
        dataType: "JSON",
        success: function(data){
            location.reload();
        },
        error: function(e){
            alert('Update Failed');   
        }
    })
   }

    
}
</script> 




