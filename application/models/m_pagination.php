<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_cart extends CI_Model{


function ambildata($perpage, $start)
  {
    return $get = $this->db->get('tiket', $perpage, $start)->result_array();
  }


  function baris(){
    return $this->db->get('tiket')->num_rows();
}
}
?>