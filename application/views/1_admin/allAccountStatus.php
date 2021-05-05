<div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">All Account Status List</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> All Account Status List
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> All Account Status List
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
                        <div class="fluid" id="search_view">
                    <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <tr>
                <td class="table_head">Sl. No.</td>
                <td class="table_head">User Id</td>
                <td class="table_head">Name</td>
                <td class="table_head">PAN Card</td>
		<td class="table_head">KYC Status</td>
		<td class="table_head">IPV Status</td>
		<td class="table_head">Form Status</td>
                <td class="table_head">Equity Reception Date</td>
                <td class="table_head">Commodity Reception Date</td>
                <td class="table_head">IPV</td>
                <td class="table_head">Form Number</td>
            </tr>
            <?php
            if($allAccountStatusList){
            //foreach($getAllUserList as $users){
            //if($users->totCount == 1 ){
			for($i=0;$i<$totAllAccountStatusList;$i++){
				
			?>
			
            <tr>
                <td style="padding:5px; text-align:center;"><?php echo $i+1; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['user_id']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['fname'].' '.$allAccountStatusList[$i]['mname'].' '.$allAccountStatusList[$i]['lname']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['pancard']; ?></td>
                <td style="padding:5px; text-align:center;">
				<?php
				if($allAccountStatusList[$i]['kyc_status']=='1'){
					echo "Completed";
				}
				else if($allAccountStatusList[$i]['kyc_status']=='0'){
					echo "Not Initiated";
				}
				?>
				</td>
                <td style="padding:5px; text-align:center;">
				<?php
				if($allAccountStatusList[$i]['ipv_status']=='2'){
					echo "Completed";
				}
				else if($allAccountStatusList[$i]['ipv_status']=='1'){
					echo "Pending";
				}
				else if($allAccountStatusList[$i]['ipv_status']=='0'){
					echo "Not Initiated";
				}
				?>
				</td>
		<td style="padding:5px; text-align:center;">
				<?php
				if($allAccountStatusList[$i]['form_receive_status']=='1'){
					echo "NSE Received";
				}
				else if($allAccountStatusList[$i]['form_receive_status']=='0'){
					echo "None";
				}
				else if($allAccountStatusList[$i]['form_receive_status']=='2'){
					echo "MCX Received";
				}
				else if($allAccountStatusList[$i]['form_receive_status']=='3'){
					echo "Both Received";
				}
				?>
		</td>
		<td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['equity_receive_date']; ?></td>
		<td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['commodity_receive_date']; ?></td>
        <td style="padding:5px; text-align:center;"><a href="<?php echo $allAccountStatusList[$i]['image']; ?>" 
        target="_blank">View Image</a></td>
		
		<td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['form_number']; ?></td>
            </tr>
            <?php
            	}
            }
            ?>
            
        </table>

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