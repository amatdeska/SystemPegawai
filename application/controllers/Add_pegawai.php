<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_pegawai extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_pegawai');
	}

	public function index()
	{

		$data['tb_jabatan'] = $this->Model_pegawai->getData('tb_jabatan', 'id_jabatan','nama_jabatan');
		$data['tb_bidang'] = $this->Model_pegawai->getData('tb_bidang', 'id_bidang','nama_bidang');
    $data['login']= $this->Model_pegawai->getData('login','id_login','username');

		//print_r(base_url());die;
		$this->load->view('V_add_pegawai', $data);
		//print_r(base_url());die;
	}


	public function add(){

		// $a=$_POST[''];//post['name yang input-html']
		$this->load->view('V_add_pegawai');
		$a=$this->input->post('nama');//budi
		$b=$this->input->post('nip');
		$c=$this->input->post('tempat_lahir');
		$d=$this->input->post('tanggal_lahir');
		$e=$this->input->post('jenis_kelamin');
		$f=$this->input->post('pendidikan_terakhir');
		$g=$this->input->post('status_perkawinan');
		$h=$this->input->post('status_pegawai');
		$i=$this->input->post('id_jabatan');
		$j=$this->input->post('id_bidang');
    $r=$this->input->post('id_login');
		$k=$this->input->post('agama');
		$l=$this->input->post('alamat');
		$m=$this->input->post('no_ktp');
		$n=$this->input->post('no_rumah');
		$o=$this->input->post('no_handphone');
		$p=$this->input->post('email');
		$q=$this->input->post('tanggal_pengangkatan');//budi
		//print_r($g);die;

		$data = [
			'nama'=>$a,
			'nip'=>$b,
			'tempat_lahir'=>$c,
			'tanggal_lahir'=>$d,
			'jenis_kelamin'=>$e,
			'pendidikan_terakhir'=>$f,
			'status_perkawinan'=>$g,
			'status_pegawai'=>$h,
			'id_jabatan'=>$i,
			'id_bidang'=>$j,
      'id_login'=>$r,
			'agama'=>$k,
			'alamat'=>$l,
			'no_ktp'=>$m,
			'no_rumah'=>$n,
			'no_handphone'=>$o,
			'email'=>$p,
			'tanggal_pengangkatan'=>$q

		];
		$this->load->model('Model_pegawai');
		$this->Model_pegawai->add_datapegawai($data);
		//print_r($data);die;

		// array(

		// 	'field1 dari table database yang kita punya',
		// 	'field2',
		// 	'field3'

		// 	);
		redirect('Pegawai');
	}
}
