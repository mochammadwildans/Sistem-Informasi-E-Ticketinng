<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class product extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_tiket');
        $this->load->library(array('form_validation', 'session'));
    }

	public function index()
	{
		
        $data ['title'] = "Amazing Art World";
		$data ['subtitle'] = "Bandung";
		$data ['description'] = "Description halaman home";
		$data ['view_isi'] = "view_home";


		$data ['record'] = $this->m_tiket->getList();
		$this->load->view('pelanggan/v_product', $data);
	}
	
	
	

	
}