        <div id="content" class="clearfix">

            <div class="header">

                <h1 class="page-title">Upload Code Status</h1>


            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Upload Code Status
            </div>

            <div class="wrp clearfix">
                <div class="fluid">

                    <div class="widget grid12">
                        <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Upload Code Status
                            </div>
                        </div> <!-- /widget-header -->

                        <div class="widget-content pad20f">

                            <div class="fluid" id="search_view">
                                <!-- <form  action="<?php echo base_url(); ?>admin/viewAllUserDetails" method="post">                       
                                    <label for="SearchOptions">Search By</label>
                                    <select name="SearchOptions" class="form-control">
                                        <option value="clientCode">Client Code</option>
                                        <option value="email" default>Email Address</option>
                                    </select>
                                    <br>
                                    <label for="key">Value</label>
                                    <input type="text" id="key" class="form-control" name="key" required />
                                    
                                    
                                    <input class="btn btn-blue" type="submit" name="search" id="search" value="Submit"/>
                                </form> -->
                                <table class="display nowrap" id="userListTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                                    <thead>
                                        <tr>
                                            <th class="table_head">Id</th>
                                            <th class="table_head">Job Id</th>
                                            <th class="table_head">Client Code</th>
                                            <th class="table_head">Email Address</th>
                                            <th class="table_head">Status</th>
                                            <th class="table_head">Failure Reason</th>
                                            <th class="table_head">Created At</th>
                                            <th class="table_head">Updated At</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($jobs){
                                            for($i=0;$i<$pageLength;$i++){ ?>
                                                <tr>
                                                    <td style="padding:5px; text-align:center;"><?php echo $i; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $jobs[$i]['id']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $jobs[$i]['client_code'];?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $jobs[$i]['email'];?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $jobs[$i]['status'];?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $jobs[$i]['failure_reason'];?></td>    
                                                    <td style="padding:5px; text-align:center;"><?php echo $jobs[$i]['created_at'];?></td>    
                                                    <td style="padding:5px; text-align:center;"><?php echo $jobs[$i]['updated_at'];?></td>
                                                    
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
