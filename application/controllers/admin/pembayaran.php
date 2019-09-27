<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pembayaran extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level')!="admin") {
            redirect('admin/login', 'referesh');
        }
        
        $this->load->model(array('m_pembayaran'));
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation', 'session'));

        $this->load->library('pagination');
    }

    // public function index()
    // {
    //     $data['record']= $this->m_pembayaran->view()->result();
    //     $this->load->view('admin/pembayaran/v_pembayaran',$data);
    //     $id_pembayaran = $this->db->insert_id();
    // }

    // public function detail($id_pembayaran)
    // {
    //     $data['pembayaran']= $this->m_pembayaran->get_pembayaran_by_id($id_pembayaran);
    //     $data['transaksi']= $this->m_pembayaran->get_transaksi_by_pembayaran($id_pembayaran);
    //     $this->load->view('admin/pembayaran/v_detailpembayaran',$data);
    // }
//Supaya berubah status di Pembayaran



    // Menggabung Pembayaran Sama Transaksi
    
    public function index()
    {
    $data['record']=$this->m_pembayaran->get_by_transaksi();
    $this->load->view('admin/pembayaran/v_pembayaran', $data);
    $id_pembayaran = $this->db->insert_id();
    }



    public function edit($id_pembayaran)
        {
        $data = $this->m_pembayaran->get_by_id($id_pembayaran);
        $this->load->view('admin/pembayaran/v_confirm', ['data'=>$data]);

        }


        

    public function update()
    {
        $site = $this->m_pembayaran->listing();
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id_pembayaran','id_pembayaran','required');
        $this->form_validation->set_rules('status','status','required');

        if( $this->form_validation->run() == false ) {
        
            
          
        $this->load->view('admin/pembayaran/v_confirm');
         }else{
                // Masuk ke database
                $i = $this->input;
                $data = array(  'id_pembayaran'=> $i->post('id_pembayaran'),
                                'status'=> $i->post('status')
                            );

                $this->m_pembayaran->update($data);
                $this->session->set_flashdata('sukses','Konfigurasi Telah Diupdate');
                redirect(site_url('admin/pembayaran'));
        }
       
    }

    public function rules()
    {
        $this->form_validation->set_rules('nama_file', 'Nama File', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

