<?php
//echo 'My Profile';
?>



<section>
    <div class="container">
        <div class="banner">
            <h1>Welcome <?php echo $this->session->userdata('name');?></h1>
        </div>
        
    </div>
</section>  
<section class="profile_accordian">
    <div class="container ">

        <div class="tab tab-vert">
            <ul class="tab-legend">
              <li class="active">Profile</li>
              <li>Password Setting</li>

          </ul>
          <ul class="tab-content">
              <li> 
                <div class="profile_form">


                    <div class="account_form2" style="font-size:14px;">
                        <form name="profile_edit" action="<?php echo base_url(); ?>account/updateProfile" method="post" enctype="multipart/form-data" onsubmit="return validation();"/>

                            <div class="clear"></div>
                            <h2 style="margin:20px 0;">
                                Identity Details
                            </h2>
                            <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
                               <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                                  <label> First Name :</label>
                                  <input type="text" placeholder="As per PAN Card First name " name="fname" id="fname" value="<?php echo $getAllDetails['fname'];?>"  class="alphaonly" />
                              </div>

                              <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                                  <label> Middle Name :</label>
                                  <?php //echo $getAllDetails['mname']; ?>
                                  <input type="text" placeholder="As per PAN Card Middle name " name="mname" id="mname" value="<?php echo $getAllDetails['mname'];?>" class="alphaonly" />
                              </div>

                              <div class="col-2" style="padding:5px;">
                                  <label> Last Name :</label>
                                  <?php //echo $getAllDetails['lname']; ?>
                                  <input type="text" placeholder="As per PAN Card last name " name="lname" id="lname" value="<?php echo $getAllDetails['lname'];?>" class="alphaonly" />
                              </div>
                          </div>

                          <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
                           <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                              <label> Father/Spouse's First Name :</label>
                              <input type="text" placeholder="Father/Spouse's First Name " name="ffname" id="ffname" value="<?php echo 				$getAllDetails['ffname'];?>" class="alphaonly" />
                          </div>
                          <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                              <label> Father/Spouse's Middle Name :</label>
                              <input type="text" placeholder="Father/Spouse's Second Name " name="fmname" id="fmname" value="<?php echo $getAllDetails['fmname'];?>" class="alphaonly" />
                          </div>
                          <div class="col-2" style="padding:5px;">
                              <label> Father/Spouse's Last Name :</label>
                              <input type="text" placeholder="Father/Spouse's Last Name " name="flname" id="flname" value="<?php echo $getAllDetails['flname'];?>" class="alphaonly" />
                          </div>
                      </div>

                      <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
                        <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                            <label> Mother's First Name :</label>
                            <input type="text" placeholder="Mother's First Name " name="mfname" id="mfname" value="<?php echo $getAllDetails['mfname'];?>" class="alphaonly" />
                        </div>
                        <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                            <label> Mother's Middle Name :</label>
                            <input type="text" placeholder="Mother's Second Name " name="mmname" id="mmname" value="<?php echo $getAllDetails['mmname'];?>" class="alphaonly" />
                        </div>
                        <div class="col-2" style="padding:5px;">
                            <label> Mother's Last Name :</label>
                            <input type="text" placeholder="Mother's Last Name " name="mlname" id="mlname" value="<?php echo $getAllDetails['mlname'];?>" class="alphaonly" />
                        </div>
                    </div>

                    <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
                        <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                            <label> Gender :</label>

                            <?php
                    /* if($getAllDetails['gender']=='1'){
                        echo "Male";    
                    } else if($getAllDetails['gender']=='2'){
                        echo "Female";
                    } else if($getAllDetails['gender']=='3'){
                        echo "Others";
                    } */
                    ?>
                    <br/>
                    <?php
                    if($getAllDetails['gender']=='1')
                    {
                        ?>
                        <label>Male</label>
                        <input type="radio" name="gender" value="m" checked="checked"/>
                        <label>Female</label>
                        <input type="radio" name="gender" value="f"/>
                        <div class="clear"></div>
                        <?php
                    }
                    else if($getAllDetails['gender']=='2')
                    {
                        ?>
                        <label>Male</label>
                        <input type="radio" name="gender" value="m" />
                        <label>Female</label>
                        <input type="radio" name="gender" value="f" checked="checked"/>
                        <div class="clear"></div>
                        <?php
                    }
                    ?>
                    <span id="err_gender"></span>
                </div>

                
                <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">

                    <label> Marital Status :</label>

                    <?php
                    /*if($getAllDetails['marital_status']=='0'){
                        echo "Unmarried";    
                    } else if($getAllDetails['marital_status']=='1'){
                        echo "Married";
                    } else if($getAllDetails['marital_status']=='3'){
                        echo "Divorced";
                    }*/
                    ?>
                    <?php // echo $getAllDetails['marital_status']; ?>
                    <br>
                    <label>Married </label>
                    <input type="radio" name="marital_status" value="1" <?php if($getAllDetails['marital_status']=='1'){?>checked="checked"<?php } ?> />
                    <label>Unmarried </label>
                    <input type="radio" name="marital_status" value="0" <?php if($getAllDetails['marital_status']=='0'){?>checked="checked"<?php } ?> />
                    
                    
                    <?php 
                    /* if($getAllDetails['marital_status']=='0')
                    { 
                    ?>
                    <br>
                    <label>Married</label> 
                    <input type="radio" name="marital_status" value="1" />
                    <label>Unmarried </label>
                    <input type="radio" name="marital_status" value="0" checked="checked" />
                    <?php 
                    }
                    else if($getAllDetails['marital_status']=='1')
                    {
                    ?>
                    <br>
                    <label>Married</label>
                    <input type="radio" name="marital_status" value="1" checked="checked"/>
                    <label>Unmarried</label>
                    <input type="radio" name="marital_status" value="0" />
                    <?php
                } */
                ?> 

                <span id="err_marital_status"></span>  
            </div>

            <div class="col-2">

                <label> Status :</label>
                <?php
                   /*  if($getAllDetails['userResidentialstatus']=='0'){
                        echo "Resident Individual";    
                    } else if($getAllDetails['userResidentialstatus']=='1'){
                        echo "Non Resident";
                    } else if($getAllDetails['userResidentialstatus']=='3'){
                        echo "Foreign Resident";
                    } */
                    ?>
                    <select name="residencial_status" value="" class="dropdown2">
                        <option value="0" <?php  if($getAllDetails['userResidentialstatus']=='0') echo "selected"; ?> > Resident Individual</option>
                        <option value="1" <?php  if($getAllDetails['userResidentialstatus']=='1') echo "selected"; ?> >Non Resident</option>
                        <option value="2" <?php  if($getAllDetails['userResidentialstatus']=='2') echo "selected"; ?> >Foreign National</option>
                        <option value="3" <?php  if($getAllDetails['userResidentialstatus']=='3') echo "selected"; ?> >Person of Indian Origin</option>
                    </select>
                </div>
            </div>


            <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
                <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                    <label> Nationality :</label>
                    <?php // echo $getAllDetails['nationality']; ?>
                    <input type="text" name="nationality" id="nationality" placeholder="Nationality" value="<?php echo $getAllDetails['nationality']; ?>" class="alphaonly" />
                </div>
                <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                    <label> Date of Birth :</label>
                    <?php // echo $getAllDetails['dob']; ?>
                    <?php  $dob=$getAllDetails['dob']; ?>
                    <input type="text" id="datepicker" placeholder="DD-MM-YYYY" Value="<?php echo date('d-m-Y', strtotime($dob)); ?>" name="dob"/>
                </div>
                <div class="col-2">
                    <label> PAN Card Number :</label>
                    <?php // echo $getAllDetails['pancard']; ?>
                    <input type="text" name="pan_card_no" id="pan_card_no" placeholder="PAN Card Number" value="<?php echo $getAllDetails['pancard']; ?>" />
                </div>
            </div>
            <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
                <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                    <label> UID / Aadhaar Card  :</label>
                    <?php //echo $getAllDetails['addharcard']; ?>
                    <input type="text" name="aadher_card" id="aadher_card" placeholder="UID / Aadhaar no" value="<?php echo $getAllDetails['addharcard']; ?>"  />
                </div>
                <div class="clear"></div>
            </div>
             <h2 style="margin:20px 0; float:left;">
                Correspondence Address
            </h2>
            
            <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
                <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                    <label> Address Line 1:</label>
                    <?php // echo $getAddressPresent['ad1']; ?>
                    <input type="text" name="address1" id="address1" placeholder="Flat/House Number" value="<?php if($getAddressPresent['ad1'] != ''){echo $getAddressPresent['ad1'];}else{echo $getAddressPermanent['ad1'];} ?>" />
                </div>
                <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                    <label> Address Line 2:</label>
                    <?php // echo $getAddressPresent['ad1']; ?>
                    <input type="text" name="address2" id="address2" placeholder="Society/Area" value="<?php if($getAddressPresent['ad2'] != ''){echo $getAddressPresent['ad2'];}else{echo $getAddressPermanent['ad2'];} ?>" />
                </div>
                <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                    <label> Address Line 3:</label>
                    <?php // echo $getAddressPresent['ad1']; ?>
                    <input type="text" name="address3" id="address3" placeholder="Landmark" value="<?php if($getAddressPresent['ad3'] != ''){echo $getAddressPresent['ad3'];}else{echo $getAddressPermanent['ad3'];} ?>" />
                </div>
                <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
                    <label> City / Town / Village :</label>
                    <?php //echo $getAddressPresent['ad2']; ?>
                    <input type="text" name="address4" id="address4" placeholder="City / Town / Village" value="<?php if($getAddressPresent['ad4'] != ''){echo $getAddressPresent['ad4'];}else{echo $getAddressPermanent['ad4'];} ?>" class="alphaonly" />
                </div>
                <div class="col-2" style="padding:5px;">
                    <label> PIN Code :</label>
                    <?php // echo $getAddressPresent['pincode']; ?>
                    <input maxlength="6" type="text" name="pin_code" id="pin_code" placeholder="PIN Code" value="<?php if($getAddressPresent['pincode'] != ''){echo $getAddressPresent['pincode'];}else{echo $getAddressPermanent['pincode'];} ?>"/>
                </div>
            </div>
      <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
        <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
            <label> Country :</label>
            <?php //if($getAddressPresent['counName'] != ''){echo $getAddressPresent['counName'];}else{echo $getAddressPermanent['counName'];} ?>
            <select name="country_code" id="country_code" class="dropdown2" onchange="state_details(this.value);">
                <?php
                foreach ($countrydetails as $row)
                {
                   if($present_country_id) 
                   {                             
                    ?>
                    <option name="country_value"  value="<?php echo $row['id'];?>" <?php if($row['id']==$present_country_id){?>selected="selected"<?php }?> ><?php echo $row['name'];?></option>
                    <?php
                }
                else
                {
                    ?>
                    <option name="country_value"  value="<?php echo $row['id'];?>" <?php if($row['id']==$permanent_country_id){?>selected="selected"<?php }?> ><?php echo $row['name'];?></option>
                    <?php
                }
            }
            ?>
        </select>
    </div>      

    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label> State :</label>
        <?php // if($getAddressPresent['stName'] != ''){echo $getAddressPresent['stName'];}else{echo $getAddressPermanent['stName'];} ?> 
        <select name="state_code" id="state_code" class="dropdown2">
            <?php
            foreach ($stateDetails as $row_state)
            {
             if($present_state_id)
             {
                 ?>
                 <option value="<?php echo $row_state['id'];?>" <?php if($row_state['id']==$present_state_id){?>selected="selected"<?php }?>  ><?php echo $row_state['name'];?></option>
                 <?php
             }
             else
             {
                ?>
                <option value="<?php echo $row_state['id'];?>" <?php if($row_state['id']==$Permanent_state_id){?>selected="selected"<?php }?>  ><?php echo $row_state['name'];?></option>
                <?php
            }

        }
        ?>
    </select>
