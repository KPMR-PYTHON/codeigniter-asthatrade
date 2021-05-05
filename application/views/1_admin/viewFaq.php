<div id="content" class="clearfix">
	<div class="header">
		<h1 class="page-title">View Faq</h1>
	</div> <!-- /header -->
	
	<div class="breadcrumbs">
		<i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> View Faq
	</div>
	
	<div class="wrp clearfix">
        <div class="fluid">
		<center><?php if($this->session->flashdata('faq_update_success')){echo $this->session->flashdata('faq_update_success');}else{echo $this->session->flashdata('faq_update_failed');} ?></center>
			<div class="widget grid12">
                <div class="widget-header">
                    <div class="widget-title">
						<i class="fa fa-pencil"></i> View Faq
                    </div>
                </div> <!-- /widget-header -->
                
                <div class="widget-content pad20f ">
				<?php for($i=0;$i<$totGetFaqCategory;$i++){?>
					<div style="border-bottom:1px solid #000;">
							<h3 align="center"><?php echo $getFaqCategory[$i]['faq_category_name']; ?></h3>
							
						<?php
							for($j=0;$j<$totGetFaq[$i];$j++){
							$faq_created_date = @$getFaq[$i][$j]['fcd'];
							$fcd = date("d-M-Y", strtotime($faq_created_date));
							$faq_modify_date = 	@$getFaq[$i][$j]['fmd'];	
							$fmd = date("d-M-Y", strtotime($faq_modify_date));
							?>
								<form name="faq_form" id="faq_form" action="<?php echo base_url();?>admin/editFaq" method="post">
								
								<input type="hidden" name="faq_id" id="faq_id" value="<?php echo $getFaq[$i][$j]['faqId'];?>">
								<input type="hidden" name="faq_cat_id" id="faq_cat_id" value="<?php echo $getFaq[$i][$j]['catId'];?>">
								<p style="text-align:right;"><span style="font-weight:bold;">Date of Created:</span> <?php echo $fcd; ?> | <span style="font-weight:bold;">Date of Modified:</span> <?php echo $fmd; ?></p>
								<h4>Q: <?php // echo $getFaq[$i][$j]['ques']; ?></h4><input type="text" placeholder="Faq Question" id="faq_ques" name="faq_ques" value="<?php echo $getFaq[$i][$j]['ques']; ?>">
								<div  class="cd-faq-content">
									<p><h4>A:</h4><?php //echo $getFaq[$i][$j]['ans']; ?><textarea placeholder="Faq Answers" class="jqte-test" id="faq_answers" name="faq_answers" style="width: 99%; height:250px; margin:5px;" ><?php echo $getFaq[$i][$j]['ans']; ?></textarea></p>
								</div>
								<p style="text-align:right;font-weight:bold;"><input class="btn btn-blue" type="submit" value="UPDATE">  <a onclick="deleteFaq(<?php echo $getFaq[$i][$j]['faqId'];?>);">Delete</a></p>
								<a href="javascript:void(0)" class="hide" id="hide<?php echo $getFaq[$i][$j]['faqId']; ?>">Please wait...</a>
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

function deleteFaq(id){
	 if (confirm("Are you sure!") == true) {
        var id = id;
        $('#hide'+id).show();
        $.ajax({
            url:"<?php echo base_url();?>admin/deleteFaq",
			method:"POST",
            data: {"faq_id": id},
			success:function(data)
            {
				if(data == 1){
					alert('Faq Content Has Been Deleted.');
					window.location.reload(true);
				}
				else{
					alert('There Was Some Problem Occured.Please Try Again Later.');
				}
			}
               
            });
        }
}

</script>