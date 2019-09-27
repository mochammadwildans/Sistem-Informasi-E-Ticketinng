<?php
class login extends CI_Controller {
	public function __construct()
    {
            parent::__construct();
			
			//digunakan untuk load/memanggil file MODELS 
            $this->load->model('m_login');
    }

    public function index()
    {
    	
    		$this->load->view('v_login');
    	
	}

	
	public function validasi()
    {
		
		$username = $this->input->post('username');
        $password = $this->input->post('password');

        $ceklogin = $this->m_login->CheckUser($username,$password);

        if ($ceklogin){
            foreach($ceklogin as $row);
            $this->session->set_userdata('username', $row->username);
            $this->session->set_userdata('level', $row->level);

            if($this->session->userdata('level')=="admin"){
                redirect('c_admin', 'referesh');
            } elseif ($this->session->userdata('level')=="pemilik") {
                redirect('c_pemilik', 'referesh');
                
            }
        } else {
              $this->session->set_flashdata('pesan','Konfigurasi Telah Diupdate');
           redirect(site_url('admin/login'));
        }
    }

    public function logout()
    {
    	$this->session->sess_destroy();
    	redirect('admin/login', 'referesh');
    }
}
