        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">Referral</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Referral
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Referral
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
                        <div class="fluid" id="search_view">
                    <table class="display nowrap" id="referralListTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
						<thead>
						<tr>
							<th class="table_head">Sl. No.</th>
							<th class="table_head">Client Id</th>
							<th class="table_head">Client Phone Number</th>
							<th class="table_head">Friend Name</th>
							<th class="table_head">Friend Phone Number</th>
							<th class="table_head">Friend Email</th>
							<th class="table_head">Date</th>
						</tr>
						</thead>
						<tbody>
                            <?php
                                if($getReferralList){
                                $i=1;
                                foreach($getReferralList as $users){
                            ?>
						<tr>
							<td style="padding:5px; text-align:center;"><?php echo $i; ?></td>
							<td style="padding:5px; text-align:center;"><?php echo $users->client_id; ?></td>
							<td style="padding:5px; text-align:center;"><?php echo $users->user_ph; ?></td>
							<td style="padding:5px; text-align:center;"><?php echo $users->friend_name; ?></td>
							<td style="padding:5px; text-align:center;"><?php echo $users->friend_ph; ?></td>
							<td style="padding:5px; text-align:center;"><?php echo $users->friend_email; ?></td>
							<td style="padding:5px; text-align:center;"><?php echo  date("d-M-Y H:i", strtotime($users->created)); ?></td>
						</tr>
						<?php
						$i++;
						}
						} else {
						?>
						<tr>
							<td colspan="8" style="padding:5px; text-align:center;">No Data Found</td>
						</tr>
						<?php    
						}
						?>
					</tbody>	
					</table>
					<!-- <div id="pagination">
						<ul class="tsc_pagination">

						<!-- Show pagination links -->
						<?php /* foreach ($links as $link) {
						echo "<li>". $link."</li>";
						} */ ?>
					<!--</div> -->
            </div> <!-- /fluid -->
                        
                        
                  </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

</div> <!-- /content -->


<script>
$('#referralListTable').DataTable( {
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
		title: 'Referral_List_<?php echo date('dmY');?>',
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