<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE HTML>
<html>
<head>
<title>Data Mahasiswa</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="<?php echo base_url('assets/css/bootstrap.css');?>" rel="stylesheet" >
<link href="<?php echo base_url('assets/style.css');?>" rel="stylesheet" >
<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet" >
<script type="text/javascript" src="<?php echo base_url('assets/jquery.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/bootstrap.min.js');?>"/></script>
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
	
</style>

</head>
<body>
<div class="container">
<table width="500px" border="0" align="center" cellpadding="2" class="table">
<tr height="30px">
<th colspan="6" class="a">DAFTAR MAHASISWA PENS</th>
</tr>
<tr class="b">
<th>No</th>
<th>NRP</th>
<th width="20%">Nama</th>
<th>Jenis Kelamin</th>
<th>Tempat / Tanggal Lahir</th>
<th>Opsi</th>
</tr>
<?php foreach ($data as $row):?>
	<tr>
		<?php if ($row->no%2==0) { ?>
			<td><?php echo $row->no;?></td>
			<td><?php echo $row->nrp;?></td>
			<td class="design2"><?php echo $row->nama;?></td>
			<td><?php echo $row->jenis_kelamin;?></td>
			<td><?php echo $row->tempat; echo' / '; echo $row->tanggal;?></td>
			<td>
				<?php echo anchor('mahasiswa/editData/'.$row->no,
				'<button type="button" style="border-radius:0px; box-shadow: none; border: none;" class="btn btn-info btn-sm active" title="Edit">
				<span class="glyphicon glyphicon-pencil" style="color:#fff;">
				</button>'); ?> 				
				<?php echo anchor('mahasiswa/deleteData/'.$row->no,
				'<button type="button" style="border-radius:0px; box-shadow: none; border: none;" class="btn btn-danger btn-sm active" title="Hapus">
				<span class="glyphicon glyphicon-remove" style="color: #fff"></span>
				</button>'); ?> 
				<?php echo anchor('#'.$row->no,
				'<button type="button" style="border-radius:0px; box-shadow: none; border: none;" class="btn btn-warning btn-sm active" title="Simpan Data">
				<span class="glyphicon glyphicon-save" style="color: #fff"></span>
				</button>'); ?> 
			</td>
		<?php } else { ?>
			<td class="design" ><?php echo $row->no;?></td>
			<td class="design" ><?php echo $row->nrp;?></td>
			<td class="design3"><?php echo $row->nama;?></td>
			<td class="design" ><?php echo $row->jenis_kelamin;?></td>
			<td class="design"><?php echo $row->tempat; echo' / '; echo $row->tanggal;?></td>
			<td class="design">
				<?php echo anchor('mahasiswa/editData/'.$row->no,
				'<button type="button" style="border-radius:0px; box-shadow: none; border: none;" class="btn btn-info btn-sm active" title="Edit">
				<span class="glyphicon glyphicon-pencil" style="color: #fff">
				</button>'); ?> 				
				<?php echo anchor('mahasiswa/deleteData/'.$row->no,
				'<button type="button" style="border-radius:0px; box-shadow: none; border: none;" class="btn btn-danger btn-sm active" title="Hapus">
				<span class="glyphicon glyphicon-remove" style="color: #fff"></span>
				</button>'); ?> 
				<?php echo anchor('#'.$row->no,
				'<button type="button" style="border-radius:0px; box-shadow: none; border: none;" class="btn btn-warning btn-sm active" title="Simpan Data">
				<span class="glyphicon glyphicon-save" style="color: #fff"></span>
				</button>'); ?>
			</td>
		<?php } ?>
	</tr>
<?php endforeach;?>
</table>
<!-- Modal -->
</div>
</body>
</html>