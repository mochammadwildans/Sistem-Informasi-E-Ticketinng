<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class transaksi extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level')!="admin") {
            redirect('admin/login', 'referesh');
        }
        
        $this->load->model('m_transaksi');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        $data['record']= $this->m_transaksi->view()->result();
        $this->load->view('admin/transaksi/v_transaksi',$data);
    }

    public function edit($id_pembayaran)
        {
        $data = $this->m_pembayaran->get_by_id($id_pembayaran);
        $this->load->view('admin/pembayaran/v_confirm', ['data'=>$data]);

        }

    public function detail($no_transaksi)
    {
        $data['pembayaran']= $this->m_transaksi->get_pembayaran_by_id($no_transaksi);
        $data['transaksi']= $this->m_transaksi->get_transaksi_by_pembayaran($no_transaksi);
        $this->load->view('admin/transaksi/v_detailtransaksi',$data);
    }

    public function rules()
    {
        $this->form_validation->set_rules('nama_file', 'Nama File', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

