<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index()
	{

		  $this->load->view('Daftar');
	}

	public function cek_login(){

		redirect('Masuk');	
	}

}
