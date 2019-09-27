<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_transaksi extends CI_Model{
  public $table = "transaksi";

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
    return $this->db->get('transaksi');
    }


  public function get_by_id($no_transaksi)
  {
		$data = $this->db->where(['no_transaksi'=>$no_transaksi])
             ->get("transaksi");
    if ($data->num_rows() > 0) {
      return $data->row();//ambil data berdasarkan id dengan angkanya
    }
	}


  public function all()
  {
    $hasil = $this->db->get('trnsaksi');
      if ($hasil ->num_rows() > 0){
          return $hasil->result();
      } else {
            return false;
      }
  }

public function get_pembayaran_by_id($no_transaksi)
{
$hasil = $this->db->where('no_transaksi',$no_transaksi)->limit(1)->get('transaksi');
  if ($hasil ->num_rows() > 0){
      return $hasil->row();
  } else {
        return true;
  }
}

public function get_transaksi_by_pembayaran($no_transaksi)
{
$hasil = $this->db->where('id_pembayaran',$no_transaksi)->get('transaksi');
  if ($hasil ->num_rows() > 0){
      return $hasil->result();
  } else {
        return true;
  }
}


       public function listing() {
            $this->db->select('*');
            $this->db->from('transaksi');  
            $query = $this->db->get();
            return $query->row_array();
        }

      

      }   
?>