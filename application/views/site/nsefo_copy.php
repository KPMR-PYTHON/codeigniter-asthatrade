		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/datatables/datatables.css">
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
<div id="wrap">
	 <div class="container pricing"> 


 <div class="container"> 
    
    <div class="row">
        <div class="panel panel-primary filterable">
            <div class="panel-heading">
                 

				  
				                  <div class="pull-left">
                 <button>  <a href="https://s3.ap-south-1.amazonaws.com/asthawebsite/NSEF&O_Margin.pdf" target="_blank" > download pdf  </a> </button> 
                </div> 
				<h3 class="panel-title">NSEFO </h3>
            </div>
			<div class="ex1">
            <table  cellpadding="0" cellspacing="0" border="0" class="datatable table table-striped table-bordered">
            
                <thead>
                    <tr class="filters">
					    <th><input type="text" class="form-control" placeholder="Symbol" ></th>
                        <th><input type="text" class="form-control" placeholder="Expiry : 29-Aug-2019" disabled ></th> 
                        
                        
                    </tr>
					
                </thead>
                <tbody>
 <thead> <tr> 
<th>Symbol</th>
<th>Lot Size</th>
<th>Price (Rs)</th>
<th>Carryover </br> Margin(%)</th>
<th>Future Intraday</br> Margin (Rs.)</th>
<th>Option Intraday </br> Selling  Margin </br> (Rs.)</th>
<th>Future Carryover</br> Margin&nbsp; (Rs.)</th>
<th> </th></tr>  </thead> 
<tr><td>NIFTY</td><td>75</td><td>11301</td><td>11.36</td><td>5000</td><td>5000</td><td>96285</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup2" class = "myButton">Calculate<td></span></tr>
<tr><td>BANKNIFTY</td><td>20</td><td>29201</td><td>13.47</td><td>2500</td><td>2500</td><td>78668</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup3" class = "myButton">Calculate<td></span></tr>
<tr><td>ACC</td><td>400</td><td>1581</td><td>17.8</td><td>9488</td><td>12651</td><td>112596</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate</td></span></tr>
<tr><td>ADANIENT</td><td>4000</td><td>129</td><td>25.31</td><td>15522</td><td>10348</td><td>130954</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADANIPORTS</td><td>2500</td><td>383</td><td>17.71</td><td>14348</td><td>19130</td><td>169396</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ADANIPOWER</td><td>20000</td><td>62</td><td>43.09</td><td>49720</td><td>24860</td><td>535609</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AMARAJABAT</td><td>700</td><td>631</td><td>17.86</td><td>6628</td><td>8838</td><td>78919</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AMBUJACEM</td><td>2500</td><td>215</td><td>17.72</td><td>8068</td><td>10758</td><td>95311</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APOLLOHOSP</td><td>500</td><td>1352</td><td>17.71</td><td>10142</td><td>13522</td><td>119737</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>APOLLOTYRE</td><td>3000</td><td>162</td><td>17.71</td><td>7308</td><td>9744</td><td>86283</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ARVIND</td><td>6000</td><td>57</td><td>24.85</td><td>5103</td><td>6804</td><td>84540</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASHOKLEY</td><td>6000</td><td>73</td><td>18.34</td><td>6534</td><td>8712</td><td>79889</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ASIANPAINT</td><td>600</td><td>1501</td><td>17.74</td><td>13508</td><td>18010</td><td>159750</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AUROPHARMA</td><td>1000</td><td>557</td><td>17.72</td><td>8350</td><td>11133</td><td>98638</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>AXISBANK</td><td>1200</td><td>728</td><td>17.71</td><td>13098</td><td>17464</td><td>154640</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJAJ-AUTO</td><td>250</td><td>2562</td><td>17.71</td><td>9608</td><td>12811</td><td>113444</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJAJFINSV</td><td>125</td><td>6825</td><td>20.88</td><td>12798</td><td>17064</td><td>178144</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BAJFINANCE</td><td>250</td><td>3057</td><td>20.47</td><td>11465</td><td>15287</td><td>156460</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BALKRISIND</td><td>800</td><td>723</td><td>17.81</td><td>8675</td><td>11566</td><td>102999</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANKBARODA</td><td>4500</td><td>110</td><td>20.1</td><td>7425</td><td>9900</td><td>99495</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BANKINDIA</td><td>6000</td><td>75</td><td>21.54</td><td>6773</td><td>9030</td><td>97253</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>

