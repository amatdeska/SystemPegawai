<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_izin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_izin');
	}

	public function index()
	{
		$data['tb_pegawai'] = $this->Model_izin->getData('tb_pegawai', 'id_pegawai','nama');
		$data['tb_cuti'] = $this->Model_izin->getData('tb_cuti', 'id_cuti','nama_kolah');
		$data['tb_seminar'] = $this->Model_izin->getData('tb_seminar', 'id_seminar','nama_seminar');
		$data['tb_sekolah'] = $this->Model_izin->getData('tb_sekolah', 'id_sekolah','nama_sekolah');
		//print_r(base_url());die;
		$this->load->view('V_add_izin', $data);
	}

	public function add(){

		// $a=$_POST[''];//post['name yang input-html']
		$this->load->view('V_add_izin');
		$p=$this->input->post('id_pegawai');
		$i=$this->input->post('id_cuti');
		$s=$this->input->post('id_seminar');
		$k=$this->input->post('id_sekolah');//budi
		$b=$this->input->post('tglawal');
		$c=$this->input->post('tempat');
		$d=$this->input->post('tglakhir');
		$f=$this->input->post('konfirmasi');
		$e=$this->input->post('status');//budi
		//print_r($g);die;

		$data = [
			'id_pegawai'=>$p,
			'id_cuti'=>$i,
			'id_seminar'=>$s,
			'id_sekolah'=>$k,
			'tglawal'=>$b,
			'tempat'=>$c,
			'tglakhir'=>$d,
			'status'=>$e,
			'konfirmasi'=>$f

		];
		$this->load->model('Model_izin');
		$this->Model_izin->add_dataizin($data);
		//print_r($data);die;

		// array(

		// 	'field1 dari table database yang kita punya',
		// 	'field2',
		// 	'field3'

		// 	);
		redirect('Izin');
	}
}
