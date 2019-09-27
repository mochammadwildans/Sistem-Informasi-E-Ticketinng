<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_cart extends CI_Model{


    public function gettiket($no)
    {
    $select = $this->db->get('tiket');
    return $select->result_array();
    }



    public function getProdukCart($no){
    $data = $this->db->where(['no'=>$no])
             ->get("tiket");
    if ($data->num_rows() > 0) {
      return $data->row();
    }
  }
}
?>