<tr><td>BATAINDIA</td><td>550</td><td>1310</td><td>17.71</td><td>10805</td><td>14406</td><td>127566</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BEL</td><td>6000</td><td>98</td><td>21.71</td><td>8802</td><td>11736</td><td>127394</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BERGEPAINT</td><td>2200</td><td>325</td><td>17.83</td><td>10737</td><td>14315</td><td>127622</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHARATFORG</td><td>1200</td><td>428</td><td>17.78</td><td>7704</td><td>10272</td><td>91318</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHARTIARTL</td><td>1851</td><td>341</td><td>17.73</td><td>9454</td><td>12605</td><td>111746</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BHEL</td><td>7500</td><td>61</td><td>17.74</td><td>6908</td><td>9210</td><td>81693</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BIOCON</td><td>1800</td><td>240</td><td>20.49</td><td>6476</td><td>8635</td><td>88461</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BOSCHLTD</td><td>30</td><td>14962</td><td>17.81</td><td>6733</td><td>8977</td><td>79943</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BPCL</td><td>1800</td><td>335</td><td>17.96</td><td>9034</td><td>12046</td><td>108169</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BRITANNIA</td><td>200</td><td>2664</td><td>17.81</td><td>7992</td><td>10656</td><td>94893</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>BSOFT</td><td>5100</td><td>73</td><td>22.04</td><td>5615</td><td>7487</td><td>82505</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CADILAHC</td><td>1600</td><td>232</td><td>18.14</td><td>5561</td><td>7414</td><td>67249</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CANBK</td><td>2000</td><td>240</td><td>20.8</td><td>7205</td><td>9606</td><td>99902</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CASTROLIND</td><td>3400</td><td>123</td><td>17.92</td><td>6278</td><td>8371</td><td>75002</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CENTURYTEX</td><td>600</td><td>895</td><td>17.74</td><td>8058</td><td>10744</td><td>95301</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CESC</td><td>800</td><td>763</td><td>17.74</td><td>9157</td><td>12209</td><td>108292</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CHOLAFIN</td><td>2500</td><td>246</td><td>19.86</td><td>9231</td><td>12308</td><td>122213</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CIPLA</td><td>1000</td><td>536</td><td>17.79</td><td>8038</td><td>10717</td><td>95328</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COALINDIA</td><td>2200</td><td>210</td><td>17.71</td><td>6940</td><td>9253</td><td>81937</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>COLPAL</td><td>700</td><td>1150</td><td>17.72</td><td>12070</td><td>16093</td><td>142584</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CONCOR</td><td>1563</td><td>523</td><td>17.88</td><td>12257</td><td>16343</td><td>146104</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>CUMMINSIND</td><td>700</td><td>719</td><td>18.25</td><td>7550</td><td>10066</td><td>91852</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DABUR</td><td>1250</td><td>424</td><td>17.75</td><td>7949</td><td>10599</td><td>94064</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DHFL</td><td>4000</td><td>53</td><td>105.32</td><td>8400</td><td>4200</td><td>221172</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DISHTV</td><td>14000</td><td>33</td><td>32.06</td><td>18284</td><td>9142</td><td>146546</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DIVISLAB</td><td>400</td><td>1634</td><td>17.83</td><td>9807</td><td>13076</td><td>116569</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DLF</td><td>2800</td><td>178</td><td>17.93</td><td>7457</td><td>9943</td><td>89137</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>DRREDDY</td><td>250</td><td>2663</td><td>17.74</td><td>9985</td><td>13313</td><td>118086</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EICHERMOT</td><td>25</td><td>16523</td><td>17.72</td><td>6196</td><td>8262</td><td>73199</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ENGINERSIN</td><td>4600</td><td>104</td><td>18.09</td><td>7207</td><td>9609</td><td>86917</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EQUITAS</td><td>4000</td><td>113</td><td>39.1</td><td>6789</td><td>9052</td><td>176967</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ESCORTS</td><td>1100</td><td>473</td><td>20.87</td><td>7801</td><td>10402</td><td>108541</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>EXIDEIND</td><td>2400</td><td>183</td><td>17.71</td><td>6574</td><td>8765</td><td>77612</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>FEDERALBNK</td><td>7000</td><td>93</td><td>17.72</td><td>9765</td><td>13020</td><td>115357</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GAIL</td><td>5334</td><td>135</td><td>17.77</td><td>10789</td><td>14386</td><td>127818</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GLENMARK</td><td>1000</td><td>425</td><td>17.79</td><td>6374</td><td>8499</td><td>75599</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GMRINFRA</td><td>45000</td><td>15</td><td>17.75</td><td>29340</td><td>13140</td><td>116618</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GODREJCP</td><td>800</td><td>618</td><td>17.76</td><td>7414</td><td>9885</td><td>87777</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>GRASIM</td><td>750</td><td>871</td><td>17.75</td><td>9798</td><td>13064</td><td>115939</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HAVELLS</td><td>1000</td><td>692</td><td>17.77</td><td>10382</td><td>13843</td><td>122995</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HCLTECH</td><td>700</td><td>1013</td><td>17.76</td><td>10639</td><td>14185</td><td>125961</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDFC</td><td>500</td><td>2204</td><td>17.74</td><td>16530</td><td>22040</td><td>195490</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HDFCBANK</td><td>250</td><td>2295</td><td>17.74</td><td>8604</td><td>11473</td><td>101761</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HEROMOTOCO</td><td>200</td><td>2400</td><td>18.16</td><td>7201</td><td>9602</td><td>87183</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HEXAWARE</td><td>1500</td><td>354</td><td>18.01</td><td>7956</td><td>10608</td><td>95525</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDALCO</td><td>3500</td><td>196</td><td>17.84</td><td>10269</td><td>13692</td><td>122133</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDPETRO</td><td>2100</td><td>268</td><td>25.5</td><td>8456</td><td>11275</td><td>143755</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDUNILVR</td><td>300</td><td>1747</td><td>17.71</td><td>7862</td><td>10483</td><td>92826</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>HINDZINC</td><td>3200</td><td>219</td><td>17.71</td><td>10488</td><td>13984</td><td>123828</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IBULHSGFIN</td><td>800</td><td>608</td><td>41.04</td><td>14594</td><td>9730</td><td>199651</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICIBANK</td><td>1375</td><td>411</td><td>17.71</td><td>8485</td><td>11314</td><td>100181</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ICICIPRULI</td><td>1500</td><td>394</td><td>17.83</td><td>8867</td><td>11823</td><td>105402</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IDBI</td><td>12000</td><td>30</td><td>20.43</td><td>5445</td><td>7260</td><td>74161</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IDEA</td><td>28000</td><td>10</td><td>24.6</td><td>11460</td><td>5460</td><td>67158</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IDFCFIRSTB</td><td>12000</td><td>39</td><td>20.82</td><td>10368</td><td>9336</td><td>97188</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IGL</td><td>2750</td><td>307</td><td>18.04</td><td>12672</td><td>16896</td><td>152402</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDIGO</td><td>600</td><td>1587</td><td>22.34</td><td>14285</td><td>19046</td><td>212748</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INDUSINDBK</td><td>400</td><td>1393</td><td>19.42</td><td>8358</td><td>11144</td><td>108208</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INFRATEL</td><td>2000</td><td>263</td><td>17.72</td><td>7901</td><td>10534</td><td>93331</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>INFY</td><td>1200</td><td>800</td><td>17.71</td><td>14391</td><td>19188</td><td>169910</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>IOC</td><td>3500</td><td>144</td><td>25.98</td><td>7555</td><td>10073</td><td>130848</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ITC</td><td>2400</td><td>270</td><td>17.71</td><td>9704</td><td>12938</td><td>114570</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JINDALSTEL</td><td>3200</td><td>136</td><td>23.36</td><td>6504</td><td>8672</td><td>101289</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JSWSTEEL</td><td>2000</td><td>250</td><td>17.96</td><td>7509</td><td>10012</td><td>89908</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JUBLFOOD</td><td>500</td><td>1145</td><td>18.69</td><td>8589</td><td>11453</td><td>107024</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>JUSTDIAL</td><td>1400</td><td>684</td><td>26.22</td><td>14357</td><td>19142</td><td>250954</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KAJARIACER</td><td>1300</td><td>474</td><td>22.59</td><td>9237</td><td>12316</td><td>139111</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>KOTAKBANK</td><td>400</td><td>1494</td><td>17.71</td><td>8964</td><td>11952</td><td>105839</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>L&TFH</td><td>4500</td><td>102</td><td>20.4</td><td>6895</td><td>9194</td><td>93774</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LICHSGFIN</td><td>1100</td><td>520</td><td>17.89</td><td>8575</td><td>11433</td><td>102272</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LT</td><td>375</td><td>1381</td><td>17.71</td><td>7770</td><td>10361</td><td>91742</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>LUPIN</td><td>700</td><td>768</td><td>17.85</td><td>8063</td><td>10751</td><td>95949</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>M&M</td><td>1000</td><td>550</td><td>17.73</td><td>8252</td><td>11002</td><td>97533</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>M&MFIN</td><td>1250</td><td>306</td><td>24.95</td><td>5735</td><td>7646</td><td>95387</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MANAPPURAM</td><td>6000</td><td>115</td><td>21.86</td><td>10305</td><td>13740</td><td>150178</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MARICO</td><td>2600</td><td>363</td><td>17.74</td><td>14153</td><td>18871</td><td>167384</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MARUTI</td><td>75</td><td>5712</td><td>17.86</td><td>6426</td><td>8568</td><td>76510</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MCDOWELL-N</td><td>1250</td><td>586</td><td>17.72</td><td>10985</td><td>14646</td><td>129766</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MCX</td><td>700</td><td>839</td><td>17.74</td><td>8807</td><td>11743</td><td>104162</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MFSL</td><td>1200</td><td>416</td><td>17.72</td><td>7494</td><td>9992</td><td>88533</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MGL</td><td>600</td><td>767</td><td>17.86</td><td>6903</td><td>9205</td><td>82197</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MINDTREE</td><td>600</td><td>699</td><td>22.56</td><td>6288</td><td>8384</td><td>94576</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MOTHERSUMI</td><td>3300</td><td>111</td><td>18.18</td><td>5485</td><td>7313</td><td>66473</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MRF</td><td>10</td><td>54157</td><td>17.77</td><td>8124</td><td>10831</td><td>96237</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>MUTHOOTFIN</td><td>1500</td><td>597</td><td>17.75</td><td>13431</td><td>17909</td><td>158938</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NATIONALUM</td><td>10000</td><td>45</td><td>17.73</td><td>6780</td><td>9040</td><td>80140</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NBCC</td><td>8500</td><td>48</td><td>20.46</td><td>6152</td><td>8203</td><td>83912</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NCC</td><td>8000</td><td>74</td><td>21.21</td><td>17664</td><td>11776</td><td>124884</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NESTLEIND</td><td>50</td><td>11537</td><td>17.74</td><td>8653</td><td>11537</td><td>102334</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>

