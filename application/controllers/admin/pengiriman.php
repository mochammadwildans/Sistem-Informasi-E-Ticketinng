
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengunjung extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level')!="admin") {
            redirect('admin/login', 'referesh');
        }
        
        $this->load->model('m_pengunjung');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        $data['record']= $this->m_pengunjung->view()->result();
        $this->load->view('admin/pengunjung/v_pengunjung',$data);
    }

    public function detail($id_pengunjung)
    {
        $data['pembayaran']= $this->m_pengunjung->get_pengunjung_by_id($id_pengunjung);
        $data['pengunjung']= $this->m_pengunjung->get_pembayaran_by_pengunjung($id_pengunjung);
        $this->load->view('admin/pengunjung/v_detailpengunjung',$data);
    }

    public function rules()
    {
        $this->form_validation->set_rules('nama_file', 'Nama File', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}



