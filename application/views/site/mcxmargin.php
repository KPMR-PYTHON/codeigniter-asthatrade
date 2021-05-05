<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script>
/*
Please consider that the JS part isn't production ready at all, I just code it to show the concept of merging filters and titles together !
*/
$(document).ready(function(){
    $('.filterable .btn-filter').click(function(){
        var $panel = $(this).parents('.filterable'),
        $filters = $panel.find('.filters input'),
        $tbody = $panel.find('.table tbody');
        if ($filters.prop('disabled') == true) {
            $filters.prop('disabled', false);
            $filters.first().focus();
        } else {
            $filters.val('').prop('disabled', true);
            $tbody.find('.no-result').remove();
            $tbody.find('tr').show();
        }
    });

    $('.filterable .filters input').keyup(function(e){
        /* Ignore tab key */
        var code = e.keyCode || e.which;
        if (code == '9') return;
        /* Useful DOM data and selectors */
        var $input = $(this),
        inputContent = $input.val().toLowerCase(),
        $panel = $input.parents('.filterable'),
        column = $panel.find('.filters th').index($input.parents('th')),
        $table = $panel.find('.table'),
        $rows = $table.find('tbody tr');
        /* Dirtiest filter function ever ;) */
        var $filteredRows = $rows.filter(function(){
            var value = $(this).find('td').eq(column).text().toLowerCase();
            return value.indexOf(inputContent) === -1;
        });
        /* Clean previous no-result if exist */
        $table.find('tbody .no-result').remove();
        /* Show all rows, hide filtered ones (never do that outside of a demo ! xD) */
        $rows.show();
        $filteredRows.hide();
        /* Prepend no-result row if all rows are filtered */
        if ($filteredRows.length === $rows.length) {
            $table.find('tbody').prepend($('<tr class="no-result text-center"><td colspan="'+ $table.find('.filters th').length +'">No result found</td></tr>'));
        }
    });
});
</script>
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
<style>
div.ex1 {
  background-color: white;
  width: 100%;
  overflow-x: scroll;
}
</style>

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
<style>
.filterable {
    margin-top: 15px;
}
.filterable .panel-heading .pull-right {
    margin-top: -20px;
}
.filterable .filters input[disabled] {
    background-color: transparent;
    border: none;
    cursor: auto;
    box-shadow: none;
    padding: 0;
    height: auto;
}
.filterable .filters input[disabled]::-webkit-input-placeholder {
    color: #333;
}
.filterable .filters input[disabled]::-moz-placeholder {
    color: #333;
}
.filterable .filters input[disabled]:-ms-input-placeholder {
    color: #333;
}
</style>

<section class="pricing_part">
	<div class="container pricing">

<p> </br></br>
	<h2>Margin/Exposure </h2> </br>
</p>

		NSE F&amp;O:-


<a href="<?php echo base_url();?>site/nsefo" alt="" /> <span class="yellow"> <font size="4">  Click here </font> <span> </a> 	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	


		NSE Cash:-
	

<a href="<?php echo base_url();?>site/margin" alt="" /> <span class="yellow"> <font size="4">  Click here </font> <span> </a> 
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;



	



	
		MCX:-
	

<a href="<?php echo base_url();?>site/mcxmargin" alt="" /> <span class="yellow"> <font size="4">  Click here </font> <span> </a>     

</br></br>

    
   </div> 
</section> </br> 

<section class="pricing_part">
	<div class="container pricing">


<div class="container">
    
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                 

				  
				                  <div class="pull-left">
                 <button>  <a href="https://s3.ap-south-1.amazonaws.com/asthawebsite/MCX_Margin.pdf" target="_blank" > download pdf  </a> </button> 
                </div> 
				<h3 class="panel-title">Commodity (MCX) </h3>
            </div>
			<div class="ex1">
            <table class="table">
            
                <thead>
                    <tr class="filters">
					    <th><input type="text" class="form-control" placeholder="Symbol" ></th>
                        
                        
                        
                    </tr>
					
                </thead>
                <tbody>
 <thead> <tr> 
<th>Symbol</th>
<th>Expiry </br> Month</th>
<th>Price (Rs)</th>
<th>Lot Size</th>

