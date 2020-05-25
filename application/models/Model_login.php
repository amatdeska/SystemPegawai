<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_login extends CI_Model{
	function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}

	public function add_user($input){

		//insert into tablepasien values("");
		$this->db->insert('login',$input);
  }

  public function getPegawai($idLogin) {
    $sql = $this->db->query("SELECT * FROM tb_pegawai WHERE id_login = {$idLogin}");
    return $sql->row();
  }
}
