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
                 <button>  <a href="https://s3.ap-south-1.amazonaws.com/asthawebsite/NSE_Cash_Margin.pdf" target="_blank" > download pdf  </a> </button> 
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
<th>Intraday Limit (MIS)</th>
<th>Delivery Limit</th>
<th> </th></tr>  </thead> 


<tr><td>ACC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADANIENT</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADANIPORTS</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADANIPOWER</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AMARAJABAT</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AMBUJACEM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APOLLOHOSP</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APOLLOTYRE</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARVIND</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASHOKLEY</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASIANPAINT</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AUROPHARMA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AXISBANK</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJAJ-AUTO</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJAJFINSV</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJFINANCE</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BALKRISIND</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANKBARODA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANKINDIA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BATAINDIA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BEL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BERGEPAINT</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHARATFIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHARATFORG</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHARTIARTL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHEL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BIOCON</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BOSCHLTD</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BPCL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BRITANNIA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CADILAHC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CANBK</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CANFINHOME</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CASTROLIND</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CENTURYTEX</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CESC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CHENNPETRO</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CHOLAFIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CIPLA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COALINDIA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COLPAL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CONCOR</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CUMMINSIND</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DABUR</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DHFL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DISHTV</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DIVISLAB</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DLF</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DRREDDY</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EICHERMOT</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ENGINERSIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EQUITAS</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ESCORTS</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EXIDEIND</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FEDERALBNK</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GAIL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GMRINFRA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GLENMARK</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GODFRYPHLP</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GODREJCP</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GRASIM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GSFC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HAVELLS</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HCLTECH</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDFC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDFCBANK</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HEROMOTOCO</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HEXAWARE</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDALCO</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDPETRO</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDUNILVR</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDZINC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IBULHSGFIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICIBANK</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICIPRULI</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IDBI</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IDEA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IDFCFIRSTB</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IGL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDIGO</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDUSINDBK</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INFRATEL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INFY</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IOC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ITC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JINDALSTEL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JPASSOCIAT</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JSWSTEEL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JUBLFOOD</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JUSTDIAL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KAJARIACER</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTAKBANK</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KPIT</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>L&TFH</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LICHSGFIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LT</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LUPIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>M&M</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>M&MFIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANAPPURAM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MARICO</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MARUTI</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MCDOWELL-N</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MCX</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MFSL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MGL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MINDTREE</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MOTHERSUMI</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MRF</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MRPL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MUTHOOTFIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NATIONALUM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NBCC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NCC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NESTLEIND</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NIITTECH</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NMDC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NTPC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OFSS</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OIL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ONGC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PAGEIND</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PEL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PETRONET</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PFC</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PIDILITIND</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PNB</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>POWERGRID</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PVR</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAMCOCEM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAYMOND</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RBLBANK</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RCOM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RECLTD</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELCAPITAL</td><td>40X</td><td>1 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELIANCE</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELINFRA</td><td>40X</td><td>1 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>REPCOHOME</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SAIL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SBIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHREECEM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SIEMENS</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SREINFRA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SRF</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SRTRANSFIN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STAR</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNPHARMA</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNTV</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATACHEM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAELXSI</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAGLOBAL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAMOTORS</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAMTRDVR</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAPOWER</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATASTEEL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TCS</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TECHM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TITAN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TORNTPHARM</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TORNTPOWER</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TVSMOTOR</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UBL</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UJJIVAN</td><td>40X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>

