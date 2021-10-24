<?php if(! defined('BASEPATH')) exit ('No direct script access allowed');
echo '<link href="assets/css/bootstrap.css" >';
echo '<link href="assets/css/bootstrap.min.css" >';
echo '<link href="assets/style.css" >';
class Cash extends CI_controller{

	function __construct(){
		parent::__construct();
		$this->load->model('model_cash');
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->helper('directory');
		$this->load->library('session');
		$this->load->library('JpGraph');
    }
	
	public function index(){
		$this->load->view('cash');
	}
	
	public function login(){
		$admin_session=array( 
			'user' => $this->input->post('user'), 
			'pass' => $this->input->post('pass'), 
			'is_logged_in' => 1
		);
		$guest_session=array( 
			'userg' => $this->input->post('userg'), 
			'passg' => $this->input->post('passg'), 
			'is_logged_in' => 1
		);
		if(($admin_session['user']=='admin' && $admin_session['pass'] == 'admin')){
			$this->session->set_userdata('adminlogin', $admin_session);
			redirect('/cash/admin');
		}else if(($guest_session['userg']=='2110151010' && $guest_session['passg'] == '2110151010')){
			$this->session->set_userdata('guestlogin', $guest_session);
			redirect('/cash/guest');
		}else{
			redirect('/cash','refresh');
		}
	}
	
	public function admin(){
		$rank1 = "SET @rank1 = 0";
			$this->db->query($rank1);
			$rankMhs = "update cash_mhs a join (select id, @rank1:=@rank1+1 as rank1 from cash_mhs order by id) b on a.id = b.id set a.id = b.rank1";
			$this->db->query($rankMhs);
			
			$rank2 = "SET @rank2 = 0";
			$this->db->query($rank2);
			$rankDate = "update cash_date a join (select dateId, @rank2:=@rank2+1 as rank2 from cash_date order by dateId) b on a.dateId = b.dateId set a.dateId = b.rank2";
			$this->db->query($rankDate);
			
			$rank3 = "SET @rank3 = 0";
			$this->db->query($rank3);
			$rankAgenda = "update cash_agenda a join (select agendaId, @rank3:=@rank3+1 as rank3 from cash_agenda order by agendaId) b on a.agendaId = b.agendaId set a.agendaId = b.rank3";
			$this->db->query($rankAgenda);
			
			$rank4 = "SET @rank4 = 0";
			$this->db->query($rank4);
			$rankTanggal = "update cash_tanggal a join (select dateId, @rank4:=@rank4+1 as rank4 from cash_tanggal order by dateId) b on a.dateId = b.dateId set a.dateId = b.rank4";
			$this->db->query($rankTanggal);
			
			$this->db->query("SELECT * FROM cash_mhs ORDER BY id");
			$this->db->query("SELECT * FROM cash_date ORDER BY dateId");
			$this->db->query("SELECT * FROM cash_agenda ORDER BY agendaId");
			$this->db->query("SELECT * FROM cash_tanggal ORDER BY dateId");
			$data['lists']=$this->model_cash->mine();
			$this->load->view('cash_mhs', $data);
	}
	
	public function guest(){
		$rank1 = "SET @rank1 = 0";
		$this->db->query($rank1);
		$rankMhs = "update cash_mhs a join (select id, @rank1:=@rank1+1 as rank1 from cash_mhs order by id) b on a.id = b.id set a.id = b.rank1";
		$this->db->query($rankMhs);
		
		$rank2 = "SET @rank2 = 0";
		$this->db->query($rank2);
		$rankDate = "update cash_date a join (select dateId, @rank2:=@rank2+1 as rank2 from cash_date order by dateId) b on a.dateId = b.dateId set a.dateId = b.rank2";
		$this->db->query($rankDate);
		
		$rank3 = "SET @rank3 = 0";
		$this->db->query($rank3);
		$rankAgenda = "update cash_agenda a join (select agendaId, @rank3:=@rank3+1 as rank3 from cash_agenda order by agendaId) b on a.agendaId = b.agendaId set a.agendaId = b.rank3";
		$this->db->query($rankAgenda);
		
		$rank4 = "SET @rank4 = 0";
		$this->db->query($rank4);
		$rankTanggal = "update cash_tanggal a join (select dateId, @rank4:=@rank4+1 as rank4 from cash_tanggal order by dateId) b on a.dateId = b.dateId set a.dateId = b.rank4";
		$this->db->query($rankTanggal);
		
		$this->db->query("SELECT * FROM cash_mhs ORDER BY id");
		$this->db->query("SELECT * FROM cash_date ORDER BY dateId");
		$this->db->query("SELECT * FROM cash_agenda ORDER BY agendaId");
		$this->db->query("SELECT * FROM cash_tanggal ORDER BY dateId");
		$data['lists']=$this->model_cash->mine();
		$this->load->view('guest', $data);
	}
	
	public function grafik(){
		$this->load->view('grafik.php');
	}
	
	public function grafikGuest(){
		$this->load->view('grafikGuest.php');
	}
	
	public function pdf(){
		$this->load->view('pdf.php');
	}
	
