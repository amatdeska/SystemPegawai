<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cuti extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_cuti');
		$a = $this->Model_cuti->get_cuti();

		$input['b'] = $a;

		//print_r($a->result());die;

		$this->load->view('V_tb_cuti',$input);
	}

	public function edit($id)
	{
		

		$a = $this->uri->segment(3);
		//print_r($a);die;
		$this->load->model('Model_cuti');
		$data['edit'] = $this->Model_cuti->Edit_cuti($a);

		$this->load->view('Edit_cuti',$data);

	}

	public function save(){

		$a=$this->input->post('nama_kolah');//budi
		
		$id = $this->input->post('id_cuti');
		//print_r($g);die;

		$data =array(

			'nama_kolah'=>$a,
			
			

			
		);

		$where = array (

				'id_cuti'=>$id

			);

		//print_r($data);die;

		$this->load->model('Model_cuti');
		$x = $this->Model_cuti->update($data,$where);

		///print_r($s);die;
		redirect('Cuti');

	}
	public function hapus($id){
	$this->load->model('Model_cuti');
		$where = ['id_cuti' => $id];
		$this->Model_cuti->hapus_data($where,'tb_cuti');
		redirect('Cuti');
	}
}
