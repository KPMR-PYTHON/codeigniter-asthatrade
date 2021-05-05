        <div id="content" class="clearfix">

            <div class="header">

                <h1 class="page-title">Kyc Status</h1>


            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Kyc Status
            </div>

            <div class="wrp clearfix">
                <div class="fluid">

                    <div class="widget grid12">
                        <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Kyc Status
                            </div>
                        </div> <!-- /widget-header -->

                        <div class="widget-content pad20f">

                            <div class="fluid" id="search_view">
                                <form  action="<?php echo base_url(); ?>admin/kyc_status" method="post">                       
                                    <label for="SearchOptions">Search By</label>
                                    <select name="SearchOptions" class="form-control">
                                        <option value="mob" default>Mobile Number</option>
                                        <option value="name">Name</option>
                                        <option value="clientCode">Client Code</option>
                                        <option value="userId">User Id </option>
                                        <option value="email">Email Id </option>
                                        <option value="referredBy">Referred By</option>

                                        
                                    </select>
                                    <br>
                                    <label for="key">Value</label>
                                    <input type="text" id="key" class="form-control" name="key" required />
                                    
                                    
                                    <input class="btn btn-blue" type="submit" name="search" id="search" value="Submit"/>
                                </form>
                                <table class="display nowrap" id="userListTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                                    <thead>
                                        <tr>
                                            <th class="table_head">User Id</th>
                                            <th class="table_head">Full Name</th>
                                            <th class="table_head">PAN</th>
                                            <th class="table_head">Email</th>
                                            <th class="table_head">Mobile No</th>
                                            <th class="table_head">KRA Status</th>
                                            <th class="table_head">CKYC Status</th>
                                            <th class="table_head">Signed Date</th>
                                            <th class="table_head">Form Link</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($allAccountStatusList){
                                            for($i=0;$i<$pageLength;$i++){ ?>
                                                <tr>
                                                    <td style="padding:5px; text-align:center;"><?php echo$allAccountStatusList[$i]['user_id'] ?></td>
                                                    <td style="padding:5px; text-align:center;">
                                                        <font <?php if($allAccountStatusList[$i]['is_offline']){
                                                            echo 'style="color:red"' ;
                                                        }?>

                                                            >
                                                            <?php echo $allAccountStatusList[$i]['fname'].$allAccountStatusList[$i]['mname'].' '.$allAccountStatusList[$i]['lname']; ?>
                                                            
                                                        </font>
                                                        
                                                            
                                                        </td>
                                                        <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['pancard']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['emailaddress']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['ph']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php 
                                                    if ($allAccountStatusList[$i]['p_kra'] == 1 ){
                                                        echo "Yes"; 
                                                    }else{
                                                        echo "No";
                                                    }?>    
                                                    </td>
                                                    <td style="padding:5px; text-align:center;"><?php 
                                                    if ($allAccountStatusList[$i]['p_ckyc'] == 1 ){
                                                        echo "Yes"; 
                                                    }else{
                                                        echo "No";
                                                    }?>    
                                                    </td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['updated_at']; ?></td>
                                                    <td>
                                                        <a href="<?php echo $allAccountStatusList[$i][0]?>" target="_blank">Signed Form</a>
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



<script type="text/javascript">


$('#userListTable').DataTable( {
    
    // "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50, 100,"All"]],
    dom: 'lBfrtip',

   
    paging: false,
    order: [[0,"desc"]]
    /* columnDefs: [ {
    targets: -1,
    visible: false
}] */

});


</script> 




