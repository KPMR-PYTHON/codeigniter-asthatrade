<div id="content" class="clearfix">
	<div class="header">
		<h1 class="page-title">View Live Calls</h1>
	</div> <!-- /header -->
	
	<div class="breadcrumbs">
		<i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> View Live Calls
	</div>
	
	<div class="wrp clearfix">
        <div class="fluid">
		<center><?php if($this->session->flashdata('call_update_success')){echo $this->session->flashdata('call_update_success');}else{echo $this->session->flashdata('call_update_failed');} ?></center>
			<div class="widget grid12">
                <div class="widget-header">
                    <div class="widget-title">
						<i class="fa fa-pencil"></i> View Live Calls
                    </div>
                </div> <!-- /widget-header -->
                
                <div class="widget-content pad20f ">
				<?php for($i=0;$i<$totGetCallCategory;$i++){?>
					<div style="border-bottom:1px solid #000;">
							<h3 align="center"><?php echo $getCallCategory[$i]['live_call_category_name']; ?></h3>
							
						<?php
							for($j=0;$j<$totGetCall[$i];$j++){
							$call_created_date = $getCalls[$i][$j]['lcd'];
							?>
								<form name="call_form" id="call_form" action="<?php echo base_url();?>admin/editLiveCall" method="post">
								
								<input type="hidden" name="call_id" id="call_id" value="<?php echo $getCalls[$i][$j]['lId'];?>">
								<input type="hidden" name="call_cat_id" id="call_cat_id" value="<?php echo $getCalls[$i][$j]['catId'];?>">
								<p style="text-align:right;"><span style="font-weight:bold;">Date of Creation:</span> <?php echo $call_created_date; ?></p>
								<h4>News:</h4><input type="text" placeholder="Live Call News" id="call_news" name="call_news" value="<?php echo $getCalls[$i][$j]['news']; ?>">

								<h4>Update:</h4><input type="text" placeholder="Live Call Update" id="call_update" name="call_update" value="<?php echo $getCalls[$i][$j]['update_call']; ?>">

								<p style="text-align:right;font-weight:bold;"><input class="btn btn-blue" type="submit" value="UPDATE">  <input class="btn btn-blue" value="DELETE" onclick="deleteLiveCall(<?php echo $getCalls[$i][$j]['lId'];?>);"></p>
								<a href="javascript:void(0)" class="hide" id="hide<?php echo $getCalls[$i][$j]['lId']; ?>">Please wait...</a>
								</form>
						<?php } ?>
				</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</div>

</div> <!-- /content -->


<script>
$(document).ready(function(){$('.hide').hide();});

function deleteLiveCall(id){
	 if (confirm("Are you sure!") == true) {
        var id = id;
        $('#hide'+id).show();
        $.ajax({
            url:"<?php echo base_url();?>admin/deleteLiveCall",
			method:"POST",
            data: {"lid": id},
			success:function(data)
            {
				if(data == 1){
					alert('Live Call Content Has Been Deleted.');
					window.location.reload(true);
				}
				else{
					alert('Some problem occured. Please try again later.');
				}
			}
               
            });
        }
}

</script>