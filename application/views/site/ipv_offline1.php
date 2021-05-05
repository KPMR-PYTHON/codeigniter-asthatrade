<section class="pricing_part">
	<div class="container pricing">

   <!-- <iframe frameborder="1" style="position:center;height:690px;width:50%;border:none;" src='https://forms.zohopublic.com/brajendrasingh/form/ClientDetails/formperma/MjkDKm8445meHF2g13014KmD4'></iframe> -->

<script style="position:leftr; type="text/javascript" src="https://forms.zohopublic.com/brajendrasingh/form/ClientDetails/jsperma/MjkDKm8445meHF2g13014KmD4?height=800px&width=75%25"" id="ZFScript">


</script>


    
   </div>
</section>



<section>
	<div class="container">
    	    
        <div class="product_part1">
        	<h3>Sample Image </h3>
          


 
        
        <div class="product_part2">
              <img src="/download/sample_image_ipv.jpg" alt="" />
        </div>


    </div>
</section>










<!--

<section class="pricing_part">
	<div class="container margin">

        	<div class="margin_box">
        	<h2>40X<br>
<span>Margin</span></h2>
            <h3>NSE Cash
Intraday (MIS)</h3></br> <p align="right"> <a href="http://www.acstrade.in/download/NSE_Cash_Margin.pdf" target="_blank"> <span class="yellow"> Click here for Download <span> </a> </p>
        </div>
        
        <div class="margin_box">
        	<h2>10X<br>
<span>Margin</span></h2>
            <h3>NSE Futures 
Intraday (MIS)</h3> </br> <p align="right"> <a href="http://www.acstrade.in/download/NSEF&O_Margin.pdf" target="_blank"> <span class="yellow"> Click here for Download <span> </a> </p>
        </div>

        <div class="margin_box">
        	<h2>10X<br>
<span>Margin</span></h2>
            <h3>MCX Futures 
Intraday (MIS)</h3> </br> <p align="right"> <a href="http://www.acstrade.in/download/MCX_Margin.pdf" target="_blank"> <span class="yellow"> Click here for Download <span> </a> </p>
        </div>

        
        <div class="margin_box">
        	<h2>10X<br>
<span>Margin</span></h2>
            <h3>NSE Cash
Delivery (CNC)</h3>
        </div>
        
        <div class="margin_box">
        	<h2>7X<br>
<span>Margin</span></h2>
            <h3>NSE Options
(selling)
Intraday (MIS)</h3> </br> <p align="right"> <a href="http://www.acstrade.in/download/NSEF&O_Margin.pdf" target="_blank"> <span class="yellow"> Click here for Download <span> </a> </p>
        </div>


    
   </div>
</section> -->

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
