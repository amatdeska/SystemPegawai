<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_jabatan extends CI_Model {


	public function get_jabatan(){

		$this->db->select('*');
		return $this->db->get('tb_jabatan');

	}

	public function add_datajabatan($input){

		//insert into tablepasien values("");
		$this->db->insert('tb_jabatan',$input);

	}

	public function Edit_jabatan($a){

		$this->db->where('id_jabatan',$a);
		return $this->db->get('tb_jabatan');
	}

	public function update($data,$where){

		 $this->db->where($where);
		 $this->db->update('tb_jabatan',$data);

	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
