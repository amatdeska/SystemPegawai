<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_sekolah extends CI_Model {


	public function get_sekolah(){

		$this->db->select('*');
		return $this->db->get('tb_sekolah');

	}

	public function add_datasekolah($input){

		//insert into tablepasien values("");
		$this->db->insert('tb_sekolah',$input);

	}

	public function Edit_sekolah($a){

		$this->db->where('id_sekolah',$a);
		return $this->db->get('tb_sekolah');
	}

	public function update($data,$where){

		 $this->db->where($where);
		 $this->db->update('tb_sekolah',$data);

	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
