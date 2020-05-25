<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {


	public function get_user(){

		$this->db->select('*');
		return $this->db->get('login');

	}

	public function add_datauser($input){

		//insert into tablepasien values("");
		$this->db->insert('login',$input);

	}

	public function edit_user($a){

		$this->db->where('id_login',$a);
		return $this->db->get('login');
	}

	public function update($data,$where){

		 $this->db->where($where);
		 $this->db->update('login',$data);

	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