</div> 
<div class="col-2">
    <label> Address Proof :</label>
    <?php // if($getAddressPresent['adPf'] != ''){echo $getAddressPresent['adPf'];}else{echo $getAddressPermanent['adPf'];} ?>   
    <select name="address_proof_doc" id="address_proof_doc" class="dropdown2">
     <?php
     foreach ($addressProofDocs as $row_adr)
     {
         if($present_addProofId)
         {
           ?>
           <option value="<?php echo $row_adr['id'];?>"  <?php if($row_adr['id']==$present_addProofId){?>selected="selected"<?php }?>> <?php echo $row_adr['addressproofdoc'];?> </option>
           <?php
       }
       else
       {
           ?>
           <option value="<?php echo $row_adr['id'];?>"  <?php if($row_adr['id']==$Permanent_addProofId){?>selected="selected"<?php }?>> <?php echo $row_adr['addressproofdoc'];?> </option>
           <?php
       }

   }
   ?>
</select>
</div> 

</div>


<div class="col-3">
    <input type="checkbox" name="permanent_address" id="permanent_address" onClick="return copyAdd()" <?php if(empty($address_diff)){ ?>checked="checked"<?php } ?> />
    <label> My permanent address is the same as my correspondence address </label>
</div> 

<div class="clear"></div>
<h2 style="margin:20px 0; float:left;">
    Permanent Address
