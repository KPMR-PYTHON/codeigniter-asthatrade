<section class="account_open_form">
    <div class="container ">
        <div class="account_form">
            <form name="register" id="register" action="<?php echo base_url(); ?>account/updateProfile" method="post" enctype="multipart/form-data" />

                <h2>
                    Identity Details
                </h2>
                <div class="col-2">
                    <label> First Name :</label>
                    <input type="text" placeholder="As per PAN Card First name " name="fname" value="<?php echo $fname;?>"  readonly="readonly"/>
                </div>
                
                <div class="col-2">
                    <label> Middle Name :</label>
                    <input type="text" placeholder="As per PAN Card Middle name " name="mname" value="" class="alphaonly" />
                </div>
                
                <div class="col-2">
                    <label> Last Name :</label>
                    <input type="text" placeholder="As per PAN Card last name " name="lname" value="<?php echo $lname;?>" readonly="readonly" />
                </div>
                
                <div class="col-2">
                    <label> Father/Spouse's First Name :</label>
                    <input type="text" placeholder="Father/Spouse's First Name " name="ffname" id="ffname" value="" class="alphaonly" />
                </div>
                <div class="col-2">
                    <label> Father/Spouse's Middle Name :</label>
                    <input type="text" placeholder="Father/Spouse's Middle Name " name="fmname" id="fmname" value="" class="alphaonly" />
                </div>
                <div class="col-2">
                    <label> Father/Spouse's Last Name :</label>
                    <input type="text" placeholder="Father/Spouse's Last Name " name="flname" id="flname" value="" class="alphaonly" />
                </div>
                <div class="col-2">
                    <label> Mother's First Name :</label>
                    <input type="text" placeholder="Mother's First Name " name="mfname" id="mfname" value="" class="alphaonly" />
                </div>
                <div class="col-2">
                    <label> Mother's Middle Name :</label>
                    <input type="text" placeholder="Mother's Middle Name " name="mmname" id="mmname" value="" class="alphaonly" />
                </div>
                <div class="col-2">
                    <label> Mother's Last Name :</label>
                    <input type="text" placeholder="Mother's Last Name " name="mlname" id="mlname" value="" class="alphaonly" />
                </div>
                <div class="col-2">
                    
                    <label> Gender :</label>
                    <br>
                    <label>Male</label>
                    <input type="radio" name="gender" value="m"/>
                    <label>Female</label>
                    <input type="radio" name="gender" value="f"/>
                    <div class="clear"></div>
                    <span id="err_gender" style="color:red;" ></span>
                </div>
                
                
                
                <div class="col-2">
                    
                    <label> Marital Status :</label>
                    <br>
                    <label>Married </label>
                    <input type="radio" name="marital_status" value="1"/>
                    <label>Unmarried </label>
                    <input type="radio" name="marital_status" value="0"/>
                    <span id="err_marital_status" style="color:red;" ></span>  
                </div>
                <div class="col-2">
                    
                    <label> Status :</label>
                    <select name="residencial_status" value="" class="dropdown2">
                        <option value="0">Resident Individual</option>
                        <option value="1">Non Resident</option>
                        <option value="2">Foreign National</option>
                        <option value="3">Person of Indian Origin</option>
                    </select>
                    
                </div>
                <div class="col-2">
                    <label> Nationality :</label>
                    <input type="text" name="nationality" id="nationality" placeholder="Nationality" value="" class="alphaonly" />
                </div>
                
                <div class="col-2">
                    <label> Date of Birth :</label>
                    <input type="text" id="datepicker" name="dob" placeholder="DD-MM-YYYY" value="" />

                </div>
                <div class="col-2">
                    <label> PAN Card Number :</label>
                    <input  maxlength="10" type="text" name="pan_card_no" id="pan_card_no" placeholder="PAN Card Number" class="toUpper"/>
                </div>
                <div class="col-2">
                    <label> UID / Aadhaar Card  :</label>
                    <input maxlength="12" type="text" name="aadher_card" id="aadher_card" placeholder="UID / Aadhaar no " class="isNumber" />
                </div>
                <div class="clear"></div>
                <h2>
                    Correspondence Address
                </h2>
                <div class="col-2">
                    <label> Address Line 1:</label>
                    <input type="text" maxlength="36" name="address1" id="address1" placeholder="Flat/House No."/>
                </div>
                <div class="col-2">
                    <label> Address Line 2:</label>
                    <input type="text" maxlength="36" name="address2" id="address2" placeholder="Society/Area"/>
                </div>
                <div class="col-2">
                    <label> Address Line 3:</label>
                    <input type="text" maxlength="36" name="address3" id="address3" placeholder="Landmark"/>
                </div>
                <div class="col-2">
                    <label> City / Town / Village :</label>
                    <input type="text" maxlength="36" name="address4" id="address4" placeholder="City / Town / Village " class="alphaonly" />
                </div>
                <div class="col-2">
                    <label> PIN Code :</label>
                    <input maxlength="6" type="text" name="pin_code" id="pin_code" placeholder="PIN Code" onkeypress='return isNumberKey(this,event);' />
                </div>
                <div class="col-2">
                    <label> Country :</label>
                    <select name="country_code" id="country_code" class="dropdown2"  onchange="state_details(this.value);">
                        <?php
                        foreach ($countrydetails as $row)
                        {
                           
                            ?>
                            <option value="<?php echo $row['id'];?>" <?php if($row['id']=='100'){?>selected="selected"<?php } ?> ><?php echo $row['name'];?></option>
                            <?php
                        }
                        ?>
                    </select>
                </div>      
                
                <div class="col-2">
                    <label> State :</label>
                    <select name="state_code" id="state_code" class="dropdown2">
                        <?php
                        foreach ($stateDetails as $row_state)
                        {
                         ?>
                         <option value="<?php echo $row_state['id'];?>"><?php echo $row_state['name'];?></option>
                         <?php
                     }
                     ?>
                 </select>
             </div> 
             <div class="col-2">
                <label> Address Proof :</label>
                <select name="address_proof_doc" id="address_proof_doc" class="dropdown2">
                 <?php
                 foreach ($addressProofDocs as $row_adr)
                 {
                     ?>
                     <option value="<?php echo $row_adr['id'];?>"><?php echo $row_adr['addressproofdoc'];?></option>
                     <?php
                 }
                 ?>
             </select>
         </div> 
         
         
         <div class="col-3">
            <input type="checkbox" name="permanent_address" id="permanent_address" onclick="copyAdd();" />
            <label> My permanent address is the same as my correspondence address </label>
        </div>

        <div class="clear"></div>
        <h2>
            Permanent Address
        </h2>
        <div class="col-2">
            <label> Address Line 1:</label>
            <input type="text" maxlength="36" name="peraddress1" id="peraddress1" placeholder="Flat/House Number"/>
        </div>
        <div class="col-2">
            <label> Address Line 2:</label>
            <input type="text" maxlength="36" name="peraddress2" id="peraddress2" placeholder="Society/Area"/>
        </div>
        <div class="col-2">
            <label> Address Line 3:</label>
            <input type="text" maxlength="36" name="peraddress3" id="peraddress3" placeholder="Landmark"/>
        </div>
        <div class="col-2">
            <label> City / Town / Village :</label>
            <input type="text" maxlength="36" name="peraddress4" id="peraddress4" placeholder="City / Town / Village " class="alphaonly" />
        </div>
        <div class="col-2">
            <label> PIN Code :</label>
            <input type="text" maxlength="6" name="perpin_code" id="perpin_code" placeholder="PIN Code" onkeypress='return isNumberKey(this,event);'/>
        </div>
        <div class="col-2">
            <label> Country :</label>
            <select name="percountry_code" id="percountry_code" class="dropdown2" onchange="state_details(this.value);">
                <?php
                foreach ($countrydetails as $row)
                {
                    ?>
                    <option value="<?php echo $row['id'];?>" <?php if($row['id']=='100'){?>selected="selected"<?php } ?>><?php echo $row['name'];?></option>
                    <?php
                }
                ?>
            </select>
        </div>      
        
        <div class="col-2">
            <label> State :</label>
            <select name="perstate_code" id="perstate_code" class="dropdown2">
                <?php
                foreach ($stateDetails as $row_state)
                {
                 ?>
                 <option value="<?php echo $row_state['id'];?>"><?php echo $row_state['name'];?></option>
                 <?php
             }
             ?>
         </select>
     </div> 
     <div class="col-2">
        <label> Address Proof :</label>
        <select name="peraddress_proof_doc" id="peraddress_proof_doc" class="dropdown2">
         <?php
         foreach ($addressProofDocs as $row_adr)
         {
             ?>
             <option value="<?php echo $row_adr['id'];?>"><?php echo $row_adr['addressproofdoc'];?></option>
             <?php
         }
         ?>
     </select>
 </div>
 
 
 
 <div class="clear"></div>

 <h2>Contact Information</h2>
 <div class="col-2">
    <label>Email Address : </label>
    <input type="text" name="email_address" value="<?php echo $email_id;?>" readonly="readonly" placeholder="Email Address"/>
    
