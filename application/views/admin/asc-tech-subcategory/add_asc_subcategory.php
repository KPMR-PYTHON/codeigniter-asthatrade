            <div id="content" class="clearfix">
                <div class="header">
                    <h1 class="page-title">Add ACS Sub Category</h1>
                </div> <!-- /header -->
            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Add ACS Sub Category
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                <center><?php if($this->session->flashdata('call_add_success')){echo $this->session->flashdata('call_add_success');}else{echo $this->session->flashdata('call_add_faied');} ?></center>
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Add ACS Sub Category
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f ">
                        <form enctype="multipart/form-data" name="addFrm" id="addFrm" action="<?Php echo base_url();?>Acstech/addAcsSubCat" method="post">
                        <select name="asc_cat_id" id="asc_cat_id" style="margin:1% 0;">
                            <option value="">Please Select ACS Category*</option>
                            <?php
                            foreach($acs_cat as $val){
                            ?>
                            <option value="<?php echo $val['id']; ?>"><?php echo $val['asc_cat_name']; ?></option>
                            <?php    
                            }
                            ?>
                        </select>
                        <input type="text" placeholder="ACS Sub Category *" name="asc_sub_cat_name" id="asc_sub_cat_name">
                        <input class="btn btn-blue" type="submit" value="Submit"/>
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->
        
<script type="text/javascript">
    $(document).ready(function(){
    jQuery.validator.addMethod("namevalidation", function (value, element, params) {
        result = true;
        if(value != ""){
            var re = /^[A-Za-z][A-Za-z0-9 ]*(?:_[A-Za-z0-9 ]+)*$/;
            result = re.test(value);
            return result;
        }else{
            return result;
        }
    }, jQuery.validator.messages.namevalidation);
    $('#addFrm').validate({
        errorElement:"span", 
        errorClass:"error-dp-cls",
        rules:{
            asc_cat_id: "required",
            asc_sub_cat_name: {
                required: true,
                namevalidation: true,
            },
        },
        messages:{
            asc_sub_cat_name: {
                required: "Please enter ASC sub category name",
                namevalidation: "Please enter valid ASC sub category name",
            },
            asc_cat_id: {
                required: "Please select ASC category",
            },
        }
    });
});
</script>
