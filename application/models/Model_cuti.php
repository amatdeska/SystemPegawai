<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_cuti extends CI_Model {


	public function get_cuti(){

		$this->db->select('*');
		return $this->db->get('tb_cuti');

	}

	public function add_datacuti($input){

		//insert into tablepasien values("");
		$this->db->insert('tb_cuti',$input);

	}

	public function Edit_cuti($a){

		$this->db->where('id_cuti',$a);
		return $this->db->get('tb_cuti');
	}

	public function update($data,$where){

		 $this->db->where($where);
		 $this->db->update('tb_cuti',$data);

	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
