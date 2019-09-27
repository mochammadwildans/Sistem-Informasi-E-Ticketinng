<?php
class m_login extends CI_Model {
	public $table = "user";
	public function __construct()
	{
		parent::__construct();
	}


	// public function proseslogin($username, $password){
	// 	if(isset($POST['login'])){
	// 		$username = $this->input->post('username',true);
	// 		$password = $this->input->post('password',true);
			
	// }


	public function CheckUser($username, $password)
	{
		$this->db->select('username,password,level');
		$this->db->from('user');
		$this->db->where('username',$username);
		$this->db->where('password',$password);
		$this->db->limit(1);

		$query = $this->db->get();

		if($query->num_rows()==1){
			return $query->result();
		} else {
			return false;
		}


	}

}
?>