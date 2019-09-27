<?php 

class m_grafik extends CI_model
{


   public function all_transaksi($where)
  {
  	$this->db->select('*');
  	$this->db->from('transaksi');
  	$this->db->join('pembayaran','id_pembayaran');
  	$this->db->where($where);
  	return $this->db->get()->result();
  }
}