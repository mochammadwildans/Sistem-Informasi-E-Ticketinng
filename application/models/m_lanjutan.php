<?php
class m_lanjutan extends CI_Model {


	public function process()
  {      



  }

  
  public function get_by_id($id_pembayaran)
  {
    $data = $this->db->where(['id'=>$id_pembayaran])
             ->get("pembayaran");
    if ($data->num_rows() > 0) {
      return $data->row();//ambil data berdasarkan id dengan angkanya
    }
  }



// public function get_pembayaran()
// {
//     $this->db->select([])



// }


	public function pembayaran_konfirmasi($id_pembayaran, $total)
	{
		$ret = true;
		$pembayaran = $this->db->where('id_pembayaran', $id_pembayaran)->limit(1)->get('pembayaran');
	
	} 
}