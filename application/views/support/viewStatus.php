<section class="open_account">
<div class="container">
<div class="clear"></div>
<h2>View Status</h2>
    <div class="view_status">
        <table cellspacing="0" cellpadding="0" width="100%" border="0">
            <tr>
                <td class="ticket_head">Name</td>
                <td><?php echo $getTicketDetails['userName']; ?></td>
            </tr>
            <tr>
                <td class="ticket_head">Ticket No.</td>
                <td><?php echo $getTicketDetails['ticketNo']; ?></td>
            </tr>
            <!--<tr>
                <td class="ticket_head">Ticket Type</td>
                <td>Support</td>
            </tr>-->
            <tr>
                <td class="ticket_head">Date of Creation</td>
                <td><?php echo $getTicketDetails['issueCreatedDate']; ?></td>
            </tr>
        </table>
        
        <table cellspacing="0" cellpadding="0" width="100%" border="0">
            <tr>
                <td class="ticket_head">Customer Id</td>
                <td><?php echo $getTicketDetails['userCode']; ?></td>
            </tr>
            <tr>
                <td class="ticket_head">E-mail Id</td>
                <td><?php echo $getTicketDetails['email']; ?></td>
            </tr>
            <tr>
                <td class="ticket_head">Mobile No.</td>
                <td><?php echo $getTicketDetails['phone']; ?></td>
            </tr>
            <!--<tr>
                <td class="ticket_head">Registered Mobile No.</td>
                <td>8907534236</td>
            </tr>-->
        </table>
      </div>  
      
      
    <div class="view">
    
        <table style="width:100%; border-collapse:separate; border:1px solid #aaa;" class="sc_rc">
                <tbody><tr>
                    
                    <td style="padding:5px; background:#fff; border-bottom-right-radius: 5px; border-top-right-radius: 5px;" valign="top">
                                <div><h3><?php echo $getTicketDetails['issueSubject']; ?></h3></div>
                                <div><p><?php echo $getTicketDetails['issueDetails']; ?></p></div>
                        <?php
                        if($getTicketDetails['attachment']!=''){
                        ?>        
                        <div style="text-align:left;"><a href="<?php echo base_url(); ?>uploads/<?php echo $getTicketDetails['attachment']; ?>" class="btn_rply" target="_blank" style="text-transform:none;">Attachment</a></div>
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
        
        <tr>
            <td class="reply_user"><?php echo $reply['userName'] ?></td>
            <td class="reply_user"><?php echo $reply['replyCreatedDate'] ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            <?php
                        if($reply['replyAttachment']!=''){
                        ?>        
                        <a href="<?php echo base_url(); ?>uploads/<?php echo $reply['replyAttachment']; ?>" target="_blank" style="text-transform:none;">Attachment</a>
                        <?php
                        }
                        ?></td>
        </tr>
        
       <?php
        }
        }
       ?> 
<!-- editor-->
                <form action="<?php echo base_url(); ?>support/addReply" method="post" enctype="multipart/form-data" name="reply-form" id="reply-form">
                <tr>
                <td style="border-top:1px solid #ccc; border-bottom:1px solid #ccc;">
                <label>Attachments :</label>
                    <input type="file" id="userFiles" name="userFiles">
                    <input type="hidden" id="user_id" name="user_id" value="<?php echo $getTicketDetails['userId']; ?>" />
                    <input type="hidden" id="issue_id" name="issue_id" value="<?php echo $getTicketDetails['issueId']; ?>" />
                    
                    </td>
                    
                    </tr>    
                <tr>
                <td>
                
                    <textarea name="add_reply" class="jqte-test" id="add_reply"> </textarea>
                    <div style="text-align:left;"><a href="javascript:document.getElementById('reply-form').submit();" class="btn_rply" style="text-transform:none;">Post Reply</a></div>
                    <!--<input type="button" onclick="abc();">-->    
                   
        
                    </td>
                </tr>
                </form>
        
       
           
           </tbody>
       </table>
   </div>
   </div>

</section>
   
<script>
    /*$('.jqte-test').jqte();
    
    // settings of status
    var jqteStatus = true;
    $(".status").click(function()
    {
        jqteStatus = jqteStatus ? false : true;
        $('.jqte-test').jqte({"status" : jqteStatus})
    });*/
    /*function abc(){
        alert('AAAA');
    var abcd = $('#add_reply').val();
    alert(abcd);    
    }*/
</script>