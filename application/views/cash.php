<html>
<head>
<title>SMART-CASH</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" >
<link href="<?php echo base_url('assets/style.css');?>" rel="stylesheet" >
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" >
<script type="text/javascript" src="<?php echo base_url('assets/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"/></script>
<style>
body, html{
    height: 100%;
 	background-repeat: no-repeat;
 	background-image: url('<?php echo base_url('assets/images/bg1.jpg');?>');
 	font-family: 'Oxygen', sans-serif;
}

.main{
 	margin-top: 100px;
}

h4.title { 
	font-size: 30px;
	font-family: 'cambria'; 
	font-weight: 400; 
}

hr{
	width: 10%;
	color: #fff;
}

.form-group{
	margin-bottom: 15px;
}

label{
	margin-bottom: 15px;
}

input,
input::-webkit-input-placeholder {
    font-size: 11px;
    padding-top: 3px;
}

.main-login{
 	background-color: #fff;
    /* shadows and rounded borders */
    -moz-border-radius: 2px;
    -webkit-border-radius: 2px;
    border-radius: 2px;
    -moz-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    -webkit-box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
    box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);

}

.main-center{
 	margin-top: 30px;
 	margin: 0 auto;
 	max-width: 330px;
    padding: 15px 40px;
	transparent: 0.1;

}

.login-button{
	margin-top: 5px;
}

.login-register{
	font-size: 11px;
	text-align: center;
}

</style>
</head>
<body>
<?php
	$this->load->library('session');
	$login_session = $this->session->userdata('userlogin');
?>
	<div class="container">
		<div class="row main">
			<div class="panel panel-info" style="max-width: 300px;margin: 0 auto;">
			<div class="panel-heading">
			   <div class="panel-title text-center">
					<h4 class="title">SMART-CASH</h4>
				</div>
			</div> 
			<div class="main-login main-center" style="padding: 0px; padding-bottom: 20px;">
				<ul class="nav nav-tabs nav-justified">
					<li class="active"><a data-toggle="tab" href="#menu1">Admin</a></li>
					<li><a data-toggle="tab" href="#menu2">Guest</a></li>
				</ul>

				<div class="tab-content">
					<div id="menu1" class="tab-pane fade in active">
						<form style="margin: 0px auto 20px; width: 200px;" class="form-horizontal" method="post" action="http://localhost/CodeIgniter/index.php/cash/login">
							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Username</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-user"></div>
										<input type="text" class="form-control" name="user" id="user"  placeholder="Enter your Username"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></div>
										<input type="password" class="form-control" name="pass" id="pass"  placeholder="Enter your Password"/>
									</div>
								</div>
							</div>

							<div class="form-group ">
								<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
							</div>
						</form>
					</div>
					<div id="menu2" class="tab-pane fade">
						<form style="margin: 0px auto 20px; width: 200px;" class="form-horizontal" method="post" action="http://localhost/CodeIgniter/index.php/cash/login">
							<div class="form-group">
								<label for="username" class="cols-sm-2 control-label">Username</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-user"></div>
										<input type="text" class="form-control" name="userg" id="userg"  placeholder="Enter your Username"/>
									</div>
								</div>
							</div>

							<div class="form-group">
								<label for="password" class="cols-sm-2 control-label">Password</label>
								<div class="cols-sm-10">
									<div class="input-group">
										<div class="input-group-addon"><span class="glyphicon glyphicon-lock"></div>
										<input type="password" class="form-control" name="passg" id="passg"  placeholder="Enter your Password"/>
									</div>
								</div>
							</div>

							<div class="form-group ">
								<button type="submit" class="btn btn-primary btn-lg btn-block login-button">Login</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</body>
</html>