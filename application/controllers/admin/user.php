<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level')!="admin") {
            redirect('admin/login', 'referesh');
        }
        
        $this->load->model('m_user');
        $this->load->library(array('form_validation', 'session'));
    }

    public function index()
    {
        $data['record']= $this->m_user->view()->result();
        $this->load->view('admin/v_user',$data);
    }

    public function create()
    {

        if (isset($_post['submit']))   {
            //proses Daata
            $this->m_user->post();
            redirect ('user');

        } 
        else {
        $this->load->view('admin/user/v_adduser');
        }
    }

    public function tambah()
    {
       
        $this->load->library('form_validation');
        
            $data = array(
                    'id' => $this->input->post('id'),
                    'nama' => $this->input->post('nama'),
                    'username' => $this->input->post('username'),
                    'password' => $this->input->post('password'),
                    'level' => $this->input->post('level'),
            );


            $this->m_user->insert($data);
        
        $this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
        redirect(site_url('admin/user'));
    }

    

    public function edit($id){
    $data = $this->m_user->get_by_id($id);
    $this->load->view('admin/user/v_update', ['data'=>$data]);

    }

    public function update()
    {
        
        $site = $this->m_user->listing();
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('id','id','required');
        $this->form_validation->set_rules('nama','nama','required');
        $this->form_validation->set_rules('username','username','required');
        $this->form_validation->set_rules('password','password','required');
        $this->form_validation->set_rules('level','level','required');
    

        
        if( $this->form_validation->run() == true) {
            
     
                
        
        $this->load->view('admin/user/v_update');
       
                // Masuk ke database
                $i = $this->input;
                $data = array(  'id'=> $i->post('id'),
                                'nama'=> $i->post('nama'),
                                'username'=> $i->post('username'),
                                'password'=> $i->post('password'),
                                'level'=> $i->post('level'),
                                
                            );
                $this->m_user->update($data);
                $this->session->set_flashdata('sukses','Konfigurasi Telah Diupdate');
                redirect(site_url('admin/user'));
        }
       
    }

    public function delete($id)
    {
        $row = $this->m_user->get_by_id($id);

        if ($row) {

               
                $this->m_user->delete($id);
                $this->session->set_flashdata('pesan', "<div style='color:#00a65a;'>Gambar berhasil dihapus.</div>");
                redirect(site_url('admin/user'));
        } else {
                $this->session->set_flashdata('message', "<div style='color:#dd4b39;'>Data tidak ditemukan.</div>");
                redirect(site_url('admin/user'));
        }
    }

    public function rules()
    {
        $this->form_validation->set_rules('nama_file', 'Nama File', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

