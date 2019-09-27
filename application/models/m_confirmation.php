
<?php
class m_confirmation extends CI_Model {



   public function gettransaksi($no_transaksi)
    {
      $select = $this->db->get('transaksi');
      return $select->result_array();
    }


    public function gettransaksilist($no_transaksi){
    $data = $this->db->where(['no_transaksi'=>$no_transaksi])
             ->get("transaksi");
    if ($data->num_rows() > 0) {
      return $data->row();
    }
  }




    public function get_by_transaksi()
        {
            $this->db->select('
              pembayaran.*, transaksi.no_transaksi, transaksi.nm_pelanggan
              ');
              $this->db->join('transaksi', 'pembayaran.no_transaksi = transaksi.no_transaksi');
              $this->db->from('pembayaran');
              $query=$this->db->get();
              return $query->result(); }

	public function process()
  {      

    $config = array(
      'upload_path' => './images/',
      'allowed_types' => 'jpeg|jpg|png',
      
  );
  $this->load->library('form_validation');
  $this->load->library('upload', $config);


    if (!$this->upload->do_upload('bukti_transfer')) {
      $this->session->set_flashdata('Silahkan Upload bukti transfer', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
      } else {
      foreach($this->cart->contents() as $item);
      {
      $no = 1;
      $file = $this->upload->data();
    
     // $query = "SELECT * FROM pembayaran
     //            INNER JOIN transaksi ON pembayaran.no_transaksi = transaksi.no_transaksi
     //            ";
     //  $sql_pembayaran = mysql_query($con, $query) or die (mysql_error($con));
     //  while ($data = mysql_fetch_array($sql_pembayaran));
    

       
      $pembayaran = array(
              'no'               => $item['id'],
              'no_transaksi'     => $no, 
              'tanggal'          => date('Y-m-d H:i:s'),
              'tanggal_berakhir' => date('Y-m-d H:i:s', mktime(date('H'),date('i'),date('s'),date('m'),date('d')+1,date('Y'))),
              'status'           => 'belum bayar',
              'jumlah_bayar'     => $this->input->post('jumlah_bayar'),
              'bukti_transfer'   => $file['file_name']
      );
     
      $id_pembayaran = $this->db->insert_id();
      $this->db->insert('pembayaran',$pembayaran);
  

  // $this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
  // redirect(site_url('pelanggan/confirmation/lanjutan'));
 
          }
          

        }
           return true;
        }


        public function insert($pembayaran)
        {
          $this->db->insert('pembayaran', $pembayaran);
        }




	public function pembayaran_konfirmasi($id_pembayaran, $total)
	{
		$ret = true;
		$pembayaran = $this->db->where('id_pembayaran', $id_pembayaran)->limit(1)->get('pembayaran');
	
	} 
}

?>