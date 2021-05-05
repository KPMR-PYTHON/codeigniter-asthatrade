        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">Update Promoter Password</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> Update Promoter Password
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Update Promoter Password
                            </div>
                        </div> <!-- /widget-header -->
                    
                   <span style="color: red;margin-left: 2%;"><?php echo $this->session->flashdata('UpdatePromoterPassword'); ?></span>
                    <div class="widget-content pad20f">
                        <form  action="<?php echo base_url(); ?>admin/updatePromoterPassword" method="post">                       
                        <label for="email">Email Id</label>
                        <input type="text" id="email" class="form-control" name="email" />
                        <label for="password">Password</label>
                        <input type="text" id="password" class="form-control" name="password" />
                        <input class="btn btn-blue" type="submit" name="updatePromoterPassword" id="updatePromoterPassword" value="Submit"/>
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Update Promoter Code
                            </div>
                        </div> <!-- /widget-header -->
                    
                   <span style="color: red;margin-left: 2%;"><?php echo $this->session->flashdata('updatePromoterCode'); ?></span>
                    <div class="widget-content pad20f">
                        <form  action="<?php echo base_url(); ?>admin/updatePromoterCode" method="post">                       
                        <label for="email">Email Id</label>
                        <input type="text" id="email" class="form-control" name="email" />
                        <label for="family_code">New Code</label>
                        <input type="text" id="family_code" class="form-control" name="family_code" />
                        <input class="btn btn-blue" type="submit" name="updatePromoterCode" id="updatePromoterCode" value="Submit"/>
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->


 </script>       
        