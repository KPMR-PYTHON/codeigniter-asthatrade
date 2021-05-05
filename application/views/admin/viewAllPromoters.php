        <div id="content" class="clearfix">

        	<div class="header">

        		<h1 class="page-title">All Promoters List</h1>


        	</div> <!-- /header -->

        	<div class="breadcrumbs">
        		<i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> All Promoters List 
        	</div>

        	<div class="wrp clearfix">
        		<div class="fluid">

        			<div class="widget grid12">
        				<div class="widget-header">
        					<div class="widget-title">
        						<i class="fa fa-pencil"></i> All Promoters List 
        					</div>
        				</div> <!-- /widget-header -->

        				<div class="widget-content pad20f">

        					<div class="fluid" id="search_view">
        						<table class="display nowrap" id="userListTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
        							<thead>
        								<tr>
        									<th class="table_head">Id</th>
        									<th class="table_head">Full Name</th>
        									<th class="table_head">Email Id</th>
        									<th class="table_head">Referral Code</th>
        								</tr>
        							</thead>
        							<tbody>
        								<?php if ($getUserList){
        									for($i=0;$i<$pageLength;$i++){ ?>
        										<tr>
        											<td style="padding:5px; text-align:center;"><?php echo$getUserList[$i]['id'] ?></td>
        											<td style="padding:5px; text-align:center;"><?php echo $getUserList[$i]['name']; ?></td>
									                <td style="padding:5px; text-align:center;"><?php echo $getUserList[$i]['email_id']; ?></td>
									                <td style="padding:5px; text-align:center;"><?php echo "https://asthatrade.com/?c=".$getUserList[$i]['referral_id']; ?></td>

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
    order: [[0,"desc"]]
	/* columnDefs: [ {
	targets: -1,
	visible: false
}] */

});
</script> 




