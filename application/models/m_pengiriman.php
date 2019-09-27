<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pengunjung extends CI_Model{
  public $table = "pengunjung";

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
    return $this->db->get('pengunjung');
    }


  public function get_by_id($id_pengunjung)
  {
		$data = $this->db->where(['id_pengunjung'=>$id_pengunjung])
             ->get("pengunjung");
    if ($data->num_rows() > 0) {
      return $data->row();//ambil data berdasarkan id dengan angkanya
    }
	}


        public function all()
              {
                $hasil = $this->db->get('pengunjung');
                  if ($hasil ->num_rows() > 0){
                      return $hasil->result();
                  } else {
                        return false;
                  }
              }

        public function get_pengunjung_by_id($id_pengunjung)
        {
            $hasil = $this->db->where('id_pengunjung',$id_pengunjung)->limit(1)->get('pengunjung');
              if ($hasil ->num_rows() > 0){
                  return $hasil->row();
              } else {
                    return false;
              }
        }

        public function get_pembayaran_by_pengunjung($id_pengunjung)
        {
            $hasil = $this->db->where('id_pengunjung',$id_pengunjung)->get('pengunjung');
              if ($hasil ->num_rows() > 0){
                  return $hasil->result();
              } else {
                    return false;
              }
        }



}
