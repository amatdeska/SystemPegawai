<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_bidang extends CI_Controller {

	public function index()
	{
		//print_r(base_url());die;
		$this->load->view('V_add_bidang');
	}

	public function add(){

		// $a=$_POST[''];//post['name yang input-html']
		$this->load->view('V_add_bidang');
		$a=$this->input->post('nama_bidang');//budi
		//print_r($g);die;

		$data = [
			'nama_bidang'=>$a,
			
		];
		$this->load->model('Model_bidang');
		$this->Model_bidang->add_databidang($data);
		//print_r($data);die;

		// array(

		// 	'field1 dari table database yang kita punya',
		// 	'field2',
		// 	'field3'

		// 	);
		redirect('Bidang');
	}
}
