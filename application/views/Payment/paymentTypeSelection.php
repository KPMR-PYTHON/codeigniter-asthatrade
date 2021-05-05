<div class="container2">
<?php // if($this->session->userdata('acc_type')=='1'){echo 'Equity';}else{echo 'Commodity';}?>
<form action="<?php echo base_url(); ?>payment/paymentOption" method="post">
<table width="100%" cellpadding="0" cellspacing="0" style=" margin:3% 0; float:left;">
  <tr>
      <td width="30%" style="padding:8px 10px; border-top:1px solid #ccc; border-left:1px solid #ccc;border-right:1px solid #ccc;">Name</td>
      <td width="70%" style="padding:8px 10px; border-top:1px solid #ccc; border-right:1px solid #ccc;"><?php echo $name; ?></td>
  </tr>
  <tr>
      <td width="30%" style="padding:8px 10px; border-top:1px solid #ccc; border-left:1px solid #ccc;border-right:1px solid #ccc;">Email Addres</td>
      <td width="70%" style="padding:8px 10px; border-top:1px solid #ccc; border-right:1px solid #ccc;"><?php echo $email;?></td>
  </tr>
  <tr>
      <td width="30%" style="padding:8px 10px; border-top:1px solid #ccc; border-left:1px solid #ccc;border-right:1px solid #ccc;">Account Type</td>
      <td width="70%" style="padding:8px 10px; border-top:1px solid #ccc; border-right:1px solid #ccc;">
        <?php 
			if($accType == '1'){ echo 'Equity'; }
            else{ echo 'Commodity'; } 		   
        ?>
      </td>
  </tr>
  <tr>
      <td width="30%" style="padding:8px 10px; border-top:1px solid #ccc; border-left:1px solid #ccc;border-right:1px solid #ccc;">Pay Ammount</td>
      <td width="70%" style="padding:8px 10px; border-top:1px solid #ccc; border-right:1px solid #ccc;"><?php echo $amount;?></td>
  </tr>
 
  <tr>
      <td colspan="2" style="padding:8px 10px; border-top:1px solid #ccc;"><input type="submit" id="go-to-atom" value="Pay Now" style="width:28%; padding:10px 10px; background:#325170; color:#fff; text-transform:uppercase; border:none; font-weight:400; font-size:16px; display:block; text-align:center; margin:0 auto;"/></td>
  </tr>
  
  <tr>
<td>
<?php if($accType == '1'){?>
<input type="hidden" name="login" value="2161"/>
<?php } else { ?>
<input type="hidden" name="login" value="2160"/>
<?php } ?>
</td>
  </tr>
</table>


<input type="hidden" name="clientcode" value="<?php echo $user_id;?>"/>
<input type="hidden" name="TType" value="NBFundTransfer"/>
<input type="hidden" name="udf1" value="<?php echo $name;?>"/>
<input type="hidden" name="custacc" value="<?=$mobile_ph;?>"/>
<input type="hidden" name="amt" value="<?=$amount;?>"/>
<input type="hidden" name="txnid" value="<?=$trn_id;?>"/>
<input type="hidden" name="ru" value="<?php echo base_url(); ?>payment/paymentResponse"/>
<input type="hidden" name="udf2" value="<?=$email;?>"/>
<input type="hidden" name="udf3" value="<?=$mobile_ph;?>"/>
<input type="hidden" name="udf4" value="<?=$address1.''.$address2;?>"/>
<input type="hidden" name="product" value="ADMISSION_FORM"/>
<input type="hidden" name="surcharge" value="0"/>
<?php
/* if($accType=='1')
{
?>
<input type="text" name="login" value="2161"/>
<?}else {?>
<input type="text" name="login" value="2160"/>
<?php
} */
?>


<INPUT TYPE="hidden" NAME="AccountNo" value="<?=$mobile_ph;?>">
<input type="hidden" name="bookingid" value="<?=$mobile_ph;?>"/>

<?php // @array_flip($payment_method); ?>

</form>
</div>


