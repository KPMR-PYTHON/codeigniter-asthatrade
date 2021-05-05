        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">Fund Deposit(NEFT/CHEQ) Request</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Fund Deposit(NEFT/CHEQ) Request 
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Fund Deposit(NEFT/CHEQ) Request
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
                        <div class="fluid" id="search_view">
		<table class="display nowrap" id="neftStatusTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <thead>
				<tr>
					<th class="table_head">Sl. No.</td>
					<th class="table_head">Client Code</th>
					<th class="table_head">Email</th>
					<th class="table_head">Amt</th>
					<th class="table_head">Segment</th>
					<th class="table_head">Type</th>
					<th class="table_head">Neft Ref/Cheq No</th>
					<th class="table_head">Date</th>
					<th class="table_head">Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
            if($viewCallMeBack){
            $i=1;
            foreach($viewCallMeBack as $callMe){
            ?>
            <tr>
                <td style="padding:5px; text-align:center;"><?php echo $i; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->client_code; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->email; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->pay_opt_amt; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->segment; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->fund_transfer_type; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->neft_ref; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo date("d-M-Y", strtotime($callMe->created)); ?></td>
                <td style="padding:5px; text-align:center;">
                <select name="stat" id="stat" onchange="change_stat(<?php echo $callMe->id;?>);">
                    <option value="1" <?php if($callMe->status==1){ ?> selected="selected" <?php } ?> >Not Called</option>
                    <option value="2" <?php if($callMe->status==2){ ?> selected="selected" <?php } ?> >Called</option>
                </select>
                </td>
            </tr>
            <?php
            $i++;
            }
            } else {
            ?>
            <tr>
                <td colspan="9" style="padding:5px; text-align:center;">No Data Found</td>
            </tr>
            <?php    
            }
            ?>
        </tbody>    
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

<script>
function change_stat(id){
  var status=$('#stat').val();  
  if (confirm("Are you sure you want to change the status?"))
  {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>admin/changeStatusViewContactUs",
      data: '&id='+id+'&status='+status,
      success: function(data) {
          //alert(data);
                            if(data==1){
                                window.location.reload();
                                    
                            }
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
    });
  }
  
}

$('#neftStatusTable').DataTable( {
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
		title: 'NEFT or CHEQ Request_List_<?php echo date('dmY');?>',
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