	public function settings(){
		$this->load->view('settings');
	}
	
	public function logout(){
		$this->load->view('cash');
	}
	
	//---INSERT MAHASISWA---
	function insertData(){
		$data=array(
			'nrp'=>$_POST['nrp'],
			'nama'=>$_POST['nama']);
		$data2=array(
			'dateOne'=>0,
			'dateTwo'=>0,
			'dateThree'=>0,
			'dateFour'=>0,
			'dateFive'=>0,
			'dateSix'=>0,
			'dateSeven'=>0,
			'dateEight'=>0,
			'dateNine'=>0,
			'dateTen'=>0,
			'dateEleven'=>0,
			'dateTwelve'=>0);
		$this->model_cash->insertData($data, $data2);
		redirect('/cash/admin');
	}
	
	//---EDIT MAHASISWA---
	function editDataMhs(){
		$where = array('id' => $_POST['id']);
		$data['data'] = $this->model_cash->editDataMhs($where,'cash_mhs')->result();
		$this->load->view('modalEditMhs', $data);
	}
	
	//---UPDATE MAHASISWA---
	function updateDataMhs(){
		$id = $_POST['id'];
		$dataMhs=array(
			'nrp'=>$_POST['nrp'],
			'nama'=>$_POST['nama']);
		$this->model_cash->updateDataMhs($id, $dataMhs);
		redirect('/cash/admin');
	}
	
	//---EDIT DATE---
	function editDataDate(){
		$where = array('dateId' => $_POST['dateId']);
		$data['data'] = $this->model_cash->editDataDate($where,'cash_date')->result();
		$this->load->view('modal_edit', $data);
	}
	
	//---EDIT DATE FEBRUARI---
	function editDataDateFebruari(){
		$where = array('dateId' => $_POST['dateId']);
		$data['data'] = $this->model_cash->editDataDateFebruari($where,'cash_date')->result();
		$this->load->view('modalEditFebruari', $data);
	}
	
	//---EDIT DATE MARET---
	function editDataDateMaret(){
		$where = array('dateId' => $_POST['dateId']);
		$data['data'] = $this->model_cash->editDataDateMaret($where,'cash_date')->result();
		$this->load->view('modalEditMaret', $data);
	}
	
	//---INSERT UANG KAS---
	function insertDate(){
		$id = $_POST['dateId'];
		$dataDate=array(
			'dateOne'=>$_POST['dateOne'],
			'dateTwo'=>$_POST['dateTwo'],
			'dateThree'=>$_POST['dateThree'],
			'dateFour'=>$_POST['dateFour']);
		$this->model_cash->insertDate($id, $dataDate);
		redirect('/cash/admin');
	}
	
	//---INSERT DATA FEBRUARI--
	function insertDateFebruari(){
		$id = $_POST['dateId'];
		$dataDate=array(
			'dateFive'=>$_POST['dateFive'],
			'dateSix'=>$_POST['dateSix'],
			'dateSeven'=>$_POST['dateSeven'],
			'dateEight'=>$_POST['dateEight']);
		$this->model_cash->insertDateFebruari($id, $dataDate);
		redirect('/cash/admin');
	}
	
	//---INSERT DATA MARET--
	function insertDateMaret(){
		$id = $_POST['dateId'];
		$dataDate=array(
			'dateNine'=>$_POST['dateNine'],
			'dateTen'=>$_POST['dateTen'],
			'dateEleven'=>$_POST['dateEleven'],
			'dateTwelve'=>$_POST['dateTwelve']);
		$this->model_cash->insertDateMaret($id, $dataDate);
		redirect('/cash/admin');
	}
	
	//---INSERT AGENDA---
	function insertAgenda(){
		$config['upload_path']          = './assets/images/';
		$config['allowed_types']        = 'gif|jpg|png|bmp';
		$config['max_size']             = 5000;
		$config['max_width']            = 1024;
		$config['max_height']           = 1024;

		$this->load->library('upload', $config);
		$this->upload->do_upload('agendaImage');
		$data_upload_files = $this->upload->data();
		
		$image = $data_upload_files[file_name]; 
		
		$data=array(
			'agendaNama'=>$_POST['agendaNama'],
			'agendaLokasi'=>$_POST['agendaLokasi'],
			'agendaTgl'=>$_POST['agendaTgl'],
			'agendaImage' => $image,
			'agendaBiaya'=>$_POST['agendaBiaya']);
		$this->model_cash->insertAgenda($data);
		redirect('/cash/admin');
	}
	
	//---DELETE MAHASISWA & UANG---
	function deleteMhs(){
		$id = $_POST['id'];
		$this->model_cash->deleteMhs($id);
		redirect('/cash/admin');
	}
	
	//---DELETE AGENDA---
	function deleteAgenda(){
		$id = $_POST['id'];
		$this->model_cash->deleteAgenda($id);
		redirect('/cash/admin');
	}

	//---PILIH TAHUN---
	function pilihTahun(){
		$this->model_cash->pilihTahun();
		redirect('/cash/admin');
	}
}