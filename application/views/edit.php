<html>
<head>
<style>
	.box1{
		width: 150px;
		height: 30px;
		/*border-radius: 5px;*/
		border: 1px solid #eee;
		margin: 5px 5px;
		padding: 0px 5px;
		box-shadow: 3px 3px #aaa;
	}
	.box1:focus{
		box-shadow: 3px 3px #5BC0DE;
	}
	.button{
		width:60px;
		height:30px;
		border: 0px ;
		/*border-radius: 5px;*/
		margin-top: 2px;
		/*box-shadow: 3px 3px #aaa;*/
	}
	.button:hover{
		background: #5BC0DE;
	}
	.shadow{
		box-shadow: 3px 3px #aaa;
		border: 2px solid #ccc;
		width: 35%;
		/*border-radius: 5px;*/
	}
</style>
</head>
<body bgcolor="#eee">
<center>
<div class="shadow">
<?php foreach($data as $row): ?>
<form action="<?php echo base_url().'index.php/mahasiswa/updateData'; ?>" method="post">
<table>
	<tr>
		<td>No</td>
		<td>:</td>
		<td><input class="box1" type="text" name="no" value="<?php echo $row->no;?>" readonly/></td>
	</tr>
	<tr>
		<td>NRP</td>
		<td>:</td>
		<td><input class="box1" type="text" name="nrp" value="<?php echo $row->nrp;?>"/></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><input class="box1" type="text" name="nama" value="<?php echo $row->nama;?>"/></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td>
		<select class="box1" name="jen_kel">
			<option value="Laki-laki">Laki-laki</option>
			<option value="Perempuan">Perempuan</option>
		</select>
		</td>
	</tr>
	<tr>
		<td>TTL</td>
		<td>:</td>
		<td>
			<input class="box1" type="text" name="tempat_lahir" value="<?php echo $row->tempat;?>"/> / 
		    <input class="box1" type="date" name="tanggal_lahir" value="<?php echo $row->tanggal;?>"/>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input class="button" type="submit" value="Update"/></td>
	</tr>
</table>
</form>
<?php endforeach;?>
</div>
</center>
</body>
</html>