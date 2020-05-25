<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

		function __construct(){
		parent::__construct();
		$this->load->model('model_login');

	}

	function index(){
		$this->load->view('Masuk');
	}

	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->model_login->cek_login('login',$where)->num_rows();

		 $adding =false; $edit=false; $delete=false;

		if($cek == 1){
			$data = $this->model_login->cek_login('login',$where)->row();
      $dataPegawai = $this->model_login->getPegawai($data->id_login);
      
			if ($data->level == "admin"){
				$adding =true; $edit=true; $delete=true;
			}
			else if ($data->level== "manajer"){
				$adding =true; $edit=true; $delete=false;
			}
			else if ($data->level =="user"){
				$adding =true; $edit=false; $delete=false;
			}

			$data_session = array(
        'id_pegawai' => $dataPegawai->id_pegawai,
				'nama' => $dataPegawai->nama,
				'status' => "login",
				'level' => $data->level,
				'adding' => $adding,
				'edit' => $edit,
				'delete' => $delete
				);

			$this->session->set_userdata($data_session);

			redirect("Home");

		}else{
			echo $this->session->set_flashdata('msg','Username Atau Password Salah !!');
			redirect ("Login");
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('Login'));
	}
}
