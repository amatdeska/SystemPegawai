<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_izin extends CI_Model {


	public function get_izin(){

		$this->db->select('izin.id_izin AS id_izin,nama,nama_kolah, nama_seminar,nama_sekolah,tglawal,tempat,tglakhir,status,konfirmasi');
		$this->db->from('izin');
		$this->db->join('tb_pegawai', 'tb_pegawai.id_pegawai = izin.id_pegawai', 'left');
		$this->db->join('tb_cuti', 'tb_cuti.id_cuti = izin.id_cuti', 'left');
		$this->db->join('tb_seminar', 'tb_seminar.id_seminar = izin.id_seminar', 'left');
		$this->db->join('tb_sekolah', 'tb_sekolah.id_sekolah = izin.id_sekolah', 'left');

		$query = $this->db->get();
		return $query;

	}

	public function getData($tablename, $field1, $field2) {
		$sql = " SELECT {$field1}, {$field2} FROM {$tablename}";
		$data = $this->db->query($sql);
		return $data->result_array();
	}

	public function add_dataizin($input){

		//insert into tablepasien values("");
		$this->db->insert('izin',$input);

	}

	public function Edit_izin($a){

		$this->db->where('id_izin',$a);
		return $this->db->get('izin');
	}

	public function update($data,$where){

		 $this->db->where($where);
		 $this->db->update('izin',$data);

	}

	public function hapus_data($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
}
