      <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">View User Details</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i>View User Details
			</div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> View User Details
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f">
                        
                        <div class="fluid" id="search_view">
                         <h2 style="font-size: 16px;color: #666;text-align: left;font-weight: 100;margin: 20px 0 20px 0;">Account Details </h2>
                    <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            
            <tr>
                <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Account Type :</td>
                <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Proofs :</td>
                <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Payment Status :</td>
            </tr>
            
            
            <tr>
                <td style="padding:4px 10px;font-size:12px;">
                <?php 
         
                      log_message("info",json_encode($getAccountPayDetails));
                    if($getAccountPayDetails){
                        $nse = $getAccountPayDetails[0]['account_type'];
                        $mcx = $getAccountPayDetails[1]['account_type'];
                        $payStatNse = $getAccountPayDetails[0]['payment_status'];
                        $payStatMcx = $getAccountPayDetails[1]['payment_status'];
                        $netPaid = $payStatNse+$payStatMcx;
                        if($netPaid==1){
                            if($nse && $payStatNse=='1'){
                                $accType = 'Equity';
                                $checkedSeg = 'NSE';
                                $acc_type = '1';
                            }
                            else if($mcx && $payStatMcx=='1'){
                                $accType = 'Commodity';
                                $checkedSeg = 'MCX';
                                $acc_type = '2';
                            }
                        }else if($netPaid==2){
                            $accType = 'Equity & Commodity';
                            $acc_type = '3';
                        }
                        
                        
                    }
                ?>
                <?php
                
                if(isset($getAccountPayDetails[0]))
                {
                    /********************** For Equity Account Type ********************************/
                    if($getAccountPayDetails[0]['account_type']=='1'){
                        echo "Equity";  
                       /******************** For Equity Pdf Download *********************************/
                        if($getAccountPayDetails[0]['payment_type']=='1' && $getAccountPayDetails[0]['payment_status']=='1'){ 
							if($accountPdf != ''){ ?>
								<a  target="_blank" href="<?php echo $accountPdf; ?>" style="float:right;font-weight:bold;">( Download eSigned Pdf )</a> 
							<?php }else if($accountPdf1 != ''){ ?>
								<a  target="_blank" href="<?php echo $accountPdf1; ?>" style="float:right;font-weight:bold;">( Download eSigned Pdf )</a>
							<?php } else { ?>
								<a href="<?php echo base_url();?>account/saveDownload/<?php echo $getAllDetails['uid']; ?>/1" style="float:right;font-weight:bold;">( Download Pdf )</a>
							<?php } ?>
                        <?php  
                        } 
                    } 
                    else 
                    {
                        /********************** For Commodity Account Type ********************************/
                        echo "Commodity";
                        /******************** For Commodity Pdf Download *********************************/
                        if($getAccountPayDetails[0]['payment_type']=='1' && $getAccountPayDetails[0]['payment_status']=='1'){ 
						if($accountPdf != ''){ ?>
								<a  target="_blank" href="<?php echo $accountPdf; ?>" style="float:right;font-weight:bold;">( Download eSigned Pdf )</a>
							<?php }else if($accountPdf2 != '' ){ ?>
								<a  target="_blank" href="<?php echo $accountPdf1; ?>" style="float:right;font-weight:bold;">( Download eSigned Pdf )</a>
							<?php } else { ?>
								<a href="<?php echo base_url();?>account/saveDownload/<?php echo $getAllDetails['uid']; ?>/2" style="float:right;font-weight:bold;">( Download Pdf )</a>
							<?php } ?>	
                        <?php  
                        } 
                    }
                }
                else{
                echo "No record found in database.";
                } 
                ?>
                </td>
				
				
                <td style="padding:4px 10px;font-size:12px;"><a href="<?php echo $nse_proofs_link?>" style="float:right;font-weight:bold;" target="_blank" >( Download Proofs Pdf )</a></td>

              <!--  
			  <td style="padding:4px 10px;font-size:12px;">
			  <?php
                if(isset($getAccountPayDetails[0]))
                {
                if($getAccountPayDetails[0]['payment_type']=='1'){
                    echo "Online";    
                } else if($getAccountPayDetails[0]['payment_type']=='2'){
                    echo "Offline";
                } 
                }else{
                echo "No record found in database.";
                } 
                ?>
                </td>  -->
                <td style="padding:4px 10px;font-size:12px;">
                <?php
                
                if(isset($getAccountPayDetails[0]))
                {
                if($getAccountPayDetails[0]['payment_type']=='2'){ // 2 for offline
                //echo $getAllDetails['uid'];    
                    ?>
                        <select name="offPayStat1" id="offPayStat1" onchange="change_stat_acc1(<?php echo $getAllDetails['uid']; ?>);">
                            <option value="0" <?php if($getAccountPayDetails[0]['payment_status']=='0'){?>selected="selected"<?php } ?> >Not Paid</option>
                            <option value="1" <?php if($getAccountPayDetails[0]['payment_status']=='1'){?>selected="selected"<?php } ?>>Paid</option>
                        </select>
                        <script type="application/javascript" >
                            function change_stat_acc1(id){
                            var status=$('#offPayStat1').val();
                            <?php
                            if($getAccountPayDetails[0]['account_type']=='1'){
                            ?>    
                            var acc_type='1';   
                            <?php
                            } else if($getAccountPayDetails[0]['account_type']=='2'){
                            ?>    
                            var acc_type='2'; 
                            <?php
                            }
                            ?>
                            if (confirm("Are you sure you want to change the payment status?"))
                              {
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url(); ?>admin/changePaymentStatus",
                                    data: '&user_id='+id+'&pay_status='+status+'&acc_type='+acc_type,
                                
                                    success: function(data) {
                                    if(data==1){ window.location.reload();}
                                                           },
                                    error: function() { $("#response").html("AJAX request failed."); }
                                                    
                                });
                              }
                             }
                        </script>  
                    <?php
                    
                    
                    
                }    
                
                else{//for online ?> 
                    <select name="offPayStat_acc" id="offPayStat_acc2" onchange="change_stat_acc2(<?php echo $getAllDetails['uid'];?>);">
                            <option value="0" <?php if($getAccountPayDetails[0]['payment_status']=='0'){?>selected="selected"<?php } ?> >Not Paid</option>
                            <option value="1" <?php if($getAccountPayDetails[0]['payment_status']=='1'){?>selected="selected"<?php } ?>>Paid</option>
                        </select>
                        <script type="application/javascript" >
                            function change_stat_acc2(id){
                            var status=$('#offPayStat_acc2').val();
                            //alert(status);
                            <?php
                            if($getAccountPayDetails[0]['account_type']=='1'){
                            ?>    
                            var acc_type='1';   
                            <?php
                            } else if($getAccountPayDetails[0]['account_type']=='2'){
                            ?>    
                            var acc_type='2'; 
                            <?php
                            }
                            ?>
                            if (confirm("Are you sure you want to change the payment status?"))
                              {
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url(); ?>admin/changePaymentStatus",
                                    data: '&user_id='+id+'&pay_status='+status+'&acc_type='+acc_type,
                                
                                    success: function(data) {
                                    if(data==1){ window.location.reload();}
                                                           },
                                    error: function() { $("#response").html("AJAX request failed."); }
                                                    
                                });
                              }
                             }
                        </script>
                    
                <?php    } }?>
                </td>
            </tr>
            
            <?php if($totCountOfAccountPay > 1){?>
            <tr>
                <td style="padding:4px 10px;font-size:12px;">
                
                <?php
                
                if($getAccountPayDetails[1]['account_type']=='1'){
                    echo "Equity";
                    if($getAccountPayDetails[1]['payment_type']=='1' && $getAccountPayDetails[1]['payment_status']=='1'){ 
						if($accountPdf2 != ''){ ?>
							<a target="_blank" href="<?php echo $accountPdf2; ?>" style="float:right;font-weight:bold;">( Download eSigned Pdf )</a>
						<?php }else{ ?>
						<a href="<?php echo base_url();?>account/saveDownload/<?php echo $getAllDetails['uid']; ?>/1" style="float:right;font-weight:bold;">( Download Pdf )</a> 
						<?php }
						
						}     
					} else if($getAccountPayDetails[1]['account_type']=='2'){
                    echo "Commodity";
					 
                     if($getAccountPayDetails[1]['payment_type']=='1' && $getAccountPayDetails[1]['payment_status']=='1'){ 
						//$accountPdf2=0;
						if($accountPdf2 != ''){ ?>
							<a  target="_blank" href="<?php echo $accountPdf2; ?>" style="float:right;font-weight:bold;">( Download eSigned Pdf )</a>
						<?php }else{ ?>
						<a href="<?php echo base_url();?>account/saveDownload/<?php echo $getAllDetails['uid']; ?>/2" style="float:right;font-weight:bold;">( Download Pdf )</a> 
						<?php }
						} 
                } 
                ?>
                </td>
                <td style="padding:4px 10px;font-size:12px;">
                <?php
                if($getAccountPayDetails[1]['payment_type']=='1'){
                    echo "Online";    
                } else if($getAccountPayDetails[1]['payment_type']=='2'){
                    echo "Offline";
                } 
                ?>
                </td>
                <td style="padding:4px 10px;font-size:12px;">
                <?php
                if($getAccountPayDetails[1]['payment_type']=='2'){ // 2 for offline
                    
                    ?>
                        <select name="offPayStat_acc" id="offPayStat_acc3" onchange="change_stat_acc3(<?php echo $getAllDetails['uid'];?>);">
                            <option value="0" <?php if($getAccountPayDetails[1]['payment_status']=='0'){?>selected="selected"<?php } ?> >Not Paid</option>
                            <option value="1" <?php if($getAccountPayDetails[1]['payment_status']=='1'){?>selected="selected"<?php } ?>>Paid</option>
                        </select>
                        <script type="application/javascript" >
                            function change_stat_acc3(id){
                            var status=$('#offPayStat_acc3').val();
                            //alert(status);
                            <?php
                            if($getAccountPayDetails[1]['account_type']=='1'){
                            ?>    
                            var acc_type='1';   
                            <?php
                            } else if($getAccountPayDetails[1]['account_type']=='2'){
                            ?>    
                            var acc_type='2'; 
                            <?php
                            }
                            ?>
                            if (confirm("Are you sure you want to change the payment status?"))
                              {
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url(); ?>admin/changePaymentStatus",
                                    data: '&user_id='+id+'&pay_status='+status+'&acc_type='+acc_type,
                                
                                    success: function(data) {
                                    if(data==1){ window.location.reload();}
                                                           },
                                    error: function() { $("#response").html("AJAX request failed."); }
                                                    
                                });
                              }
                             }
                        </script>
                    <?php
                    
                    
                }    
                else{ // for online ?>
                    <select name="offPayStat_acc" id="offPayStat_acc4" onchange="change_stat_acc4(<?php echo $getAllDetails['uid'];?>);">
                            <option value="0" <?php if($getAccountPayDetails[1]['payment_status']=='0'){?>selected="selected"<?php } ?> >Not Paid</option>
                            <option value="1" <?php if($getAccountPayDetails[1]['payment_status']=='1'){?>selected="selected"<?php } ?>>Paid</option>
                        </select>
                        <script type="application/javascript" >
                            function change_stat_acc4(id){
                            var status=$('#offPayStat_acc4').val();
                            //alert(status);
                            <?php
                            if($getAccountPayDetails[1]['account_type']=='1'){
                            ?>    
                            var acc_type='1';   
                            <?php
                            } else if($getAccountPayDetails[1]['account_type']=='2'){
                            ?>    
                            var acc_type='2'; 
                            <?php
                            }
                            ?>
                            if (confirm("Are you sure you want to change the payment status?"))
                              {
                                $.ajax({
                                    type: "POST",
                                    url: "<?php echo base_url(); ?>admin/changePaymentStatus",
                                    data: '&user_id='+id+'&pay_status='+status+'&acc_type='+acc_type,
                                
                                    success: function(data) {
                                    if(data==1){ window.location.reload();}
                                                           },
                                    error: function() { $("#response").html("AJAX request failed."); }
                                                    
                                });
                              }
                             }
                        </script>
                    
                <?php } ?>
                </td>
            </tr>
            <?php } ?>
            
            </table>
			
            <h2 style="font-size: 16px;color: #666;text-align: left;font-weight: 100;margin: 20px 0 20px 0;">Send ESign Form </h2>
            <table cellpadding="0" cellspacing="0" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <!-- <tr>
                <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;width:200px;">Signeasy :</td>
                <td style="padding:4px 10px;font-size:12px;width:180px;"><a href="#" onClick="sendSigneasy('<?php echo $id; ?>','<?php echo $getAllDetails['emailAddress']?>', '<?php echo $getAllDetails['fname']; ?>', '<?php echo $acc_type; ?>')"> Send Now </a></td>
            </tr>
            <tr>
                <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;width:200px;">Leegality :</td>
                <td style="padding:4px 10px;font-size:12px;width:180px;"><a href="#" onClick="sendLeegality('<?php echo $id; ?>','<?php echo $getAllDetails['emailAddress']?>', '<?php echo $getAllDetails['fname']; ?>', '<?php echo $acc_type; ?>')"> Send Now</td>
            </tr> -->
            <tr>
                <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;width:200px;">Required Docs :</td>
                <td style="padding:4px 10px;font-size:12px;width:180px;"><a href="#" onClick="emergencyDocs('<?php echo $id; ?>','<?php echo $getAllDetails['emailAddress']?>', '<?php echo $getAllDetails['fname']; ?>', '<?php echo $acc_type; ?>', '<?php echo $getAllDetails['user_code']; ?>', '<?php echo $getPhMob['ph'];?>')"> Whatsapp Sms</td>
            </tr>
            <tr>
                                <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;width:200px;">Trading Software Details:</td>
                <td style="padding:4px 10px;font-size:12px;width:180px;"><a href="#" onClick="tradingSoftware('<?php echo $id; ?>','<?php echo $getAllDetails['emailAddress']?>', '<?php echo $getAllDetails['fname']; ?>', '<?php echo $acc_type; ?>', '<?php echo $getAllDetails['user_code']; ?>')"> Send Mail</td>
            </tr>
            <tr>
                <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;width:200px;">How to update contact & bank:</td>
                <td style="padding:4px 10px;font-size:12px;width:180px;"><a href="#" onClick="acBankUpdate('<?php echo $id; ?>','<?php echo $getAllDetails['emailAddress']?>', '<?php echo $getAllDetails['fname']; ?>', '<?php echo $acc_type; ?>', '<?php echo $getAllDetails['user_code']; ?>')"> Send Mail</td>
            </tr>
            </table>

			<h2 style="font-size: 16px;color: #666;text-align: left;font-weight: 100;margin: 20px 0 20px 0;">Unique Code </h2>
			<table cellpadding="0" cellspacing="0" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
			<tr>
				<td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;width:200px;">Client Code :</td>
				<td style="padding:4px 10px;font-size:12px;width:180px;"><?php echo $getAllDetails['user_code']; ?></td>
			</tr>
			</table>
			
            <h2 style="font-size: 16px;color: #666;text-align: left;font-weight: 100;margin: 20px 0 20px 0;">Identity Details </h2>
            <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                <tr>
                    <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;">First Name :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['fname']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Middle Name :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['mname']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Last Name :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['lname']; ?></td>
                </tr>
                <tr>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Father/Spouse's Name :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['ffname'].' '.$getAllDetails['fmname'].' '.$getAllDetails['flname']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Mother's Name :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['mfname'].' '.$getAllDetails['mmname'].' '.$getAllDetails['mlname']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Gender :</td>
                    <td style="padding:4px 10px;font-size:12px;">
                    <?php
                    if($getAllDetails['gender']=='1'){
                        echo "Male";    
                    } else if($getAllDetails['payType']=='2'){
                        echo "Female";
                    } else if($getAllDetails['payType']=='3'){
                        echo "Others";
                    }
                    ?>
                    </td>
                </tr>
                <tr>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Marital Status :</td>
                    <td style="padding:4px 10px;font-size:12px;">
                    <?php
                    if($getAllDetails['marital_status']=='0'){
                        echo "Unmarried";    
                    } else if($getAllDetails['marital_status']=='1'){
                        echo "Married";
                    } else if($getAllDetails['marital_status']=='3'){
                        echo "Divorced";
                    }
                    ?>
                    </td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Status :</td>
                    <td style="padding:4px 10px;font-size:12px;">
                    <?php
                    if($getAllDetails['userResidentialstatus']=='0'){
                        echo "Resident Individual";    
                    } else if($getAllDetails['userResidentialstatus']=='1'){
                        echo "Non Resident";
                    } else if($getAllDetails['userResidentialstatus']=='3'){
                        echo "Foreign Resident";
                    }
                    ?>
                    </td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Nationality :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['nationality']; ?></td>
                </tr>
                <tr>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Date of Birth :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['dob']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">PAN Card Number :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['pancard']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">UID / Aadhaar Card :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['addharcard']; ?></td>
                </tr>
            
            </table>
            
        <h2 style="font-size: 16px;color: #666;text-align: left;font-weight: 100;margin: 20px 0 20px 0;">Correspondence Address</h2>
        
        <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                <tr>
                    <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;">Address :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPresent['ad1']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">City / Town / Village :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPresent['ad2']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">PIN Code :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPresent['pincode']; ?></td>
                </tr>
                <tr>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Country :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPresent['counName']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">State :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPresent['stName']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Address Proof :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPresent['adPf']; ?></td>
                </tr>
                
            
            </table>
            
             <h2 style="font-size: 16px;color: #666;text-align: left;font-weight: 100;margin: 20px 0 20px 0;">Permanent Address</h2>
        
        <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                <tr>
                    <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;">Address :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPermanent['ad1']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">City / Town / Village :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPermanent['ad2']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">PIN Code :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPermanent['pincode']; ?></td>
                </tr>
                <tr>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Country :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPermanent['counName']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">State :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPermanent['stName']; ?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Address Proof :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAddressPermanent['adPf']; ?></td>
                </tr>
                
            
            </table>
            
            <h2 style="font-size: 16px;color: #666;text-align: left;font-weight: 100;margin: 20px 0 20px 0;">Contact Information</h2>
            
            <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                <tr>
                    <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;">Email Address : </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['emailAddress'];?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Phone (Mobile) : </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getPhMob['ph'];?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Phone (Off) : </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getPhOfc['ph']; ?></td>
                </tr>
                <tr>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Phone (Home) : </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getPhHome['ph'];?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Fax : </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getPhFax['ph'];?></td>
                    
                </tr>
                
            
            </table>
            
            <h2 style="font-size: 16px;color: #666;text-align: left;font-weight: 100;margin: 20px 0 20px 0;">Other Details</h2>
            
            <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                <tr>
                    <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;">Net Worth  : </td>
                    <td style="padding:4px 10px;"><?php echo $getAllDetails['gsAmt'];?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Gross Annual Income Range :</td>
                    <td style="padding:4px 10px;font-size:12px;">
                    <?php
                    if($getAllDetails['accIncm']=='1'){
                        echo "Below 1L";    
                    } else if($getAllDetails['accIncm']=='2'){
                        echo "1L - 5L";
                    } else if($getAllDetails['accIncm']=='3'){
                        echo "5L - 10L";
                    } else if($getAllDetails['accIncm']=='4'){
                        echo "10L - 25L";
                    } else if($getAllDetails['accIncm']=='5'){
                        echo "Above";
                    }
                    ?>
                    </td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Occupation : </td>
                    <td style="padding:4px 10px;font-size:12px;">
                    <?php echo $getAllDetails['occuName'];?>
                    </td>
                </tr>
            
            </table>
            
            <h2 style="font-size: 16px;color: #666;text-align: left;font-weight: 100;margin: 20px 0 20px 0;">Primary Banking Account</h2>
            
            <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                <tr>
                    <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;">Bank Name : </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['bankname'];?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Branch Address : </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['bankaddress'];?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">City :  </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['uAccCity'];?></td>
                </tr>
                
                <tr>
                    <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;">PIN  : </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['accPincode'];?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">State :</td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['states'];?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Account Number :  </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['accNo'];?></td>
                </tr>
                
                <tr>
                    <td style="padding:4px 10px; border-right:none;font-weight:bold;font-size:13px;">MICR Number :  </td>
                    <td style="padding:4px 10px;font-size:12px;"><?php echo $getAllDetails['micr'];?></td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">Account Type :</td>
                    <td style="padding:4px 10px;font-size:12px;">
                    <?php
                    if($getAllDetails['acTy']=='1'){
                        echo "Saving";    
                    } else if($getAllDetails['acTy']=='2'){
                        echo "Current";
                    } else if($getAllDetails['acTy']=='3'){
                        echo "NRE/NRO";
                    }
                    ?>
                    </td>
                    <td style="padding:4px 10px;font-weight:bold;font-size:13px;">IFSC Code :  </td>
                    <td style="padding:4px 10px;font-size:12px;">
                    <?php echo $getAllDetails['ifsccode'];?>
                    </td>
                </tr>

            
            </table>
        
            </div> <!-- /fluid -->
                        
 </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->
