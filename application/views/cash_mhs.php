<!DOCTYPE html>
<html><head>
<title>SMART-CASH</title>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" >
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" >
<link href="<?php echo base_url('assets/simple_sidebar.css');?>" rel="stylesheet" >
<script type="text/javascript" src="<?php echo base_url('assets/jquery.js');?>"> </script>
<script type="text/javascript" src="<?php echo base_url('assets/jquery.min.js');?>"> </script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"/> </script>
<style>
	.zebra{
		background-color:#eee;}
	.badge{
		background-color:#5cb85c;
		font-size: 12pt;}
	.carousel-control.right, .carousel-control.left {
		background-image:none;}
</style>
<script type="text/javascript">
   //--- UPDATE MAHASISWA ---
   $(document).ready(function (){
	   $(".openModalUpadateMhs").click(function(e) {
			var m = $(this).attr("id");
			$.ajax({
				   url: 'http://localhost/CodeIgniter/index.php/cash/editDataMhs',
				   type: "POST",
				   data : {id: m},
				   success: function (ajaxData){
				   $("#ModalEdit").html(ajaxData);
				   $("#ModalEdit").modal('show',{backdrop: 'true'});
			   }
			});
		});
    });
   
   //--- UPDATE UANG (DATE) ---
   $(document).ready(function (){
	   $(".openModalUpadateDate").click(function(e) {
			var m = $(this).attr("id");
			$.ajax({
				   url: 'http://localhost/CodeIgniter/index.php/cash/editDataDate',
				   type: "POST",
				   data : {dateId: m},
				   success: function (ajaxData){
				   $("#ModalEdit").html(ajaxData);
				   $("#ModalEdit").modal('show',{backdrop: 'true'});
			   }
			});
		});
    });
	
	//---MODAL DATE FEBRUARI-- 
	$(document).ready(function (){
	   $(".openModalUpadateDateFebruari").click(function(e) {
			var m = $(this).attr("id");
			$.ajax({
				   url: 'http://localhost/CodeIgniter/index.php/cash/editDataDateFebruari',
				   type: "POST",
				   data : {dateId: m},
				   success: function (ajaxData){
				   $("#ModalEdit").html(ajaxData);
				   $("#ModalEdit").modal('show',{backdrop: 'true'});
			   }
			});
		});
    });
	
	//---MODAL DATE MARET-- 
	$(document).ready(function (){
	   $(".openModalUpadateDateMaret").click(function(e) {
			var m = $(this).attr("id");
			$.ajax({
				   url: 'http://localhost/CodeIgniter/index.php/cash/editDataDateMaret',
				   type: "POST",
				   data : {dateId: m},
				   success: function (ajaxData){
				   $("#ModalEdit").html(ajaxData);
				   $("#ModalEdit").modal('show',{backdrop: 'true'});
			   }
			});
		});
    });
	
	//---RESET DATA-- 
	$(document).ready(function (){
	   $("#resetData").click(function(e) {
			var m = $(this).attr("id");
			if(confirm('Pastikan Anda sudah mengunduh File PDF !!! \nUntuk mengunduh dapat menuju ke menu Export To PDF')){
				$.ajax({
					   url: 'http://localhost/CodeIgniter/index.php/cash/pilihTahun',
					   type: "POST",
					   data : {dateId: m},
					   success: function (ajaxData){
					   $("#ModalEdit").html(ajaxData);
					   $("#ModalEdit").modal('show',{backdrop: 'true'});
				   }
				});
			}
		});
    });
	
	//--- DELETE MAHASISWA & UANG ---
	function deleteMhs(id){
		if(confirm('Hapus data ini ? ')){
			$.ajax({
				type: 'POST',
				url: 'http://localhost/CodeIgniter/index.php/cash/deleteMhs',
				data: {id: id},
				success: function(data){
					location.reload();
				}
			});
		}
	}
	
	//--- DELETE AGENDA ---
	function deleteAgenda(id){
		if(confirm('Hapus agenda ini ? ')){
			$.ajax({
				type: 'POST',
				url: 'http://localhost/CodeIgniter/index.php/cash/deleteAgenda',
				data: {id: id},
				success: function(data){
					location.reload();
				}
			});
		}
	}
	
	$(document).ready(function(){
		$('[data-toggle="tooltip"]').tooltip(); 
	});
	$('.carousel').carousel({
		interval: false
	});
	$("#menu-toggle").click(function(e) {
        e.preventDefault();
        $("#wrapper").toggleClass("toggled");
    });
</script>
<style>
	.a{
		text-align: center;
		background-color:#5bc0de;
		font-size:16pt;
	}
	.b{
		text-align: center;
	}
	.design3{
		background-color:rgba(238, 238, 238, 0.46);
	}
	.design{
		background-color:rgba(238, 238, 238, 0.46);
	}
	.profil{
		margin: 20px 30px 20px;}
	.side{
		padding: 0px;}
</style>
</head>

<body>
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
			<a style="padding: 10px 0px; margin-left: -20px;" href="http://localhost/CodeIgniter/index.php/cash/admin"><span class="glyphicon glyphicon-th-list" style="color: #5bc0de"></span> Entri Cash Data </a>
		</li>
		<li>
			<a style="padding: 10px 0px; margin-left: -20px;" href="http://localhost/CodeIgniter/index.php/cash/grafik">
			<span class="glyphicon glyphicon-stats" style="color: #5bc0de"></span> Graphic Chart</a>
		</li>
		<li>
			<a style="padding: 10px 0px; margin-left: -20px;" href="http://localhost/CodeIgniter/index.php/cash/pdf">
			<span class="glyphicon glyphicon-file" style="color: #5bc0de"></span> Export to PDF</a>
		</li>
		<li>
			<a style="padding: 10px 0px; margin-left: -20px;"href="http://localhost/CodeIgniter/index.php/cash/settings">
			<span class="glyphicon glyphicon-cog" style="color: #5bc0de"></span> Settings
			<span class="label label-default">Not Available</span>
			</a>
		</li>
		<li>
			<a style="padding: 10px 0px; margin-left: -20px;" href="http://localhost/CodeIgniter/index.php/cash">
			<span class="glyphicon glyphicon-log-out" style="color: #5bc0de"></span> Logout
			</a>
		</li>
	</ul>
</div>

<!-- SECTION 1 - DATA KAS -->
<div id="dataKas" class="dataKas">
<div id="page-content-wrapper">
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<button title="Tambah Data" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="float:left; margin:10px 0px"><b><span class="glyphicon glyphicon-plus" style="color: #fff"></span> Tambah Mahasiswa</b></button>
		</div>
		<div class="col-sm-5">
			<div class="input-group" style="float:right; margin:10px 0px;">
				<input type="text" class="form-control" placeholder="Search for...">
				<span class="input-group-btn">
					<button class="btn btn-warning" type="button"><span class="glyphicon glyphicon-search"></span> Search</button>
				</span>
			</div>
		</div>
		<div class="col-sm-3">
			<div class="input-group" style="float:right; margin:10px 0px;">
				<button id="resetData" class="btn btn-info" type="button"> 
					Reset Data
					<span class="glyphicon glyphicon-exclamation-sign"></span>
				</button>
			</div>
		</div>
		<div class="col-sm-1">
			<div class="btn-group" style="float:right; margin:10px 0px">
				<button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php
						$this->load->library('session');
						$admin_session = $this->session->userdata('adminlogin');
						echo $admin_session['user'];
					?>
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" style="margin-left: -90px;">
					<li><a href="#">Change Password</a></li>
					<li><a href="#">Change Photo Profil</a></li>
				</ul>
			</div>
		</div>
	</div>
	
	<!-- Modal Mahasiswa -->
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog" >
		<form action="insertData" method="post">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Data Mahasiswa</h4>
			</div>
			<div class="modal-body" >
				<div class="form-group">
					<label for="user">NRP :</label>
					<input type="text" class="form-control" id="nrp" name="nrp" placeholder="Masukkan nrp mahasiswa">
				</div>
				<div class="form-group">
					<label for="pwd">Nama :</label>
					<input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan nama mahasiswa">
				</div>
			</div>
			<div class="modal-footer" style="">
			<input class="btn btn-info btn-md" type="submit" value="Insert"/>
			</div>
		</div>
		</form>
	  </div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-sm-5" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr class="b" >
					<th>No</th>
					<th>NRP</th>
					<th>Nama</th>
					<th></th>
				</tr>
				<?php foreach ($lists['res1'] as $lists['res1']):?>
				<tr>
					<?php if($lists['res1']->id%2==1){ ?>
						<td class="zebra"><?php echo $lists['res1']->id;?></td>
						<td class="zebra"><?php echo $lists['res1']->nrp;?></td>
						<td class="zebra"><?php echo $lists['res1']->nama;?></td>
						<td class="zebra" align="left">
							<button type="button" onClick="deleteMhs('<?php echo $lists["res1"]->id; ?>')" id="deleteMhs" name="deleteMhs" style="border-radius:0px; box-shadow: none; border: none; background-color: #eee;" class="btn btn-info btn-xs active" title="Delete Mahasiswa">
							<span class="glyphicon glyphicon-remove" style="color: red;"/>
							</button>
							<button id="<?php echo $lists['res1']->id; ?>" type="button" style="border-radius:0px; box-shadow: none; border: none; background-color: #eee;" class="btn btn-info btn-xs active openModalUpadateMhs" title="Edit Data Mahasiswa">
							<span class="glyphicon glyphicon-pencil" style="color: blue;">
							</button>
						</td>
					<?php }else{ ?>
						<td><?php echo $lists['res1']->id;?></td>
						<td><?php echo $lists['res1']->nrp;?></td>
						<td><?php echo $lists['res1']->nama;?></td>
						<td align="left">
							<button type="button" onClick="deleteMhs('<?php echo $lists["res1"]->id;?>')" id="deleteMhs" name="deleteMhs" style="border-radius:0px; box-shadow: none; border: none; background-color: #fff;" class="btn btn-info btn-xs active" title="Delete Mahasiswa">
							<span class="glyphicon glyphicon-remove" style="color: red;">
							</button>
							<button id="<?php echo $lists['res1']->id;?>" type="button" style="border-radius:0px; box-shadow: none; border: none; background-color: #fff;" class="btn btn-info btn-xs active openModalUpadateMhs" title="Edit Data Mahasiswa">
							<span class="glyphicon glyphicon-pencil" style="color: blue;">
							</button>
						</td>
					<?php } ?>
					
					
				</tr>
				<?php endforeach; ?>				
			</table>
		</div>
		
		<div class="col-sm-5" style="padding:0px">
			<div id="myCarousel" class="carousel slide" data-interval="false">
			<!-- Carousel items -->
			<div class="carousel-inner">
			<div class="active item">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<a style="color: #000;" class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<th colspan="5"><center>Januari</center></th>
					<a style="color: #000;" class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</tr>
<!--foreach-->	<?php foreach ($lists['res2'] as $lists['resA']){?>
				<?php 
					$badge1 = $lists['resA']->dateOne;
					$badge2 = $lists['resA']->dateTwo;
					$badge3 = $lists['resA']->dateThree;
					$badge4 = $lists['resA']->dateFour;
					if($lists['resA']->dateId%2==1){ ?>
				<tr class="zebra" style="text-align:center;">
					<?php
						if($badge1 > 0){?>
							<td><a href="#" data-toggle="tooltip" data-placement="right" title="Input tgl bla bla"><span class="badge"><?php echo $lists['resA']->dateOne;?></span></a></td>
					<?php }else{ ?>
							<td><?php echo $lists['resA']->dateOne;?></td>
					<?php }if($badge2 > 0){?>
							<td><span class="badge"><?php echo $lists['resA']->dateTwo;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resA']->dateTwo;?></td>
					<?php }if($badge3 > 0){?>
							<td><span class="badge"><?php echo $lists['resA']->dateThree;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resA']->dateThree;?></td>
					<?php }if($badge4 > 0){?>
							<td><span class="badge"><?php echo $lists['resA']->dateFour;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resA']->dateFour;?></td>
					<?php } ?>
					<td>
						<button data-toggle="modal" id="<?php echo $lists['resA']->dateId;?>" data-target="#myModalDate" type="button" style="border-radius:0px; box-shadow: none; border: none; background-color: #eee;" class="btn btn-info btn-xs active openModalUpadateDate" title="Insert">
						<span class="glyphicon glyphicon-pencil" style="color: blue;" />
						</button>
					</td>
				</tr>
				<?php } else { ?>
				<tr style="text-align:center;">
					<?php if($badge1 > 0){?>
							<td><a href="#" data-toggle="tooltip" data-placement="bottom" title=""><span class="badge"><?php echo $lists['resA']->dateOne;?></span></a></td>
					<?php }else{ ?>
							<td><?php echo $lists['resA']->dateOne;?></td>
					<?php }if($badge2 > 0){?>
							<td><span class="badge"><?php echo $lists['resA']->dateTwo;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resA']->dateTwo;?></td>
					<?php }if($badge3 > 0){?>
							<td><span class="badge"><?php echo $lists['resA']->dateThree;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resA']->dateThree;?></td>
					<?php }if($badge4 > 0){?>
							<td><span class="badge"><?php echo $lists['resA']->dateFour;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resA']->dateFour;?></td>
					<?php } ?>
					<td>
						<button data-toggle="modal" id="<?php echo $lists['resA']->dateId;?>" data-target="#myModalDate" type="button" data-placement="bottom" style="border-radius:0px; box-shadow: none; border: none; background-color: #fff;" class="btn btn-info btn-xs active openModalUpadateDate" title="Insert">
						<span class="glyphicon glyphicon-pencil" style="color: blue;" />
						</button>
					</td>
				</tr>
				<?php } ?>
				<?php } unset($lists['resA']); ?>
			</table>
			</div>
			<div class="item">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<a style="color: #000;" class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<th colspan="5"><center>Februari</center></th>
					<a style="color: #000;" class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</tr>
				
<!--foreach-->	<?php foreach ($lists['res2'] as $lists['resB']){?>				
				<?php 
					$badge5 = $lists['resB']->dateFive;
					$badge6 = $lists['resB']->dateSix;
					$badge7 = $lists['resB']->dateSeven;
					$badge8 = $lists['resB']->dateEight;
					if($lists['resB']->dateId%2==1){ ?>
				<tr class="zebra" style="text-align:center;">
					<?php 
						if($badge5 > 0){?>
							<td><a href="#" data-toggle="tooltip" data-placement="bottom" title=""><span class="badge"><?php echo $lists['resB']->dateFive;?></span></a></td>
					<?php }else{ ?>
							<td><?php echo $lists['resB']->dateFive;?></td>
					<?php }if($badge6 > 0){?>
							<td><span class="badge"><?php echo $lists['resB']->dateSix;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resB']->dateSix;?></td>
					<?php }if($badge7 > 0){?>
							<td><span class="badge"><?php echo $lists['resB']->dateSeven;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resB']->dateSeven;?></td>
					<?php }if($badge8 > 0){?>
							<td><span class="badge"><?php echo $lists['resB']->dateEight;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resB']->dateEight;?></td>
					<?php } ?>
					<td>
						<button data-toggle="modal" id="<?php echo $lists['resB']->dateId;?>" data-target="#myModalDate" type="button" style="border-radius:0px; box-shadow: none; border: none; background-color: #eee;" class="btn btn-info btn-xs active openModalUpadateDateFebruari" title="Insert">
						<span class="glyphicon glyphicon-pencil" style="color: blue;" />
						</button>
					</td>
				</tr>
				<?php } else { ?>
				<tr style="text-align:center;">
					<?php if($badge5 > 0){?>
							<td><a href="#" data-toggle="tooltip" data-placement="bottom" title=""><span class="badge"><?php echo $lists['resB']->dateFive;?></span></a></td>
					<?php }else{ ?>
							<td><?php echo $lists['resB']->dateFive;?></td>
					<?php }if($badge6 > 0){?>
							<td><span class="badge"><?php echo $lists['resB']->dateSix;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resB']->dateSix;?></td>
					<?php }if($badge7 > 0){?>
							<td><span class="badge"><?php echo $lists['resB']->dateSeven;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resB']->dateSeven;?></td>
					<?php }if($badge8 > 0){?>
							<td><span class="badge"><?php echo $lists['resB']->dateEight;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resB']->dateEight;?></td>
					<?php } ?>
					<td>
						<button data-toggle="modal" id="<?php echo $lists['resB']->dateId;?>" data-target="#myModalDate"type="button" data-placement="bottom" style="border-radius:0px; box-shadow: none; border: none; background-color: #fff;" class="btn btn-info btn-xs active openModalUpadateDateFebruari" title="Insert">
						<span class="glyphicon glyphicon-pencil" style="color: blue;" />
						</button>
					</td>
				</tr>
				<?php } ?>
				<?php } unset($lists['resB']); ?>
			</table>
			</div>
			<div class="item">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<a style="color: #000;" class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<th colspan="5"><center>Maret</center></th>
					<a style="color: #000;" class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</tr>
				
<!--foreach-->	<?php foreach ($lists['res2'] as $lists['resC']){?>				
				<?php 
					$badge9 = $lists['resC']->dateNine;
					$badge10 = $lists['resC']->dateTen;
					$badge11 = $lists['resC']->dateEleven;
					$badge12 = $lists['resC']->dateTwelve;
					if($lists['resC']->dateId%2==1){ ?>
				<tr class="zebra" style="text-align:center;">
					<?php 
						if($badge9 > 0){?>
							<td><a href="#" data-toggle="tooltip" data-placement="bottom" title=""><span class="badge"><?php echo $lists['resC']->dateNine;?></span></a></td>
					<?php }else{ ?>
							<td><?php echo $lists['resC']->dateNine;?></td>
					<?php }if($badge10 > 0){?>
							<td><span class="badge"><?php echo $lists['resC']->dateTen;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resC']->dateTen;?></td>
					<?php }if($badge11 > 0){?>
							<td><span class="badge"><?php echo $lists['resC']->dateEleven;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resC']->dateEleven;?></td>
					<?php }if($badge12 > 0){?>
							<td><span class="badge"><?php echo $lists['resC']->dateTwelve;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resC']->dateTwelve;?></td>
					<?php } ?>
					<td>
						<button data-toggle="modal" id="<?php echo $lists['resC']->dateId;?>" data-target="#myModalDate" type="button" style="border-radius:0px; box-shadow: none; border: none; background-color: #eee;" class="btn btn-info btn-xs active openModalUpadateDateMaret" title="Insert">
						<span class="glyphicon glyphicon-pencil" style="color: blue;" />
						</button>
					</td>
				</tr>
				<?php } else { ?>
				<tr style="text-align:center;">
					<?php if($badge9 > 0){?>
							<td><a href="#" data-toggle="tooltip" data-placement="bottom" title=""><span class="badge"><?php echo $lists['resC']->dateNine;?></span></a></td>
					<?php }else{ ?>
							<td><?php echo $lists['resC']->dateNine;?></td>
					<?php }if($badge10 > 0){?>
							<td><span class="badge"><?php echo $lists['resC']->dateTen;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resC']->dateTen;?></td>
					<?php }if($badge11 > 0){?>
							<td><span class="badge"><?php echo $lists['resC']->dateEleven;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resC']->dateEleven;?></td>
					<?php }if($badge12 > 0){?>
							<td><span class="badge"><?php echo $lists['resC']->dateTwelve;?></span></td>
					<?php }else{ ?>
							<td><?php echo $lists['resC']->dateTwelve;?></td>
					<?php } ?>
					<td>
						<button data-toggle="modal" id="<?php echo $lists['resC']->dateId;?>" data-target="#myModalDate"type="button" data-placement="bottom" style="border-radius:0px; box-shadow: none; border: none; background-color: #fff;" class="btn btn-info btn-xs active openModalUpadateDateMaret" title="Insert">
						<span class="glyphicon glyphicon-pencil" style="color: blue;" />
						</button>
					</td>
				</tr>
				<?php } ?>
				<?php } unset($lists['resC']); ?>
			</table>
			</div>
			</div>
			<!-- Carousel nav -->
			</div>
		</div>
		
		<div class="tooltip top" role="tooltip">
		  <div class="tooltip-arrow"></div>
		  <div class="tooltip-inner">
			Some tooltip text!
		  </div>
		</div>
		
		<!-- Modal Popup untuk Edit Uang--> 
		<div id="ModalEdit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		</div>
		
		<div class="col-sm-1" style="padding:0px"> 
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr class="b">
					<th>JUMLAH</th>
				</tr>
				<?php $query = mysql_query("select * from cash_mhs"); ?>
				<?php $jumlah = mysql_num_rows($query); $hasil=0; ?>
				<?php for($i=1; $i<=$jumlah; $i++){?>
				<?php $sum = mysql_query("SELECT dateOne+dateTwo+dateThree+dateFour+dateFive+dateSix+dateSeven+dateEight+dateNine+dateTen+dateEleven+dateTwelve FROM `cash_date` WHERE dateId=$i"); ?>
				<?php if($i%2==1){ ?>
				<tr class="zebra"> <td><?php $total = mysql_fetch_array($sum); echo '<b>'.$total[0].'</b>';?></td> </tr>
				<?php }else{ ?>
				<tr> <td><?php $total = mysql_fetch_array($sum); echo '<b>'.$total[0].'</b>';?></td> </tr>
				<?php } ?>
				<?php $hasil+=$total[0];} ?>
			</table>
		</div>	
	</div>
	
	<div class="row">
		<div class="col-sm-9" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr><td></td></tr>
			</table>
		</div>
		<div class="col-sm-1" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<th>TOTAL</th>
				</tr>
			</table>
		</div>
		<div class="col-sm-1" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<th><?php echo $hasil;?></th>
				</tr>
			</table>
		</div>
		<div class="col-sm-1" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">	
			</table>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-3">
			<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
				<div class="panel panel-default">
					<div class="panel-heading" role="tab" id="headingOne" style="background-color: #5bc0de; color: #fff;">
						<h4 class="panel-title">
							<a style="text-decoration: none;" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
							Tambah Agenda &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
							<span class="caret"></span>
							</a>
						</h4>
					</div>
					<div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
						<div class="panel-body" action="cash/insertAgenda" method="post">
							<form role="form" action="insertAgenda" method="POST" enctype="multipart/form-data">
								<div class="form-group" >
									<input type="text" class="form-control" id="agendaNama" name="agendaNama" placeholder="Nama Agenda">
								</div>
								<div class="form-group" >
									<input type="text" class="form-control" id="agendaLokasi" name="agendaLokasi" placeholder="Lokasi Agenda">
								</div>
								<div class="form-group">
									<input type="date" class="form-control" id="agendaTgl" name="agendaTgl" placeholder="Tanggal Agenda">
								</div>
								<div class="form-group">
									<input type="file" class="form-control" id="agendaImage" name="agendaImage" placeholder="Nota Agenda" title="Masukkan gambar nota">
								</div>
								<div class="form-group">
									<input type="text" class="form-control" id="agendaBiaya" name="agendaBiaya"placeholder="Biaya Agenda">
								</div>
								<button type="submit" id="submitAgenda" name="submitAgenda" class="btn btn-default">Submit</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php $query = mysql_query("select * from cash_agenda"); ?>
		<?php $jumlah2 = mysql_num_rows($query);?>
		<?php if($jumlah2!=0){ ?>
		<div class="col-sm-7" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Lokasi</th>
					<th>Tgl</th>
					<th>Nota</th>
					<th>Biaya</th>
					<th></th>
				</tr>
				<tr>
					<?php
						foreach ($lists['res3'] as $lists['res3']):?>
					<?php if($lists['res3']->agendaId%2==1){ ?>
					<tr>
						<td class="zebra"><?php echo $lists['res3']->agendaId;?></td>
						<td class="zebra"><?php echo $lists['res3']->agendaNama;?></td>
						<td class="zebra"><?php echo $lists['res3']->agendaLokasi;?></td>
						<td class="zebra"><?php echo $lists['res3']->agendaTgl;?></td>
						<td class="zebra"><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#nota">Lihat nota</button></td>
						<td class="zebra"><?php echo $lists['res3']->agendaBiaya;?></td>
						<td class="zebra">
							<button onClick="deleteAgenda('<?php echo $lists["res3"]->agendaId;?>')" type="button" style="border-radius:0px; box-shadow: none; border: none; background-color: #eee;" class="btn btn-info btn-xs active" title="Delete">
							<span class="glyphicon glyphicon-remove" style="color: red;">
							</button>
							<button type="button" style="border-radius:0px; box-shadow: none; border: none; background-color: #eee;" class="btn btn-info btn-xs active" title="Edit">
							<span class="glyphicon glyphicon-pencil" style="color: blue;">
							</button>
						</td>
					</tr>
					<?php }else{ ?>
					<tr>
						<td><?php echo $lists['res3']->agendaId;?></td>
						<td><?php echo $lists['res3']->agendaNama;?></td>
						<td><?php echo $lists['res3']->agendaLokasi;?></td>
						<td><?php echo $lists['res3']->agendaTgl;?></td>
						<td><button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#nota">Lihat nota</button></td>
						<td><?php echo $lists['res3']->agendaBiaya;?></td>
						<td>
							<button onClick="deleteAgenda('<?php echo $lists["res3"]->agendaId;?>')" type="button" style="border-radius:0px; box-shadow: none; border: none; background-color: #fff;" class="btn btn-info btn-xs active" title="Delete">
							<span class="glyphicon glyphicon-remove" style="color: red;">
							</button>
							<button type="button" style="border-radius:0px; box-shadow: none; border: none; background-color: #fff;" class="btn btn-info btn-xs active" title="Edit">
							<span class="glyphicon glyphicon-pencil" style="color: blue;">
							</button>
						</td>
					</tr>
					<?php } ?>
					<?php endforeach ;?>	
				</tr>
			</table>
		</div>
		<div class="col-sm-1" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<td><span class="glyphicon glyphicon-minus"></span> &nbsp </td>
				</tr>
				<?php $query2 = mysql_query("select * from cash_agenda"); ?>
				<?php $jumlah2 = mysql_num_rows($query2); $hasil_akhir=0; ?>
				<?php for($j=1; $j<=$jumlah2; $j++){?>
				<?php $sum2 = mysql_query("SELECT agendaBiaya FROM `cash_agenda` WHERE agendaId=$j"); ?>
				<?php if($j%2==1){ ?>
				<tr class="zebra"> <td><?php $total2 = mysql_fetch_array($sum2); echo '<b>'.$total2[0].'</b>';?></td> </tr>
				<?php }else{ ?>
				<tr> <td><?php $total2 = mysql_fetch_array($sum2); echo '<b>'.$total2[0].'</b>';?></td> </tr>
				<?php } ?>
				<?php $hasil_akhir+=$total2[0];} ?>
			</table>
		</div>
		
		<!-- Modal Nota -->
		<div id="nota" class="modal fade" role="dialog">
		  <div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
			  <div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Gambar Nota</h4>
			  </div>
			  <div class="modal-body">
				<center>
					<img src="<?php echo base_url('assets/images/'.$lists['res3']->agendaImage);?>" />
				</center>
			  </div>
			  <div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			  </div>
			</div>
		  </div>
		</div>
		
		<?php }else{ ?>
		<div class="col-sm-8" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<th>No</th>
					<th>Nama</th>
					<th>Lokasi</th>
					<th>Nota</th>
					<th>Tgl</th>
					<th>Biaya</th>
					<th><span class="glyphicon glyphicon-minus"></span> &nbsp </th>
				</tr>
				<tr>
					<td align="center" colspan="7" >Tidak ada agenda</td>
					<?php $hasil_akhir=0;?>
				</tr>
			</table>
		</div>
		<?php } ?>
		<div class="col-sm-1" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
			</table>
		</div>
	</div>
	
	<!--- Baris Hasil Akhir --->
	<div class="row">
		<div class="col-sm-8" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr><td></td></tr>
			</table>
		</div>
		<div class="col-sm-2" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<th>TOTAL AKHIR</th>
				</tr>
			</table>
		</div>
		<div class="col-sm-1" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				<tr>
					<th><?php echo $hasil-$hasil_akhir;?></th>
				</tr>
			</table>
		</div>
		<div class="col-sm-1" style="padding:0px">
			<table width="100%" border="0" align="center" cellpadding="2" class="table">
				
			</table>
		</div>
	</div>
	
</div>	
</div> <!-- wrapper -->
</div> <!-- SECTION 1 END -->
</body>
</html>