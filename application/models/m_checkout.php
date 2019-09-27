<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_checkout extends CI_Model{


  public function process()
  {
   

    //put trnsaction item in table of transaction

    $total = $this->cart->total();
    
    foreach($this->cart->contents() as $item) {
          $no = 1;
          $id_pembayaran = $this->db->insert_id();
          $data = array(
     
              'no'                     => $item['id'],
              'id_pembayaran'          => $no,
              'nm_tiket'               => $item['name'],
              'jumlah_tiket'           => $item['qty'],
              'total_transaksi'        => $total,
              'tanggal_transaksi'      => date ('Y-m-d-H:i:s'),   
              'nm_pelanggan'           => $_POST['nm_pelanggan'],
              'asal_kota'              => $_POST['asal_kota'],
              'no_hp'                  => $_POST['no_hp'],
              'email'                  => $_POST['email'],
          );

           
            $this->db->insert('transaksi', $data);


    $config = array (
      'protocol' => 'smtp',
      'smtp_host' => 'ssl://smtp.googlemail.com',
      'smtp_port' => 465,
      'smtp_user' => 'mwildans97@gmail.com',
      'smtp_pass' => '02Mei1997',
      'mailtype' => 'html',
      'charset' => 'iso-8859-1');
      
      $this->load->library('email',$config);
    }
  
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
        $this->email->subject('Tagihan Pembayaran Amazing Art World');
        $this->email->message($htmlcontent);
        
       $this->email->send();
      
       return TRUE;  

}


// public function get_pembayaran($id_pembayaran)
// {
//   $hasil = $this->db->where('id_pembayaran',$id_pembayaran)->limit(1)->get('pembayaran');
//   if($hasil->num_rows()>0){
//     return $hasil->row();
//   } else {
//     return false;
//   }
// }


// public function get_orders($invoice_id)
// {
//   $hasil = $this->db->where('invoice_id',$invoice_id)->get('orders');
//   if($hasil->num_rows()>0){
//     return $hasil->result();
//   } else {
//     return false;
//   }
// }
 
}
 
?>