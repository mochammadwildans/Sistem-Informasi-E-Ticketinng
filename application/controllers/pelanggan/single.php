<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class single extends CI_Controller {

	public function index()
	{
        $data ['title'] = "Amazing Art World";
		$data ['subtitle'] = "Bandung";
		$data ['description'] = "Description halaman home";
        $data ['view_isi'] = "view_home";
		$this->load->view('pelanggan/v_single');
	}
}