</div>
<div class="col-2">
    <label>Phone (Mobile) : </label>
    <input type="text" name="mobile_ph" placeholder="Mobile Number" value="<?php echo $mobile_no;?>" readonly="readonly" onkeypress='return isNumberKey(this,event);'/>
    
</div>
<div class="col-2">
    <label>Phone (Off) : </label><br/>
    
    <input maxlength="4" class="sufx" type="text" name="office_ph_code" placeholder="Area Code" value="" onkeypress='return isNumberKey(this,event);'/> -
    <input class="prfx" type="text" name="office_ph" placeholder="Office Phone Number" value="" onkeypress='return isNumberKey(this,event);' />
</div>
<div class="col-2">
    <label>Phone (Home) : </label><br/>
    
    <input maxlength="4" class="sufx" name="home_ph_code" placeholder="Area Code" value="" onkeypress='return isNumberKey(this,event);' /> -
    <input class="prfx" name="home_ph" placeholder="Home Phone Number" value="" onkeypress='return isNumberKey(this,event);' />
</div>
<div class="col-2">
    <label>Fax : </label><br/>
    <input maxlength="4" class="sufx" type="text" name="fax_ph_code" placeholder="Area Code" value="" onkeypress='return isNumberKey(this,event);' /> -
    <input class="prfx" type="text" name="fax_ph" placeholder="Fax Number" value="" onkeypress='return isNumberKey(this,event);' />