</div> <!-- /content -->      

<script type="text/javascript">
function sendLeegality(id,email,name,acc_type){
    $.ajax({
        url: '<?php echo base_url();?>admin/sendLeegality',
        data: {user_id: id, email: email, name: name,acc_type: acc_type},
        type: 'POST',
        success: function(data){
            alert("Esign doc sent via leegality");
            console.log(data);
        },
        error:function(data){
            alert("an error occurred");
          console.log(data);
        }
    })
    
}
function sendSigneasy(id,email,name,acc_type){
    $.ajax({
        url: '<?php echo base_url();?>admin/sendSigneasy',
        data: {user_id: id, email: email, name: name,acc_type: acc_type},
        type: 'POST',
        success: function(data){
            alert("Esign doc sent via Signeasy");
            console.log(data);
        },
        error:function(data){
            alert("an error occurred");
          console.log(data);
        }
    })
}

function emergencyDocs(id,email,name,acc_type,client_code,phone){
    $.ajax({
        url: '<?php echo base_url();?>admin/emergencyDocs',
        data: {user_id: id, email: email, name: name,acc_type: acc_type,client_code: client_code,phone:phone},
        type: 'POST',
        success: function(data){
            alert("Emergency docs sent via Whatsapp");
            console.log(data);
        },
        error:function(data){
            alert("an error occurred");
          console.log(data);
        }
    })
}

function tradingSoftware(id,email,name,acc_type,client_code){
    $.ajax({
        url: '<?php echo base_url();?>admin/tradingSoftware',
        data: {user_id: id, email: email, name: name,acc_type: acc_type,client_code: client_code},
        type: 'POST',
        success: function(data){
            alert("Trading Software details sent");
            console.log(data);
        },
        error:function(data){
            alert("an error occurred");
          console.log(data);
        }
    })
}
function acBankUpdate(id,email,name,acc_type,client_code){
    $.ajax({
        url: '<?php echo base_url();?>admin/acBankUpdateMail',
        data: {user_id: id, email: email, name: name,acc_type: acc_type,client_code: client_code},
        type: 'POST',
        success: function(data){
            alert("Email Sent");
            console.log(data);
        },
        error:function(data){
            alert("an error occurred");
          console.log(data);
        }
    })
}
</script>
