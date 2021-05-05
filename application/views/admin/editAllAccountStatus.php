<div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">All Account Status List</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> All Account Status List
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> All Account Status List
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
                        <div class="fluid" id="search_view">
                        <center><div id="message"></div></center>
                        <form  action="<?php echo base_url(); ?>admin/editAllAccountStatus" method="post">                       
                        <label for="SearchOptions">Search By</label>
                        <select name="SearchOptions" class="form-control">
                            <option value="name">Name</option>
                            <option value="clientCode">Client Code</option>
                            <option value="userId" selected>User Id </option>
                            <option value="email">Email Id </option>
                            <option value="mob">Mobile Number</option>
                            <option value="referredBy">Referred By</option>

                            
                        </select>
                        <br>
                        <label for="key">Value</label>
                        <input type="text" id="key" class="form-control" name="key" required />
                        
                        
                        <input class="btn btn-blue" type="submit" name="search" id="search" value="Submit"/>
                    </form>
                    <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <tr>
                
                <td class="table_head">User Id</td>
                <td class="table_head">Name</td>
                <td class="table_head">PAN Card</td>
                <td class="table_head">Client Code</td>
		        <td class="table_head">KYC Status</td>
		        <td class="table_head">IPV Status</td>
		        <td class="table_head">Form Status</td>
                <td class="table_head">ESign Status</td>
                <td class="table_head">Form Link</td>
                
				<td class="table_head">Document</td>
                <td class="table_head">Form Number</td>
                <td class="table_head">IPV</td>
                <td class="table_head">Update</td>
                <td class="table_head">BO File</td>
                <td class="table_head">Login</td>
            </tr>
            <?php
            if($allAccountStatusList){
            //foreach($getAllUserList as $users){
            //if($users->totCount == 1 ){
			for($i=0;$i<$totAllAccountStatusList;$i++){
				
			?>
			
            <tr id="<?php echo $allAccountStatusList[$i]['user_id']; ?>">
                
                <td style="padding:5px; text-align:center;" ><?php echo $allAccountStatusList[$i]['user_id']; ?>
                <input type="hidden" name="user_id" id="<?php echo $allAccountStatusList[$i]['user_id']; ?>" value="<?php echo $allAccountStatusList[$i]['user_id']; ?>">
                </td>
                <td style="padding:5px; text-align:center;" ><a href="<?php echo base_url()."admin/viewUserDetails/".$allAccountStatusList[$i]['user_id'] ?>"><?php echo $allAccountStatusList[$i]['fname'].' '.$allAccountStatusList[$i]['mname'].' '.$allAccountStatusList[$i]['lname']; ?></a></td>
                <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['pancard']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['user_code']; ?></td>
                <td style="padding:5px; text-align:center;">
				<select name="kyc_status">
				  <option value="1" <?php if($allAccountStatusList[$i]['kyc_status']=='1'){echo("selected");}?>>Completed</option>
				  <option value="0" <?php if($allAccountStatusList[$i]['kyc_status']=='0'){echo("selected");}?>>Not Initiated</option>
				</select>
				</td>
                <td style="padding:5px; text-align:center;">
				<select name="ipv_status">
				  <option value="2" <?php if($allAccountStatusList[$i]['ipv_status']=='2'){echo("selected");}?>>Completed</option>
				  <option value="1" <?php if($allAccountStatusList[$i]['ipv_status']=='1'){echo("selected");}?>>Pending</option>
				  <option value="0" <?php if($allAccountStatusList[$i]['ipv_status']=='0'){echo("selected");}?>>Not Initiated</option>
				</select>
				</td>
		<td style="padding:5px; text-align:center;">
				<select name="form_receive_status">
				  <option value="3" <?php if($allAccountStatusList[$i]['form_receive_status']=='3'){echo("selected");}?>>Both Received</option>
				  <option value="2" <?php if($allAccountStatusList[$i]['form_receive_status']=='2'){echo("selected");}?>>MCX Received</option>
				  <option value="1" <?php if($allAccountStatusList[$i]['form_receive_status']=='1'){echo("selected");}?>>NSE Received</option>
				  <option value="0" <?php if($allAccountStatusList[$i]['form_receive_status']=='0'){echo("selected");}?>>None Received</option>
				</select>
				</td>
	<!--	<td style="padding:5px; text-align:center;"><label name="disp_eq"><?php echo $allAccountStatusList[$i]['equity_receive_date']; ?></label>
		<input type="hidden" name="equity_receive_date" id="<?php echo $allAccountStatusList[$i]['equity_receive_date']; ?>" value="<?php echo $allAccountStatusList[$i]['equity_receive_date']; ?>">
		</td>
		<td style="padding:5px; text-align:center;"><label name="disp_comm"><?php echo $allAccountStatusList[$i]['commodity_receive_date']; ?>
</label>
		<input type="hidden" name="commodity_receive_date" id="<?php echo $allAccountStatusList[$i]['commodity_receive_date']; ?>" value="<?php echo $allAccountStatusList[$i]['commodity_receive_date']; ?>">
		</td> --> 
		<td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]["3"]; ?></td>
		<td style="padding:5px; text-align:center;"><a href="<?php echo $allAccountStatusList[$i]["0"]; ?>" style="float:right;font-weight:bold;" target="_blank" >(eSigned Form )</a></td>
        

        <td style="padding:5px; text-align:center;"><a href="<?php echo $allAccountStatusList[$i]["1"]; ?>" 
        target="_blank" <?php echo ($allAccountStatusList[$i]['is_doc_uploaded']==1 ? '': 'hidden') ?> >View Document</a></td>
        <td style="padding:5px; text-align:center;"><?php echo $allAccountStatusList[$i]['form_number']; ?></td>
</label>
		<input type="hidden" name="form_number" id="<?php echo $allAccountStatusList[$i]['form_number']; ?>" value="<?php echo $allAccountStatusList[$i]['form_number']; ?>">
		</td>
		<td style="padding:5px; text-align:center;"><a href="<?php echo $allAccountStatusList[$i]['2']; ?>" target="_blank">View Image</a></td>
		
		<td style="padding:5px; text-align:center;"><button onClick="update(<?php echo $allAccountStatusList[$i]['user_id']; ?>)" value ="<?php echo $allAccountStatusList[$i]['user_id']; ?>">Update</button></td>
        <td style="padding:5px; text-align:center;">
            <button type="button" onClick="location.href='<?php echo base_url()."admin/classFileDownloadPerId/".$allAccountStatusList[$i]['user_id']; ?>'" value ="<?php echo $allAccountStatusList[$i]['user_id']; ?>'" <?php if($allAccountStatusList[$i]['form_receive_status']=='0'){echo("hidden");} ?> >Download</button></td>
        <td><a href="<?php echo base_url().'admin/logIntoUser/'.$allAccountStatusList[$i]['user_id']; ?>" target="_blank" >Login</a></td>
            </tr>
            <?php
            	}
            }
            ?>
        
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
function update1(btn){
    //alert();
    $('#user').val(id);    
    $('#type').val(type);
    $('#status').val(status);    
}

