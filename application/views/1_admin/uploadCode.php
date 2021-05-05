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
                    
                    <div class="widget-content pad20f">
                    Please <a href="<?php echo base_url(); ?>demo/demoFile.xls">Click here</a> to download the demo file and then full up the file and upload it.
                        <form enctype="multipart/form-data" action="<?php echo base_url(); ?>admin/addCode" method="post">
                        
                        <p><?php echo $this->session->flashdata('statusMsg'); ?></p>
                        <label for="uploader">Code Uploader</label>
                        <input type="file" id="uploader" class="form-control" name="userFiles" multiple/>
                        <input class="btn btn-blue" type="submit" name="fileSubmit" value="UPLOAD"/>
                        
                        
                            
                         </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->
        