</h2>
<div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label> Address 1:</label>
        <?php // echo $getAddressPermanent['ad1']; ?>
        <input type="text" maxlength="36" name="peraddress1" id="peraddress1" placeholder="Flat/House Number" value="<?php echo $getAddressPermanent['ad1']; ?>"/>
    </div>
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label> Address 2:</label>
        <?php // echo $getAddressPermanent['ad1']; ?>
        <input type="text" maxlength="36" name="peraddress2" id="peraddress2" placeholder="Society/Area" value="<?php echo $getAddressPermanent['ad2']; ?>"/>
    </div>
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label> Address 3:</label>
        <?php // echo $getAddressPermanent['ad1']; ?>
        <input type="text" maxlength="36" name="peraddress3" id="peraddress3" placeholder="Landmark" value="<?php echo $getAddressPermanent['ad3']; ?>"/>
    </div>
   <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
      <label> City / Town / Village :</label>
      <?php // echo $getAddressPermanent['ad4']; ?>
      <input type="text"  maxlength="36" name="peraddress4" id="peraddress4" placeholder="City / Town / Village " value="<?php echo $getAddressPermanent['ad4']; ?>" class="alphaonly" />
  </div>
  <div class="col-2">
      <label> PIN Code :</label>
      <?php //echo $getAddressPermanent['pincode']; ?>
      <input maxlength="6" type="text" name="perpin_code" id="perpin_code" placeholder="PIN Code " value="<?php echo $getAddressPermanent['pincode']; ?>"/>
  </div>
</div>
<div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label> Country :</label>
        <?php // echo $getAddressPermanent['counName']; ?>
        <select name="percountry_code" id="percountry_code" class="dropdown2" onchange="state_details(this.value);">
            <?php
            foreach ($countrydetails as $row)
            {
                ?>
                <option value="<?php echo $row['id'];?>" <?php if($row['id']==$permanent_country_id){?>selected="selected"<?php }?> ><?php echo $row['name'];?></option>
                <?php
            }
            ?>
        </select>
    </div>      

    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
     <label> State :</label>
     <?php //echo $getAddressPermanent['stName']; ?>
     <select name="perstate_code" id="perstate_code" class="dropdown2">
        <?php
        foreach ($stateDetails as $row_state)
        {
         ?>
         <option value="<?php echo $row_state['id'];?>" <?php if($row_state['id']==$Permanent_state_id){ ?>selected="selected"<?php } ?>><?php echo $row_state['name']; ?></option>
         <?php
     }
     ?>
 </select>
</div> 

<div class="col-2">
    <label> Address Proof :</label>
    <?php // echo $getAddressPermanent['adPf']; ?>   
    <select name="peraddress_proof_doc" id="peraddress_proof_doc" class="dropdown2">
     <?php
     foreach ($addressProofDocs as $row_adr)
     {
         ?>
         <option value="<?php echo $row_adr['id'];?>" <?php if($row_adr['id']==$Permanent_addProofId){?>selected="selected"<?php }?>><?php echo $row_adr['addressproofdoc'];?></option>
         <?php
     }
     ?>
 </select>
</div> 
</div>


<h2 style="float:left; margin:20px 0;">Contact Information</h2>

<div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label>Email Address : </label>
        <?php // echo $getAllDetails['emailAddress'];?>
        <input type="text" name="email_address" value="<?php echo $getAllDetails['emailAddress'];?>" readonly="readonly" placeholder="Email Address"/>
    </div>
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label>Phone (Mobile) : </label><br/>
        <?php //echo $getPhMob['ph'];?>
        <!--<input type="text" name="mobile_ph" placeholder="Mobile Number" value="<?php echo $getPhMob['ph'];?>" readonly="readonly"/>-->
        <input maxlength="4" class="sufx" type="text" name="mobile_ph_code" placeholder="Area Code" value="+91" readonly="readonly"/> -
        <input class="prfx" type="text" name="mobile_ph" placeholder="Mobile Number" value="<?php echo $getPhMob['ph'];?>" readonly="readonly" />
    </div>
    <div class="col-2">
        <label>Phone (Off) : </label><br/>
        <?php //echo $getPhHome['ph'];?>
        <input maxlength="4" class="sufx" type="text" name="office_ph_code" placeholder="Area Code" value="<?php echo $getPhOfc['ph_code'];?>" onkeypress='return isNumberKey(this,event);' /> -
        <input class="prfx" type="text" name="office_ph" placeholder="Office Phone Number" value="<?php echo $getPhOfc['ph'];?>" onkeypress='return isNumberKey(this,event);'/>
    </div>
</div>

