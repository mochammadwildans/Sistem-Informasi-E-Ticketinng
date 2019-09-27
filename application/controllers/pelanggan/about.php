<?php
class about extends CI_Controller{
	
        public function __construct()
        {
            parent::__construct();
            $this->load->library(array('form_validation', 'session'));
        }
    
        public function index(){
        
        $this->load->view('pelanggan/v_about'); //display the page
            }
        
        
           
}