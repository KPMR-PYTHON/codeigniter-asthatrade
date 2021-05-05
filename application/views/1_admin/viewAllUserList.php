        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">All User List</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> All User List
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> All User List
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
                        <div class="fluid" id="search_view">
						
			
		  
          <table class="display nowrap" id="userListTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">

			<thead>
				<tr>
					<th class="table_head">Sl. No.</th>
					<th class="table_head">Full Name</th>
					<th class="table_head">Client Code</th>
					<th class="table_head">Email</th>
					<th class="table_head">Mobile No</th>
					<th class="table_head">Account Type</th>
					<th class="table_head">Payment Type</th>
					<th class="table_head">Payment Status</th>
					<th class="table_head">Account Status</th>
					<th class="table_head">Date</th>
					<th class="table_head">Action</th>
				</tr>
            </thead>
			
			<tbody>
            <?php
            if($getAllUserList){
            $k=1;
            //foreach($getAllUserList as $users){
            //if($users->totCount == 1 ){
			for($i=0;$i<$totGetAllUserList;$i++){
				
			?>
			
            <tr>
                <td style="padding:5px; text-align:center;"><?php echo $k; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $getAllUserList[$i]->fname.' '.$getAllUserList[$i]->mname.' '.$getAllUserList[$i]->lname; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $getAllUserList[$i]->user_code; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $getAllUserList[$i]->emailaddress; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $getPhNo[$i]['ph']; ?></td>
                <td style="padding:5px; text-align:center;">
				<?php
				
				for($j=0;$j<$totAccountPayDetails[$i];$j++){
				if($getAccountPayDetails[$i][$j]['account_type']==1){
					echo "Equity, ";
				}
				else if($getAccountPayDetails[$i][$j]['account_type']==2){
					echo "Commodity ";
				}
				else if($getAccountPayDetails[$i][$j]['account_type']==3){
					echo "Both ";
				}
				}
				?>
				</td>
                <td style="padding:5px; text-align:center;">
				<?php
				for($j=0;$j<$totAccountPayDetails[$i];$j++){
				if($getAccountPayDetails[$i][$j]['payment_type']==1){
					echo "Online, ";
				}
				else if($getAccountPayDetails[$i][$j]['payment_type']==2){
					echo "Offline ";
				}
				
				}
				?>
				</td>
				<td style="padding:5px; text-align:center;">
				<?php
				for($j=0;$j<$totAccountPayDetails[$i];$j++){
				if($getAccountPayDetails[$i][$j]['payment_status']==0){
					echo "Not Paid ";
					echo "<br/>";
				}
				else if($getAccountPayDetails[$i][$j]['payment_status']==1){
					echo "Paid ";
					echo "<br/>";
				}
				
				}
				?></td>
				<td style="padding:5px; text-align:center;">
                <?php
                if($getAllUserList[$i]->status==1){
                    echo 'Active';
                } else if($getAllUserList[$i]->status==0){
                    echo 'Inactive';
                }
                ?>
                </td>
                
                <td style="padding:5px; text-align:center;">
                <?php 
                if(isset($getAllUserList[$i]->created_at)){
                echo date("d-M-Y", strtotime($getAllUserList[$i]->created_at)); 
                }
                else{ echo "";}
                ?>
                </td>
                
                <td style="padding:5px; text-align:center;">
                <a class="button" href="javascript:void(0)" onclick="addCode(<?php echo $getAllUserList[$i]->id; ?>,1,<?php echo $getAllUserList[$i]->status; ?>);">Add Code</a>
                &nbsp;|&nbsp;
				<a href="<?php echo base_url(); ?>admin/viewUserDetails/<?php echo$getAllUserList[$i]->id ?>">View Details</a>
                </td>
            </tr>
            <?php
           $k++;
            }
            }
			//}
			else {
            ?>
            <tr>
                <td colspan="8" style="padding:5px; text-align:center;">No Data Found</td>
            </tr>
            <?php    
            }
            ?>
           </tbody> 
        </table>
		
      <!--   <div id="pagination">
        <ul class="tsc_pagination">

        <!-- Show pagination links -->
        <?php /* foreach ($links as $link) {
        echo "<li>". $link."</li>";
        }  */ ?>
        <!-- </div> -->
		
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
	"lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50, 100,"All"]],
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
	/* columnDefs: [ {
	targets: -1,
	visible: false
	}] */
	
});
</script> 