<div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label>Phone (Home) : </label><br/>
        <?php // echo $getPhOfc['ph'];?>
        <input maxlength="4" class="sufx" type="text" name="home_ph_code" placeholder="Area Code" value="<?php echo $getPhHome['ph_code'];?>" onkeypress='return isNumberKey(this,event);' /> -
        <input class="prfx" type="text" name="home_ph" placeholder="Home Phone Number" value="<?php echo $getPhHome['ph'];?>" onkeypress='return isNumberKey(this,event);' />
    </div>
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label>Fax : </label><br/>
        <?php // echo $getPhFax['ph'];?>
        <input maxlength="4" class="sufx" type="text" name="fax_ph_code" placeholder="Area Code" value="<?php echo $getPhFax['ph_code'];?>" onkeypress='return isNumberKey(this,event);' /> -
        <input class="prfx" type="text" name="fax_ph" placeholder="Fax" value="<?php echo $getPhFax['ph'];?>" onkeypress='return isNumberKey(this,event);'/>
    </div>
</div>

<div class="clear"></div>
<h2 style="float:left; margin:20px 0;">Other Details</h2>

<div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
    <div class="col-4" style="border-right:1px solid #ccc;">
        <input type="checkbox" name="gross_amt" id="gross_amt" onclick="openGrossAmt();" <?php if($getAllDetails['gsAmt']){ ?>checked="checked"<?php } ?>/>
        <label> Instead of Gross Annual Income Range, I want to specify Net Worth  </label>
    </div>
    <div class="col-2" style="padding:5px;">
        <label>Net Amount :</label>

        <?php 
                    /* if($getAllDetails['gsAmt'] !='')
                    {echo $getAllDetails['gsAmt'];}
                    else{echo '0';} */
                    ?>
                    
                    <input type="text" name="gs_amt" id="gs_amt" 
                    value="<?php if($getAllDetails['gsAmt']){echo $getAllDetails['gsAmt'];}else{echo '';} ?>" readonly="readonly" onkeypress='return isNumberKey(this,event);' />
                    

                </div>
                <div class="col-4 ">

                    <label> Gross Annual Income Range :</label>
                    
                    <?php
                   /*  if($getAllDetails['accIncm']=='1'){
                        echo "Below 1L";    
                    } else if($getAllDetails['accIncm']=='2'){
                        echo "1L - 5L";
                    } else if($getAllDetails['accIncm']=='3'){
                        echo "5L - 10L";
                    } else if($getAllDetails['accIncm']=='4'){
                        echo "10L - 25L";
                    } else if($getAllDetails['accIncm']=='5'){
                        echo "Above";
                    } */
                    ?>
                    <label> below_1L </label>
                    <input onClick="removeGrossAmt();" id="below_1L" name="gross_amt_range" type="radio" placeholder="" value="1" <?php if($getAllDetails['accIncm']=='1') {echo "checked"; }?> />
                    <label> 1L_to_5L </label>
                    <input onClick="removeGrossAmt();" id="1L_to_5L" name="gross_amt_range" type="radio" placeholder="" value="2" <?php if($getAllDetails['accIncm']=='2'){echo "checked";} ?> />
                    <label>  5L_to_10L  </label>
                    <input onClick="removeGrossAmt();" id="5L_to_10L" name="gross_amt_range" type="radio" placeholder="" value="3" <?php if($getAllDetails['accIncm']=='3') {echo "checked"; } ?> />
                    <label>  10L_to_25L </label>
                    <input onClick="removeGrossAmt();" id="10L_to_25L" name="gross_amt_range" type="radio" placeholder="" value="4" <?php if($getAllDetails['accIncm']=='4') {echo "checked";} ?> />
                    <label> above_25L  </label>
                    <input onClick="removeGrossAmt();" id="above_25L" name="gross_amt_range" type="radio" placeholder="" value="5" <?php if($getAllDetails['accIncm']=='5') {echo "checked";} ?> />
                    <div class="clear"></div>
                    <span id="errgross_amt_range" style="color:red;" ></span>
                </div>
            </div>

            <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
             <div class="col-2">
                <label> Occupation :</label>
                <?php //echo $getAllDetails['occuName'];?>
                <select id="Occupation"  name="Occupation" class="dropdown2">
                 <?php
                 foreach ($occupationDetails as $row_occupation)
                 {

                    ?>
                    <option value="<?php echo $row_occupation['id'];?>" <?php if($row_occupation['id']==$occupation_id){?>selected="selected"<?php }?>><?php echo $row_occupation['occupationname'];?></option>
                    <?php
                }
                ?>
            </select>

        </div>
    </div>

    <h2 style="float:left; margin:20px 0;">Primary Banking Account</h2>

    <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
        <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
            <label>Bank Name : </label>
            <?php // echo $getAllDetails['bankname'];?>
            <input type="text" name="bank_name" id="bank_name" value="<?php echo $getAllDetails['bankname'];?>"  placeholder="Bank Name" class="alphaonly" />
        </div>
        <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
            <label>Branch Address: </label>
            <?php //echo $getAllDetails['bankaddress1'];?>
            <input type="text"  maxlength="36" name="branch_address" id="branch_address" value="<?php echo $getAllDetails['bankaddress'];?>" placeholder="Branch Address Line 1"/>
        </div>
        <div class="col-2">
            <label>City : </label>
            <?php //echo $getAllDetails['uAccCity'];?>
            <input type="text"  maxlength="36" name="branch_city" id="branch_city" value="<?php echo $getAllDetails['uAccCity'];?>" placeholder="City" class="alphaonly" />
        </div>
        
    </div>
    <div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
        <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
            <label>PIN : </label>
            <?php //echo $getAllDetails['accPincode'];?>
            <input maxlength="6" type="text" name="branch_pin" id="branch_pin" value="<?php echo $getAllDetails['accPincode'];?>" placeholder="PIN"/>
        </div> 
        <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
            <label> State :</label>
            <?php // echo $getAllDetails['states'];?>
            <select name="branch_state"  class="dropdown2">
             <?php
             foreach ($stateDetails as $row_state)
             {
                 ?>
                 <option value="<?php echo $row_state['id'];?>" <?php if($row_state['id']==$Permanent_state_id){?>selected="selected"<?php }?>><?php echo $row_state['name'];?></option>
                 <?php
             }
             ?>

         </select>
     </div> 
     <div class="col-2">
        <label>Account Number : </label>
        <?php //echo $getAllDetails['accNo'];?>
        <input type="text" maxlength="30" name="acc_number" id="acc_number" value="<?php echo $getAllDetails['accNo'];?>"  placeholder="Account Number"/>
    </div>