<tr><td>NIFTYIT</td><td>50</td><td>15569</td><td>10.11</td><td>11677</td><td>15569</td><td>78701</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NIITTECH</td><td>750</td><td>1220</td><td>18.78</td><td>13719</td><td>18293</td><td>171767</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NMDC</td><td>6000</td><td>109</td><td>17.72</td><td>9815</td><td>13086</td><td>115942</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>NTPC</td><td>4800</td><td>128</td><td>17.93</td><td>9209</td><td>12278</td><td>110076</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OFSS</td><td>150</td><td>3316</td><td>17.72</td><td>7460</td><td>9947</td><td>88131</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>OIL</td><td>3399</td><td>155</td><td>17.84</td><td>7903</td><td>10537</td><td>93989</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ONGC</td><td>3750</td><td>144</td><td>17.73</td><td>8123</td><td>10830</td><td>96008</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PAGEIND</td><td>25</td><td>18602</td><td>18.03</td><td>6976</td><td>9301</td><td>83850</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PEL</td><td>302</td><td>1761</td><td>23.2</td><td>7977</td><td>10636</td><td>123383</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PETRONET</td><td>3000</td><td>229</td><td>17.92</td><td>10316</td><td>13755</td><td>123245</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PFC</td><td>6200</td><td>113</td><td>17.84</td><td>10481</td><td>13975</td><td>124655</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PIDILITIND</td><td>500</td><td>1233</td><td>17.79</td><td>9246</td><td>12328</td><td>109653</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PNB</td><td>7000</td><td>67</td><td>22.54</td><td>6983</td><td>9310</td><td>104924</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>POWERGRID</td><td>4000</td><td>212</td><td>17.83</td><td>12723</td><td>16964</td><td>151234</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>PVR</td><td>400</td><td>1757</td><td>17.95</td><td>10544</td><td>14058</td><td>126174</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAMCOCEM</td><td>800</td><td>746</td><td>17.74</td><td>8950</td><td>11934</td><td>105851</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RAYMOND</td><td>800</td><td>664</td><td>17.77</td><td>7972</td><td>10629</td><td>94437</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RBLBANK</td><td>1200</td><td>458</td><td>26.47</td><td>8240</td><td>10987</td><td>145416</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RECLTD</td><td>6000</td><td>145</td><td>24.21</td><td>13019</td><td>17358</td><td>210119</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELCAPITAL</td><td>3000</td><td>46</td><td>48.49</td><td>4113</td><td>2742</td><td>66480</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELIANCE</td><td>500</td><td>1233</td><td>17.76</td><td>9248</td><td>12331</td><td>109495</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>RELINFRA</td><td>4000</td><td>45</td><td>45.23</td><td>5352</td><td>3568</td><td>80690</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SAIL</td><td>12000</td><td>43</td><td>21.11</td><td>7758</td><td>10344</td><td>109181</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SBIN</td><td>3000</td><td>344</td><td>17.71</td><td>15460</td><td>20613</td><td>182528</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SHREECEM</td><td>50</td><td>21234</td><td>17.75</td><td>15926</td><td>21234</td><td>188454</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SIEMENS</td><td>550</td><td>1177</td><td>17.72</td><td>9714</td><td>12952</td><td>114754</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SRF</td><td>250</td><td>2668</td><td>17.73</td><td>10004</td><td>13339</td><td>118250</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SRTRANSFIN</td><td>600</td><td>988</td><td>26.12</td><td>8896</td><td>11861</td><td>154910</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>STAR</td><td>1200</td><td>343</td><td>18.91</td><td>6166</td><td>8221</td><td>77731</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNPHARMA</td><td>1100</td><td>437</td><td>17.89</td><td>7217</td><td>9623</td><td>86076</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>SUNTV</td><td>1000</td><td>478</td><td>17.76</td><td>7172</td><td>9563</td><td>84919</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATACHEM</td><td>900</td><td>598</td><td>17.78</td><td>8070</td><td>10760</td><td>95660</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAELXSI</td><td>600</td><td>658</td><td>20.16</td><td>5922</td><td>7897</td><td>79598</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAGLOBAL</td><td>2700</td><td>253</td><td>17.7</td><td>10265</td><td>13686</td><td>121124</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAMOTORS</td><td>3000</td><td>145</td><td>21.49</td><td>6516</td><td>8688</td><td>93353</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAMTRDVR</td><td>6000</td><td>70</td><td>21.36</td><td>6291</td><td>8388</td><td>89584</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATAPOWER</td><td>9000</td><td>62</td><td>18.02</td><td>8336</td><td>11115</td><td>100146</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TATASTEEL</td><td>1061</td><td>442</td><td>17.73</td><td>7037</td><td>9382</td><td>83175</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TCS</td><td>250</td><td>2141</td><td>17.71</td><td>8030</td><td>10706</td><td>94804</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TECHM</td><td>1200</td><td>655</td><td>17.73</td><td>11796</td><td>15728</td><td>139432</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TITAN</td><td>750</td><td>1091</td><td>19.88</td><td>12275</td><td>16367</td><td>162683</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TORNTPHARM</td><td>500</td><td>1619</td><td>21.65</td><td>12142</td><td>16189</td><td>175246</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TORNTPOWER</td><td>3000</td><td>303</td><td>18.1</td><td>13626</td><td>18168</td><td>164420</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>TVSMOTOR</td><td>1100</td><td>365</td><td>18.56</td><td>6030</td><td>8040</td><td>74610</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UBL</td><td>700</td><td>1402</td><td>17.78</td><td>14722</td><td>19629</td><td>174505</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UJJIVAN</td><td>1600</td><td>262</td><td>26.34</td><td>6284</td><td>8379</td><td>110354</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ULTRACEMCO</td><td>200</td><td>4483</td><td>17.72</td><td>13449</td><td>17932</td><td>158881</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UNIONBANK</td><td>7000</td><td>70</td><td>22.08</td><td>7340</td><td>9786</td><td>108037</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>UPL</td><td>900</td><td>608</td><td>20.01</td><td>8212</td><td>10949</td><td>109549</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VEDL</td><td>3000</td><td>172</td><td>17.84</td><td>7760</td><td>10347</td><td>92295</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>VOLTAS</td><td>1000</td><td>578</td><td>17.8</td><td>8667</td><td>11556</td><td>102848</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>WIPRO</td><td>3200</td><td>264</td><td>17.71</td><td>12662</td><td>16883</td><td>149501</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>YESBANK</td><td>2200</td><td>88</td><td>43.77</td><td>5821</td><td>3881</td><td>84931</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>
<tr><td>ZEEL</td><td>1300</td><td>392</td><td>21.88</td><td>15302</td><td>10201</td><td>111600</td><td><span style="color: #3366ff;"> <a href="#" data-modal-id="popup1" class = "myButton">Calculate<td></span></tr>

                </tbody>
            </table>
        </div>
    </div></div> </div> </div>
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

