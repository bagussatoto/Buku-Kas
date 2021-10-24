<?php foreach($data as $row): ?>
<!-- Modal Date Uang -->
	<div class="modal-dialog" style="width: 330px;" >
		<form action="insertDate" method="post">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Kas Masukkan Januari</h4>
			</div>
			<div class="modal-body" style="height:235px;" >
				<div class="form-group form-inline">
					<input type="hidden" class="form-control" id="dateId" name="dateId" value="<?php echo $row->dateId;?>">
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-1 :</label>
					<?php if($row->dateOne>0){ ?>
					<input readonly type="text" class="form-control" id="dateOne" name="dateOne" placeholder="Minggu ke-1" value="<?php echo $row->dateOne;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateOne" name="dateOne" placeholder="Minggu ke-1" value="<?php echo $row->dateOne;?>">
					<?php } ?>
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-2 :</label>
					<?php if($row->dateTwo>0){ ?>
					<input readonly type="text" class="form-control" id="dateTwo" name="dateTwo" placeholder="Minggu ke-1" value="<?php echo $row->dateTwo;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateTwo" name="dateTwo" placeholder="Minggu ke-2" value="<?php echo $row->dateTwo;?>">
					<?php } ?>
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-3 :</label>
					<?php if($row->dateThree>0){ ?>
					<input readonly type="text" class="form-control" id="dateThree" name="dateThree" placeholder="Minggu ke-1" value="<?php echo $row->dateThree;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateThree" name="dateThree" placeholder="Minggu ke-3" value="<?php echo $row->dateThree;?>">
					<?php } ?>
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-4 :</label>
					<?php if($row->dateFour>0){ ?>
					<input readonly type="text" class="form-control" id="dateFour" name="dateFour" placeholder="Minggu ke-1" value="<?php echo $row->dateFour;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateFour" name="dateFour" placeholder="Minggu ke-4" value="<?php echo $row->dateFour;?>">
					<?php } ?>
				</div>
			</div>
			<div class="modal-footer">
			<button type="submit" id="submit" name="submit" class="btn btn-info">Insert</button>
		  </div>
		</div>
		</form>
	</div>
<?php endforeach; ?>