<th>Carryover </br> Margin(%)</th>
<th>Future Intraday</br> Margin (Rs.)</th>

<th>Future Carryover</br> Margin&nbsp; (Rs.)</th>
<th> </th></tr>  </thead> 

<tr><td>GOLD</td><td>04-Oct-19</td><td>35419</td><td>100</td><td>5.25</td><td>10000</td><td>185950</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>SILVER</td><td>05-Sep-19</td><td>41227</td><td>30</td><td>5.86</td><td>5000</td><td>72477</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>COPPER</td><td>30-Aug-19</td><td>444.15</td><td>2500</td><td>5.25</td><td>5000</td><td>58295</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>CRUDEOIL</td><td>19-Aug-19</td><td>4032</td><td>100</td><td>9.72</td><td>2000</td><td>39191</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>ZINC</td><td>30-Aug-19</td><td>192.25</td><td>5000</td><td>5.45</td><td>7500</td><td>52388</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>NICKEL</td><td>30-Aug-19</td><td>1013.5</td><td>250</td><td>10.28</td><td>3000</td><td>26047</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>LEAD</td><td>30-Aug-19</td><td>154.05</td><td>5000</td><td>6.41</td><td>7500</td><td>49373</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>ALUMINIUM</td><td>30-Aug-19</td><td>140.35</td><td>5000</td><td>5.25</td><td>7500</td><td>36842</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>GOLDM</td><td>05-Sep-19</td><td>35105</td><td>10</td><td>5.25</td><td>1000</td><td>18430</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>SILVERM</td><td>30-Aug-19</td><td>41230</td><td>5</td><td>5.8</td><td>1000</td><td>11957</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>CRUDEOILM</td><td>19-Aug-19</td><td>4032</td><td>10</td><td>9.59</td><td>200</td><td>3867</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>ZINCMINI</td><td>30-Aug-19</td><td>192.45</td><td>1000</td><td>5.25</td><td>1000</td><td>10104</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>LEADMINI</td><td>30-Aug-19</td><td>154.1</td><td>1000</td><td>5.94</td><td>1000</td><td>9154</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>SILVERMIC</td><td>30-Aug-19</td><td>41229</td><td>1</td><td>5.78</td><td>300</td><td>2383</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>ALUMINI</td><td>30-Aug-19</td><td>140.5</td><td>1000</td><td>5.25</td><td>1000</td><td>7376</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>NATURALGAS</td><td>27-Aug-19</td><td>155.1</td><td>1250</td><td>14.46</td><td>3000</td><td>28034</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>MENTHAOIL</td><td>30-Aug-19</td><td>1278.7</td><td>360</td><td>8.66</td><td>4603</td><td>39865</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>

                </tbody>
            </table>
        </div>
    </div></div> </div>
</div></section>




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


<style>
html {
  font-family: "roboto", helvetica;
  position: relative;
  height: 100%;
  font-size: 100%;
  line-height: 1.5;
  color: #444;
}


.v-center {
  height: 100vh;
  width: 100%;
  display: table;
  position: relative;
  text-align: center;
}

.v-center > div {
  display: table-cell;
  vertical-align: middle;
  position: relative;
  top: -10%;
}

.btn1 {
  font-size: 3vmin;
  padding: 0.75em 1.5em;
  background-color: #fff;
  border: 1px solid #bbb;
  color: #333;
  text-decoration: none;
  display: inline;
  border-radius: 4px;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}

.btn1:hover {
  background-color: #ddd;
  -webkit-transition: background-color 1s ease;
  -moz-transition: background-color 1s ease;
  transition: background-color 1s ease;
}

.btn-small {
  padding: .75em 1em;
  font-size: 0.8em;
}

.modal-box {
  display: none;
  position: absolute;
  z-index: 10040;
  width: 98%;
  background: WHITE;
  border-bottom: 1px solid #aaa;
  border-radius: 4px;
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  border: 1px solid rgba(0, 0, 0, 0.1);
  background-clip: padding-box;
}
@media (min-width: 32em) {

.modal-box { width: 100%; }
}

.modal-box header,
.modal-box .modal-header {
  padding: 1.25em 1.5em;
  border-bottom: 1px solid #ddd;
}

.modal-box header h3,
.modal-box header h4,
.modal-box .modal-header h3,
.modal-box .modal-header h4 { margin: 0; }

