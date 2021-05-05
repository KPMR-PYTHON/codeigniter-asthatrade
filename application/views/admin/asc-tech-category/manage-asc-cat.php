        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">ACS Category</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> ACS Category
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
                                <i class="fa fa-pencil"></i> ACS Category
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
	<div class="fluid" id="search_view">
		<!-- <label>Select Your Exchange Type</label>
		<select id="filter">
			<option>Select </option>
			<option value="mcx">MCX</option>
			<option value="nse">NSE</option>
			<option value="all">All</option>
		</select> -->
		<div class="" style="float: left;"><a class="dt-button buttons-html5" tabindex="0" href="<?php echo base_url(); ?>Acstech/addAcsCatView"><span>ADD</span></a></div>

		<center>
		<span class="success_msg"></span>
		<?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');} ?>
			
		</center>
		
		<table  class="display nowrap" id="payOutTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <thead>
				<tr>
					<th class="table_head">Sl. No.</th>
					<th class="table_head select-filter">ACS Category</th>
					<th class="table_head">Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
            if($asc_category){
            $i=1;
            foreach($asc_category as $value){
            ?>
            <tr class="del_<?php echo$value->id ?>">
                <td style="padding:5px; text-align:center;"><?php echo $i; ?></td>
                <td style="padding:5px; text-align:center;"><input type="text" value="<?php echo $value->asc_cat_name; ?>" name="asc_cat_name" class="asc_cat_name_<?php echo$value->id ?>"></td>
                <td style="padding:5px; text-align:center;">
	               <button class="edit_item" data-id="<?php echo$value->id ?>">Update</button> 
	               <button class="delete_item" data-id="<?php echo$value->id ?>">Delete</button>
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
					</div> <!-- /fluid -->
				</div> <!-- /widget-content -->
			</div> <!-- /widget -->
		</div>
	</div> <!-- /wrp -->
</div> <!-- /content -->

<script type="text/javascript">
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
<script type="text/javascript">
	$(document).ready(function(){
		$('body .buttons-csv').hide();
		$('body #payOutTable_filter').remove();
		
		//--- Update -----
		$('body .edit_item').on('click', function(){
			var id = $(this).data('id');
			var acs_cat_val = $("body .asc_cat_name_"+id).val();
			$.ajax
            ({
	            url : "<?php echo base_url(); ?>Acstech/editAcscat",
	            type: 'POST',
	            cache: false,
	            data: {
            	id : id,
            	acs_cat_val : acs_cat_val
            	},	
	            success: function(data)
	            {
	            	var obj = JSON.parse(data);
	            	console.log(data);
	            	$('.success_msg').html(obj.msg);
	            }
            });
		});
	// ---- DELETE -------//

	$('body .delete_item').on('click', function(){
		var result = confirm('Are you sure you want to delete this item(?)');
		if(result){
			var id = $(this).data('id');
				$.ajax
            	({
	            url : "<?php echo base_url(); ?>Acstech/deleteAcscat",
	            type: 'POST',
	            cache: false,
	            data: {
            	id : id
            	},	
	            success: function(data)
		            {
		            	var obj = JSON.parse(data);
		            	console.log(data);
		            	if(obj.status == "success"){
		            		$('.success_msg').html(obj.msg);
		            		$("body .del_"+id).remove();
		            	} else{
		            		$('.success_msg').html(obj.msg);
		            	}
		            	
		            }
            	});
			} else{

			}
			
		});


	});
</script>     