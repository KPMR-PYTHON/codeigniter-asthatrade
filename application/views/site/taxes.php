<section>
    <div class="container">
        <div class="banner">
            
          
            
            
        </div>
        
    </div>
</section>
<style type="text/css">
.myButton {
    -moz-box-shadow:inset 0px 1px 0px 0px #32516f;
    -webkit-box-shadow:inset 0px 1px 0px 0px #32516f;
    box-shadow:inset 0px 1px 0px 0px #32516f;
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #32516f), color-stop(1, #32516f));
    background:-moz-linear-gradient(top, #32516f 5%, #32516f 100%);
    background:-webkit-linear-gradient(top, #32516f 5%, #32516f 100%);
    background:-o-linear-gradient(top, #32516f 5%, #32516f 100%);
    background:-ms-linear-gradient(top, #32516f 5%, #32516f 100%);
    background:linear-gradient(to bottom, #32516f 5%, #32516f 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#32516f', endColorstr='#32516f',GradientType=0);
    background-color:#32516f;
    -moz-border-radius:3px;
    -webkit-border-radius:3px;
    border-radius:3px;
    border:1px solid #32516f;
    display:inline-block;
    cursor:pointer;
    color:#ffffff;
    font-family:Arial;
    font-size:13px;
    padding:6px 24px;
    text-decoration:none;
    text-shadow:0px 1px 0px #32516f;
}
.myButton:hover {
    background:-webkit-gradient(linear, left top, left bottom, color-stop(0.05, #32516f), color-stop(1, #32516f));
    background:-moz-linear-gradient(top, #32516f 5%, #32516f 100%);
    background:-webkit-linear-gradient(top, #32516f 5%, #32516f 100%);
    background:-o-linear-gradient(top, #32516f 5%, #32516f 100%);
    background:-ms-linear-gradient(top, #32516f 5%, #32516f 100%);
    background:linear-gradient(to bottom, #32516f 5%, #32516f 100%);
    filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#000000', endColorstr='#000000',GradientType=0);
    background-color:#32516f;
}
.myButton:active {
    position:relative;
    top:1px;
}


</style>



<section class="price">
    <div class="container">
    <h3>Transaction and Other charges as per Exchange and Government</h3> </br>
        
        <table class="price_chart" cellspacing="0" cellpadding="0" width="100%">
            
    
            <tr>
                
                <td>&nbsp;</td>
                <td style="text-transform:uppercase; font-weight:600;">Equity Intraday</td>
                <td style="text-transform:uppercase; font-weight:600;">Equity Delivery</td>

                <td style="text-transform:uppercase; font-weight:600;">Futures</td>
                <td style="text-transform:uppercase; font-weight:600;">Options</td>
                
            </tr>
           
            <tr>
                <td>STT</td>
                <td>STT	0.025% on Sell Side	</td>
                <td>0.1% on both Buy and Sell	</td>
                <td>0.01% on Sell Side</td>
                <td>0.05% on Sell Side(on Premium), </br>
0.125% to buyer(on exercise)</td>
                 
            </tr>
        
            <tr>
                <td>Transaction/Turnover Charges</td>
                <td>Rs.325/crore</td>
                <td>Rs.325/crore</td>
                <td>Rs.190/crore </td>
                <td>Rs.5000/crore of premium</td>
                 
            </tr>
            <tr>
                <td>GST</td>
                <td>18% on Brokerage + Transaction Charge</td>
                <td>18% on Brokerage +Transaction Charge</td>
                <td>18% on Brokerage + Transaction Charge</td>
                <td>18% on Brokerage + Transaction Charge</td>
                 
            </tr>
            <tr>
                <td>SEBI Charges</td>
                <td>10 Rs/ Crore</td>
                <td>10 Rs/ Crore</td>
                <td>10 Rs/ Crore </td>
                <td>10 Rs/ Crore</td>
                 
            </tr>
            <tr>
                <td>Stamp Charges</td>
                <td>As per your state

</td>
                <td>As per your state

</td>
                <td>As per your state

</td>
                <td>As per your state

</td>
 
            </tr> 
  </table>

      <table class="price_chart" cellspacing="0" cellpadding="0" width="100%">
            <tr>
                <td>&nbsp;</td>
                
                <td style="text-transform:uppercase; font-weight:600;">MCX Intraday</td>
                <td style="text-transform:uppercase; font-weight:600;">MCX Carry forward</td>

            </tr> 
          
       
            <tr>
                <td>CTT</td>
                <td>0.01% on selling turnover</td>
                <td>0.01% on selling turnover</td>
                 
            </tr>
            <tr>
                <td>Transaction/Turnover Charges</td>
                <td>Rs.390/crore</td>
                <td>Rs.390/crore</td>
                 
            </tr>
            <tr>
                <td>GST</td>
                <td>18% on Brokerage +Transaction Charge</td>
                <td>18% on Brokerage +Transaction Charge</td>
                 
            </tr>
            <tr>
                <td>SEBI Charges</td>
                <td>10 Rs/Crore</td>
                <td>10 Rs/Crore</td>
                 
            </tr>
            <tr>
                <td>Stamp Charges</td>
                <td>As per your state

</td>
                <td>As per your state

</td>
 
            </tr>
        </table> 
       

     
        
    </div>
</section>




<script>
var angleStart = -360;

// jquery rotate animation
function rotate(li, d) {
  $({
    d: angleStart
  }).animate({
    d: d
  }, {
    step: function(now) {
      $(li)
        .css({
          transform: 'rotate(' + now + 'deg)'
        })
        .find('label')
        .css({
          transform: 'rotate(' + (-now) + 'deg)'
        });
    },
    duration: 0
  });
}

// show / hide the options
function toggleOptions(s) {
  $(s).toggleClass('open');
  var li = $(s).find('li');
  var deg = $(s).hasClass('half') ? 180 / (li.length - 1) : 360 / li.length;
  for (var i = 0; i < li.length; i++) {
    var d = $(s).hasClass('half') ? (i * deg) - 90 : i * deg;
    $(s).hasClass('open') ? rotate(li[i], d) : rotate(li[i], angleStart);
  }
}

$('.selector button').click(function(e) {
  toggleOptions($(this).parent());
});

setTimeout(function() {
  toggleOptions('.selector');
}, 100);
</script>