</div>

<div style="border:1px solid #ccc; padding:0 5px; float:left; width:100%;">
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">
        <label>MICR Number : </label>
        <?php // echo $getAllDetails['micr'];?>
        <input type="text"  maxlength="9" name="micr_number" id="micr_number" value="<?php echo $getAllDetails['micr'];?>" placeholder="MICR Number"/>
    </div> 
    <div class="col-2" style="border-right:1px solid #ccc;padding:5px;">

        <label> Account Type :</label>

        <?php
                    /* if($getAllDetails['acTy']=='1'){
                        echo "Saving";    
                    } else if($getAllDetails['acTy']=='2'){
                        echo "Current";
                    } else if($getAllDetails['acTy']=='3'){
                        echo "NRE/NRO";
                    } */
                    ?>
                    
                    <label>Saving  </label>
                    <input type="radio" name="account_type" placeholder="" value="1" <?php if($getAllDetails['acTy']=='1') echo "checked";?> />
                    <label>Current</label>
                    <input type="radio" name="account_type"  placeholder="" value="2" <?php if($getAllDetails['acTy']=='2') echo "checked";?> />
                    <label>  NRE / NRO  </label>
                    <input type="radio" name="account_type"  placeholder="" value="3" <?php if($getAllDetails['acTy']=='3') echo "checked";?> />
                    
                    <span id="erraccount_type"></span>
                </div>
                <div class="col-2">
                    <label>IFSC Code : </label>
                    <?php //echo $getAllDetails['ifsccode'];?>
                    <input maxlength="11" type="text" name="ifsc_code" id="ifsc_code"  placeholder="IFSC Code" value="<?php echo $getAllDetails['ifsccode'];?>"/>
                </div>
            </div>

            <div class="col-3">



                <input class="save_btn" type="submit" name="edit_profile" placeholder="" value="SAVE CHANGES" style="float:center; background:#0da0d3;"/>                    

            </div>




        </form>
    </div>

    <!-- Database Return Permanent Address -->    
    <input id="padd1" type="hidden" value="<?php echo $getAddressPermanent['ad1'];?>" >
    <input id="padd2" type="hidden" value="<?php echo $getAddressPermanent['ad2'];?>" >
    <input id="padd3" type="hidden" value="<?php echo $getAddressPermanent['ad3'];?>" >
    <input id="pcity" type="hidden" value="<?php echo $getAddressPermanent['ad4'];?>" >
    <input id="ppin" type="hidden" value="<?php echo $getAddressPermanent['pincode'];?>" > 
    <input id="pcoun" type="hidden" value="<?php echo $permanent_country_id;?>" > 
    <input id="pst" type="hidden" value="<?php echo $Permanent_state_id;?>" > 
    <input id="peraddprof" type="hidden" value="<?php echo $Permanent_addProofId;?>">
    
    <!-- Database Return Gross Amount -->    
    <input id="db_gsamt" type="hidden" value="<?php echo $getAllDetails['gsAmt'];?>">
    <input id="db_gross_amt_range" type="hidden" value="<?php echo $getAllDetails['accIncm'];?>">
    
    <!-- <div class="form_note">
        <p>
            <div class="clear"></div>
            <b>Note :</b> Please Fill this form and take Printout. Send it along with mandatory documents (self attested).
            <br><br>
            <b>Required Document for Account Opening (Self Attested) :-</b><br>
            1. Pan Card Copy<br>
            2. Address Proof any one ( Bank Passbook with leteast statement ,Voter id Card, Driving Licence ,<br> Passport & Adhar Card)<br>
            3. One Photo<br>
            4. Initial Cheque Rs 500 in favor of <span>"Astha Commodities" </span><br>
            <br>
            * Highlighted text on page no-10 should be handwritten in the below given Box<br>
            <span>[ The Above declaration has been read and understood by me. I am aware of the risk involved in dispensing with the physical contract note,and do hereby take full responsibility for the same ]</span>
            <br><br>
            <b>Fillup this form & send below HO Address</b><br>
            <br>
            <b>Astha Credit & securities (P) Ltd</b><br>
            42, Usha Preet Complex, Malviya Nagar,<br>
            Bhopal ( M.P.) - 462003<br>
            Contact : +91-8435001551 / 52,+91-0755-4220793,<br>
            Email id:- <span>contact@asthatrade.com </span><br>    
        </p>
    </div> -->

</div>
</li>
<li> 
    <div class="profile_form">
        <form>

            <h2>
                Password Setting
            </h2>
            <div class="pcol-2">
                <label> Old Password :</label>
                <input type="Password" name="old_password" id="old_password" placeholder="Enter Old Password"/>
            </div>

            <div class="pcol-2">
                <label> New Password :</label>
                <input type="Password" name="new_password" id="new_password" placeholder="Enter New Password"/>
            </div>

            <div class="pcol-2">
                <input type="button" placeholder="" Value="Change Password" onclick="resetPassword()"/>
            </div>


        </form>
    </div>
</li>

       <!-- <li> 
        <div class="profile_form">
            <form>
            
                <h2>
                    Password Setting
                </h2>
                <div class="pcol-2">
                <label> Old Password :</label>
                    <input type="Password" placeholder="Enter Old Password"/>
                </div>
                
                <div class="pcol-2">
                <label> New Password :</label>
                    <input type="Password" placeholder="Enter New Password"/>
                </div>
                
                
                
                
            </form>
        </div>
      </li>
          <li> 
        <div class="profile_form">
            <form>
            
                <h2>
                    Password Setting
                </h2>
                <div class="pcol-2">
                <label> Old Password :</label>
                    <input type="Password" name="old_pass" id="old_pass" placeholder="Enter Old Password"/>
                </div>
                
                <div class="pcol-2">
                <label> New Password :</label>
                    <input type="Password" name="new_pass" id="new_pass" placeholder="Enter New Password"/>
                </div>
                
                
                
                
            </form>
        </div>
    </li>-->
</ul>
</div>
</div>
</section>

