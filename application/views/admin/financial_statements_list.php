        <div id="content" class="clearfix">

            <div class="header">

                <h1 class="page-title">All User List</h1>


            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> All User List
            </div>

            <div class="wrp clearfix">
                <div class="fluid">

                    <div class="widget grid12">
                        <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> All User List
                            </div>
                        </div> <!-- /widget-header -->

                        <div class="widget-content pad20f">

                            <div class="fluid" id="search_view">
                                <form  action="<?php echo base_url(); ?>admin/financial_statment" method="post">                       
                                    <label for="SearchOptions">Search By</label>
                                    <select name="SearchOptions" class="form-control">
                                        <option value="clientCode">Client Code</option>
                                     </select>
                                    <br>
                                    <label for="key">Value</label>
                                    <input type="text" id="key" class="form-control" name="key" required />
                                    
                                    
                                    <input class="btn btn-blue" type="submit" name="search" id="search" value="Submit"/>
                                </form>
                                <table class="display nowrap" id="userListTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
                                    <thead>
                                        <tr>
                                            <th class="table_head">Form No.</th>
                                            <th class="table_head">Full Name</th>
                                            <th class="table_head">Client Code</th>
											<th class="table_head">Financial Statment</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php if ($getUserList){
                                            for($i=0;$i<$pageLength;$i++){ ?>
                                                <tr>
                                                    <td style="padding:5px; text-align:center;"><?php echo$getUserList[$i]['id'] ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $getUserList[$i]['fname'].$getUserList[$i]['mname'].' '.$getUserList[$i]['lname']; ?></td>
                                                    <td style="padding:5px; text-align:center;"><?php echo $getUserList[$i]['user_code']; ?></td>
												
																	<td style="padding:5px; text-align:center;" id="<?php echo $getUserList[$i]["financial_statmentfilename"]; ?>"><a href="<?php echo $getUserList[$i]["financial_statmentfilename"]; ?>" target="_blank"  >View Document</a></td>
																	
                                                </tr>
                                            <?php } 
                                        } 
                                        else{?>
                                        <tr>
                                            <td colspan="4" style="padding:5px; text-align:center;">No Data Found</td>
                                        </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                                
                                <div id="pagination">
                                    <ul class="tsc_pagination">
                                    <?php foreach ($links as $link) {
                                    echo "<li>". $link."</li>";
                                    }   ?>
                                    </ul>
                                </div>
                                    


                            </div> <!-- /fluid -->








                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->
                </div>


            </div> <!-- /wrp -->

        </div> <!-- /content -->
        <!-- poup-->

        <div id="popup1" class="overlay">
            <div class="popup">
                <a class="close" href="#">&times;</a>
                <div class="content">
                    <form action="<?php echo base_url(); ?>admin/addCodeModal" method="post">
                        <p>Please enter your client code</p>
                        <input type="text" placeholder="Client Code" name="client_code" id="client_code" />
                        <input type="hidden" name="user" id="user">
                        <input type="hidden" name="type" id="type">
                        <select name="status" id="status">
                            <option value="1">Active</option>
                            <option value="0">In Active</option>
                        </select>
                        <input type="submit" placeholder=""  value="Submit" />
                    </form>
                </div>
            </div>
        </div>




<script type="text/javascript">
    function addCode(id,type,status){
    //alert();
    window.location.href='#popup1';
    $('#user').val(id);    
    $('#type').val(type);
    $('#status').val(status);    
};


$('#userListTable').DataTable( {
    
    // "lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50, 100,"All"]],
    dom: 'lBfrtip',

   
    paging: false,
    order: [[0,"desc"]]
    /* columnDefs: [ {
    targets: -1,
    visible: false
}] */

});

function sendsms(user_id){

    		$.ajax({
            type: "GET",
            //cache: false,
            url: "<?php echo base_url(); ?>admin/sendsms/"+user_id,
            dataType:"html",
            data:{user_id:user_id},

            //data:dataValue,
            success: function(data) {
				
                                alert('SMS sent successfully');
                                
                               
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
          
          
      });


}

function sendmail(user_id){

    		$.ajax({
            type: "GET",
            //cache: false,
            url: "<?php echo base_url(); ?>admin/sendemail/"+user_id,
            dataType:"html",
            data:{user_id:user_id},

            //data:dataValue,
            success: function(data) {
				
                                alert('Email sent successfully');
                                
                               
                           },
                        error: function() {
                            $("#response").html("AJAX request failed.");
                        }
          
          
      });


}

</script> 




