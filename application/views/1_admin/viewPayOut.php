        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">Pay Out Request</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Pay Out Request
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
			 
                <!-- <select id="filter">
					<option value="mcx">MCX</option>
					<option value="nse">NSE</option>
				</select> 
				<button id="Search" onClick="exchange_search();">Search</button> -->
				
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Pay Out Request
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
	<div class="fluid" id="search_view">
		<label>Select Your Exchange Type</label>
		<select id="filter">
			<option>Select </option>
			<option value="mcx">MCX</option>
			<option value="nse">NSE</option>
			<option value="all">All</option>
		</select>
		
		<table  class="display nowrap" id="payOutTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <thead>
				<tr>
					<th class="table_head">Sl. No.</th>
					<th class="table_head select-filter">Exchange</th>
					<th class="table_head">Client Code</th>
					<th class="table_head">Name</th>
					<th class="table_head">Mobile No</th>
					<th class="table_head">Email</th>
					<th class="table_head">Payout Amt</th>
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
                <td style="padding:5px; text-align:center;"><?php echo $callMe->exchange_type; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->client_code; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->name; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->mobile_no; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->email; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe->amt; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo date("d-M-Y H:i", strtotime($callMe->created)); ?></td>
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
		
        <!--<div id="pagination">
        <ul class="tsc_pagination">
		<!-- Show pagination links -->
        <?php /* foreach ($links as $link) {
        echo "<li>". $link."</li>";
        } */ ?>
        <!-- </div> -->
		
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


var table = $('#payOutTable').DataTable( {
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
		title: 'PayOut_List_<?php echo date('dmY');?>',
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
	]
	
	/* columnDefs: [ {
	targets: -1,
	visible: false
	}] */
});

 
 
 $("#filter").change(function(){
       var filterValue = $(this).val();

       if ( filterValue == '0' ){  // Check for show all option
            table.search(filterValue).draw(); 

       } else {
            table.search(filterValue).draw();
       }
    });



/* function exchange_search(){
  var excgVal=$('#filter').val();  
 // alert(excgVal);
     $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>admin/getExchangeFilter",
      data: '&exchval='+excgVal,
       success: function(data) {
			//$('#search_view').html(data);
			$("#payOutTable").DataTable().fnDraw();
			} ,
			 
           
			error: function() {
				$("#response").html("AJAX request failed.");
			}
    }); */
   
  

	 
	  
</script>        
