<section class="open_account">
<div class="container">
<h2>View Ticket status</h2>

    <div class="ticket_table">
        <table cellpadding="0" cellspacing="0" width="100%">
            <tr>
                <td class="table_head">Sl. No.</td>
                <td class="table_head">Ticket No.</td>
                <td class="table_head">Ticket Type</td>
                <td class="table_head">Subject</td>
                <td class="table_head">Date</td>
                <td class="table_head">Status</td>
                <td class="table_head">View</td>
            </tr>
            <?php
            $i=1;
            foreach($getTicket as $txt){
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $txt['issue_id']; ?></td>
                <td><?php echo $txt['issue_category']; ?></td>
                <td><?php echo $txt['issue_subject']; ?></td>
                <td><?php echo $txt['issue_created_date']; ?></td>
                <td>
                <?php
                if($txt['issue_status_id']==1){
                    echo "New";    
                } else if($txt['issue_status_id']==2){
                    echo "Open";
                } else if($txt['issue_status_id']==3){
                    echo "Pending";
                } else if($txt['issue_status_id']==4){
                    echo "Closed";
                } else if($txt['issue_status_id']==5){
                    echo "Cancelled";
                }
                ?>
                </td>
                <td><a href="<?php echo base_url(); ?>support/viewStatus/<?php echo $txt['issue_id']; ?>">View</a></td>
            </tr>
            <?php
            $i++;
            }
            ?>
            
        </table>
    </div>
<!--
<ul class="pagination">
  <li class="page"><a href="#" onclick="javascript:history.back();">Priview</a></li>
  <li class="page active"><a href="" >1</a></li>
  <li class="page"><a href="">2</a></li>
  <li class="page"><a href="">3</a></li>
  <li class="page"><a href="">4</a></li>
  <li class="page"><a href="">5</a></li>
  <li class="page"><a href="">6</a></li>
  <li class="page"><a href="#" onclick="javascript:history.forward();">Next</a></li>
</ul> -->


</div>
</section>