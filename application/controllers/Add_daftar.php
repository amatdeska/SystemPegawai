<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_daftar extends CI_Controller {

	public function index()
	{
		//print_r(base_url());die;
		$this->load->view('Daftar');
	}

	public function add(){

		// $a=$_POST[''];//post['name yang input-html']
		$this->load->view('Daftar');
		$a=$this->input->post('username');//budi
		$g=$this->input->post('password');
		$j=$this->input->post('nama_lengkap');
		$l=$this->input->post('level');
		//print_r($g);die;

		$data = [
			'username'=>$a,
			'password'=>$g,
			'nama_lengkap'=>$j,
			'level'=>$l
		];
		$this->load->model('model_login');
		$this->model_login->add_user($data);
		//print_r($data);die;

		// array(

		// 	'field1 dari table database yang kita punya',
		// 	'field2',
		// 	'field3'

		// 	);
		redirect('User');
	}
}
