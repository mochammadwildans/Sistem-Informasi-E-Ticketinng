<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class utama extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tiket');
        $this->load->library(array('form_validation', 'session'));
    }

	public function index()
	{
        $data ['title'] = "Amazing Art World";
		$data ['subtitle'] = "Museum 3D";
		$data ['description'] = "Description halaman home";
		$data ['view_isi'] = "view_home";
		$data ['record'] = $this->m_tiket->view();
		$this->load->view('pelanggan/index',$data);
	}

	public function cari_tiket(){
			$data = array(
				'tanggal_tiket' => $this->input->post('tanggal_tiket'));

			$data ['tiket'] = $this->m_tiket->cari_tiket($data);



	        $data ['title'] = "Amazing Art World";
			$data ['subtitle'] = "Museum 3D";
			$data ['description'] = "Description halaman home";
			$data ['view_isi'] = "view_home";
			$data ['record'] = $this->m_tiket->view();
			$this->load->view('pelanggan/index',$data);
		}

}