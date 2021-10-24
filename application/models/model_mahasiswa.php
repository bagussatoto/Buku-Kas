<?php
class Model_mahasiswa extends ci_model{
	function tampilData(){
		$query=$this->db->get('d3a');
		if($query->num_rows()>0){
			return $query->result();
		}
		else{
			return array();
		}
	}
	
	function insertData($data){
		$this->db->insert('d3a',$data);
	}
	
	function editData($where, $table){
		return $this->db->get_where($table, $where);
	}
	
	function updateData($data){
		$this->db->update('d3a',$data);
	}
	
	function deleteData($data){
		$this->db->delete('d3a',$data);
	}
}