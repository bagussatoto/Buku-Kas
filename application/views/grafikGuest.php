<html>
<head>
<title>SMART-CASH</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" >
<!--<link href="<?php// echo base_url('assets/style.css');?>" rel="stylesheet" -->
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" >
<link href="<?php echo base_url('assets/simple_sidebar.css');?>" rel="stylesheet" >
<script type="text/javascript" src="<?php echo base_url('assets/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/jquery.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"/></script>
</head>
<body>
<style>
	.profil{
		margin: 20px 30px 20px;}
	.side{
		padding: 0px;}
</style>
<!-- wrapper -->
<div id="wrapper">
<!-- Sidebar -->
<div id="sidebar-wrapper">
	<ul class="sidebar-nav">
		<li class="sidebar-brand profil side">
			<a href="#" class="profil">
				<img style="border-radius: 100% "src="<?php echo base_url('assets/images/profil.png');?>" />
			</a>
		</li>
		<br>
		<li>
			<a style="padding: 10px 0px; margin-left: -20px;" href="http://localhost/CodeIgniter/index.php/cash/guest"><span class="glyphicon glyphicon-home" style="color: #5bc0de"></span> Home </a>
		</li>
		<li>
			<a style="padding: 10px 0px; margin-left: -20px;" href="http://localhost/CodeIgniter/index.php/cash/grafikGuest">
			<span class="glyphicon glyphicon-stats" style="color: #5bc0de"></span> Graphic Chart</a>
		</li>
		<li>
			<a style="padding: 10px 0px; margin-left: -20px;" href="http://localhost/CodeIgniter/index.php/cash">
			<span class="glyphicon glyphicon-log-out" style="color: #5bc0de"></span> Logout
			</a>
		</li>
	</ul>
</div>

<div id="change">
</div>

<!-- SECTION 1 - DATA KAS -->
<div id="dataKas" class="dataKas">
	<div id="page-content-wrapper">
		<?php 
			$this->load->library('session'); 
			$guest_session = $this->session->userdata('guestlogin');
		?>
		<div class="container-fluid">
			
			<iframe src="http://localhost/CodeIgniter/index.php/grafik" width="100%" height="600px" style="border:none"></iframe>
	
		</div> <!-- wrapper -->
	</div> <!-- SECTION 1 END -->
</body>
</html>