<!-- Stock future margin -->

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
e=((b1*b)*1.5/100);

d=parseInt(a/((b1*b)*a1/100));  
c=parseInt(a/((b1*b)*1.5/100));

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
		<td> Lot Size :- <input style='color:red' name="lotsize" id="lotsize" type="number" value='75' onkeyup="mit()" style="border: none" /> </td>
		<td>Margin (%) :-  <input style='color:red' name="margin" id="margin" type="number" value='11' onkeyup="mit()" style="border: none" /> </td>
        
         </tr>
        <tr>

		</tr>
		<tr>
        <td>Price : <input style='color:red' name="price" id="price" type="number" value='11000' onkeyup="mit()" style="border: none"/></td>
        <td> Intraday Margin: <input name="intraday1" id="intraday1" type="number" value='5000' onkeyup="mit()" style="border: none"/> </br>Intraday Lot :  <input name="intraday" id="intraday" type="number" value='20'onkeyup="mit()"style="border: none" /> </td>
		<td> CarryOver Margin :<input name="delivery1" id="delivery1" type="number" value='90500' onkeyup="mit()" style="border: none" /> </br> CarryOver Lot : <input name="delivery" id="delivery" type="number" value='1' style="border: none" /> </td>
        </tr>
        
    </tbody>
  </table>
 