<!--popup-->
<!-- <div id="popup1" class="overlay">
    <div class="popup">
     <a class="close" href="#">&times;</a>
     <div class="clear"></div>
     <div class="content">
        <form id="newAccountForm" name="newAccountForm" action="<?/*php echo base_url(); */?>account/newAccountOpen" method="post" enctype="application/form-data">
            <p style="text-align:center;"><?/*php if($getAccountPayDetails[0]['account_type'] == '1'){ echo "For New Commodity "; } else { echo "For New Equity ";} */?>Account</p>
            <?php /* if($getAccountPayDetails[0]['account_type'] == '1'){ $acc_type='2'; } else { $acc_type='1';} */ ?>
            <input type="hidden" name="userId" id="userId" value="<?/*php echo $this->session->userdata('id'); */?>"/>
            <input type="hidden" name="acc_type" id="acc_type" value="<?/*php echo $acc_type; */?>"/> 
            <?php //echo $totRow; ?>
            <div style="text-align:center;">                
                <label>Payment Method :</label>
                <label>Online</label>&nbsp;&nbsp;<input type="radio" name="payment_type" value="1"/>
                <label>Offline</label>&nbsp;&nbsp;<input type="radio" name="payment_type" value="2" checked="checked" />
            </div>
            
            <input type="submit"  Value="Submit" />
        </form>

    </div>
</div>
</div> -->
<!--popup-->

<!-- Payment Reminder PopUp-->
<!-- Make it Red bordered alert popup -->
<div id="payment_reminder" class="overlay" > 
    <div class="popup">
        <a class="close" href="#">&times;</a>
        <div class="clear"></div>
        <div class="content">
            <form id="" name="" action="" method="post" enctype="application/form-data">
                Payment Reminder
            </form>

        </div>
    </div>
</div> 
<!-- Payment Reminder PopUp-->





<script>
$(document).ready(function() {
    /*$("#datepicker").datepicker();  */           
    $("#datepicker").datepicker({
     todayBtn: "linked",
     language: "it",
     autoclose: true,
     todayHighlight: true,
     dateFormat: 'yy-mm-dd' 
 });
});





