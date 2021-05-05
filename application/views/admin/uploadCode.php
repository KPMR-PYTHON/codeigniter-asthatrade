        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">Upload Code</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Upload Code
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Upload Code
                            </div>
                        </div> <!-- /widget-header -->
                    <?php
                    if(isset($row_number) && !empty($row_number)){ ?>
                    <span style="color: red; margin-left: 2%;">
                       <?php 
                       $n = 1;
                        echo "Following rows are contain duplicate code : [";
                        foreach($row_number as $val){
                           echo $val; if(count($row_number)!=$n){
                            echo ', ';
                           }
                           $n++;
                    }?>
                    ]</span>
                     <br>
                    <?php 
                    }
                    ?>
                    <?php
                    if(isset($insert_row_count) && !empty($insert_row_count)){ ?>
                    <span style="color: green; margin-left: 2%;">
                       <?php 
                       $m = 1;
                        echo "Following rows are inserted : [";
                        foreach($insert_row_count as $val){
                           echo $val; if(count($insert_row_count)!=$m){
                            echo ', ';
                           }
                           $m++;
                    }?>

                   ]</span>
                     <br>
                    <?php 
                    }
                    ?>
                    <?php
                    if(isset($update_row_count) && !empty($update_row_count)){ ?>
                    <span style="color: green; margin-left: 2%;">
                       <?php 
                       $p = 1;
                        echo "Following rows are updated : [";
                        foreach($update_row_count as $val){
                           echo $val; if(count($update_row_count)!=$p){
                            echo ', ';
                           }
                           $p++;
                    }?>
                    ]</span>
                    <?php 
                    }
                    ?>
                   <span style="color: red;margin-left: 2%;"><?php echo $this->session->flashdata('message'); ?></span>
                    <div class="widget-content pad20f">
                    Please <a href="<?php echo base_url(); ?>download/demoFile.xls">Click here</a> to download the demo file and then full up the file and upload it.
                        <form enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/uploadCode" method="post">

                       
                        <label for="uploader">Code Uploader</label>
                        <input type="file" id="uploader" class="form-control" name="userFiles" multiple/>
                        <input class="btn btn-blue" type="submit" name="fileSubmit" id="uploadButton" value="UPLOAD"/>
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->

 <script type="text/javascript">
 $(document).ready(function(){
    $('INPUT[type="file"]').change(function () {
        var ext = this.value.match(/\.(.+)$/)[1];
        switch (ext) {
        case 'xlsx':
        case 'xls':
        $('#uploadButton').attr('disabled', false);
        break;
        default:
            alert('Only .xls file are accepted');
            this.value = '';
        }
    });

    $('#uploadButton').on('click', function(){
       var val = $('INPUT[type="file"]').val();
       if(val != ''){
        $('#uploadButton').trigger('click');
       } else{
        alert('Please select file .xls file.')
        return false;
       }
       //alert(val);
    });

 });
    

 </script>       
        