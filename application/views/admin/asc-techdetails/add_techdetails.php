    <script src="<?php echo base_url(); ?>content/admin/ckeditor/ckeditor.js"></script>
    <script src="<?php echo base_url(); ?>content/admin/ckeditor/samples/js/sample.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>content/admin/ckeditor/samples/css/samples.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>content/admin/ckeditor/samples/toolbarconfigurator/lib/codemirror/neo.css">


            <div id="content" class="clearfix">
                <div class="header">
                    <h1 class="page-title">Add ACS Technical Details</h1>
                </div> <!-- /header -->
            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Add ACS Technical Details
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                <center><?php if($this->session->flashdata('call_add_success')){echo $this->session->flashdata('call_add_success');}else{echo $this->session->flashdata('call_add_faied');} ?></center>
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Add ACS Technical Details
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f ">
                        <form enctype="multipart/form-data" id="addFrm" name="addFrm" action="<?Php echo base_url();?>Acstech/addAcsDetails" method="post">
                        <select name="asc_cat_id" id="asc_cat_id" style="margin:1% 0;">
                            <option value="">Please Select ASC Category*</option>
                            <?php
                            foreach($acs_cat as $val){
                            ?>
                            <option value="<?php echo $val['id']; ?>"><?php echo $val['asc_cat_name']; ?></option>
                            <?php    
                            }
                            ?>
                        </select>
                        <select name="asc_sub_cat_id" id="asc_sub_cat_id" style="margin:1% 0;">
                            <option value="">Please Select ASC Sub Category*</option>
                            <!-- <option value="0">Please Select ASC Sub Category*</option>
                            <?php
                            foreach($acs_cat as $val){
                            ?>
                            <option value="<?php echo $val['id']; ?>"><?php echo $val['asc_cat_name']; ?></option>
                            <?php    
                            }
                            ?> -->
                        </select>
                        <!-- <input type="text" placeholder="Title *" name="heading" required="required"> -->
                        <div class="adjoined-bottom">
                            <div class="grid-container">
                                <div class="grid-width-100">
                                    <!-- <div id="editor">
                                        <h1>Hello world!</h1>
                                        <p>I'm an instance of <a href="http://ckeditor.com">CKEditor</a>.</p>
                                    </div> -->
                                    <textarea name="editor" id="editor">Technical Details</textarea>

                                </div>
                            </div>
                        </div>
                        <br><br>
                        <input type="file" name="pdf_path" id="pdf_path">
                        <input class="btn btn-blue" type="submit" value="Submit"/>
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->
        
 <script>
    //--------------------------//
    $(document).ready(function(){
        $('body #asc_cat_id').on('change', function(){
        var id = $(this).val();
            $.ajax
            ({
            url : "<?php echo base_url(); ?>Acstech/GetAcsSubcat",
            type: 'POST',
            cache: false,
            data: {
            id : id
            },  
            success: function(data)
                {
                    $('#asc_sub_cat_id').html(data);
                }
            });
            
        });



        $('INPUT[type="file"]').change(function () {
        var ext = this.value.match(/\.(.+)$/)[1];
        switch (ext) {
        case 'pdf':
        break;
        default:
            alert('Only .pdf file are accepted');
            this.value = '';
            }
        });

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
            asc_sub_cat_id: "required",
            editor: "required",
        },
        messages:{
            asc_sub_cat_id: {
                required: "Please enter ASC sub category",
            },
            asc_cat_id: {
                required: "Please select ASC category",
            },
            editor: {
                required: "Please enter value",
            },
        }
    });


    }); 
    
</script>
<script>
    initSample();
</script>