</div>


		
		
      </div>
      
  

  <footer> <a href="#" class="btn1 btn-small js-modal-close">Close</a> </footer>
</div> </section>
<!-- End Stock future margin -->

<!-- nifty margin -->
<script>
function mit1()

{
var aa,ab,ac,ad,ab1,aa1,ae,af;
aa=Number(document.getElementById("cash1").value);
ab1=Number(document.getElementById("lotsize1").value);
aa1=Number(document.getElementById("margin1").value);
ab=Number(document.getElementById("price1").value);



//d=parseInt(a/((b1*b)*a1/100));  
//c=parseInt(a/((b1*b)*1.5/100));

af=((ab1*75*ab)*aa1/100);;  
ae=((ab1)*5000);

ac=parseInt(aa/5000);  
ad=parseInt(aa/af);


document.getElementById("aintraday").value= ac;
document.getElementById("adelivery").value= ad;

document.getElementById("aintraday1").value= ae;
document.getElementById("adelivery1").value= af;


}




</script>



<section>
<div id="popup2" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
    <h3>Margin Calculate</h3>
  </header>
  <div class="modal-body">
  
  
<div class="container">
  
   <table class="table">
    <tbody>
      <tr>
        <td>Amount :- <input style='color:red' name="cash1" id="cash1" type="number" value='100000' onkeyup="mit1()" style="border: none" / > </td>
		<td> Lot :- <input style='color:red' name="lotsize1" id="lotsize1" type="number" value='1' onkeyup="mit1()" style="border: none" />Lot Size (75) </td>
		<td>Margin (%) :-  <input style='color:red' name="margin1" id="margin1" type="number" value='11' onkeyup="mit1()" style="border: none" /> </td>
        
         </tr>
        <tr>

		</tr>
		<tr>
        <td>Price : <input style='color:red' name="price1" id="price1" type="number" value='11000' onkeyup="mit1()" style="border: none"/></td>
        <td> Intraday Margin: <input name="aintraday1" id="aintraday1" type="number" value='5000' onkeyup="mit1()" style="border: none"/> </br>Intraday Lot :  <input name="aintraday" id="aintraday" type="number" value='20'onkeyup="mit1()"style="border: none" /> </td>
		<td> CarryOver Margin :<input name="adelivery1" id="adelivery1" type="number" value='90500' onkeyup="mit1()" style="border: none" /> </br> CarryOver Lot : <input name="adelivery" id="adelivery" type="number" value='1' style="border: none" /> </td>
        </tr>
        
    </tbody>
  </table>
 
