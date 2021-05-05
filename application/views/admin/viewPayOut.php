        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">Pay Out Request</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Pay Out Request
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
			 
               <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i>Class File Download
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f ">
                        <form enctype="multipart/form-data" action="<?Php echo base_url();?>admin/payOutFileDownload" method="post">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Select Exchange
    </td><td>  <select name="exchange" id="exchange_value" required>
            <option value="" selected>Please Select Exchange</option>
            <option value="MCX">MCX</option>
            <option value="NSE">NSE</option>
        </select>
    </td>
  </tr>
  <tr>
    <td>Start Date</td>
    <td><input type="text" name="sdate"  id="sdate"  placeholder="yyyy-mm-dd" required/></td>
    <td>End Date</td>
    <td><input type="text" name="edate"  id="edate"  placeholder="yyyy-mm-dd" required/></td> 
  </tr>
  
  <tr>
    
    <td><input type="submit" class="btn-success" value="Submit" style=" margin-top:15px;margin-left:0px;"/></td>
  </tr>
</table>
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
				
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Search PayOut Requests
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
	<div class="fluid" id="search_view">
    <form  action="<?php echo base_url(); ?>admin/viewPayOut" method="post">                       
                                    <label for="SearchOptions">Search By</label>
                                    <select name="SearchOptions" class="form-control">
                                        <option value="mob">Mobile Number</option>
                                        <option value="clientCode" selected>Client Code</option>                                        
                                    </select>
                                    <br>
                                    <label for="key">Value</label>
                                    <input type="text" id="key" class="form-control" name="key" placeholder="Enter Search Value here" required />
                                    
                                    
                                    <input class="btn btn-blue" type="submit" name="search" id="search" value="Submit"/>
                                </form>
		
		<table  class="display nowrap" id="payOutTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <thead>
				<tr>
					<th class="table_head">Sl. No.</th>
					<th class="table_head select-filter">Exchange</th>
					<th class="table_head">Client Code</th>
					<th class="table_head">Mobile No</th>
					<th class="table_head">Payout Amt</th>
					<th class="table_head">Date & Time</th>
					<!-- <th class="table_head">Action</th> -->
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
                <td style="padding:5px; text-align:center;"><?php echo $callMe['exchange_type']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe['client_code']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe['mobile_no']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $callMe['amt']; ?></td>
                <!-- <td style="padding:5px; text-align:center;"><?php //echo date("d-M-Y", strtotime($callMe['created'])); ?></td> -->
				<td style="padding:5px; text-align:center;"> <?php echo  date("d-M-Y H:i:s A", strtotime($callMe['created'])); ?></td>
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

<script>
function change_stat(id){
  var status=$('#stat').val();  
  if (confirm("Are you sure you want to change the status?"))
  {
    $.ajax({
      type: "POST",
      url: "<?php echo base_url(); ?>admin/changeStatusPayOut",
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
	
	dom: 'lBfrtip',

  paging: false,
  order: [[0,"desc"]]
	
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