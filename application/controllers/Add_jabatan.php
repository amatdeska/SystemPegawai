<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_jabatan extends CI_Controller {

	public function index()
	{
		//print_r(base_url());die;
		$this->load->view('V_add_jabatan');
	}

	public function add(){

		// $a=$_POST[''];//post['name yang input-html']
		$this->load->view('V_add_jabatan');
		$a=$this->input->post('nama_jabatan');//budi
		//print_r($g);die;

		$data = [
			'nama_jabatan'=>$a,
			
		];
		$this->load->model('Model_jabatan');
		$this->Model_jabatan->add_datajabatan($data);
		//print_r($data);die;

		// array(

		// 	'field1 dari table database yang kita punya',
		// 	'field2',
		// 	'field3'

		// 	);
		redirect('Jabatan');
	}
}