function validation(){
    var accType=$('input[name=type]:checked').val();
    var payMethod=$('input[name=payment_method]:checked').val();
    var gross_amt=$('input[name=gross_amt]:checked').val();
    var gs_amt=$('#gs_amt').val();
    var gross_amt_range=$('input[name=gross_amt_range]:checked').val();
    var gs_amt=$('#gs_amt').val();
    var account_type=$('input[name=account_type]:checked').val();
    var fname=$('#fname').val();
    var lname=$('#lname').val();
    var ffname=$('#ffname').val();
    var flname=$('#flname').val();
    var mfname=$('#mfname').val();
    var mlname=$('#mlname').val();
    var gender=$('input[name=gender]:checked').val();
    var marital_status=$('input[name=marital_status]:checked').val();
    var nationality=$('#nationality').val();
    var datepicker=$('#datepicker').val();
    var pan_card_no=$('#pan_card_no').val();
    var aadher_card=$('#aadher_card').val();
    var bank_name=$('#bank_name').val();
    
    var branch_address=$('#branch_address').val();
    var banch_address2=$('#banch_address2').val();
    var banch_address3=$('#banch_address3').val();
    var branch_city=$('#branch_city').val();
    var branch_pin=$('#branch_pin').val();
    var acc_number=$('#acc_number').val();
    var micr_number=$('#micr_number').val();
    var ifsc_code=$('#ifsc_code').val();
    
    var address1=$('#address1').val();
    var address2=$('#address2').val();
    var address3=$('#address3').val();
    var address4=$('#address4').val();
    var pin_code=$('#pin_code').val();
    
    var peraddress1=$('#peraddress1').val();
    var peraddress2=$('#peraddress2').val();
    var peraddress3=$('#peraddress3').val();
    var peraddress4=$('#peraddress4').val();
    var perpin_code=$('#perpin_code').val();
    
    //var nationality=$('#nationality').val();
    $('#accType').html('');
    $('#payM').html('');
    $('#err_gender').html('');
    $('#err_marital_status').html('');
    $('#errgross_amt_range').html('');
    $('#erraccount_type').html('');
    
    
    if(fname==''){
        $('#fname').val('');
        $('#fname').css({'border-color' : '#FF0000'});
        $('#fname').attr("placeholder", "Please Enter First Name");
        $('#fname').focus();
        return false;
    } else if(lname==''){
        $('#llname').val('');
        $('#lname').css({'border-color' : '#FF0000'});
        $('#lname').attr("placeholder", "Please Enter Last Name");
        $('#lname').focus();
        return false;
    } else if(ffname==''){
        $('#ffname').val('');
        $('#ffname').css({'border-color' : '#FF0000'});
        $('#ffname').attr("placeholder", "Please Enter Father/Spouse's First Name");
        $('#ffname').focus();
        return false;
    } else if(flname==''){
        $('#flname').val('');
        $('#flname').css({'border-color' : '#FF0000'});
        $('#flname').attr("placeholder", "Please Enter Father/Spouse's Last Name");
        $('#flname').focus();
        return false;
    }else if(mfname==''){
        $('#mfname').val('');
        $('#mfname').css({'border-color' : '#FF0000'});
        $('#mfname').attr("placeholder", "Please Enter Mother's First Name");
        $('#mfname').focus();
        return false;
    } else if(mlname==''){
        $('#mlname').val('');
        $('#mlname').css({'border-color' : '#FF0000'});
        $('#mlname').attr("placeholder", "Please Enter Mother's Last Name");
        $('#mlname').focus();
        return false;
    } else if(!gender){
        $('#err_gender').html('Please Select Gender');
        $('input[name=gender]').focus();
        return false;
    } else if(!marital_status){
        $('#err_marital_status').html('<br/>Please Select Marital Status');
        $('input[name=marital_status]').focus();
        return false;
    } else if(nationality==''){
        $('#nationality').val('');
        $('#nationality').css({'border-color' : '#FF0000'});
        $('#nationality').attr("placeholder", "Please Enter Your Nationality");
        $('#nationality').focus();
        return false;
    } else if(datepicker==''){
        $('#datepicker').val('');
        $('#datepicker').css({'border-color' : '#FF0000'});
        $('#datepicker').attr("placeholder", "Please Enter or Select Date of Birth");
        $('#datepicker').focus();
        return false;
    } else if(pan_card_no==''){
        $('#pan_card_no').val('');
        $('#pan_card_no').css({'border-color' : '#FF0000'});
        $('#pan_card_no').attr("placeholder", "Please Enter PAN no");
        $('#pan_card_no').focus();
        return false;
    } else if(address1==''){
        $('#address1').val('');
        $('#address1').css({'border-color' : '#FF0000'});
        $('#address1').attr("placeholder", "Please Enter Address");
        $('#address1').focus();
        return false;
    } else if(address2==''){
        $('#address2').val('');
        $('#address2').css({'border-color' : '#FF0000'});
        $('#address2').attr("placeholder", "Please Enter Address");
        $('#address2').focus();
        return false;
    } else if(address3==''){
        $('#address3').val('');
        $('#address3').css({'border-color' : '#FF0000'});
        $('#address3').attr("placeholder", "Please Enter Address");
        $('#address3').focus();
        return false;
    } else if(address4==''){
        $('#address4').val('');
        $('#address4').css({'border-color' : '#FF0000'});
        $('#address4').attr("placeholder", "Please Enter City / Town / Village");
        $('#address4').focus();
        return false;
    } else if(pin_code==''){
        $('#pin_code').val('');
        $('#pin_code').css({'border-color' : '#FF0000'});
        $('#pin_code').attr("placeholder", "Please Enter Pincode");
        $('#pin_code').focus();
        return false;
    } else if(peraddress1==''){
        $('#peraddress1').val('');
        $('#peraddress1').css({'border-color' : '#FF0000'});
        $('#peraddress1').attr("placeholder", "Please Enter Permanent Address");
        $('#peraddress1').focus();
        return false;
    } else if(peraddress2==''){
        $('#peraddress2').val('');
        $('#peraddress2').css({'border-color' : '#FF0000'});
        $('#peraddress2').attr("placeholder", "Please Enter Permanent Address");
        $('#peraddress2').focus();
        return false;
    } else if(peraddress3==''){
        $('#peraddress3').val('');
        $('#peraddress3').css({'border-color' : '#FF0000'});
        $('#peraddress3').attr("placeholder", "Please Enter Permanent Address");
        $('#peraddress3').focus();
        return false;
    } else if(peraddress4==''){
        $('#peraddress4').val('');
        $('#peraddress4').css({'border-color' : '#FF0000'});
        $('#peraddress4').attr("placeholder", "Please Enter Permanent City / Town / Village");
        $('#peraddress4').focus();
        return false;
    } else if(perpin_code==''){
        $('#perpin_code').val('');
        $('#perpin_code').css({'border-color' : '#FF0000'});
        $('#perpin_code').attr("placeholder", "Please Enter Pincode");
        $('#perpin_code').focus();
        return false;
    } else if(!gross_amt && !gross_amt_range){
        $('#errgross_amt_range').html('Please Select Gross Annual Income Range or Specify Annual Income');
        $('input[name=gross_amt_range]').focus();
        return false;
    } else if(gross_amt && gs_amt==''){
        $('#gs_amt').css({'border-color' : '#FF0000'});
        $('#gs_amt').attr("placeholder", "Please Enter Amount");
        $('#gs_amt').focus();
        return false;
    } else if(bank_name==''){
        $('#bank_name').val('');
        $('#bank_name').css({'border-color' : '#FF0000'});
        $('#bank_name').attr("placeholder", "Please Enter Bank Name");
        $('#bank_name').focus();
        return false;
    } else if(branch_address==''){
        $('#branch_address').val('');
        $('#branch_address').css({'border-color' : '#FF0000'});
        $('#branch_address').attr("placeholder", "Please Enter Branch Address");
        $('#branch_address').focus();
        return false;
    } else if(banch_address2==''){
        $('#banch_address2').val('');
        $('#banch_address2').css({'border-color' : '#FF0000'});
        $('#banch_address2').attr("placeholder", "Please Enter Branch Address");
        $('#banch_address2').focus();
        return false;
    } else if(banch_address3==''){
        $('#banch_address3').val('');
        $('#banch_address3').css({'border-color' : '#FF0000'});
        $('#banch_address3').attr("placeholder", "Please Enter Branch Address");
        $('#banch_address3').focus();
        return false;
    } else if(branch_city==''){
        $('#branch_city').val('');
        $('#branch_city').css({'border-color' : '#FF0000'});
        $('#branch_city').attr("placeholder", "Please Enter Branch City");
        $('#branch_city').focus();
        return false;
    } else if(branch_pin==''){
        $('#branch_pin').val('');
        $('#branch_pin').css({'border-color' : '#FF0000'});
        $('#branch_pin').attr("placeholder", "Please Enter Branch Pin");
        $('#branch_pin').focus();
        return false;
    } else if(acc_number==''){
        $('#acc_number').val('');
        $('#acc_number').css({'border-color' : '#FF0000'});
        $('#acc_number').attr("placeholder", "Please Enter Account Number");
        $('#acc_number').focus();
        return false;
    } else if(micr_number==''){
        $('#micr_number').val('');
        $('#micr_number').css({'border-color' : '#FF0000'});
        $('#micr_number').attr("placeholder", "Please Enter MICR Number");
        $('#micr_number').focus();
        return false;
    } else if(micr_number.length != 9){
       $('#micr_number').val('');
       $('#micr_number').css({'border-color' : '#FF0000'});
       $('#micr_number').attr("placeholder", "Please Enter 9 Digit MICR Number");
       $('#micr_number').focus();
       return false;
   } else if(account_type==''){
    $('#erraccount_type').html('Please Select Account Type');
    return false;
} else if(ifsc_code==''){
    $('#ifsc_code').val('');
    $('#ifsc_code').css({'border-color' : '#FF0000'});
    $('#ifsc_code').attr("placeholder", "Please Enter IFSC Code");
    $('#ifsc_code').focus();
    return false;
} else {
    dataLayer.push({'event': 'profile-update'})
    return true;
} 
}  


