<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_seminar extends CI_Controller {

	public function index()
	{
		//print_r(base_url());die;
		$this->load->view('V_add_seminar');
	}

	public function add(){

		// $a=$_POST[''];//post['name yang input-html']
		$this->load->view('V_add_seminar');
		$a=$this->input->post('nama_seminar');//budi
		//print_r($g);die;

		$data = [
			'nama_seminar'=>$a,
			
		];
		$this->load->model('Model_seminar');
		$this->Model_seminar->add_dataseminar($data);
		//print_r($data);die;

		// array(

		// 	'field1 dari table database yang kita punya',
		// 	'field2',
		// 	'field3'

		// 	);
		redirect('Seminar');
	}
}
