<?php
class c_admin extends CI_Controller {

	function __construct(){
		parent::__construct();

		if ($this->session->userdata('level')!="admin") {
			redirect('login');
		}
	}

    public function index()
    {
    	$data['Home'] = true;
    	$this->load->view('view_home',$data);
    }
}