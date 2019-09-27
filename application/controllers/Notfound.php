<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notfound extends CI_Controller {

	public function index()
	{
        $data ['title'] = "Error 404";
		$data ['subtitle'] = "Page Not Found";
		$data ['description'] = "Description halaman Page Not Found";
        $data ['view_isi'] = "view_404";
		$this->load->view('layout/template',$data);
	}
}