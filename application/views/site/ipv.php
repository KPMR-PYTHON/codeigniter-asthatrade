<script>
	<?php
	if($this->session->userdata('acc_type') == 1){
		echo "dataLayer.push({'nse_paid': 1});";
	}
	else if($this->session->userdata('acc_type') == 2)
		echo "dataLayer.push({'mcx_paid': 1});";	
	 ?>
</script>
<section>
<div><H1 align="center">In Person Verification</H1>
</div>	
</section>
<section>
<div><font color=#ff0000><h4 align="center">Kindly upload/capture the image as shown in the SAMPLE IMAGE along with your identity</h4></Font>
</div>	
</section>
<section>
	<div class="container3">
		<script type="text/javascript" src="<?php echo base_url(); ?>content/js/webcam.min.js"></script>
		<div id="payment-main" style="width=100%;margin-left=15px">
			<div class="payment-half" style="width:280px;height:25px">
				Upload A file <input type="radio" name="method" checked="checked" value="0"  />
			</div>
			<div class="payment-half" style="width:280px;height:25px">
				Take A Picture <input type="radio" name="method"  value="1"  />
			</div>
		</div>


		<div id ="IPV1" class="payment-main" style="display:none">
			<div class="payment-half" style="width:280px">
				<h4 style="text-align:center"> Sample Image </h4>
				<div id="sample_image"  style="float: left;width:100%;height:240px">
					<img src="<?php echo base_url();?>content/images/ipv_sample.png" style="width:100%;height:240px;">
				</div>
			</div>

			<div class="payment-half" style="width:280px">
				<h4>Adjust your ID</h4>
				<div id="my_camera"  style="float: left;width:100%;height:240px">
				</div>

			</div>

			<div class="payment-half" style="width:280px;height:100px">
				<div id="snapshot_button" style="margin-left:15px"  class="col-3">
					<input id="picbtn" type="submit" value="Take Picture" onClick="take_snapshot();">
				</div>
				<form class="navbar-form" role="form" id="myForm" name="" method="post" action="<?php echo base_url(); ?>account/updateIPV">
						<input id="mydata" type="hidden" name="mydata" value=""/>
						<input type="submit" id="post_take_buttons" style="display:none;margin-left:15px;" value="Submit" onClick="submitForm;">
				</form>
			</div>

		</div>

		<div id ="IPV0" class="payment-main">
			<div class="payment-half" style="width:280px">
				<h4 style="text-align:center"> Sample Image </h4>
				<div id="sample_image"  style="float: left;width:100%;height:240px">
					<img src="<?php echo base_url();?>content/images/ipv_sample.png" style="width:100%;height:240px;">
				</div>
			</div>

			<div id="result" class ="payment-half" style="width:200px" >
				<h4 style="width:240px;text-align:center"> Preview </h4>
				<img id="results" alt="" src="<?php echo base_url();?>content/images/blank_avatar.jpg" style="height:240px" />
			</div>
			<br>


			<div class ="payment-half" style="height:100px">
				<label for="file-upload" class="payment-half custom-file-upload" style="height:40px">
					<i class="fa fa-cloud-upload"></i> Select File
				</label>
				<input id="file-upload" type="file" name="uploadFile" accept="image/*" onchange="readURL(this);" style="display:none"/>
				<form class="navbar-form" role="form" id="myForm" name="" method="post" action="<?php echo base_url(); ?>account/updateIPV">
					<input id="mydata2" type="hidden" name="mydata" value=""/>
					<input type="submit" id="post_take_buttons2" style="display:none;margin-left:15px;" value="Submit" onClick="submitForm2;">
				</form>
			</div>
		
		
		</div>
		<script language="JavaScript">
		$(document).ready(function() {
			$("input[name$='method']").click(function() {
				var test = $(this).val();
				if(test==1){
					test2=0;
				}
				else{
					test2=1;
				}
				$("#IPV"+test2).hide();
				$("#IPV" + test).show();
			});
		});
		Webcam.set({
			width: 240,
			height: 240,
			dest_width: 640,
			dest_height: 480,
			image_format: 'jpeg',
			jpeg_quality: 90
		});
		Webcam.attach( '#my_camera' );
		function take_snapshot() {
			// take snapshot and get image data
			Webcam.snap( function(data_uri) {
				// display results in page
				// document.getElementById('results').innerHTML = 
				// 	'<h2>Here is your large image:</h2>' + 
				// 	'<img src="'+data_uri+'"/>';

				Webcam.freeze();

				var raw_image_data = data_uri.replace(/^data\:image\/\w+\;base64\,/, '');

				document.getElementById('mydata').value = raw_image_data;
				
		          // document.getElementById('myForm').submit();

						// Webcam.upload( data_uri, 'saveToServer.php', function(code, text) {
		    //         // Upload complete!
		    //         // 'code' will be the HTTP response code from the server, e.g. 200
		    //         // 'text' will be the raw response content
    //     } );
		} );
			if(document.getElementById("picbtn").value != "Reset"){
				document.getElementById("picbtn").value = "Reset";
				document.getElementById('post_take_buttons').style.display = 'block';	
			}
			else{
				document.getElementById("picbtn").value = "Take Picture";
				document.getElementById('post_take_buttons').style.display = 'none';
			}
			
		}
		
		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {

				};

				reader.readAsDataURL(input.files[0]);
			}
			if (input.files && input.files[0]) {
				var reader = new FileReader();

				reader.onload = function (e) {
					$('#results')
					.attr('src', e.target.result)
					.width(240)
					.height(240);
					var raw_image_data = e.target.result.replace(/^data\:image\/\w+\;base64\,/, '');
					document.getElementById('mydata2').value =  raw_image_data;

				}

				reader.readAsDataURL(input.files[0]);
			}
			document.getElementById('post_take_buttons2').style.display = 'block';
		}
		
		function submitForm1() {		
			document.getElementById('myForm').submit();
		}
		function submitForm2() {		
			document.getElementById('myForm2').submit();
		}
		</script>
	</div>
	
</section>