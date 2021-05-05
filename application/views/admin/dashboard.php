

		

		<div id="content" class="clearfix">

			<div class="header">
				
				<h1 class="page-title">Dashboard</h1>
				

			</div> <!-- /header -->

			<div class="breadcrumbs">
				<i class="fa fa-home"></i> Home <i class="fa fa-caret-right"></i> Dashboard
			</div>

			<h2 style="margin-left: 20px;">Welcome To Asthatrade</h2>

			<div class="wrp clearfix">
                <div class="fluid">

                    <div class="widget grid12">
                        <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> SignUps
                            </div>
                        </div> <!-- /widget-header -->

                        <div class="widget-content pad20f" style>

                            <div class="graph-container" id="search_view">
                               
	                            <div style="width:80%;height:80%">
	                            	<canvas id="myChart"></canvas>	
	                            </div> 
	                            
                            </div> <!-- /fluid -->
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->


                    <div class="widget grid12">
                        <div class="widget-header">
                            <div class="widget-title">
                                <i class="fa fa-pencil"></i> Sources of Paid Users
                            </div>
                        </div> <!-- /widget-header -->

                        <div class="widget-content pad20f" style>

                            <div class="graph-container" id="search_view">
                               
	                            <div style="width:80%;height:80%">
	                            	<canvas id="sources"></canvas>	
	                            </div> 
	                            
                            </div> <!-- /fluid -->
                        </div> <!-- /widget-content -->

                    </div> <!-- /widget -->


                </div>
            </div>

		</div> <!-- /content -->

		<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
 
		<script type="text/javascript">
			var ctx = document.getElementById('myChart').getContext('2d');

			signupData = <?php echo $signups; ?>;
			newPaid = <?php echo $newPaid; ?>;
			var week = [];
      		var signups = [];
      		var newpaids=[];
      		total=Object.keys(signupData).length;
			for(var i in signupData){
				if(i==(total-1)){
					week.push("This Week")
				}else{
					week.push("Week "+signupData[i].week)	
				}
				signups.push(signupData[i].users);
				newpaids.push(newPaid[i].users);
			}
			var chart = new Chart(ctx, {
			    type: 'line',

			    // The data for our dataset
			    data: {
			        labels: week,
			        datasets: [
			        {
			            label: 'New Paids',
			            backgroundColor: '#325170',
			            borderColor: '#325170',
			            data: newpaids
			        },
			        {
			            label: 'Signups',
			            backgroundColor: 'rgb(255, 99, 132)',
			            borderColor: 'rgb(255, 99, 132)',
			            data: signups
			        }
			        

			        ]
			    },

			    // Configuration options go here
			    options: {}
			});

			var ctx1 = document.getElementById('sources').getContext('2d');
			organic = <?php echo $organic_users; ?>; 
			gads = <?php echo $gads; ?>; 
			referrals = <?php echo $referrals; ?>; 
			gads_refs = <?php echo $gads_refs; ?>; 
			var week = [];
			var organic_signups = []; 
			var gads_signups = [];
			var referrals_signups = [];
			var gads_refs_signups = [];
			total=Object.keys(organic).length;
			for(var i in organic){
				if(i==(total-1)){
					week.push("This Week")
				}else{
					week.push("Week "+organic[i].week)
				}
				organic_signups.push(organic[i].users);
				gads_signups.push(gads[i].users);
				referrals_signups.push(referrals[i].users);
				gads_refs_signups.push(gads_refs[i].users);
			}

			var chart = new Chart(ctx1, {
			    // The type of chart we want to create
			    type: 'line',

			    // The data for our dataset
			    data: {
			        labels: week,
			        datasets: [
			        {
			            label: 'Both Referrals & Ads',
			            backgroundColor: '#cccccc',
			            borderColor: '#cccccc',
			            data: gads_refs_signups
			        },
			        {
			            label: 'Google Ads',
			            backgroundColor: 'rgb(255, 99, 132)',
			            borderColor: 'rgb(255, 99, 132)',
			            data: gads_signups
			        },{
			            label: 'Organic',
			            backgroundColor: '#599191',
			            borderColor: '#599191',
			            data: organic_signups
			        },
			        {
			            label: 'Referrals',
			            backgroundColor: '#325170',
			            borderColor: '#325170',
			            data: referrals_signups
			        },
			        
			        ]
			    },

			    // Configuration options go here
			    options: {}
			});
		</script>


<style type="text/css">
.graph-container{
	display: flex;
	  flex-direction: row;
	  flex-wrap: wrap;
	  align-content: space-between;
	  justify-content: flex-start;
}
</style>	