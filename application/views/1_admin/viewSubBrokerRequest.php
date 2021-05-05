        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">Sub-Broker Request</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Sub-Broker Request
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Sub-Broker Request
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
                        <div class="fluid" id="search_view">
                    <table class="display nowrap" id="subBrokerReqTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
						<thead>
							<tr>
								<th class="table_head">Sl. No.</th>
								<th class="table_head">Sub Broker Name</th>
								<th class="table_head">Email</th>
								<th class="table_head">Phone No</th>
								<th class="table_head">City</th>
								<th class="table_head">Message</th>
								<th class="table_head">Date of Request</th>
							</tr>
						</thead>
						
						<tbody>	
							<?php
							if($getSubbrokerRequest){
							$i=1;
							//print_r($getSubbrokerRequest);
							/* echo "<pre>";
							print_r($getSubbrokerRequest);
							echo "</pre>";
							exit("Sub Broker Request"); */
								foreach($getSubbrokerRequest as $subBrokerReq){
							?>
							<tr>
								<td style="padding:5px; text-align:center;"><?php echo $i; ?></td>
								<td style="padding:5px; text-align:center;"><?php echo $subBrokerReq->subbroker_name; ?></td>
								<td style="padding:5px; text-align:center;"><?php echo $subBrokerReq->email; ?></td>
								<td style="padding:5px; text-align:center;"><?php echo $subBrokerReq->phone; ?></td>
								<td style="padding:5px; text-align:center;"><?php echo $subBrokerReq->city; ?></td>
								<td style="padding:5px; text-align:center;"><?php echo $subBrokerReq->msg; ?></td>
								<td style="padding:5px; text-align:center;"><?php echo $ref_date = date("d-M-Y", strtotime($subBrokerReq->created)); ?></td>
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
					
					<!--<div id="pagination">
						<ul class="tsc_pagination">
						<!-- Show pagination links -->
						<?php /* foreach ($links as $link) {
						echo "<li>". $link."</li>";
						}  */?>
					<!--</div>-->
					
            </div> <!-- /fluid -->
                        
                        
                  </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

</div> <!-- /content -->

<script>
$('#subBrokerReqTable').DataTable( {
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
		title: 'SubBroker_List_<?php echo date('dmY');?>',
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