.modal-box .modal-body { padding: 2em 1.5em; }

.modal-box footer,
.modal-box .modal-footer {
  padding: 1em;
  border-top: 1px solid #ddd;
  background: rgba(0, 0, 0, 0.02);
  text-align: right;
}

.modal-overlay {
  opacity: 0;
  filter: alpha(opacity=0);
  position: absolute;
  top: 0;
  left: 0;
  z-index: 900;
  width: 100%;
  height: 100%;
  background: rgba(0, 0, 0, 0.3) !important;
}

a.close {
  line-height: 1;
  font-size: 1.5em;
  position: absolute;
  top: 5%;
  right: 2%;
  text-decoration: none;
  color: #bbb;
}

a.close:hover {
  color: #222;
  -webkit-transition: color 1s ease;
  -moz-transition: color 1s ease;
  transition: color 1s ease;
}
</style>



<script>


function mit()

{
var a,b,c,d,b1,a1,e,f;
a=Number(document.getElementById("cash").value);
b1=Number(document.getElementById("lotsize").value);
a1=Number(document.getElementById("margin").value);
b=Number(document.getElementById("price").value);

//c=a+b1+a1+b;  
f=((b1*b)*a1/100);  
e=((b1*b)*1/100);

d=parseInt(a/((b1*b)*a1/100));  
c=parseInt(a/((b1*b)*1/100));

//d= a/(((b1*b)*a1%));
document.getElementById("intraday").value= c;
document.getElementById("delivery").value= d;

document.getElementById("intraday1").value= e;
document.getElementById("delivery1").value= f;


}


</script>



<section>
<div id="popup1" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
    <h3>Margin Calculate</h3>
  </header>
  <div class="modal-body">
  
  
<div class="container">
  
   <table class="table">
    <tbody>
      <tr>
        <td>Amount :- <input style='color:red' name="cash" id="cash" type="number" value='100000' onkeyup="mit()" style="border: none" / > </td>
		<td> Lot Size :- <input style='color:red' name="lotsize" id="lotsize" type="number" value='100' onkeyup="mit()" style="border: none" /> </td>
		<td>Margin (%) :-  <input style='color:red' name="margin" id="margin" type="number" value='11' onkeyup="mit()" style="border: none" /> </td>
        
         </tr>
        <tr>

		</tr>
		<tr>
        <td>Price : <input style='color:red' name="price" id="price" type="number" value='4500' onkeyup="mit()" style="border: none"/></td>
        <td> Intraday Margin: <input name="intraday1" id="intraday1" type="number" value='2500' onkeyup="mit()" style="border: none"/> </br>Intraday Lot :  <input name="intraday" id="intraday" type="number" value='8'onkeyup="mit()" style="border: none" /> </td>
		<td> CarryOver Margin :<input name="delivery1" id="delivery1" type="number" value='42000' onkeyup="mit()" style="border: none" /> </br> CarryOver Lot : <input name="delivery" id="delivery" type="number" value='1' onkeyup="mit()" style="border: none" /> </td>
        </tr>
        
    </tbody>
  </table>
 
</div>


		
		
      </div>
      
  

  <footer> <a href="#" class="btn btn-small js-modal-close">Close</a> </footer>
</div> </section>
<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script> 
<script>
$(function(){

var appendthis =  ("<div class='modal-overlay js-modal-close'></div>");

	$('a[data-modal-id]').click(function(e) {
		e.preventDefault();
    $("body").append(appendthis);
    $(".modal-overlay").fadeTo(500, 0.7);
    //$(".js-modalbox").fadeIn(500);
		var modalBox = $(this).attr('data-modal-id');
		$('#'+modalBox).fadeIn($(this).data());
	});  
  
  
$(".js-modal-close, .modal-overlay").click(function() {
    $(".modal-box, .modal-overlay").fadeOut(500, function() {
        $(".modal-overlay").remove();
    });
 
});
 
$(window).resize(function() {
    $(".modal-box").css({
        top: ($(window).height() - $(".modal-box").outerHeight()) / 2,
        left: ($(window).width() - $(".modal-box").outerWidth()) / 2
    });
});
 
$(window).resize();
 
});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