</div>


		
		
      </div>
      
  

  <footer> <a href="#" class="btn1 btn-small js-modal-close">Close</a> </footer>
</div> </section>

<!-- end nifty margin -->

<!-- banknifty margin -->
<script>
function mit2()

{
var ba,bb,bc,bd,bb1,ba1,be,bf;
ba=Number(document.getElementById("cash2").value);
bb1=Number(document.getElementById("lotsize2").value);
ba1=Number(document.getElementById("margin2").value);
bb=Number(document.getElementById("price2").value);

//f=((b1*b)*a1/100);  
//e=((b1*b)*1.5/100);

//d=parseInt(a/((b1*b)*a1/100));  
//c=parseInt(a/((b1*b)*1.5/100));

bf=((bb1*20*bb)*ba1/100); 
be=((bb1)*2500);

bc=parseInt(ba/2500);  
bd=parseInt(ba/bf);


document.getElementById("bintraday").value= bc;
document.getElementById("bdelivery").value= bd;

document.getElementById("bintraday1").value= be;
document.getElementById("bdelivery1").value= bf;


}




</script>



<section>
<div id="popup3" class="modal-box">
  <header> <a href="#" class="js-modal-close close">×</a>
    <h3>BankNifty Margin Calculate</h3>
  </header>
  <div class="modal-body">
  
  
