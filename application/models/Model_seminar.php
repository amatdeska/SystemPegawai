<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_seminar extends CI_Model {


	public function get_seminar(){

		$this->db->select('*');
		return $this->db->get('tb_seminar');

	}

	public function add_dataseminar($input){

		//insert into tablepasien values("");
		$this->db->insert('tb_seminar',$input);

	}

	public function Edit_seminar($a){

		$this->db->where('id_seminar',$a);
		return $this->db->get('tb_seminar');
	}

	public function update($data,$where){

		 $this->db->where($where);
		 $this->db->update('tb_seminar',$data);

	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
