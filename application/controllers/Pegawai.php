<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pegawai extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('Model_pegawai');
	}

	public function index()
	{
		$this->load->model('Model_pegawai');
		$a = $this->Model_pegawai->get_pegawai();

		$input['b'] = $a;

		//print_r($a->result());die;

		$this->load->view('V_tb_pegawai',$input);


	}


	public function edit($id)

	{

		$data['tb_jabatan'] = $this->Model_pegawai->getData('tb_jabatan', 'id_jabatan','nama_jabatan');
		$data['tb_bidang'] = $this->Model_pegawai->getData('tb_bidang', 'id_bidang','nama_bidang');
    $data['login']= $this->Model_pegawai->getData('login','id_login','username');

		$a = $this->uri->segment(3);
		//print_r($a);die;
		$this->load->model('Model_pegawai');
		$data['edit'] = $this->Model_pegawai->Edit_pegawai($a);

		$this->load->view('Edit_pegawai',$data);

	}

	public function save(){

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
		$q=$this->input->post('tanggal_pengangkatan');
		$id = $this->input->post('id_pegawai');
		//print_r($g);die;

		$data =array(

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


		);

		$where = array (

				'id_pegawai'=>$id

			);

		//print_r($data);die;

		$this->load->model('Model_pegawai');
		$x = $this->Model_pegawai->update($data,$where);

		///print_r($s);die;
		redirect('Pegawai');

	}
	public function hapus($id){
	$this->load->model('Model_pegawai');
		$where = ['id_pegawai' => $id];
		$this->Model_pegawai->hapus_data($where,'tb_pegawai');
		redirect('Pegawai');
	}
}
