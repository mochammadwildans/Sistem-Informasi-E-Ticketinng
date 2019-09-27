<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pembayaran extends CI_Model{
  public $table = "pembayaran";

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getList(){
    $query = $this->db->get($this->table);
    return $query->result();
  }

  function view(){
    return $this->db->get('pembayaran');
    }


  public function get_by_id($id_pembayaran)
  {
		$data = $this->db->where(['id_pembayaran'=>$id_pembayaran])
             ->get("pembayaran");
    if ($data->num_rows() > 0) {
      return $data->row();//ambil data berdasarkan id dengan angkanya
    }
	}

  public function all()
              {
                $hasil = $this->db->get('pembayaran');
                  if ($hasil ->num_rows() > 0){
                      return $hasil->result();
                  } else {
                        return false;
                  }
              }

  public function get_pembayaran_by_id($id_pembayaran)
        {
            $hasil = $this->db->where('id_pembayaran',$id_pembayaran)->limit(1)->get('pembayaran');
              if ($hasil ->num_rows() > 0){
                  return $hasil->row();
              } else {
                    return false;
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

        // public function tandai_konfirmasi($id_pembayaran, $total)
        // {
        //   $ret = true;
        //   //Check Pembayaran Konfirmasi
        //     $pembayaran = $this->db->where('id_pembayaran',$id_pembayaran)->limit(1)->get('pembayaran');
        //       if ($pembayaran ->num_rows() == 0){
        //          $true = $true && false;
        //       } else {
        //          $this->db->where('id_pembayaran',$id_pembayaran)->update('pembayaran',array('status'=>'Sudah bayar'));   
        //       }
        //     return $true;
        // }


        public function listing() {
          $this->db->select('*');
          $this->db->from('pembayaran');  
          $query = $this->db->get();
          return $query->row_array();
        }

        public function update($data) {
          $this->db->where('id_pembayaran',$data['id_pembayaran']);
          $this->db->update('pembayaran',$data);
      }  

           //ambil data pembayran dari database
   





}
