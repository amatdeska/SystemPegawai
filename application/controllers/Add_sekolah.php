<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_sekolah extends CI_Controller {

	public function index()
	{
		//print_r(base_url());die;
		$this->load->view('V_add_sekolah');
	}

	public function add(){

		// $a=$_POST[''];//post['name yang input-html']
		$this->load->view('V_add_sekolah');
		$a=$this->input->post('nama_sekolah');//budi
		//print_r($g);die;

		$data = [
			'nama_sekolah'=>$a,
			
		];
		$this->load->model('Model_sekolah');
		$this->Model_sekolah->add_datasekolah($data);
		//print_r($data);die;

		// array(

		// 	'field1 dari table database yang kita punya',
		// 	'field2',
		// 	'field3'

		// 	);
		redirect('Sekolah');
	}
}