</div>
<div class="clear"></div>
<h2>Other Details</h2>
<div class="col-4">
    <input type="checkbox" name="gross_amt" id="gross_amt" onclick="openGrossAmt();" />
    <label> Instead of Gross Annual Income Range, I want to specify Net Worth  </label>
</div>
<div class="col-2">
    <input type="text" name="gs_amt" id="gs_amt" value="" readonly="readonly" onkeypress='return isNumberKey(this,event);' />
    
</div>
<div class="col-4">
    
    <label> Gross Annual Income Range :</label>
    <br>
    <label> below_1L </label>
    <input name="gross_amt_range" type="radio" placeholder="" value="1" onClick="removeGrossAmt();" />
    <label> 1L_to_5L </label>
    <input name="gross_amt_range" type="radio" placeholder="" value="2" onClick="removeGrossAmt();" />
    <label>  5L_to_10L  </label>
    <input name="gross_amt_range" type="radio" placeholder="" value="3" onClick="removeGrossAmt();" />
    <label>  10L_to_25L </label>
    <input name="gross_amt_range" type="radio" placeholder="" value="4" onClick="removeGrossAmt();" />
    <label> above_25L  </label>
    <input name="gross_amt_range" type="radio" placeholder="" value="5" onClick="removeGrossAmt();" />
    <div class="clear"></div>
    <span id="errgross_amt_range" style="color:red;" ></span>
