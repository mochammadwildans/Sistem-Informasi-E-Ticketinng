<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class checkout extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('m_checkout');
        $this->load->library(array('form_validation', 'session','email'));
    }


 public function send_mail() { 
      
       $config = array (
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => '465',
      'smtp_user' => 'mwildans97@gmail.com',
      'smtp_pass' => '02051997',
      'mailtype' => 'html',
      'charset' => 'iso-8859-1');
      
      $this->load->library('email',$config);
    
  
        $htmlcontent = '<h1>Tagihan Amazing Art World</h1><br>'.
                'Terima Kasih Telah Melakukaan Pemesanan di Toko Bangunan Laksana !'.
        '<br>----------------------------------------------------------------'.         
        '<br>No. Pesanan : '.$id_pembayaran.
        '<br>No. Pesanan : '.$_POST['nm_pelanggan'].
        '<br>No. Pesanan : '.$_POST['alamat'].
        '<br>No. Pesanan : '.$_POST['no_hp'].
        '<br>No. Pesanan : Rp.'.$total.
        '<br>---------------------------------------------------------------------------------------------------------------'.
        '<br>Silahkan Transfer ke nomor rekening 2176526521 Bank BNI a.n. TB . Laksana, sebesar Rp. '.$total.
        '<br>---------------------------------------------------------------------------------------------------------------'.
        '<br><br>Klik disini untuk konfirmasi pembayaran<br>'.site_url("pelanggan/pembayaran/konfirmasi/{$id_pembayaran}");'
        ">klik<a>';
        
        
        $this->email->set_newline("\r\n");
        
        $this->email->from('mwildans97@gmail.com', 'Amazing Art World');
        $this->email->to($_POST['email']);
        $this->email->subject('Tagihan Pembayaran Toko Bangunan');
        $this->email->message($htmlcontent);
        
       $this->email->send();
      
       return TRUE;  


      }


	public function index(){
	
	$this->load->view('pelanggan/formcheckout'); //display the page
       }
    

    public function show(){
        $lihatkeranjang = $this->cart->contents();
        $this->load->view('pelanggan/keranjangbelanja');
       }


       public function cekricek()
	   {
        $data = $this->m_checkout->process(); //display the page
            redirect('pelanggan/thanks');
      }
   
    
}

?>