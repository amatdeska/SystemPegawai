<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index()
	{
		$this->load->model('model_user');
		$a = $this->model_user->get_user();

		$input['b'] = $a;

		//print_r($a->result());die;

		$this->load->view('V_tb_user',$input);
	}

	public function edit($id)
	{

		$a = $this->uri->segment(3);
		//print_r($a);die;
		$this->load->model('Model_user');
		$data['edit'] = $this->Model_user->edit_user($a);

		$this->load->view('edit_user',$data);

	}

	public function save(){

		$a=$this->input->post('username');//budi
		$g=$this->input->post('password');
		$j=$this->input->post('nama_lengkap');
		$t=$this->input->post('level');
		$id = $this->input->post('id_login');
		//print_r($g);die;

		$data =array(

			'username'=>$a,
			'password'=>$g,
			'nama_lengkap'=>$j,
			'level'=>$t
		);

		$where = array (

				'id_login'=>$id

			);

		//print_r($data);die;

		$this->load->model('Model_user');
		$x = $this->Model_user->update($data,$where);

		///print_r($s);die;
		redirect('User');

	}
	public function hapus($id){
	$this->load->model('Model_user');
		$where = ['id_login' => $id];
		$this->Model_user->hapus_data($where,'login');
		redirect('User');
	}
}
