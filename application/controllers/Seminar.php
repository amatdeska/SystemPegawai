<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seminar extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_seminar');
		$a = $this->Model_seminar->get_seminar();

		$input['b'] = $a;

		//print_r($a->result());die;

		$this->load->view('V_tb_seminar',$input);
	}

	public function edit($id)
	{

		$a = $this->uri->segment(3);
		//print_r($a);die;
		$this->load->model('Model_seminar');
		$data['edit'] = $this->Model_seminar->Edit_seminar($a);

		$this->load->view('Edit_seminar',$data);

	}

	public function save(){

		$a=$this->input->post('nama_seminar');//budi
		$id = $this->input->post('id_seminar');
		//print_r($g);die;

		$data =array(

			'nama_seminar'=>$a,
			
		);

		$where = array (

				'id_seminar'=>$id

			);

		//print_r($data);die;

		$this->load->model('Model_seminar');
		$x = $this->Model_seminar->update($data,$where);

		///print_r($s);die;
		redirect('Seminar');

	}
	public function hapus($id){
	$this->load->model('Model_seminar');
		$where = ['id_seminar' => $id];
		$this->Model_seminar->hapus_data($where,'tb_seminar');
		redirect('Seminar');
	}
}
