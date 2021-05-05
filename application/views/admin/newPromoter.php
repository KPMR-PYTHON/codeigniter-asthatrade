        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">New Promoter</h1>
                

            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> New Promoter
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Register New Promoter
                            </div>
                        </div> <!-- /widget-header -->
                    
                   <span style="color: red;margin-left: 2%;"><?php echo $this->session->flashdata('newPromoter'); ?></span>
                    <div class="widget-content pad20f">
                        <form  action="<?php echo base_url(); ?>admin/createPromoter" method="post">                       
                        <label for="name">Name</label>
                        <input type="text" id="name" class="form-control" name="name" required/>
                        <label for="email">Email Id</label>
                        <input type="text" id="email" class="form-control" name="email" required/>
                        <label for="email">Family Code</label>
                        <input type="text" id="family_code" class="form-control" name="family_code" required/>
                        <label for="password">Password</label>
                        <input type="text" id="password" class="form-control" name="password" required/>
                        <input class="btn btn-blue" type="submit" name="createPromoter" id="createPromoter" value="Submit"/>
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->


 </script>       
        