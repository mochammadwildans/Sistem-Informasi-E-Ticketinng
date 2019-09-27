<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model{
  public $table = "user";

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
    return $this->db->get('user');
    }

  public function getProdukCart($id){
    $data = $this->db->where(['id'=>$id])
             ->get("user");
    if ($data->num_rows() > 0) {
      return $data->row();
    }
  }

  public function get_by_id($id)
  {
		$data = $this->db->where(['id'=>$id])
             ->get("user");
    if ($data->num_rows() > 0) {
      return $data->row();//ambil data berdasarkan id dengan angkanya
    }
	}


  public function insert($data)
  {
    $this->db->insert('user', $data);
  }

  public function update($data) {
            $this->db->where('id',$data['id']);
            $this->db->update('user',$data);
        }  

  public function delete($id)
  {
    $this->db->where('id', $id);
    $this->db->delete('user');
  }

  public function listing() {
    $this->db->select('*');
    $this->db->from('user');  
    $query = $this->db->get();
    return $query->row_array();
  }

}
