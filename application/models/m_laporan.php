<?php 

class m_laporan extends CI_model
{


   public function all_transaksi($where)
  {
  	$this->db->select('*');
  	$this->db->from('pembayaran');
  	$this->db->join('transaksi','no_transaksi');
  	$this->db->where($where);
  	return $this->db->get()->result();
  }
}