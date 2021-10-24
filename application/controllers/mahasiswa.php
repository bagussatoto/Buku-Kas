<?php
echo '<link href="assets/css/bootstrap.css" >';
echo '<link href="assets/css/bootstrap.min.css" >';
echo '<link href="assets/style.css" >';
class Mahasiswa extends CI_controller{
	
    function __construct(){
		parent::__construct();
		$this->load->model('model_mahasiswa');
		$this->load->helper('url');
		$this->load->helper('html');
    }
    function index(){
		$data['data']=$this->model_mahasiswa->tampilData();
		$this->load->view('mahasiswa',$data);
		echo'
			<script type="text/javascript" src="<?php echo base_url("assets/jquery.js");?>"></script>
			<script type="text/javascript" src="<?php echo base_url("assets/js/bootstrap.min.js");?>"/></script>
			<style>
				.box1{
					width:170px;
					height:30px;
					/*border-radius:5px;*/
					margin: 3px 7px 0px;
					border: 3px solid #fff;
					padding: 0px 5px;
					box-shadow: 3px 3px #bbb;
				}
				.box1:focus{
					box-shadow: 3px 3px #5BC0DE;
				}
				.button{
					width:60px;
					height:30px;
					border: 0px;
					/*border-radius: 5px;*/
					margin-top: 2px;
				}
				.button:hover{
					background: #5BC0DE;
				}
			</style>
			<div class="container">
				<button title="Tambah Data" type="button" class="btn btn-info btn-md" data-toggle="modal" data-target="#myModal" style="border-radius:0px;float:right; margin:10px 0px"><b><span class="glyphicon glyphicon-plus" style="color: #fff"></span> Tambah Data</b></button>

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog" >
				  <div class="modal-dialog" >
					<form action="mahasiswa/insertData" method="post">
					<!-- Modal content-->
					<div class="modal-content" style="border-radius:0px;">
					  <div class="modal-header" style="background-color: #ddd">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Tambah Data Mahasiswa</h4>
					  </div>
					  <div class="modal-body" style="background-color: #eee; height:235px; padding-left: 50px" >
						<table border="0">
							<tr style="height: 50px">
								<td>Nama</td>
								<td> : </td>
								<td><input class="box1" type="text" name="nama" placeholder="Nama Lengkap"/></td>
							</tr>
							
							<tr style="height: 50px">
								<td>NRP</td>
								<td> : </td>
								<td><input class="box1" type="text" name="nrp" placeholder="NRP"/></td>
							</tr>
							<tr style="height: 50px">
								<td>Jenis Kelamin</td>
								<td> : </td>
								<td>
								<select class="box1" name="jen_kel">
									<option value="Laki-laki">Laki-laki</option>
									<option vlaue="Perempuan">Perempuan</option>
								</select>
								</td>
							</tr>
							<tr style="height: 50px">
								<td>TTL</td>
								<td> : </td>
								<td>
									<input class="box1" type="text" name="tempat_lahir" placeholder="Tempat Lahir"/> / 
									<input class="box1" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir"/>
								</td>
							</tr>
						</table>
					  </div>
					  <div class="modal-footer" style="background-color: #ddd">
						<input class="button" type="submit" value="Insert"/>
					  </div>
					</div>
					</form>
				  </div>
				</div>
			</div>
		';
    }
	
	function insertData(){
		$query = mysql_query("select * from d3a");  
		$jumlah = mysql_num_rows($query);
		$data=array(
			'no'=>$jumlah+1,
			'nrp'=>$_POST['nrp'],
			'nama'=>$_POST['nama'],
			'jenis_kelamin'=>$_POST['jen_kel'],
			'tempat'=>$_POST['tempat_lahir'],
			'tanggal'=>$_POST['tanggal_lahir']);
		$this->model_mahasiswa->insertData($data);
		redirect('/mahasiswa','refresh');
	}
	
	function editData($no){
		$where = array('no' => $no);
		$data['data'] = $this->model_mahasiswa->editData($where,'d3a')->result();
		$this->load->view('edit',$data);
	}
	
	function updateData(){
		$data=array(
			'no'=>$this->input->post('no'),
			'nrp'=>$this->input->post('nrp'),
			'nama'=>$this->input->post('nama'),
			'jenis_kelamin'=>$this->input->post('jen_kel'),
			'tempat'=>$this->input->post('tempat_lahir'),
			'tanggal'=>$this->input->post('tanggal_lahir'));
			$this->db->where('no',$this->input->post('no'));
		$this->model_mahasiswa->updateData($data);
		redirect('/mahasiswa','refresh');
	}
	
	function deleteData($no){
		$data = array('no' => $no);
		$this->model_mahasiswa->deleteData($data,'d3a');
		redirect('/mahasiswa','refresh');
	}
}