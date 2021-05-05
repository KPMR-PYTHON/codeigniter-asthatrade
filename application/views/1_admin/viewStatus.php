        <div id="content" class="clearfix">

            <div class="header">
                
                <h1 class="page-title">View Support </h1>
                
    
            </div> <!-- /header -->

            <div class="breadcrumbs">
                <i class="fa fa-home"></i> Dashboard <i class="fa fa-caret-right"></i> 
	
          View Support  
            </div>

            <div class="wrp clearfix">
             <div class="fluid">
                
                <div class="widget grid12">
                    <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> View Support
                            </div>
                        </div> <!-- /widget-header -->
             <div class="view_status">
        <table style="width: 98%; margin:1%;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);" border="1" bordercolor="#ccc" >
        <tr>
        <td style="width: 50%;">     
        <table cellspacing="0" cellpadding="0" width="100%" border="0" style="">
            <tr>
                <td class="ticket_head">Name</td>
                <td style="padding:5px;"><?php echo $getTicketDetails['userName']; ?></td>
            </tr>
            <tr>
                <td class="ticket_head">Ticket No.</td>
                <td style="padding:5px;"><?php echo $getTicketDetails['ticketNo']; ?></td>
            </tr>
            <!--<tr>
                <td class="ticket_head">Ticket Type</td>
                <td>Support</td>
            </tr>-->
            <tr>
                <td class="ticket_head">Date of Creation</td>
                <td style="padding:5px;"><?php echo $getTicketDetails['issueCreatedDate']; ?></td>
            </tr>
        </table>
        </td>
        <td style="width: 50%;">
        <table cellspacing="0" cellpadding="0" width="100%" border="0">
            <tr>
                <td class="ticket_head">Customer Id</td>
                <td style="padding:5px;"><?php echo $getTicketDetails['userCode']; ?></td>
            </tr>
            <tr>
                <td class="ticket_head">E-mail Id</td>
                <td style="padding:5px;"><?php echo $getTicketDetails['email']; ?></td>
            </tr>
            <tr>
                <td class="ticket_head">Mobile No.</td>
                <td style="padding:5px;"><?php echo $getTicketDetails['phone']; ?></td>
            </tr>
            <!--<tr>
                <td class="ticket_head">Registered Mobile No.</td>
                <td>8907534236</td>
            </tr>-->
        </table>
        </td>
        </tr>
        </table>
      </div>
      <div class="view">
    
        <table style="width:98%; margin:1%; border:1px solid #ccc;">
                <tbody>
                    <tr style="background-color: #fff; border-bottom: 1px solid #ccc;">
                    
                    <td style="width: 98%;" valign="top">

                            <!--    <div style="padding:5px;"><h3><?php echo $getTicketDetails['issueSubject']; ?></h3></div> -->
                      <div style="padding:5px;"><h3> <?php echo $txt->issue_category; ?></h3></div> 
                                <div><p><?php echo $getTicketDetails['issueDetails']; ?></p></div>
                        <?php
                        if($getTicketDetails['attachment']!=''){
                        ?>        
                        <div style="text-align:left; padding:5px;"><a href="<?php echo base_url(); ?>uploads/<?php echo $getTicketDetails['attachment']; ?>" class="btn_rply" target="_blank" style="text-transform:none;">To download the Attachment Please click here</a></div>
                        <?php
                        }
                        ?>
                        <!--<div style="text-align:left;"><a href="#post_a_comment" class="btn_rply" style="text-transform:none;">Reply</a></div>-->
                        
                        
                                
                    </td>
                </tr>
 <!-- reply comment-->                
        <?php
        if($getTicketReplyDetails){
        foreach($getTicketReplyDetails as $reply){
        ?>
        <tr>
                
            <td class="reply_p"> <p><?php echo $reply['replyDetails'] ?></p></td>
        </tr>
        
        <tr style="border-bottom: 1px solid #ccc;">
            <td class="reply_user"><?php echo $reply['userName'] ?>
            <?php echo $reply['replyCreatedDate'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
                        if($reply['replyAttachment']!=''){
                        ?>        
                        <a href="<?php echo base_url(); ?>uploads/<?php echo $reply['replyAttachment']; ?>" target="_blank" style="text-transform:none;">To view the Attachment please click here</a>
                        <?php
                        }
                        ?></td>
        </tr>
        
       <?php
        }
        }
       ?> 
<!-- editor-->
                <form action="<?php echo base_url(); ?>admin/addReply" method="post" enctype="multipart/form-data" name="reply-form" id="reply-form">
                <tr>
                <td style="border-top:1px solid #ccc; border-bottom:1px solid #ccc; padding:5px;">
                <label>Attachments :</label>
                    <input type="file" id="userFiles" name="userFiles">
                    <input type="hidden" id="issue_id" name="issue_id" value="<?php echo $getTicketDetails['issueId']; ?>" />
                    
                    </td>
                    
                    </tr>    
                <tr>
                
                

                <td>
                
                    <textarea name="add_reply" id="add_reply" style="width: 99%; margin:5px;"> </textarea>
                    <div style="text-align:left; padding:5px;"><a href="javascript:document.getElementById('reply-form').submit();" class="btn_rply" style="text-transform:none;">Post Reply</a></div>
                        
                   
        
                    </td>
                </tr>
                </form>
        
       
           
           </tbody>
       </table>
   </div>   
                    

                </div> <!-- /widget -->
            </div>
            <div class="fluid" id="search_view">
            
            </div> <!-- /fluid -->
            
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

<script>
function view_search(){
    //alert('ok');
    var email_id_search = $('#email_id_search').val();
    var ticket_id_search = $('#ticket_id_search').val();
    $.ajax({
            url:'searchTicket',
            data:{'email_id_search':email_id_search,'ticket_id_search':ticket_id_search},
            type:'POST',
            //dataType:'JSON',
            success : function(data){
                $('#search_view').html(data);
            },
            error : function(data){
                alert('Error Occured');
            }
        });
}
</script>        