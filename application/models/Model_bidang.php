<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_bidang extends CI_Model {


	public function get_bidang(){

		$this->db->select('*');
		return $this->db->get('tb_bidang');

	}

	public function add_databidang($input){

		//insert into tablepasien values("");
		$this->db->insert('tb_bidang',$input);

	}

	public function Edit_bidang($a){

		$this->db->where('id_bidang',$a);
		return $this->db->get('tb_bidang');
	}

	public function update($data,$where){

		 $this->db->where($where);
		 $this->db->update('tb_bidang',$data);

	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
