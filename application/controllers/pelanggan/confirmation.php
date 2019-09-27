<?php
class confirmation extends CI_Controller{
	
        public function __construct()
        {
            parent::__construct();
            $this->load->model('m_confirmation');
            $this->load->library(array('form_validation', 'session'));
            $this->load->database('amazingartworld'); //load our cart models from our entire class
            $this->load->helper(array('url','form')); //digunakan untuk proses validasi yang diinput

            
        }
    
        public function index(){
          
            $this->load->view('pelanggan/formconfirmation'); //display the page
        }

        public function add($no_transaksi)
         {   
        $ambildata = $this->m_confirmation->gettransaksilist($no_transaksi);
        $data = array(
                    'no_transaksi'=>$ambildata->no_transaksi,
                    'nm_pelanggan'=>$ambildata->nm_pelanggan,
                    'asal_kota'=>$ambildata->asal_kota,
                    'nm_tiket'=>$ambildata->nm_tiket,
                    'total_transaksi'=>$ambildata->total_transaksi,
                    'jumlah_tiket'=>$ambildata->jumlah_tiket);
        
        $this->cart->insert($data); 
        //data disimpan dikeranjang
        $this->session->set_flashdata('psn', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
        redirect(site_url('pelanggan/confirmation/show'));
        
    }
      
        public function show(){
        $lihattransaksi = $this->confirmation->contents();
        $this->load->view('pelanggan/formconfirmation');
    }
 


        public function create()
        {
                if ($this->form_validation->run() == TRUE) {
                $data['bukti_transfer'] = $this->input->post('bukti_transfer') ? $this->input->post('bukti_transfer') : '';
            }
            $this->load->view('pelanggan/confirmation/formconfirmation');
        
        }

       public function cek_konfirmasi()
	    {

            $is_processed = $this->m_confirmation->process(); //display the page
            if ($is_processed) {
                $this ->cart->destroy();
                $this->session->set_flashdata('alert', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
                redirect('pelanggan/berhasil');
            }
             else { 
                $this->session->set_flashdata('error', 'failed to processed your checkout, Please try again later!');
                redirect('pelanggan/confirmation');
    
    
            }
         //ada persamaan dengan formchekout
        }



    
   
    
        
      


        
}