<div class="container">
  
   <table class="table">
    <tbody>
      <tr>
        <td>Amount :- <input style='color:red' name="cash2" id="cash2" type="number" value='100000' onkeyup="mit2()" style="border: none" / > </td>
		<td> Lot  :- <input style='color:red' name="lotsize2" id="lotsize2" type="number" value='1' onkeyup="mit2()" style="border: none" /> (Lot Size- 20)</td>
		<td>Margin (%) :-  <input style='color:red' name="margin2" id="margin2" type="number" value='13' onkeyup="mit2()" style="border: none" /> </td>
        
         </tr>
        <tr>

		</tr>
		<tr>
        <td>Price : <input style='color:red' name="price2" id="price2" type="number" value='29201' onkeyup="mit2()" style="border: none"/></td>
        <td> Intraday Margin: <input name="bintraday1" id="bintraday1" type="number" value='2500' onkeyup="mit2()" style="border: none"/> </br>Intraday Lot :  <input name="bintraday" id="bintraday" type="number" value='20'onkeyup="mit2()"style="border: none" /> </td>
		<td> CarryOver Margin :<input name="bdelivery1" id="bdelivery1" type="number" value='78500' onkeyup="mit2()" style="border: none" /> </br> CarryOver Lot : <input name="bdelivery" id="bdelivery" type="number" value='1' style="border: none" /> </td>
        </tr>
        
    </tbody>
  </table>
 
</div>


		
		
      </div>
      
  

  <footer> <a href="#" class="btn1 btn-small js-modal-close">Close</a> </footer>
</div> </section>

<!-- end banknifty margin -->
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


<!-- new row-->

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
		<script src="//cdnjs.cloudflare.com/ajax/libs/datatables/1.9.4/jquery.dataTables.min.js"></script>
		<script src="js/datatables/datatables.js"></script>
		<script type="text/javascript">
		$(document).ready(function() {
			$('.datatable').dataTable({
				"sPaginationType": "bs_four_button"
			});	
			$('.datatable').each(function(){
				var datatable = $(this);
				// SEARCH - Add the placeholder for Search and Turn this into in-line form control
				var search_input = datatable.closest('.dataTables_wrapper').find('div[id$=_filter] input');
				search_input.attr('placeholder', 'Search');
				search_input.addClass('form-control input-sm');
				// LENGTH - Inline-Form control
				var length_sel = datatable.closest('.dataTables_wrapper').find('div[id$=_length] select');
				length_sel.addClass('form-control input-sm');
			});
		});
		</script>
