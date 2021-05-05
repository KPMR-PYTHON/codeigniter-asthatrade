<section>
	<div class="container3">            
    <div class="banner">
      <h1>Welcome <?php echo $this->session->userdata('name');?></h1>  
    </div>
  </div>
  <div class="container3" style="padding-bottom:0px">
    <div style="margin-left:20px;width:150px;cursor: pointer;" onclick="window.location='<?php echo base_url()?>/site/profile'">
      <img src="<?php echo base_url()?>/content/images/back_arrow.svg" style="float:left;height:25px;width:25px"><span style="display:inline-block; width: 5px;"></span>
  Profile
    </div>
  </div>
  <div class="container3" style="padding-bottom:0px">
    <?php 
     if ($totCountOfAccountPay>0) {
        header("Location: tracker");
        exit;
      }
      ?>
<!--     <div >
      <table class = "payment-table">
        <tr>
          <td>
            <img src="<?php echo base_url();?>content/images/about_2.jpg">
          </td>
          <td>
            <div>
              Pay the account opening fee
            </div>
            <form id="payment_form" name="payment_form" action="<?php echo base_url(); ?>account/pay" method="post" enctype="application/form-data">
            <table>
              <tr>
                <td>
                  <input id="equity_select" name="equity_select" type="checkbox" class="addon" value="500"> Equity
                </td>
                <td>
                  &#8377 500/-
                </td>
              </tr>
              <tr>
                <td>
                  <input id="commodity_select" name="commodity_select" type="checkbox" class="addon" value="500"> Commodity
                </td>
                <td>
                  &#8377 500/-
                </td>
              </tr>
            </table>
            <div id="xyz" style="display:none">
            <input class="save_btn" type="submit" id="total" placeholder="" value="Pay &#8377" style="float:center; background:#0da0d3;" />
          </div>
          </form>
          
          </td>
        </tr>
      </table>
    </div>
    <br>
    <br>
 -->    <!-- <form action = "<?php echo base_url(); ?>site/tracker">
      <div class="col-3">
        <input type="submit" placeholder="" value="Continue" style="float:center; background:#0da0d3;"/>
      </div>
    </form>
  -->
    <div class="payment-main">
      <div class="payment-half" style="width:280px">
        <img src="<?php echo base_url();?>content/images/about_2.jpg">
        
      </div>
      <div class="payment-half" style="height:248px;border:1px solid #ccc;width:280px">
        <h4 style="text-align:center"> Pay the account opening fee </h4>
        <table>
          <tr>
            <td style="width:140px;padding-top:20px">
              Equity
            </td>
            <td style="width:140px;padding-top:20px">
              &#8377 500/-, <a class="none" href="<?php echo base_url();?>account/payForEquity">Pay Now</a>
            </td>
          </tr>
          <br>
          <tr>
            <td style="width:140px;padding-top:20px">
              Commodity
            </td>
            <td style="width:140px;padding-top:20px">
              &#8377 500/-, <a class="none" href="<?php echo base_url();?>account/payForCommodity">Pay Now</a>
            </td>
          </tr>
        </table>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript">
// function updateTotal(){
//   var basic = 0;
//   var add = 0;
//   var form = document.getElementById('payment_form');
//   var checkboxes = form.getElementsByClassName('addon');   
//   for (var i=0; i < checkboxes.length; i ++) {
//    if (checkboxes[i].checked) {
//      add += parseInt(checkboxes[i].value, 10);
//    }
//  }
//  var p = basic + add;
//  var price = p; 
//  if(p > 0){
//    document.getElementById('xyz').style.display = "block" ;
//  }
//  if(p == 0){
//    document.getElementById('xyz').style.display = "none" ;
//  }
//  document.getElementById('total').value = "Pay Rupees " + price;  
// }

// document.getElementById('payment_form').addEventListener('change', updateTotal);
// // Run it once at startup
// updateTotal();
</script>