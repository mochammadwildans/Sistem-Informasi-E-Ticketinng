<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_tiket extends CI_Model{
  public $table = "tiket";

  public function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  public function getList(){
    $query = $this->db->get($this->table);
    return $query->result();
  }

  public function view(){
    return $this->db->get('tiket')->result();
    }

  
  public function get_by_id($no)
  {
		$data = $this->db->where(['no'=>$no])
             ->get("tiket");
    if ($data->num_rows() > 0) {
      return $data->row();//ambil data berdasarkan id dengan angkanya
    }
	}




  public function cari_tiket($data){
      return $this->db->get('tiket')->result();
  }




  public function insert($data)
  {
    $this->db->insert('tiket', $data);
  }

  public function update($data) {
            $this->db->where('no',$data['no']);
            $this->db->update('tiket',$data);
        }  

  public function delete($no)
  {
    $this->db->where('no', $no);
    $this->db->delete('tiket');
  }

       public function listing() {
            $this->db->select('*');
            $this->db->from('tiket');  
            $query = $this->db->get();
            return $query->row_array();
        }

}
