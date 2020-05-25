<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sekolah extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_sekolah');
		$a = $this->Model_sekolah->get_sekolah();

		$input['b'] = $a;

		//print_r($a->result());die;

		$this->load->view('V_tb_sekolah',$input);
	}

	public function edit($id)
	{

		$a = $this->uri->segment(3);
		//print_r($a);die;
		$this->load->model('Model_sekolah');
		$data['edit'] = $this->Model_sekolah->Edit_sekolah($a);

		$this->load->view('Edit_sekolah',$data);

	}

	public function save(){

		$a=$this->input->post('nama_sekolah');//budi
		$id = $this->input->post('id_sekolah');
		//print_r($g);die;

		$data =array(

			'nama_sekolah'=>$a
		);

		$where = array (

				'id_sekolah'=>$id

			);

		//print_r($data);die;

		$this->load->model('Model_sekolah');
		$x = $this->Model_sekolah->update($data,$where);

		///print_r($s);die;
		redirect('Sekolah');

	}
	public function hapus($id){
	$this->load->model('Model_sekolah');
		$where = ['id_sekolah' => $id];
		$this->Model_sekolah->hapus_data($where,'tb_sekolah');
		redirect('Sekolah');
	}
}
