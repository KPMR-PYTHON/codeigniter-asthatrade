            <div id="content" class="clearfix">
				<div class="header">
					<h1 class="page-title">Add Live Call</h1>
                </div> <!-- /header -->
			<div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Add Live Call
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                <center><?php if($this->session->flashdata('call_add_success')){echo $this->session->flashdata('call_add_success');}else{echo $this->session->flashdata('call_add_faied');} ?></center>
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Add Live Call
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f ">
                        <form enctype="multipart/form-data" action="<?Php echo base_url();?>admin/addNewLiveCall" method="post">
                        <select name="call_cat" id="call_cat" style="margin:1% 0;">
                            <option value="0">Please Select</option>
                            <?php
                            foreach($getCallCategory as $CallCat){
                            ?>
                            <option value="<?php echo $CallCat['id']; ?>"><?php echo $CallCat['live_call_category_name']; ?></option>
                            <?php    
                            }
                            ?>
                        </select>
                        <input type="text" placeholder="Live Call News" name="call_news" value="">
                        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
                        <input type="text" placeholder="Live Call Update" name="call_update" value=""> 
                        <input class="btn btn-blue" type="submit" name="fileSubmit" value="UPLOAD"/>
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