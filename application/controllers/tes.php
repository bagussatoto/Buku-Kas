<?php
class Tes extends CI_Controller{ 
	function index(){  
		$query="select no from cek";  
		$hasil = $this->db->query("$query"); 
		foreach ($hasil as $row){ 
			echo $row->no;
		}
		echo "Hasil Nilai : ". $hasil->num_rows();    
	}
}
?>