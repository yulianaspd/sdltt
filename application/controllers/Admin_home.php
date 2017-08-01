<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_home extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
	    $this->load->model('SecurityModel');

		//Do your magic here
	}
	public function index() {
      	$this->SecurityModel->level_admin();

      	$status = $this->session->userdata('jabatan');

		$data=array('title'=>'Home',
					'isi'  =>'adminpages/home/home'
						);
		$data['hadir']	= $this->m_global->get_data_all('kehadiran', null, ['jabatan'=>$status]);
		
		$this->load->view('adminlayout/wrapper',$data);	
	}

	public function update($jabatan){
		$hadir= $this->input->post('tombol');
		$waktu = date("l, d/m/Y, H:i:sa");
		$data = array(
			'status' => $hadir,
			'last_update' => $waktu
			);
		$this->m_global->update('kehadiran',$data,['jabatan'=>$jabatan]);
		redirect('Admin_home');		
	}
}