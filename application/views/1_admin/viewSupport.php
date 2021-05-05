        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">View Support</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> View Support </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> View Support
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
                        
                        <input type="text" placeholder="Email Id" name="email_id_search" id="email_id_search" value="">
                        <input type="text" placeholder="Ticket Id" name="ticket_id_search" id="ticket_id_search" value="">
                        
                        <input class="btn" type="button" name="fileSubmit" value="SEARCH" onclick="view_search();"/>
                        
                        
                            
                            
                            
                            <!--<button class="btn btn-blue" type="submit"  name="fileSubmit">Upload</button>-->
                            
                         
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
		<br/>	
	<div class="fluid" id="search_view">
		<table class="display nowrap" id="supportTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <thead>
				<tr>
					<th class="table_head">Sl. No.</th>
					<th class="table_head">Ticket No.</th>
					<th class="table_head">Ticket Type</th>
					<th class="table_head">Subject</th>
					<th class="table_head">Date</th>
					<th class="table_head">Status</th>
					<th class="table_head">View</th>
				</tr>
			</thead>
			
			<tbody>
				<?php
				$i=1;
				if(!empty($getTicket)){
				foreach($getTicket as $txt){
				?>
				<tr>
					<td style="padding:5px; text-align:center;"><?php echo $i; ?></td>
					<td style="padding:5px; text-align:center;"><?php echo $txt->issue_id; ?></td>
					<td style="padding:5px; text-align:center;"><?php echo $txt->issue_category; ?></td>
					<td style="padding:5px; text-align:center;"><?php echo $txt->issue_subject; ?></td>
					<td style="padding:5px; text-align:center;"><?php echo  date("d-M-Y", strtotime($txt->issue_created_date)); ?></td>
					<td style="padding:5px; text-align:center;">
					<?php
					if($txt->issue_status_id==1){
						echo "New";    
					} else if($txt->issue_status_id==2){
						echo "Open";
					} else if($txt->issue_status_id==3){
						echo "Pending";
					} else if($txt->issue_status_id==4){
						echo "Closed";
					} else if($txt->issue_status_id==5){
						echo "Cancelled";
					}
					?>
					</td>
					<td style="padding:5px; text-align:center;"><a href="<?php echo base_url(); ?>admin/viewStatus/<?php echo $txt->issue_id; ?>">View</a></td>
				</tr>
				<?php
				$i++;
				}
				}
				?>
			</tbody>    
        </table>
	</div> <!-- /fluid -->
            
			<!--<div id="pagination">
				<ul class="tsc_pagination">
				<!-- Show pagination links -->
				<?php /* foreach ($links as $link) {
				echo "<li>". $link."</li>";
				} */ ?>
			<!--</div>-->
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->

<script>
function view_search(){
    //alert('ok');
    var email_id_search = $('#email_id_search').val();
    var ticket_id_search = $('#ticket_id_search').val();
    $.ajax({
            url:'searchTicket',
            data:{'email_id_search':email_id_search,'ticket_id_search':ticket_id_search},
            type:'POST',
            //dataType:'JSON',
            success : function(data){
                $('#search_view').html(data);
            },
            error : function(data){
                alert('Error Occured');
            }
        });
}

$('#supportTable').DataTable( {
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
		title: 'Support_List_<?php echo date('dmY');?>',
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