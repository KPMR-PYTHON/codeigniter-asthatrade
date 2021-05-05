<div id="content" class="clearfix">

    <div class="header">
        
        <h1 class="page-title">All User List</h1>
        

    </div> <!-- /header -->


   <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> View User
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Search User
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
            <div class="fluid" id="search_view">
                    <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <tr>
                <td class="table_head">Sl. No.</td>
                <td class="table_head">User Name</td>
                <td class="table_head"> Father/Spouse's Name</td>
                <td class="table_head">Gender</td>
                <td class="table_head">Marital Status</td>
                <td class="table_head">Residential Status</td>
                <td class="table_head">Nationality</td>
                <td class="table_head">Date of Birth</td>
                <td class="table_head">PAN Card Number </td>
                <td class="table_head">UID / Aadhaar Card</td>
                <td class="table_head">Address</td>
                <td class="table_head">PIN Code</td>
                <td class="table_head">Country</td>
                <td class="table_head"> Address Proof</td>
                <td class="table_head">Email Address </td>
                <td class="table_head">Mobile</td>
                <td class="table_head">Off</td>
                <td class="table_head">Home</td>
                <td class="table_head">Fax</td>
                <td class="table_head">Gross Annual Income Range</td>
                <td class="table_head">Occupation</td>
                <td class="table_head">Bank Name </td>
                <td class="table_head">Branch Address</td>
                <td class="table_head">Account Number</td>
                <td class="table_head">MICR Number</td>
                <td class="table_head">Account Type</td>
                <td class="table_head">IFSC Code</td>
                <td class="table_head">Download In Pdf file</td>
            </tr>
            <?php
               $i=0;
              foreach($allUserList as $list)
              {
                    //var_dump($list);
            ?>
            <tr>
                <td style="padding:5px; text-align:center;"><?=$i+1;?></td>
                <td style="padding:5px; text-align:center;"><?=($list->fname.''.$list->mname.''.$list->lname);?></td>
                <td style="padding:5px; text-align:center;"><?=($list->fathername);?></td>
                <td style="padding:5px; text-align:center;"><?php if($list->sex==1){echo 'Male';}elseif($list->sex==2){echo 'Female';}else{echo 'Others';}?></td>
                <td style="padding:5px; text-align:center;"><?php if($list->materialstatus==0){echo 'Unmarried';}else{echo 'Married';};?></td>
                <td style="padding:5px; text-align:center;"><?php if($list->userResidentialstatus==0){echo 'Resident Individual';}elseif($list->userResidentialstatus==1){echo 'Non Resident';}else{echo 'Foreign National';}?></td>
                <td style="padding:5px; text-align:center;"><?=$list->nationality;?></td>
                <td style="padding:5px; text-align:center;"><?=$list->dob;?></td>
                <td style="padding:5px; text-align:center;"><?=$list->pancard;?></td>
                <td style="padding:5px; text-align:center;"><?=$list->addharcard;?></td>
                <td style="padding:5px; text-align:center;"><?php echo 'aaaaaaaa';?></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"></td>
                <td style="padding:5px; text-align:center;"><img src="<?php echo base_url(); ?>content/images/ikona-pdf.png"/></td>
            </tr>
            <?php
              $i++;
              }
            ?>
        </table>
            </div> <!-- /fluid -->
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->  