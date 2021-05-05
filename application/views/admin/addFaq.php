            <div id="content" class="clearfix">
				<div class="header">
					<h1 class="page-title">Add Faq</h1>
                </div> <!-- /header -->
			<div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Add Faq
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                <center><?php if($this->session->flashdata('faq_add_success')){echo $this->session->flashdata('faq_add_success');}else{echo $this->session->flashdata('faq_add_faied');} ?></center>
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Add Faq
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f ">
                        <form enctype="multipart/form-data" action="<?Php echo base_url();?>admin/addNewFaq" method="post">
                        <select name="faq_cat" id="faq_cat" style="margin:1% 0;">
                            <option value="0">Please Select</option>
                            <?php
                            foreach($getFaqCategory as $faqCat){
                            ?>
                            <option value="<?php echo $faqCat['id']; ?>"><?php echo $faqCat['faq_category_name']; ?></option>
                            <?php    
                            }
                            ?>
                        </select>
                        <input type="text" placeholder="Faq Question" name="faq_ques" value="">
                        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
                        
						<table style="width:100%; margin:1% 0;">
							<tbody>
								<tr>
									<td style="width: 100%;" valign="top">
										<textarea placeholder="Faq Answers" class="jqte-test" name="faq_answers" id="faq_answers" style="width: 99%; margin:5px;"></textarea>
										<input class="btn btn-blue" type="submit" name="fileSubmit" value="UPLOAD"/>
									</td>
								</tr>
							 </tbody>
						</table>           
							<!--<div class="custom-input">
                                <input type="checkbox" id="chkbx-1"><label for="chkbx-1">Checkbox</label>
                                <input type="radio" id="radio-1" name="radio-btn"><label for="radio-1">Option 1</label>
                                <input type="radio" id="radio-2" name="radio-btn"><label for="radio-2">Option 2</label>
                            </div>-->
                            <!--<button class="btn btn-blue" type="submit"  name="fileSubmit">Upload</button>-->
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->
        
 <script>
	$('.jqte-test').jqte();
	
	// settings of status
	var jqteStatus = true;
	$(".status").click(function()
	{
		jqteStatus = jqteStatus ? false : true;
		$('.jqte-test').jqte({"status" : jqteStatus})
	});
</script>
       