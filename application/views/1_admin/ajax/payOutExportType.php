<table  class="display nowrap" id="payOutTable" cellpadding="0" cellspacing="0" width="100%" border="1" bordercolor="#ccc" style="background:#f8f8f8; margin:1% 0;box-shadow: inset 0 1px 0 #fff, 0 1px 3px rgba(0,0,0,0.1);">
            <thead>
				<tr>
					<th class="table_head">Sl. No.</th>
					<th class="table_head">Exchange</th>
					<th class="table_head">Client Code</th>
					<th class="table_head">Name</th>
					<th class="table_head">Mobile No</th>
					<th class="table_head">Email</th>
					<th class="table_head">Payout Amt</th>
					<th class="table_head">Date</th>
					<th class="table_head">Action</th>
				</tr>
			</thead>
			<tbody>
            <?php
            if($viewPayOutType){
             $i=1;
            foreach($viewPayOutType as $payType){
            ?>
            <tr>
                <td style="padding:5px; text-align:center;"><?php echo $i; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $payType['exchange_type']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $payType['client_code']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $payType['name']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $payType['mobile_no']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $payType['email']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo $payType['amt']; ?></td>
                <td style="padding:5px; text-align:center;"><?php echo date("d-M-Y", strtotime($payType['created'])); ?></td>
                <td style="padding:5px; text-align:center;">
                <select name="stat" id="stat" onchange="change_stat(<?php echo $payType['id'];?>);">
                    <option value="1" <?php if($payType['status']==1){ ?> selected="selected" <?php } ?> >Not Called</option>
                    <option value="2" <?php if($payType['status']==2){ ?> selected="selected" <?php } ?> >Called</option>
                </select>
                </td>
            </tr>
            <?php
            $i++;
            }
            } else {
            ?>
            <tr>
                <td colspan="9" style="padding:5px; text-align:center;">No Data Found</td>
            </tr>
            <?php    
            }
            ?>
        </tbody> 
        </table>
		
		
		<script>
		$('#payOutTable').DataTable( {
	
	language: {
		"search": "",
        searchPlaceholder: "Type to Search Here...."
    },
	"lengthMenu": [[10, 25, 50,100, -1], [10, 25, 50, 100,"All"]],
	dom: 'lBfrtip',

	buttons: [
	{
		text:'Export as Csv',
		extend: 'csv',
		title: 'PayOut_List_<?php echo date('dmY');?>',
		//exportOptions: {columns: ':visible'}
		exportOptions: { 
			modifier: { search: 'applied' },
			rows: { selected: true },
			columns: ':visible',
			rows: ':visible',
			modifier: {selected: true},
			
		}
	},
	{
		text:'Column Visibility',
		extend: 'colvis',
	}
	]
	
	/* columnDefs: [ {
	targets: -1,
	visible: false
	}] */
});
		</script>
		