<?php
class thanks extends CI_Controller{
	
        public function __construct()
        {
            parent::__construct();
            $this->load->library(array('form_validation', 'session'));
        }
    
        public function index(){
        
        $this->load->view('pelanggan/v_thanks'); //display the page
            }
        
        
            public function show(){
                $lihatkeranjang = $this->cart->contents();
                $this->load->view('pelanggan/v_thanks');
               }
               
}