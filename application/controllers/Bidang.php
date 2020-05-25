<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bidang extends CI_Controller {

	public function index()
	{
		$this->load->model('Model_bidang');
		$a = $this->Model_bidang->get_bidang();

		$input['b'] = $a;

		//print_r($a->result());die;

		$this->load->view('v_tb_bidang',$input);
	}

	public function edit($id)
	{

		$a = $this->uri->segment(3);
		//print_r($a);die;
		$this->load->model('Model_bidang');
		$data['edit'] = $this->Model_bidang->Edit_bidang($a);

		$this->load->view('Edit_bidang',$data);

	}

	public function save(){

		$a=$this->input->post('nama_bidang');//budi
		$id = $this->input->post('id_bidang');
		//print_r($g);die;

		$data =array(

			'nama_bidang'=>$a
		);

		$where = array (

				'id_bidang'=>$id

			);

		//print_r($data);die;

		$this->load->model('Model_bidang');
		$x = $this->Model_bidang->update($data,$where);

		///print_r($s);die;
		redirect('Bidang');

	}
	public function hapus($id){
	$this->load->model('Model_bidang');
		$where = ['id_bidang' => $id];
		$this->Model_bidang->hapus_data($where,'tb_bidang');
		redirect('Bidang');
	}
}