function update(id) {
 /* form = document.createElement("form"); // CREATE A NEW FORM TO DUMP ELEMENTS INTO FOR SUBMISSION
  form.method = "post"; // CHOOSE FORM SUBMISSION METHOD, "GET" OR "POST"
  form.action = "<?php echo base_url();?>admin/updateAccStatus"; // TELL THE FORM WHAT PAGE TO SUBMIT TO*/
  var user_id = id;
  //.find('[name*=Qty]')
  var ipv_status = $("#"+id+" td").children('[name=ipv_status]').val();
  var kyc_status = $("#"+id+" td").children('[name=kyc_status]').val();
  var form_receive_status = $("#"+id+" td").children('[name=form_receive_status]').val();
  var equity_receive_date = $("#"+id+" td").children('[name=equity_receive_date]').val();
  var commodity_receive_date = $("#"+id+" td").children('[name=commodity_receive_date]').val();
  var form_number = $("#"+id+" td").children('[name=form_number]').val();
  //alert(ipv_status);
  /*$("#"+id+" td").children().each(function() { // GRAB ALL CHILD ELEMENTS OF <TD>'S IN THE ROW IDENTIFIED BY idRow, CLONE THEM, AND DUMP THEM IN OUR FORM
        if(this.type.substring(0,6) == "select") { // JQUERY DOESN'T CLONE <SELECT> ELEMENTS PROPERLY, SO HANDLE THAT
            input = document.createElement("input"); // CREATE AN ELEMENT TO COPY VALUES TO
            input.type = "hidden";
            input.name = this.name; // GIVE ELEMENT SAME NAME AS THE <SELECT>
            input.value = this.value; // ASSIGN THE VALUE FROM THE <SELECT>
            form.appendChild(input);
        } else { // IF IT'S NOT A SELECT ELEMENT, JUST CLONE IT.
            $(this).clone().appendTo(form);
        }

    });
  form.submit(); // NOW SUBMIT THE FORM THAT WE'VE JUST CREATED AND POPULATED*/
  
  $.ajax({
                url:'<?php echo base_url(); ?>admin/updateAccStatus',
                data:{'user_id':user_id,'ipv_status':ipv_status,'kyc_status':kyc_status,'form_receive_status':form_receive_status,'equity_receive_date':equity_receive_date,'commodity_receive_date':commodity_receive_date,'form_number':form_number},
                type:'POST',
                dataType: 'html',
                //processData: false,
                //contentType: false,
                cache: false,
                async : true,
                success : function(data){
					var data1 = JSON.parse(data);
					$("#"+data1.user_id+" td").children('[name=equity_receive_date]').val(data1.equity_receive_date);
					$("#"+data1.user_id+" td").children('[name=commodity_receive_date]').val(data1.commodity_receive_date);
					$("#"+data1.user_id+" td").children('[name=kyc_status]').val(data1.kyc_status);
					$("#"+data1.user_id+" td").children('[name=ipv_status]').val(data1.ipv_status);
					$("#"+data1.user_id+" td").children('[name=form_receive_status]').val(data1.form_receive_status);
					$("#"+data1.user_id+" td").children('[name=disp_eq]').text(data1.equity_receive_date);
					$("#"+data1.user_id+" td").children('[name=disp_comm]').text(data1.commodity_receive_date);
					$("#"+data1.user_id+" td").children('[name=disp_form]').text(data1.form_number);
					$('#message').text('Updated Sucessfully');
                },
                error : function(data){
                	str = JSON.stringify(data);
                    alert(str);
                    $('#message').text('Update Failed');   
                }
            });
}

</script>     