
					        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">Search User</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Search User
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Search User
                            </div>
                        </div> <!-- /widget-header -->
                    
                   <span style="color: red;margin-left: 2%;"><?php echo $this->session->flashdata('newPromoter'); ?></span>
                    <div class="widget-content pad20f">
                        					<form  action="<?php echo base_url(); ?>admin/search" method="post">                       
						<label for="SearchOptions">Search By</label>
						<select name="SearchOptions" class="form-control">
							<option value="name">Name</option>
                            <option value="clientCode">Client Code</option>
							<option value="userId">User Id </option>
							<option value="email">Email Id </option>
							<option value="mob">Mobile Number</option>
                            <option value="referredBy">Referred By</option>

                            
						</select>
						<br>
						<label for="key">Value</label>
						<input type="text" id="key" class="form-control" name="key" required />
						
						
						<input class="btn btn-blue" type="submit" name="search" id="search" value="Submit"/>
					</form>

					<table class="display nowrap" id="userListTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
        							<thead>
        								<tr>
        									<th class="table_head">Form No.</th>
        									<th class="table_head">Full Name</th>
        									<th class="table_head">Client Code</th>
                                            <th class="table_head">Referral Code</th>
        									<th class="table_head">Remarks</th>
                                            <th class="table_head">Email</th>
                                            <th class="table_head">Mobile No</th>
                                            <th class="table_head">Payment Status</th>
                                            <th class="table_head">Date</th>
                                             <th class="table_head">KYC</th>
                                            <th class="table_head">Action</th>
                                            <th class="table_head">Login</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($getUserList){
                                            for($i=0;$i<$pageLength;$i++){ ?>
                                                <tr>
                                                    <td style="padding:5px; text-align:center;"><?php echo$getUserList[$i]['id'] ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $getUserList[$i]['fname'].$getUserList[$i]['mname'].' '.$getUserList[$i]['lname']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $getUserList[$i]['user_code']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $getUserList[$i]['referred_by']; ?></td>
                                                    <td style="padding:5px; text-align:center;" id="Remarks<?php echo$getUserList[$i]['id'] ?>"contenteditable = "true" ><?php echo $getUserList[$i]['remarks']; ?></td>
                                                    <script> 
                                                    $("#Remarks<?php echo$getUserList[$i]['id'] ?>").blur(function(){
                                                        // alert(document.getElementById("Remarks<?php echo$getUserList[$i]['id'] ?>").innerHTML);
                                                        $.ajax({
                                                            url: "<?php echo base_url();?>admin/updateRemarks",
                                                            type: 'post',
                                                            data: {user_id: <?php echo$getUserList[$i]['id'] ?>, remarks: document.getElementById("Remarks<?php echo$getUserList[$i]['id'] ?>").innerHTML} ,
                                                            dataType:"JSON",
                                                            success: function(rsp){
                                                            alert(rsp);
                                                            }
                                                        })
                                                    })
                                                    </script>
									                <td style="padding:5px; text-align:center;"><?php echo $getUserList[$i]['emailaddress']; ?></td>
									                <td style="padding:5px; text-align:center;"><?php echo $getUserList[$i]['ph']; ?></td>
									                <td style="padding:5px; text-align:center;">
													<?php
                                                    if(sizeof($getUserList[$i]["0"])>0){
    													for($j=0;$j<2;$j++){
        													if($getUserList[$i]["0"][$j]['payment_status']==0 && $j==0){
        														echo "NSE Not Paid ";
        														echo "<br/>";
        													}
        													else if($getUserList[$i]["0"][$j]['payment_status']==1 && $j==0){
        														echo "NSE Paid ";
        														echo "<br/>";
        													}
        													else if($getUserList[$i]["0"][$j]['payment_status']==1 && $j==1){
        														echo "MCX Paid ";
        														echo "<br/>";
        													}
        													else if($getUserList[$i]["0"][$j]['payment_status']==0 && $j==1){
        														echo "MCX Not Paid ";
        														echo "<br/>";
        													}
    													}
                                                    }
                                                    else{
                                                        echo "Registraion<br/>Incomplete"; 
                                                    }
                                                    
													?></td>
													<td style="padding:5px; text-align:center;">
									                <?php 
									                if(isset($getUserList[$i]['created_at'])){
									                echo date("d-M-Y h:i a", strtotime($getUserList[$i]['created_at'])+19800); 
									                }
									                else{ echo "";}
									                ?>
									                </td>
                                  <td><a href="javascript:void(0)" onclick="sendsms(<?php echo $getUserList[$i]['id']; ?>)" class="button">Send SMS</a> | <a href="javascript:void(0)" onclick="sendmail(<?php echo $getUserList[$i]['id']; ?>)" class="button">Send Mail</a> </td>
									                <td style="padding:5px; text-align:center;">
									                <a class="button" href="javascript:void(0)" onclick="addCode(<?php echo $getUserList[$i]['id']; ?>,1,<?php echo $getUserList[$i]['status']; ?>);">Add Code</a>
									                &nbsp;|&nbsp;
													<a href="<?php echo base_url(); ?>admin/viewUserDetails/<?php echo$getUserList[$i]['id'] ?>">View Details </a>
									                </td>
                                                    <td><a href="<?php echo base_url().'admin/logIntoUser/'.$getUserList[$i]['id']; ?>" target="_blank" >Login</a></td>
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
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->

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

function sendsms(user_id){

    		$.ajax({
            type: "GET",
            //cache: false,
            url: "<?php echo base_url(); ?>admin/sendsms/"+user_id,
            dataType:"html",
            data:{user_id:user_id},

            //data:dataValue,
            success: function(data) {
				
                                alert('SMS sent successfully');
                                
                               
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
          
          
      });


}

function sendmail(user_id){

    		$.ajax({
            type: "GET",
            //cache: false,
            url: "<?php echo base_url(); ?>admin/sendemail/"+user_id,
            dataType:"html",
            data:{user_id:user_id},

            //data:dataValue,
            success: function(data) {
				
                                alert('Email sent successfully');
                                
                               
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
          
          
      });


}

 </script>    

        