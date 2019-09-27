<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class lanjutan extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_lanjutan');
        $this->load->library(array('form_validation', 'session'));
        $this->load->database();
    }

	public function index(){

        $id_pembayaran = $this->db->get("pembayaran");
	
        $this->load->view('pelanggan/v_lanjutan'); //display the page
    }
   public function lanjutan()
    {
    $this->load->view('pelanggan/v_lanjutan'); //display the page
    }

    public function show(){
    $lihatkonfirmasi = $this->confirmation->contents();
    $this->load->view('pelanggan/v_lanjutan');
    }


    public function get($id_pembayaran)
	{
		$data ['data']= $this->m_lanjutan->get_by_id($id_pembayaran);
    	$this->load->view('pelanggan/v_lanjutan', $data);
	}


       public function cek_lanjutan()
	{
        $data = $this->m_lanjutan->process(); //display the page
            redirect('pelanggan/berhasil');
    }
   
    
}

?>