<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Asthatrade - Admin</title>

	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>content/admin/apple-touch-icon-ipad-retina.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>content/admin/apple-touch-icon-iphone-retina.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>content/admin/apple-touch-icon-ipad.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>content/admin/apple-touch-icon-iphone.png" />
	<link rel="icon" href="<?php echo base_url(); ?>content/images/favicon.png" type="image/png" sizes="16x16">
	
	<!-- bootstrap -->
    <link href="<?php echo base_url(); ?>content/admin/css/bootstrap/bootstrap.css" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>content/admin/css/font-awesome-4.0.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>content/admin/css/jquery-ui.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/admin/css/toastr.css">
	<link href="<?php echo base_url(); ?>content/admin/css/style.css" rel="stylesheet" type="text/css" />
   
	 
    <!-- editor -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url(); ?>content/css/jquery-te-1.4.0.css">
 	<script type="text/javascript" src="http://code.jquery.com/jquery.min.js" charset="utf-8"></script>
 	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

	<script type="text/javascript" src="<?php echo base_url(); ?>content/js/jquery-te-1.4.0.min.js" charset="utf-8"></script>
	
	<!-- searching and sorting  -->
	<!-- <script type= 'text/javascript' src="<?php echo base_url(); ?>content/admin/js/jquery-1.11.3.min.js"></script>
	<script type= 'text/javascript' src="<?php echo base_url(); ?>content/admin/js/jquery.dataTables.min.js"></script> -->
	
	<!-- Searching,Listing and Sorting -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/admin/css/jquery.dataTables.css">
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

	<!-- Button for File Download -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>content/admin/css/buttons.dataTables.min.css">
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/dataTables.buttons.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.html5.min.js"></script>
	<script type="text/javascript" language="javascript" src="https://cdn.datatables.net/buttons/1.2.4/js/buttons.colVis.min.js"></script>

	
</head>
<body>

	<div id="loading">
		<div>
			<div></div>
		    <div></div>
		    <div></div>
		</div>
	</div>

	<div id="wrapper">
		<div id="top">
			
			<div class="main-logo">
				<a href="#" onclick="return false;"><img src="<?php echo base_url(); ?>content/images/logo.png"></a>
			</div>
			
			<div class="m-nav"><i class="fa fa-bars"></i></div>

			<div class="profile-nav">
				<ul>
					<li class="profile-user-info">
						<a href="#" onclick="return false;">
							<b>Welcome, </b><span><?php echo $this->session->userdata("adminName");?></span> <i class="fa fa-user"></i> <i class="fa fa-caret-down"></i>
						</a>
					</li>
					<!--<li>
						<a href="#" onclick="return false;">
							<i class="fa fa-gear"></i> Settings
						</a>
					</li>-->
					<!--<li>
						<a href="#" onclick="return false;" class="profile-badge-info">
							<i class="fa fa-envelope"></i> Messages
						</a>
						<span class="badge profile-badge blue">16</span>
					</li>-->
					<li>
						<a href="<?php echo base_url(); ?>admin/logout">
							<i class="fa fa-times-circle"></i> Logout
						</a>
					</li>
				</ul>
			</div>

		</div> <!-- /top -->
		
		