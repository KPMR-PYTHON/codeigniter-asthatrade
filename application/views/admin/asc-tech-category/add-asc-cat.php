            <div id="content" class="clearfix">
                <div class="header">
                    <h1 class="page-title">Add ACS Category</h1>
                </div> <!-- /header -->
            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Add ACS Category
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                <center><?php if($this->session->flashdata('call_add_success')){echo $this->session->flashdata('call_add_success');}else{echo $this->session->flashdata('call_add_faied');} ?></center>
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Add ACS Category
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f ">
                        <form enctype="multipart/form-data" action="<?Php echo base_url();?>Acstech/addAcsCat" method="post" name="addFrm" id="addFrm">
                        
                        <input type="text" placeholder="ACS Category" name="asc_cat_name" id="asc_cat_name">
                        <input class="btn btn-blue" type="submit" value="Submit"/>
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->
        
<script type="text/javascript">
    $('.jqte-test').jqte();
    
    // settings of status
    var jqteStatus = true;
    $(".status").click(function()
    {
        jqteStatus = jqteStatus ? false : true;
        $('.jqte-test').jqte({"status" : jqteStatus})
    });
</script>
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
            asc_cat_name: {
                required: true,
                namevalidation: true,
            },
        },
        messages:{
            asc_cat_name: {
                required: "Please enter ASC category name",
                namevalidation: "Please enter valid ASC category name",
            },
        }
    });
});
</script>