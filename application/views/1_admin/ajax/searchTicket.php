        <table cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="margin:1% 0; background:#fff;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
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
                <td style="padding:5px; text-align:center;"><?php echo $i; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $txt['issue_id']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $txt['issue_category']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $txt['issue_subject']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $txt['issue_created_date']; ?></td>
                <td style="padding:5px; text-align:center;">
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
                <td style="padding:5px; text-align:center;"><a href="<?php echo base_url(); ?>admin/viewStatus/<?php echo $txt['issue_id']; ?>">View</a></td>
            </tr>
            <?php
            $i++;
            }
            ?>
            
        </table>