</div>
<div class="col-2">
    <label> Occupation :</label>
    <select id="Occupation"  name="Occupation" class="dropdown2">
     <?php
     foreach ($occupationDetails as $row_occupation)
     {
      ?>
      <option value="<?php echo $row_occupation['id'];?>"><?php echo $row_occupation['occupationname'];?></option>
      <?php
  }
  ?>
</select>
</div>
<div class="clear"></div> 
<h2>Primary Banking Account</h2> 
<div class="col-2">
    <label>Bank Name : </label>
    <input type="text" name="bank_name" id="bank_name" value=""  placeholder="Bank Name" class="alphaonly" />
</div>
<div class="col-2">
    <label>Branch Address: </label>
    <input type="text" maxlength="36" name="branch_address" id="branch_address" value="" placeholder="Branch Address"/>
</div>
<div class="col-2">
    <label>City : </label>
    <input type="text" maxlength="36" name="branch_city" id="branch_city" value="" placeholder="City" class="alphaonly" />
</div>
<div class="col-2">
    <label>PIN : </label><br/>
    <input maxlength="6" type="text" name="branch_pin" id="branch_pin" value="" placeholder="PIN" onkeypress='return isNumberKey(this,event);' />
</div> 
<div class="col-2">
    <label> State :</label>
    <select name="branch_state"  class="dropdown2">
     <?php
     foreach ($stateDetails as $row_state)
     {
         ?>
         <option value="<?php echo $row_state['id'];?>"><?php echo $row_state['name'];?></option>
         <?php
     }
     ?>
 </select>
</div> 
<div class="col-2">
    <label>Account Number : </label>
    <input type="text" maxlength="30" name="acc_number" id="acc_number" value=""  placeholder="Account Number" />
</div> 
<div class="col-2">
    <label>MICR Number : </label>
    <input maxlength="9" type="text" name="micr_number" id="micr_number" value="" placeholder="MICR Number"/>
</div> 

<div class="col-2">
    <label> Account Type :</label>
    <br>
    <label>Saving  </label>
    <input type="radio" name="account_type" placeholder="" value="1" checked="checked"/>
    <label>Current</label>
    <input type="radio" name="account_type"  placeholder="" value="2"/>
    <label>  NRE / NRO  </label>
    <input type="radio" name="account_type"  placeholder="" value="3"/>
    <span id="erraccount_type"></span>
</div>

<div class="col-2">
    <label>IFSC Code : </label>
    <input maxlength="11" type="text" name="ifsc_code" id="ifsc_code"  placeholder="IFSC Code" value=""/>
</div> 
<div class="col-2">
    <input type="hidden" name="user_id" value="<?=$userId;?>"/>
    <input class="acc-register-button" type="button" name="register_button" placeholder="" value="SUBMIT" onclick="validation();"/>
</div> 



</form>
</div>

<!-- <div class="form_note">
    
    <div class="clear"></div>
    <p><b>Note :</b> Please Fill this form and take Printout. Send it along with mandatory documents (self attested).
        <br><br>
        <b>Required Document for Account Opening (Self Attested) :-</b><br>
        1. Pan Card Copy<br>
        2. Address Proof any one ( Bank Passbook with leteast statement ,Voter id Card, Driving Licience,<br> Passport & Adhar Card)<br>
        3. One Photo<br>
        4. Initial Cheque Rs 500 in favor of <span>" Astha Commodities" </span><br>
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
</section>

<script>
//jQuery.noConflict();
/* $(function(){
$("#datepicker").datepicker({ dateFormat: 'dd-mm-yy' });

}); */

$(document).ready(function () {
    $("#datepicker").datepicker({
     dateFormat: 'dd-mm-yy',
     showOn: "button",
     buttonImage: "<?php echo base_url();?>content/images/1482512262_calendar_edit.png",
     buttonImageOnly: true,
     buttonText: "Select date"
 });
});
</script>


<script>
var modalEl = document.getElementById('modal');
var modalInst = new Modal(modalEl, {
  openCallback: function() {
    console.log('Callback for when Modal is open.');
},
closeCallback: function() {
    console.log('Callback for when Modal is closed.');
}
});
modalInst.init();
</script>