<tr><td>21STCENMGM</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>3IINFOTECH</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>3MINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>3PLAND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>5PAISA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>63MOONS</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>8KMILES</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>A2ZINFRA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AARTIDRUGS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AARTIIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AARVEEDEN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AAVAS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ABAN</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ABB</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ABBOTINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ABCAPITAL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ABFRL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ABSLNN50ET</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ACCELYA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ACE</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADANIGAS</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADANIGREEN</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADANITRANS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADFFOODS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADHUNIK</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADHUNIKIND</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADLABS</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADORWELD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADROITINFO</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADSL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADVANIHOTR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADVENZYMES</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AEGISCHEM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AGARIND</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AGCNET</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AGLSL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AGRITECH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AHLEAST</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AHLUCONT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AHLWEST</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AIAENG</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AIONJSW</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AIRAN</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AJANTPHARM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AJMERA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AKSHARCHEM</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AKSHOPTFBR</td><td>7 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AKZOINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALANKIT</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALBERTDAVD</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALBK</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALEMBICLTD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALICON</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALKALI</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALKEM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALKYLAMINE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALLCARGO</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALLSEC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALMONDZ</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALOKTEXT</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALPA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ALPHAGEO</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AMBER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AMBIKCO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AMDIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AMJLAND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AMRUTANJAN</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ANANTRAJ</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ANDHRABANK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ANDHRACEMT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ANDHRSUGAR</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ANIKINDS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ANSALAPI</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ANSALHSG</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ANUP</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APARINDS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APCL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APCOTEXIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APEX</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APLAPOLLO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APLLTD</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APOLLO</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APOLSINHOT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APTECHT</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARCHIDPLY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARCHIES</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARCOTECH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARENTERP</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARIES</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARIHANT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARIHANTSUP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARMANFIN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AROGRANITE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARROWGREEN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARROWTEX</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARSHIYA</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARSSINFRA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARVINDFASN</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARVSMART</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASAHIINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASAHISONG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASAL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASHAPURMIN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASHIANA</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASHIMASYN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASHOKA</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASIANHOTNR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASIANTILES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASPINWALL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASTEC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASTERDM</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASTRAL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASTRAMICRO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASTRAZEN</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASTRON</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ATFL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ATLANTA</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ATUL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ATULAUTO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AUBANK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AURIONPRO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AUSOMENT</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AUTOAXLES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AUTOIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AVADHSUGAR</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AVANTIFEED</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AVTNPL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AXISCADES</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AXISGOLD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AXISNIFTY</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AYMSYNTEX</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAGFILMS</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJAJCON</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJAJELEC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJAJHIND</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJAJHLDNG</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BALAJITELE</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BALAMINES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BALKRISHNA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BALLARPUR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BALMLAWRIE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BALPHARMA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BALRAMCHIN</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANARBEADS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANARISUG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANCOINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANDHANBNK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANKBEES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANSWRAS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BARTRONICS</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BASF</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BASML</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAYERCROP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BBL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BBTC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BCG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BDL</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BEARDSELL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BEDMUTHA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BEML</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BEPL</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BFINVEST</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BFUTILITIE</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BGRENERGY</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHAGERIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHAGYANGR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHAGYAPROP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHANDARI</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHARATGEAR</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHARATRAS</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHARATWIRE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BIGBLOC</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BILENERGY</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BINDALAGRO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BIRLACABLE</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BIRLACORPN</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BIRLAMONEY</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BKMINDST</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BLISSGVS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BLKASHYAP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BLS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BLUEBLENDS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BLUECOAST</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BLUEDART</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BLUESTARCO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BODALCHEM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BOMDYEING</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BOROSIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BPL</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BRIGADE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BRNL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BROOKS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BSE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BSELINFRA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BSL</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BSLGOLDETF</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BSLNIFTY</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BSOFT</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BURNPUR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BUTTERFLY</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BYKE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CALSOFT</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CAMLINFINE</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CANTABIL</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CAPACITE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CAPLIPOINT</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CAPTRUST</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CARBORUNIV</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CAREERP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CARERATING</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CCL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CDSL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CEATLTD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CEBBCO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CELEBRITY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CELESTIAL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CENTENKA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CENTEXT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CENTRALBK</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CENTRUM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CENTUM</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CENTURYPLY</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CERA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CEREBRAINT</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CESCVENT</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CGCL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CGPOWER</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CHALET</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CHAMBLFERT</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CHEMFAB</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CHOLAHLDNG</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CHROMATIC</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CIGNITITEC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CIMMCO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CINELINE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CINEVISTA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CKFSL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CLEDUCATE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CLNINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CMICABLES</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CNOVAPETRO</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COCHINSHIP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COFFEEDAY</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COMPINFO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COMPUSOFT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CONFIPET</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CONSOFINVT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CONTROLPR</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CORALFINAC</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CORDSCABLE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COROMANDEL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CORPBANK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COSMOFILMS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COX&KINGS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CPSEETF</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CREATIVEYE</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CREDITACC</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CREST</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CRISIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CRMFGETF</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CROMPTON</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CTE</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CUB</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CUBEXTUB</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CUPID</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CYBERMEDIA</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CYBERTECH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CYIENT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DAAWAT</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DALBHARAT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DALMIASUG</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DAMODARIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DATAMATICS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DBCORP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DBL</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DBREALTY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DCAL</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DCBBANK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DCM</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DCMFINSERV</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DCMSHRIRAM</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DCW</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DECCANCE</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DEEPAKFERT</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DEEPAKNTR</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DEEPIND</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DELTACORP</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DELTAMAGNT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DEN</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DENORA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DFMFOODS</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DHAMPURSUG</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DHANBANK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DHANUKA</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DHARSUGAR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DHUNINV</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DIAMONDYD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DICIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DIGJAMLTD</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DIXON</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DLINKINDIA</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DMART</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DNAMEDIA</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DOLLAR</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DOLPHINOFF</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DONEAR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DPSCLTD</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DQE</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DREDGECORP</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DSSL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DTIL</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DUCON</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DVL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DWARKESH</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DYNAMATECH</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DYNPRO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EASUNREYRL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EBANK</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ECLERX</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EDELWEISS</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EIDPARRY</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EIHAHOTELS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EIHOTEL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EIMCOELECO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EKC</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ELAND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ELECON</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ELECTCAST</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ELECTHERM</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ELGIEQUIP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ELGIRUBCO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EMAMILTD</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EMAMIPAP</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EMAMIREAL</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EMCO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EMKAY</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EMMBI</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ENDURANCE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ENERGYDEV</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ENIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EON</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EQ30</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ERIS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EROSMEDIA</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ESABINDIA</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ESSARSHPNG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ESSELPACK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ESTER</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EUROTEXIND</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EVEREADY</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EVERESTIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EXCEL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EXCELCROP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EXCELINDUS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EXPLEOSOL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FACT</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FAIRCHEM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FCL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FCONSUMER</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FCSSOFT</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FDC</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FEL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FELDVR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FIEMIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FILATEX</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FINCABLES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FINEORG</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FINPIPE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FLEXITUFF</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FLFL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FMGOETZE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FMNL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FORTIS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FOSECOIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FRETAIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FSC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FSL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GABRIEL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GAEL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GAL</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GALAXYSURF</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GALLANTT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GALLISPAT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GAMMNINFRA</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GANDHITUBE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GANECOS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GANESHHOUC</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GANGESSECU</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GARDENSILK</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GARFIBRES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GATI</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GAYAHWS</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GAYAPROJ</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GDL</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GEECEE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GENESYS</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GENUSPAPER</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GENUSPOWER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GEOJITFSL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GEPIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GESHIP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GET&D</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GHCL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GICHSGFIN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GICRE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GILLANDERS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GILLETTE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GINNIFILA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GIPCL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GISOLUTION</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GKWLIMITED</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GLAXO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GLOBALVECT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GLOBOFFS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GLOBUSSPR</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GMBREW</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GMDCLTD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GMMPFAUDLR</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GNA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GNFC</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GOACARBON</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GOCLCORP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GODREJAGRO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GODREJIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GODREJPROP</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GOKEX</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GOLDBEES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GOLDENTOBC</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GOLDIAM</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GOLDSHARE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GOLDTECH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GOODLUCK</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GPIL</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GPPL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GPTINFRA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GRANULES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GRAPHITE</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GRAVITA</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GREAVESCOT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GREENLAM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GREENPLY</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GREENPOWER</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GRINDWELL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GROBTEA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GRPLTD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GRSE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GRUH</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GSCLCEMENT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GSKCONS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GSPL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GSS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GTL</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GTNIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GTNTEX</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GTPL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GUFICBIO</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GUJALKALI</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GUJAPOLLO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GUJFLUORO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GUJGASLTD</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GULFOILLUB</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GULFPETRO</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GULPOLY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GVKPIL</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HAL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HARITASEAT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HARRMALAYA</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HATHWAY</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HATSUN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HBLPOWER</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HBSL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HCC</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HCG</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HCL-INSYS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDFCAMC</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDFCLIFE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDFCMFGETF</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDFCNIFETF</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDFCSENETF</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HEG</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HEIDELBERG</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HERCULES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HERITGFOOD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HESTERBIO</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HFCL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HGINFRA</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HGS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HIGHGROUND</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HIKAL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HILTON</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HIMATSEIDE</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDCOMPOS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDCOPPER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDMOTORS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDNATGLS</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDOILEXP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDSYNTEX</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDUJAVEN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HIRECT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HISARMETAL</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HITECH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HITECHCORP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HITECHGEAR</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HMVL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HNGSNGBEES</td><td>18 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HONAUT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HONDAPOWER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HOTELEELA</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HOVS</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HPL</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HSCL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HSIL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HTMEDIA</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HUBTOWN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HUDCO</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IBMFNIFTY</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IBREALEST</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IBULISL</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IBVENTURES</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICI500</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICIB22</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICIGI</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICIGOLD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICILIQ</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICILOVOL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICIMCAP</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICINF100</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICINIFTY</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICINV20</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICINXT50</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICISENSX</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICIL</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICRA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IDBIGOLD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IDFC</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IDFNIFTYET</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IEX</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IFBAGRO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IFBIND</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IFCI</td><td>7 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IFGLEXPOR</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IGARASHI</td><td>7 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IGPL</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IIFL</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IITL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IMFA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IMPAL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDBANK</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDHOTEL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDIACEM</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDIAGLYCO</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDIANB</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDIANCARD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDIANHUME</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDLMETER</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDNIPPON</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDOCO</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDORAMA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDOSTAR</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDOTECH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDOTHAI</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDOWIND</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDRAMEDCO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDSWFTLAB</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDSWFTLTD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDTERRAIN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INEOSSTYRO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INFIBEAM</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INFRABEES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INGERRAND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INOXLEISUR</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INOXWIND</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INSECTICID</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INSPIRISYS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INTELLECT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INTENTECH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INVENTURE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IOB</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IOLCP</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IPAPPM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IPCALAB</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IRB</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IRCON</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ISEC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ISFT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ISMTLTD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ITDC</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ITDCEM</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ITI</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IVC</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IVP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IVZINGOLD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IVZINNIFTY</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IZMO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>J&KBANK</td><td>7 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JAGRAN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JAGSNPHARM</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JAIBALAJI</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JAICORPLTD</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JAMNAAUTO</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JAYAGROGN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JAYBARMARU</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JAYNECOIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JAYSREETEA</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JBCHEPHARM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JBFIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JBMA</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JCHAC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JETAIRWAYS</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JHS</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JINDALPHOT</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JINDALPOLY</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JINDALSAW</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JINDRILL</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JINDWORLD</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JISLDVREQS</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JISLJALEQS</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JKCEMENT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JKIL</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JKLAKSHMI</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JKPAPER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JKTYRE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JMA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JMCPROJECT</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JMFINANCIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JMTAUTOLTD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JOCIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JPINFRATEC</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JPOLYINVST</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JPPOWER</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JSL</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JSLHISAR</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JSWENERGY</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JSWHL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JTEKTINDIA</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JUBILANT</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JUBLINDS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JUNIORBEES</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JYOTHYLAB</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KABRAEXTRU</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KAKATCEM</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KALPATPOWR</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KAMATHOTEL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KAMDHENU</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KANANIIND</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KANORICHEM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KANSAINER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KARDA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KARMAENG</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KARURVYSYA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KAUSHALYA</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KAVVERITEL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KAYA</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KCP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KCPSUGIND</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KDDL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KEC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KECL</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KEI</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KELLTONTEC</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KESORAMIND</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KEYFINSERV</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KHADIM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KHAITANLTD</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KHANDSE</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KICL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KILITCH</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KINGFA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KIOCL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KIRIINDUS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KIRLOSBROS</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KIRLOSENG</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KIRLOSIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KITEX</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KKCL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KMSUGAR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KNRCON</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOHINOOR</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOKUYOCMLN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOLTEPATIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOPRAN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTAKBKETF</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTAKGOLD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTAKNIFTY</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTAKNV20</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTAKPSUBK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTARISUG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTHARIPET</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTHARIPRO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KPITTECH</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KPRMILL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KRBL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KREBSBIO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KRIDHANINF</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KSB</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KSCL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KSERASERA</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KSK</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KSL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KTIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KTKBANK</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KWALITY</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LAKSHVILAS</td><td>7 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LALPATHLAB</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LAMBODHARA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LAOPALA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LASA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LAURUSLABS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LAXMIMACH</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LEMONTREE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LFIC</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LGBBROSLTD</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LGBFORGE</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LIBERTSHOE</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LICNETFGSC</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LICNETFN50</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LICNETFSEN</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LICNFNHGP</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LINCOLN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LINCPEN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LINDEINDIA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LIQUIDBEES</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LIQUIDETF</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LOKESHMACH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LOTUSEYE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LOVABLE</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LPDC</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LSIL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LTI</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LTTS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LUMAXIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LUMAXTECH</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LUXIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LYKALABS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LYPSAGEMS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>M100</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>M50</td><td>19 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAANALU</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MADHAV</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MADHUCON</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MADRASFERT</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAGADSUGAR</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAGMA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAHABANK</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAHESHWARI</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAHINDCIE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAHLIFE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAHLOG</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAHSCOOTER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAHSEAMLES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAITHANALL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAJESCO</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MALUPAPER</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAN50ETF</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANAKALUCO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANAKCOAT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANAKSIA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANAKSTEEL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANALIPETC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANGALAM</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANGCHEFER</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANGLMCEM</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANINDS</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANINFRA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANPASAND</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANUGRAPH</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MARALOVER</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MARATHON</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MARKSANS</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MASFIN</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MASTEK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MATRIMONY</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAWANASUG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAXINDIA</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAXVIL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAYURUNIQ</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MAZDA</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MBLINFRA</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MCDHOLDING</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MCLEODRUSS</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MEGH</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MENONBE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MEP</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MERCATOR</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>METALFORGE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>METROPOLIS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MHRIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MIC</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MIDHANI</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MIL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MINDACORP</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MINDAIND</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MINDTECK</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MIRCELECTR</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MIRZAINT</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MMFL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MMTC</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MOHITIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MOHOTAIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MOIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MOLDTECH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MOLDTKPAC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MONSANTO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MONTECARLO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MORARJEE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MOREPENLAB</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MOTILALOFS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MPHASIS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MPSLTD</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MRO-TEK</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MSPL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MSTCLTD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MTEDUCARE</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MTNL</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MUKANDENGG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MUKANDLTD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MUKTAARTS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MUNJALAU</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MUNJALSHOW</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MURUDCERA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MUTHOOTCAP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MVL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>N100</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NACLIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAGAFERT</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAGAROIL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAGREEKCAP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAGREEKEXP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAHARCAP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAHARINDUS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAHARPOLY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAHARSPING</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NATCOPHARM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NATHBIOGEN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NATNLSTEEL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAUKRI</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAVINFLUOR</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAVKARCORP</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NAVNETEDUL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NBIFIN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NBVENTURES</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NCLIND</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NDGL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NDL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NDTV</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NECCLTD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NECLIFE</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NELCAST</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NELCO</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NEOGEN</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NESCO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NETF</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NETWORK18</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NEULANDLAB</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NEWGEN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NEXTMEDIA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NFL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NH</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NHPC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NIACL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NIBL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NIFTYBEES</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NIFTYEES</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NIITLTD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NILAINFRA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NILASPACES</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NILKAMAL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NIPPOBATRY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NITCO</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NITESHEST</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NITINFIRE</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NITINSPIN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NKIND</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NLCINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NOCIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NOIDATOLL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NORBTEAEXP</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NRAIL</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NRBBEARING</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NSIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NUCLEUS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OBEROIRLTY</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OCCL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OILCOUNTUB</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OLECTRA</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OMAXAUTO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OMAXE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OMKARCHEM</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OMMETALS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ONELIFECAP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ONEPOINT</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ONMOBILE</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ONWARDTEC</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OPTIEMUS</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OPTOCIRCUI</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORBTEXP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORICONENT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTABRA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTALTL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTBANK</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTBELL</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTCEM</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTELEC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTHOT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTLTD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTPPR</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORIENTREF</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORISSAMINE</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ORTEL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OSWALAGRO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PAEL</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PAISALO</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PALASHSECU</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PALREDTEC</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PANACEABIO</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PANAMAPET</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PAPERPROD</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PARACABLES</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PARAGMILK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PARSVNATH</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PATELENG</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PATINTLOG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PATSPINLTD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PCJEWELLER</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PDMJEPAPER</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PDPL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PDSMFL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PENIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PENINLAND</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PERSISTENT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PFIZER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PFOCUS</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PFS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PGEL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PGHH</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PGHL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PGIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PHILIPCARB</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PHOENIXLTD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PIIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PILANIINVS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PILITA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PIONDIST</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PIONEEREMB</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PITTIENG</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PLASTIBLEN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PNBGILTS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PNBHOUSING</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PNC</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PNCINFRA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PODDARHOUS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PODDARMENT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>POKARNA</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>POLYCAB</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>POLYMED</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>POLYPLEX</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PONNIERODE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>POWERMECH</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PPAP</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRABHAT</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRADIP</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRAENG</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRAJIND</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRAKASH</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRAKASHCON</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRAKASHSTL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRAXIS</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRECAM</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRECOT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRECWIRE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PREMEXPLN</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PREMIERPOL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRESSMN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRESTIGE</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRICOLLTD</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRIMESECU</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PROSEED</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PROVOGE</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PRSMJOHNSN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PSB</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PSL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PSPPROJECT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PSUBNKBEES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PTC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PTL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PUNJABCHEM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PUNJLLOYD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PURVA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>QGOLDHALF</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>QNIFTY</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>QUESS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>QUICKHEAL</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RADAAN</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RADICO</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RADIOCITY</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAIN</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAJESHEXPO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAJSREESUG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RALLIS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAMANEWS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAMASTEEL</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAMCOIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAMCOSYS</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAMKY</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RANASUG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RANEENGINE</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RANEHOLDIN</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RATNAMANI</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RBL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RCF</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>REDINGTON</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELAXO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELCNX100</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELCONS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELDIVOPP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELIGARE</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELNV20</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>REMSONSIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RENUKA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>REPRO</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RESPONIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RETFMID150</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>REVATHI</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RGL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RHFL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RICOAUTO</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RIIL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RITES</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RKDL</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RKFORGE</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RMCL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RML</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RNAM</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RNAVAL</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ROHLTD</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ROLTA</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ROSSELLIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RPGLIFE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RPOWER</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RPPINFRA</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RRSLGETF</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RSSOFTWARE</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RSWM</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RSYSTEMS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RTNINFRA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RTNPOWER</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RUBYMILLS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RUCHIRA</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RUCHISOYA</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RUPA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RUSHIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RVNL</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SABEVENTS</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SABTN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SADBHAV</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SADBHIN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SAGCEM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SAKHTISUG</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SAKSOFT</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SAKUMA</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SALASAR</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SALONA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SALSTEEL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SALZERELEC</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SAMBHAAV</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SANCO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SANDESH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SANDHAR</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SANGAMIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SANGHIIND</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SANGHVIMOV</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SANOFI</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SANWARIA</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SARDAEN</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SAREGAMA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SARLAPOLY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SASKEN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SASTASUNDR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SATIN</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SBIETFQLTY</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SBILIFE</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SCAPDVR</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SCHAEFFLER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SCHAND</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SCHNEIDER</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SCI</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SEAMECLTD</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SELAN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SELMCL</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SEPOWER</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SEQUENT</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SESHAPAPER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SETCO</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SETF10GILT</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SETFGOLD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SETFNIF50</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SETFNIFBK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SETFNN50</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SFL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHAHALLOYS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHAKTIPUMP</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHALBY</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHALPAINTS</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHANKARA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHANTIGEAR</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHARDACROP</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHARDAMOTR</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHARIABEES</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHEMAROO</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHILPAMED</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHIRPUR-G</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHIVAMAUTO</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHIVAMILLS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHIVATEX</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHOPERSTOP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHREEPUSHK</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHREERAMA</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHREYANIND</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHREYAS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHRIRAMCIT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHRIRAMEPC</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHYAMCENT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHYAMTEL</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SICAGEN</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SICAL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SIGIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SILINV</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SIMBHALS</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SIMPLEXINF</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SINTEX</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SIS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SITINET</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SIYSIL</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SJVN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SKFINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SKIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SKIPPER</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SKMEGGPROD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SMLISUZU</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SMSLIFE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SMSPHARMA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SNOWMAN</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SOBHA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SOLARA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SOLARINDS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SOMANYCERA</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SOMATEX</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SOMICONVEY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SONATSOFTW</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SORILINFRA</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SOTL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SOUTHBANK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SPAL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SPARC</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SPCENET</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SPECIALITY</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SPENCERS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SPIC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SPLIL</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SPMLINFRA</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SPTL</td><td>7 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SREEL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SRHHYPOLTD</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SRIPIPES</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SSWL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STAMPEDE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STARCEMENT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STARPAPER</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STCINDIA</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STEELCITY</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STEELXIND</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STEL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STERTOOLS</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STRTECH</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUBEX</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUBROS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUDARSCHEM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUMEETINDS</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUMMITSEC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNCLAYLTD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNDARAM</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNDARMFIN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNDARMHLD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNDRMBRAK</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNDRMFAST</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNFLAG</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNTECK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUPERHOUSE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUPERSPIN</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUPPETRO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUPRAJIT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUPREMEIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUPREMEINF</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SURANASOL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SURANAT&P</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SURYALAXMI</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SURYAROSNI</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUTLEJTEX</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUVEN</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUZLON</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SWANENERGY</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SWARAJENG</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SWELECTES</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SYMPHONY</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SYNDIBANK</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SYNGENE</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TAINWALCHM</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TAJGVK</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TAKE</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TALBROAUTO</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TALWALKARS</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TALWGYM</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TANLA</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TARAPUR</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TARMAT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TASTYBITE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATACOFFEE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATACOMM</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAINVEST</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAMETALI</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATASPONGE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATASTLBSL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TBZ</td><td>7 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TCI</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TCIDEVELOP</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TCIEXP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TCIFINANCE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TCNSBRANDS</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TCPLPACK</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TDPOWERSYS</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TEAMLEASE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TECHIN</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TECHNOE</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TECHNOFAB</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TEJASNET</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TERASOFT</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TEXINFRA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TEXMOPIPES</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TEXRAIL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TFCILTD</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TFL</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TGBHOTELS</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>THANGAMAYL</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>THEINVEST</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>THEMISMED</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>THERMAX</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>THOMASCOOK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>THYROCARE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TI</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIDEWATER</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIIL</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIJARIA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIMESGTY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIMETECHNO</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIMKEN</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TINPLATE</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIPSINDLTD</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TIRUMALCHM</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TMRVL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TNPETRO</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TNPL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TOKYOPLAST</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TPLPLASTEH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TREEHOUSE</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TREJHARA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TRENT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TRF</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TRIDENT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TRIGYN</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TRIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TRITURBINE</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TRIVENI</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TTKHLTCARE</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TTKPRESTIG</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TTL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TV18BRDCST</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TVSELECT</td><td>9 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TVSSRICHAK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TVTODAY</td><td>13 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TVVISION</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TWL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UCALFUEL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UCOBANK</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UFLEX</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UFO</td><td>8 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UGARSUGAR</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UJAAS</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UMANGDAIRY</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UMESLTD</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UNICHEMLAB</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UNIENTER</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UNITECH</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UNITEDBNK</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UNITEDTEA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UNIVCABLES</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>URJA</td><td>7 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>USHAMART</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UTINEXT50</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UTINIFTETF</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UTISENSETF</td><td>20 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UTISXN50</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UTTAMSTL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UTTAMSUGAR</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>V2RETAIL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VADILALIND</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VAIBHAVGBL</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VAKRANGEE</td><td>7 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VARDHACRLC</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VARROC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VASCONEQ</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VASWANI</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VBL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VENKEYS</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VENUSREM</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VESUVIUS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VETO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VHL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIDHIING</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIJIFIN</td><td>4 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIKASECO</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIKASMCORP</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIMTALABS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VINATIORGA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VINDHYATEL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VINYLINDIA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIPCLOTHNG</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIPIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIPULLTD</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VISAKAIND</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VISASTEEL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VISESHINFO</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VISHNU</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIVIDHA</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VIVIMEDLAB</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VLSFINANCE</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VMART</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VOLTAMP</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VRLLOG</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VSSL</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VSTIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VSTTILLERS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VTL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WABAG</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WABCOINDIA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WALCHANNAG</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WEBELSOLAR</td><td>3 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WEIZFOREX</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WEIZMANIND</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WELCORP</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WELENT</td><td>12 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WELINV</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WELSPUNIND</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WENDT</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WHEELS</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WHIRLPOOL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WILLAMAGOR</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WINDMACHIN</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WINSOME</td><td>2 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WOCKPHARMA</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WONDERLA</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WSTCSTPAPR</td><td>14 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>XCHANGING</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>XELPMOC</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>XPROINDIA</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZEELEARN</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZEEMEDIA</td><td>10 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZENITHEXPO</td><td>5 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZENSARTECH</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZENTEC</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZODIACLOTH</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZODJRDMKJ</td><td>6 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZUARI</td><td>11 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZUARIGLOB</td><td>15 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZYDUSWELL</td><td>16 X</td><td>2.5 X</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>



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

.modal-box { width: 70%; }
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



<script type="text/javascript">
function mit()

{
var a,b,c,d;
a=Number(document.getElementById("cash").value);
b=Number(document.getElementById("price").value);
c= parseInt(a*40/b);
d= parseInt(a*2.5/b);
document.getElementById("answer").value= c;
document.getElementById("delivery").value= d;

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
        <td>Cash Available
		<input name="cash" id="cash" type="text" value='100000' onkeyup="mit()"/>
		
		
		</td>
        <td>
		Intraday (Qty):<input name="answer" id="answer" type="text" value='4000'onkeyup="mit()"/>
		</td>
         </tr> 
      <tr>
        <td>
		Price: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input name="price" id="price" type="text" value='1000' onkeyup="mit()"/>
		</td>
        <td>
		Delivery (Qty) :<input name="delivery" id="delivery" type="text" value='2500'/> 
		</td>
        </tr>
      
    </tbody>
  </table>
 
</div>


		
		
      </div>
      
  

  <footer> <a href="#" class="btn1 btn-small js-modal-close">Close</a> </footer>
</div> <section>
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