function resetPassword()
{
//alert('Reset Password');
//var user_id = <?php echo $this->session->userdata('id');?>; 
var old_pass = $('#old_password').val();
var new_pass = $('#new_password').val();

if(old_pass ==''){
    $('#old_password').val('');
    $('#old_password').css({'border-color' : '#FF0000'});
    $('#old_password').attr("placeholder", "Please Enter Old Password");
    err=0;  
}
else if(old_pass.length<8){
    $('#old_password').val('');
    $('#old_password').css({'border-color' : '#FF0000'});
    $('#old_password').attr("placeholder", "Password Length is Minimum 8 Character");
    err=0;  
} 
else if(new_pass==''){
    $('#new_password').val('');
    $('#new_password').css({'border-color' : '#FF0000'});
    $('#new_password').attr("placeholder", "Please Enter New Password");
    err=0;  
} 
else if(new_pass.length<8){
    $('#new_password').val('');
    $('#new_password').css({'border-color' : '#FF0000'});
    $('#new_password').attr("placeholder", "Password Length is Minimum 8 Character");
    err=0;  
} 

else 
{
    err=1;  
}

if(err == 1)
{
    $.ajax({
        url:'<?php echo base_url(); ?>site/profileResetPassword',
        data:{'old_password':old_pass,'new_password':new_pass},
        type:'POST',    
        datatype:'JSON',
        success : function(data){
            alert(data); 
            window.location.reload();
        },

        error : function(data){
            alert('error occured.');
        }

    });
}

}

function copyAdd()
{ /* alert('Copy Add function'); */
var address1=$('#address1').val();
var address2=$('#address2').val();
var address3=$('#address3').val();
var address4=$('#address4').val();
var pin_code=$('#pin_code').val();
var state_code=$('#state_code').val();
var country_code=$('#country_code').val();
var corr_address_proof_id=$('#corr_address_proof_id').val();
var corr_validity=$('#corr_validity').val();

var address_proof_doc=$('#address_proof_doc').val();

$("#permanent_address").attr("onclick", "removeAdd();");

var peraddress1=$('#peraddress1').val(address1);
var peraddress2=$('#peraddress2').val(address2);
var peraddress3=$('#peraddress3').val(address3);
var peraddress4=$('#peraddress4').val(address4);
var perpin_code=$('#perpin_code').val(pin_code);
var perstate_code=$('#perstate_code').val(state_code);
var percountry_code=$('#percountry_code').val(country_code);
var peraddress_proof_doc=$('#peraddress_proof_doc').val(address_proof_doc);   
var peraddress_proof_no=$('#per_address_proof_id').val(corr_address_proof_id);    
var per_validity=$('#per_validity').val(corr_validity);
}

function removeAdd()
{

    $("#permanent_address").attr("onclick", "copyAdd();");
    
    
    
    var peraddress1 = $('#peraddress1').val($('#padd1').val());
    var peraddress2 = $('#peraddress2').val($('#padd2').val());
    var peraddress3 = $('#peraddress3').val($('#padd3').val());
    var peraddress4 = $('#peraddress4').val($('#pcity').val());    
    var perpin_code = $('#perpin_code').val($('#ppin').val());
    var percountry_code = $('#percountry_code').val($('#pcoun').val());
    var perstate_code = $('#perstate_code').val($('#pst').val());
    var peraddress_proof_doc = $('#peraddress_proof_doc').val($('#peraddprof').val());  
    var peraddress_proof_no=$('#per_address_proof_id').val($('#pai').val());    
    var per_validity=$('#per_validity').val($('#pav').val());
    
}

function openGrossAmt()
{
    $('#gs_amt').attr("readonly", false);

    //$("input[name=gross_amt_range]").attr('disabled', true); // Gross Amount Radio Selection disable
    $("input[name=gross_amt_range]").attr({
        "disabled":true,
        "checked": false
    });
    $('#gs_amt').focus();

    $("#gross_amt").attr("onclick", "closeGrossAmt();"); 
}

function closeGrossAmt()
{
    $('#gs_amt').attr("readonly", true);
    $('#gs_amt').val($('#db_gsamt').val());
    var db_gross_amt_range = $("#db_gross_amt_range").val();
    //alert($("#db_gross_amt_range").val());
    //$("input[name=gross_amt_range]").val($("#db_gross_amt_range").val());
    $("input[name=gross_amt_range]").attr({
        "disabled":false,
                                            //"checked": true
                                        });

    //alert($("input[name=gross_amt_range]").val(db_gross_amt_range));
    var gross_amt_range = $('#db_gross_amt_range').val();
    //alert(gross_amt_range);
    $("input[name=gross_amt_range][value='"+ gross_amt_range +"']").prop('checked',true).trigger('change');

    
    
    $("#gross_amt").attr("onclick", "openGrossAmt();"); 
    
}  

function removeGrossAmt()
{
    $('#gs_amt').val('');
    $("input[name=gross_amt]").attr({
                                            //"disabled":false,
                                            "checked": false
                                        });

}  

function isNumberKey(txt, evt) {
    //alert(evt.keyCode);
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    var len = $(txt).val().length;
    var index = $(txt).val().indexOf('.');
    var str = $(txt).val();
    var res = str.split(".");
    var charAfterdot = (len+1) - index;
    if(charCode == 9){
        return true;
    } else {

        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
            return false;
        }
        
        
        
    }
    
    if (index>=0){
     if(charAfterdot <= 3 || charCode == 8){
        return true;
    } else {
        return false;
    } 
}

if(res[0].length<11 || charCode == 8){
    return true;    
} else {
    return false;
}


return true;
}


$(document).ready(function(){
    setTimeout(function() {
       $('#Message').fadeOut('slow');
   }, 15000); 
});


/******************* For Alphabets Only ****************/

$('.alphaonly').bind('keyup blur',function(){ 
    var node = $(this);
    node.val(node.val().replace(/[^A-Za-z]/g,'') ); }
    );

/******************************************************/ 

</script>

