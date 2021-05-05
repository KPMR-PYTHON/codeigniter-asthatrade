<div id="content" class="clearfix">
				<div class="header">
					<h1 class="page-title">NHDL File Download</h1>
                </div> <!-- /header -->
			<div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> NHDL File Download
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                <center><?php if($this->session->flashdata('call_add_success')){echo $this->session->flashdata('call_add_success');}else{echo $this->session->flashdata('call_add_faied');} ?></center>
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> NHDL File Download
                            </div>
                        </div> <!-- /widget-header -->
                    
                    <div class="widget-content pad20f ">
                        <form enctype="multipart/form-data" action="<?Php echo base_url();?>admin/kraFileDownload" method="post">
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>Start Date</td>
    <td><input type="text" name="sdate"  id="sdate"  placeholder="yyyy-mm-dd" required/></td>
    <td>End Date</td>
    <td><input type="text" name="edate"  id="edate"  placeholder="yyyy-mm-dd" required/></td> 
  </tr>
  
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="submit" class="btn-success" value="Submit" style=" margin-top:15px;margin-left:0px;"/></td>
  </tr>
</table>
                        </form>
                    </div> <!-- /widget-content -->

                </div> <!-- /widget -->
            </div>
            
            
            </div> <!-- /wrp -->

        </div> <!-- /content -->