<?php foreach($data as $row): ?>
<!-- Modal Date Uang -->
	<div class="modal-dialog" style="width: 340px;" >
		<form action="insertDateMaret" method="post">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Tambah Kas Bulan Maret</h4>
			</div>
			<div class="modal-body" style="height:235px;" >
				<div class="form-group form-inline">
					<input type="hidden" class="form-control" id="dateId" name="dateId" value="<?php echo $row->dateId;?>">
				</div>
		
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-09 :</label>
					<?php if($row->dateNine==0){ ?>
					<input type="text" class="form-control" id="dateNine" name="dateNine" placeholder="Minggu ke-9" value="<?php echo $row->dateNine;?>">
					<?php }else{ ?>
					<input readonly type="text" class="form-control" id="dateNine" name="dateNine" placeholder="Minggu ke-9" value="<?php echo $row->dateNine;?>">
					<?php } ?>
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-10 :</label>
					<?php if($row->dateTen>0){ ?>
					<input readonly type="text" class="form-control" id="dateTen" name="dateTen" placeholder="Minggu ke-10" value="<?php echo $row->dateTen;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateTen" name="dateTen" placeholder="Minggu ke-10" value="<?php echo $row->dateTen;?>">
					<?php } ?>
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-11 :</label>
					<?php if($row->dateEleven>0){ ?>
					<input readonly type="text" class="form-control" id="dateEleven" name="dateEleven" placeholder="Minggu ke-11" value="<?php echo $row->dateEleven;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateEleven" name="dateEleven" placeholder="Minggu ke-11" value="<?php echo $row->dateEleven;?>">
					<?php } ?>
				</div>
				<div class="form-group form-inline">
					<label for="minggu">Minggu ke-12 :</label>
					<?php if($row->dateTwelve>0){ ?>
					<input readonly type="text" class="form-control" id="dateTwelve" name="dateTwelve" placeholder="Minggu ke-12" value="<?php echo $row->dateTwelve;?>">
					<?php }else{ ?>
					<input type="text" class="form-control" id="dateTwelve" name="dateTwelve" placeholder="Minggu ke-12" value="<?php echo $row->dateTwelve;?>">
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