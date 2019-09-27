<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('logged') != true){
            redirect('view_home');
        } 
    }


	public function index()
	{
        $data ['title'] = "Amazing Art World";
		$data ['subtitle'] = "Laksana";
		$data ['description'] = "Description halaman home";
        $data ['view_isi'] = "view_home";
		$this->load->view('layout/template',$data);
	}
}