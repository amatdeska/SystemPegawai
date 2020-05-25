<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_izin');
	}

	public function index()
	{
		$this->load->model('Model_izin');
		$a = $this->Model_izin->get_izin();

		$input['b'] = $a;

		//print_r($a->result());die;

		$this->load->view('V_tb_izin',$input);
	}

	public function edit($id)
	{
		$data['tb_pegawai'] = $this->Model_izin->getData('tb_pegawai', 'id_pegawai','nama');
		$data['tb_cuti'] = $this->Model_izin->getData('tb_cuti', 'id_cuti','nama_kolah');
		$data['tb_seminar'] = $this->Model_izin->getData('tb_seminar', 'id_seminar','nama_seminar');
		$data['tb_sekolah'] = $this->Model_izin->getData('tb_sekolah', 'id_sekolah','nama_sekolah');

		$a = $this->uri->segment(3);
		//print_r($a);die;
		$this->load->model('Model_izin');
		$data['edit'] = $this->Model_izin->Edit_izin($a);

		$this->load->view('Edit_izin',$data);

	}

	public function save(){

		$a=$this->input->post('id_pegawai');
		$g=$this->input->post('id_cuti');
		$h=$this->input->post('id_seminar');
		$i=$this->input->post('id_sekolah');//budi
		$b=$this->input->post('tglawal');
		$c=$this->input->post('tempat');
		$d=$this->input->post('tglakhir');
		$e=$this->input->post('status');
		$f=$this->input->post('konfirmasi');
		$id = $this->input->post('id_izin');
		//print_r($g);die;

		$data =array(

			'id_pegawai'=>$a,
			'id_cuti'=>$g,
			'id_seminar'=>$h,
			'id_sekolah'=>$i,
			'tglawal'=>$b,
			'tempat'=>$c,
			'tglakhir'=>$d,
			'status'=>$e,
			'konfirmasi'=>$f


		);

		$where = array (

				'id_izin'=>$id

			);

		//print_r($data);die;

		$this->load->model('Model_izin');
		$x = $this->Model_izin->update($data,$where);

		///print_r($s);die;
		redirect('Izin');

	}
	public function hapus($id){
	$this->load->model('Model_izin');
		$where = ['id_izin' => $id];
		$this->Model_izin->hapus_data($where,'izin');
		redirect('Izin');
	}
}