<script>

function validation(){
    //var accType=$('input[name=type]:checked').val();
    //var payMethod=$('input[name=payment_method]:checked').val();
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
    
    
	/*if (!accType) {
        $('#accType').html('Please Select Account Type');
		$('input[name=type]').focus();
        return false;          
    } else if(!payMethod){
        $('#payM').html('Please Select Payment Method');
		$('input[name=payment_method]').focus();
        return false;
    } else */if(fname==''){
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
    dataLayer.push({'event':'form-completed'});
    document.getElementById("register").submit();
} 
}

function copyAdd(){
    var address1=$('#address1').val();
    var address2=$('#address2').val();
    var address3=$('#address3').val();
    var address4=$('#address4').val();
    var pin_code=$('#pin_code').val();
    var state_code=$('#state_code').val();
    var country_code=$('#country_code').val();
    
    var address_proof_doc=$('#address_proof_doc').val();
    //var corr_address_proof_id=$('#corr_address_proof_id').val();
	//var corr_validity=$('#corr_validity').val();
    $("#permanent_address").attr("onclick", "removeAdd();");
    
    var peraddress1=$('#peraddress1').val(address1);
    var peraddress2=$('#peraddress2').val(address2);
    var peraddress3=$('#peraddress3').val(address3);
    var peraddress4=$('#peraddress4').val(address4);
    var perpin_code=$('#perpin_code').val(pin_code);
    var perstate_code=$('#perstate_code').val(state_code);
    var percountry_code=$('#percountry_code').val(country_code);
    var peraddress_proof_doc=$('#peraddress_proof_doc').val(address_proof_doc);   
	//var peraddress_proof_no=$('#per_address_proof_id').val(corr_address_proof_id);	
	//var per_validity=$('#per_validity').val(corr_validity);
}

function removeAdd(){
    
    $("#permanent_address").attr("onclick", "copyAdd();");
    
    var peraddress1 = $('#peraddress1').val('');
    var peraddress2 = $('#peraddress2').val('');
    var peraddress3 = $('#peraddress3').val('');
    var peraddress4 = $('#peraddress4').val('');
    var perpin_code = $('#perpin_code').val('');
    var percountry_code = $('#percountry_code').val('');
    var perstate_code = $('#perstate_code').val('');
    var peraddress_proof_doc = $('#peraddress_proof_doc').val(''); 
    var peraddress_proof_no=$('#per_address_proof_id').val('');	
    var per_validity=$('#per_validity').val('');	
}

function openGrossAmt(){
    $('#gs_amt').attr("readonly", false);
    $("input[name=gross_amt_range]").attr({
     "disabled":true,
     "checked": false
 });
    $('#gs_amt').focus();
    $("#gross_amt").attr("onclick", "closeGrossAmt();"); 
}

function closeGrossAmt(){
    $('#gs_amt').attr("readonly", true);
    $('#gs_amt').val('');
    $("input[name=gross_amt_range]").attr({
     "disabled":false,
											//"checked": true
                                     });
    $("#gross_amt").attr("onclick", "openGrossAmt();");  
}  
function removeGrossAmt()
{
	$('#gs_amt').val('');
	
}  

function checkGrossAmt() {
	var grossAmtChkBox = $('input[name=gross_amt]:checked').val();
	var myChecked = 0; // initialize the variable we'll use to test for checks	
	for (var i=0; i < grossAmtChkBox.length; i++)  {
		if (grossAmtChkBox[i].checked)  {
			myChecked = 1;			
		}
	}	
	if (myChecked == 1) {
		return true;	
	} else {
		alert("Choose one radio Button!");
		return false;
	}
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



$(function() {
    $('.toUpper').keyup(function() {
        this.value = this.value.toUpperCase();
    });
});


$('.isNumber').keypress(function (event) {
    var keycode = event.which;
    if (!(event.shiftKey == false && (keycode == 46 || keycode == 8 || keycode == 37 || keycode == 39 || (keycode >= 48 && keycode <= 57)))) {
        event.preventDefault();
    }
});


</script>


