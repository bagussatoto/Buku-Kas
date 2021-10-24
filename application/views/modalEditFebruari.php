<?php foreach($data as $row): ?>
<!-- Modal Date Uang -->
	<div class="modal-dialog" style="width: 330px;" >
		<form action="insertDateFebruari" method="post">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Kas Bulan Februari</h4>
			</div>
			<div class="modal-body" style="height:235px;" >
				<div class="form-group form-inline">
					<input type="hidden" class="form-control" id="dateId" name="dateId" value="<?php echo $row->dateId;?>">
				</div>
		
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-5 :</label>
					<?php if($row->dateFive>0){ ?>
					<input readonly type="text" class="form-control" id="dateFive" name="dateFive" placeholder="Minggu ke-5" value="<?php echo $row->dateFive;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateFive" name="dateFive" placeholder="Minggu ke-5" value="<?php echo $row->dateFive;?>">
					<?php } ?>
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-6 :</label>
					<?php if($row->dateSix>0){ ?>
					<input readonly type="text" class="form-control" id="dateSix" name="dateSix" placeholder="Minggu ke-6" value="<?php echo $row->dateSix;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateSix" name="dateSix" placeholder="Minggu ke-6" value="<?php echo $row->dateSix;?>">
					<?php } ?>
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-7 :</label>
					<?php if($row->dateSeven>0){ ?>
					<input readonly type="text" class="form-control" id="dateSeven" name="dateSeven" placeholder="Minggu ke-7" value="<?php echo $row->dateSeven;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateSeven" name="dateSeven" placeholder="Minggu ke-7" value="<?php echo $row->dateSeven;?>">
					<?php } ?>
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-8 :</label>
					<?php if($row->dateEight>0){ ?>
					<input readonly type="text" class="form-control" id="dateEight" name="dateEight" placeholder="Minggu ke-8" value="<?php echo $row->dateEight;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateEight" name="dateEight" placeholder="Minggu ke-8" value="<?php echo $row->dateEight;?>">
					<?php } ?>
				</div>
				
			</div>
			<div class="modal-footer" >
			<button type="submit" id="submit" name="submit" class="btn btn-info">Insert</button>
		  </div>
		</div>
		</form>
	</div>
<?php endforeach; ?>