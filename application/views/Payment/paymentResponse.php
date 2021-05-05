<div class="container2">
<h3>Payment Status </h3>
<?php
//$segment_val=$this->uri->segment(3);
if($pay_status == 1)
{
    echo 'Thank you. Your Payment was successful.';
}
else
{
    echo 'Sorry! Your Payment failed.';
}
  
?>
</div>