<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jabatan extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_jabatan');
		$a = $this->Model_jabatan->get_jabatan();

		$input['b'] = $a;

		//print_r($a->result());die;

		$this->load->view('V_tb_jabatan',$input);
	}

	public function edit($id)
	{

		$a = $this->uri->segment(3);
		//print_r($a);die;
		$this->load->model('Model_jabatan');
		$data['edit'] = $this->Model_jabatan->Edit_jabatan($a);

		$this->load->view('Edit_jabatan',$data);

	}

	public function save(){

		$a=$this->input->post('nama_jabatan');//budi
		$id = $this->input->post('id_jabatan');
		//print_r($g);die;

		$data =array(

			'nama_jabatan'=>$a
		);

		$where = array (

				'id_jabatan'=>$id

			);

		//print_r($data);die;

		$this->load->model('Model_jabatan');
		$x = $this->Model_jabatan->update($data,$where);

		///print_r($s);die;
		redirect('Jabatan');

	}
	public function hapus($id){
	$this->load->model('Model_jabatan');
		$where = ['id_jabatan' => $id];
		$this->Model_jabatan->hapus_data($where,'tb_sekolah');
		redirect('Jabatan');
	}
}
