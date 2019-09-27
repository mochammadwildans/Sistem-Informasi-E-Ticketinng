
    <?php
class c_pemilik extends CI_Controller {

    function __construct(){
		parent::__construct();

		if ($this->session->userdata('level')!="pemilik") {
			redirect('login');
		}
	}
	   
    public function index()
    {
    	
    	$this->load->view('pemilik/v_pemilik');
    }
}