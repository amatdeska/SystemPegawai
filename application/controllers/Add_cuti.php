<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_cuti extends CI_Controller {

	public function index()
	{
		//print_r(base_url());die;
		$this->load->view('V_add_cuti');
	}

	public function add(){

		// $a=$_POST[''];//post['name yang input-html']
		$this->load->view('V_add_cuti');
		$a=$this->input->post('nama_kolah');//budi
		
		//budi
		//print_r($g);die;

		$data = [
			'nama_kolah'=>$a,
			
		];
		$this->load->model('Model_cuti');
		$this->Model_cuti->add_datacuti($data);
		//print_r($data);die;

		// array(

		// 	'field1 dari table database yang kita punya',
		// 	'field2',
		// 	'field3'

		// 	);
		redirect('Cuti');
	}
}
