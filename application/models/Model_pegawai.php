<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_pegawai extends CI_Model {


	public function get_pegawai(){

		$this->db->select('tb_pegawai.id_pegawai AS id_pegawai,nama,nip,nama_jabatan,nama_bidang,username,tempat_lahir,tanggal_lahir,jenis_kelamin,pendidikan_terakhir,status_perkawinan,status_pegawai,agama,alamat,no_ktp,no_rumah,no_handphone,email,tanggal_pengangkatan');
		$this->db->from('tb_pegawai');
		$this->db->join('tb_bidang', 'tb_bidang.id_bidang = tb_pegawai.id_bidang', 'left');
		$this->db->join('tb_jabatan', 'tb_jabatan.id_jabatan = tb_pegawai.id_jabatan', 'left');
    $this->db->join('login','login.id_login = tb_pegawai.id_login','left');
		$query = $this->db->get();
		return $query;

	}

	public function getData($tablename, $field1, $field2) {
		$sql = " SELECT {$field1}, {$field2} FROM {$tablename}";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function add_datapegawai($input){

		//insert into tablepasien values("");
		$this->db->insert('tb_pegawai',$input);

	}

	public function Edit_pegawai($a){


		$this->db->where('id_pegawai',$a);
		return $this->db->get('tb_pegawai');
	}

	public function update($data,$where){

		 $this->db->where($where);
		 $this->db->update('tb_pegawai',$data);

	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
