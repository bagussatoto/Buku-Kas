<?php
class Model_cash extends ci_model{
	
	function mine(){
		$mylists=$this->db->get('cash_mhs');
		if ($mylists->num_rows()>0){
			foreach ($mylists->result() as $a){
				$data['res1'][]=$a;
			}
		}

		$mylists2=$this->db->get('cash_date');
		if ($mylists2->num_rows>0){
			foreach ($mylists2->result() as $b){
				$data['res2'][]=$b;
			}
		}
		$mylists3=$this->db->get('cash_agenda');
		if ($mylists3->num_rows>0){
			foreach ($mylists3->result() as $b){
				$data['res3'][]=$b;
			}
		}
		return $data;
	}
	
	//---INSERT MAHASISWA & UANG---
	function insertData($data, $data2){
		$this->db->insert('cash_mhs',$data);
		$this->db->insert('cash_date',$data2);
	}
	
	//---INSERT UANG KAS---
	function insertDate($id, $dataDate){
		$this->db->where('dateId', $id);
		$this->db->update('cash_date', $dataDate);
	}
	
	//---INSERT UANG KAS FEBRUARI---
	function insertDateFebruari($id, $dataDate){
		$this->db->where('dateId', $id);
		$this->db->update('cash_date', $dataDate);
	}
	
	//---INSERT UANG KAS MARET---
	function insertDateMaret($id, $dataDate){
		$this->db->where('dateId', $id);
		$this->db->update('cash_date', $dataDate);
	}
	
	//---INSERT AGENDA---
	function insertAgenda($data){
		$this->db->insert('cash_agenda',$data);
	}
	
	//---EDIT DATA MAHASISWA---
	function editDataMhs($where, $table){
		return $this->db->get_where($table, $where);
	}
	
	//---UPDATE DATA MAHASISWA---
	function updateDataMhs($id, $dataMhs){
		$this->db->where('id', $id);
		$this->db->update('cash_mhs', $dataMhs);
	}
	
	//---EDIT UANG KAS---
	function editDataDate($where, $table){
		return $this->db->get_where($table, $where);
	}
	
	//---EDIT UANG FEBRUARI--
	function editDataDateFebruari($where, $table){
		return $this->db->get_where($table, $where);
	}
	
	//---EDIT UANG MARET--
	function editDataDateMaret($where, $table){
		return $this->db->get_where($table, $where);
	}
	
	//---DELETE MAHASISWA & UANG---
	function deleteMhs($id){
		$data = $this->db->where('id', $id);
		$this->db->delete('cash_mhs', $data);
		$data2 = $this->db->where('dateId', $id);
		$this->db->delete('cash_date', $data2);
	}
	
	//---DELETE AGENDA---
	function deleteAgenda($id){
		$data = $this->db->where('agendaId', $id);
		$this->db->delete('cash_agenda', $data);
	}
	
	//---PILIH TAHUN BARU = UPDATE TAHUN---
	function pilihTahun(){
		$query = $this->db->query('SELECT * FROM cash_date');
		$num_row = $query->num_rows();
		for($i=1; $i<=$num_row; $i++){
			$id = $i;
			$data = array (
				'dateOne' => '0',
				'dateTwo' => 0,
				'dateThree' => 0,
				'dateFour' => 0,
				'dateFive' => 0,
				'dateSix' => 0,
				'dateSeven' => 0,
				'dateEight' => 0,
				'dateNine' => 0,
				'dateTen' => 0,
				'dateEleven' => 0,
				'dateTwelve' => 0,
			);
			$this->db->where('dateId', $id);
			$this->db->update('cash_date', $data);
		}
		$query2 = $this->db->query('SELECT * FROM cash_agenda');
		$num_row2 = $query2->num_rows();
		for($i2=1; $i2<=$num_row2; $i2++){
			$id2 = $i2;
			$data2 = $this->db->where('agendaId', $id2);
			$this->db->delete('cash_agenda', $data2);
		}
	}
}