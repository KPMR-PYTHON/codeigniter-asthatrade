        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">Equity Offline Users</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Equity Offline Users
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Equity Offline Users
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
                        <div class="fluid" id="search_view">
                    <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <tr>
                <td class="table_head">Sl. No.</td>
                <td class="table_head">Full Name</td>
                <td class="table_head">Client Code</td>
                <td class="table_head">Email</td>
                <td class="table_head">Mobile No</td>
                <td class="table_head">Status</td>
                <td class="table_head">Action</td>
            </tr>
            <?php
            if($getEquityOffline){
            $i=1;
            foreach($getEquityOffline as $users){
            ?>
            <tr>
                <td style="padding:5px; text-align:center;"><?php echo $i; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $users->userName; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $users->clientCode; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $users->emailId; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $users->mobileNo; ?></td>
                <td style="padding:5px; text-align:center;">
                <?php
                if($users->status==1){
                    echo 'Active';
                } else if($users->status==2){
                    echo 'Inactive';
                }
                ?>
                </td>
                <td style="padding:5px; text-align:center;">
                
                <a class="button" href="javascript:void(0)" onclick="addCode(<?php echo $users->usdId; ?>,2,<?php echo $users->status; ?>);">Add Code</a>
                <a href="<?php echo base_url(); ?>admin/viewUserDetails/<?php echo $users->usdId ?>">View Details</a>
                </td>
            </tr>
            <?php
            $i++;
            }
            } else {
            ?>
            <tr>
                <td colspan="7" style="padding:5px; text-align:center;">No Data Found</td>
            </tr>
            <?php    
            }
            ?>
            
        </table>
        <div id="pagination">
        <ul class="tsc_pagination">

        <!-- Show pagination links -->
        <?php foreach ($links as $link) {
        echo "<li>". $link."</li>";
        } ?>
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
<script>
function addCode(id,type,status){
    //alert();
    window.location.href='#popup1';
    $('#user').val(id);    
    $('#type').val(type);
    $('#status').val(status);    
}

</script>        