        <div id="content" class="clearfix">

        	<div class="header">

        		<h1 class="page-title">All Upi Payments List</h1>


        	</div> <!-- /header -->

        	<div class="breadcrumbs">
        		<i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> All Upi Payments List
        	</div>
            <!-- <div class="wrp clearfix" style="height:250px">
                <div class="fluid">

                    <div class="widget grid12">
                        <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Filter
                            </div>
                        </div> 

                        <div class="widget-content pad20f">
                            <form enctype="multipart/form-data" action="<?Php echo base_url();?>admin/UpiOpeningPayments" method="get">
                                <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                  <tr>
                                    <td>&nbsp;</td>
                                    <td>&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Select Exchange</td>
                                    <td>
                                        <select name="exchange" id="exchange_value" required>
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
                                    <td>
                                        <input type="submit" class="btn-success" name="view" value="View" style=" margin-top:15px;margin-left:0px;width:200px"/>
                                    </td>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div> -->
            <div class="wrp clearfix" style="height:300px">
                <div class="fluid">

                    <div class="widget grid12">
                        <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Search
                            </div>
                        </div> <!-- /widget-header -->

                        <div class="widget-content pad20f">
                            <form  action="<?php echo base_url(); ?>admin/UpiOpeningPayments" method="get">                       
                                    <label for="SearchOptions">Search By</label>
                                    <select name="SearchOptions" class="form-control">
                                        <option value="mobile" selected>Mobile</option>
                                        <option value="id" >User Id</option>
                                    </select>
                                    <br>
                                    <label for="value">Value</label>
                                    <input type="text" id="value" class="form-control" name="value" placeholder="Enter Search Value here" required />
                                    
                                    
                                    <input class="btn btn-blue" type="submit" name="search" id="search" value="Submit"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        	<div class="wrp clearfix">
        		<div class="fluid">

        			<div class="widget grid12">
        				<div class="widget-header">
        					<div class="widget-title">
        						<i class="fa fa-pencil"></i> All Upi Payments List
        					</div>
        				</div> <!-- /widget-header -->

        				<div class="widget-content pad20f">

        					<div class="fluid" id="search_view">
        						<table class="display nowrap" id="userListTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
        							<thead>
        								<tr>
        									<th class="table_head">Id</th>
        									<th class="table_head">User Id</th>
                                            <th class="table_head">Amount</th>
        									<th class="table_head">Transaction Id</th>
        									<th class="table_head">Order Id</th>
                                            <th class="table_head">Status</th>
                                            <th class="table_head">VPA</th>
                                            <th class="table_head">Created At</th>
                                            <!-- <th class="table_head">Refund</th> -->
        								</tr>
        							</thead>
        							<tbody>
        								<?php if ($payments){
        									for($i=0;$i<count($payments);$i++){ ?>
        										<tr>
        											<td style="padding:5px; text-align:center;"><?php echo $payments[$i]['id'] ?></td>
        											<td style="padding:5px; text-align:center;"><?php echo $payments[$i]['user_id']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $payments[$i]['amount'] ?></td>
									                <td style="padding:5px; text-align:center;"><?php echo $payments[$i]['transaction_id']; ?></td>
									                <td style="padding:5px; text-align:center;"><?php echo $payments[$i]['order_id']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $payments[$i]['status']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $payments[$i]['vpa']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $payments[$i]['created_at']; ?></td>
                                                   <!--  <td style="padding:5px; text-align:center;">
                                                        <a href="javascript:void(0)" onclick="refundini('<?php echo $payments[$i]['order_id']; ?>')" class="button"> Refund </a>

                                                    </td> -->
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
        						
        						<?php if(isset($links)){ ?>
                                    <div id="pagination">
                                    <ul class="tsc_pagination">
                                    <?php foreach ($links as $link) {
                                    echo "<li>". $link."</li>";
                                    }   ?>
                                    </ul>
                                </div>     
                                <?php } ?>
							        


        					</div> <!-- /fluid -->








        				</div> <!-- /widget-content -->

        			</div> <!-- /widget -->
        		</div>


        	</div> <!-- /wrp -->

        </div> <!-- /content -->
        <!-- poup-->




<script type="text/javascript">
    function refund(data){
  $.ajax({
      url:'<?php echo base_url(); ?>UpiPayment/refundPayment',
      data:data,
      type:'POST',
      dataType: 'json',
                cache: false,
                async : true,
                success : function(respdata){
                  console.log(respdata);
                },
                error : function(respdata){
                  console.log(respdata);
                  alert('Error occured while checking VPA Id. Please try again.');
                }
              });
}
function refundini(order_id){
  var data = {'order_id':order_id}
  vpaStatus = refund(data);
}

$('#userListTable').DataTable( {
	dom: 'lBfrtip',
    paging: false,
    order: [[0,"desc"]]
});
</script> 




