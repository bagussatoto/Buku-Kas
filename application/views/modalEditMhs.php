<?php foreach($data as $row): ?>
<!-- Modal Mahasiswa -->
	  <div class="modal-dialog" >
		<form action="updateDataMhs" method="post">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Edit Data Mahasiswa</h4>
			</div>
			<div class="modal-body" >
				<div class="form-group">
					<input readonly type="text" class="form-control" id="id" name="id" value="<?php echo $row->id;?>" placeholder="">
				</div>
				<div class="form-group">
					<label for="user">NRP :</label>
					<input type="text" class="form-control" id="nrp" name="nrp" value="<?php echo $row->nrp;?>" placeholder="Masukkan nrp mahasiswa">
				</div>
				<div class="form-group">
					<label for="pwd">Nama :</label>
					<input type="text" class="form-control" id="nama" name="nama" value="<?php echo $row->nama;?>" placeholder="Masukkan nama mahasiswa">
				</div>
			</div>
			<div class="modal-footer" style="">
			<button type="submit" id="submit" name="submit" class="btn btn-info">Update</button>
			</div>
		</div>
		</form>
	  </div>
</div>
<?php endforeach; ?>