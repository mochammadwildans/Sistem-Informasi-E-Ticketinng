<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tiket extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level')!="admin") {
            redirect('admin/login', 'referesh');
        }
        
        $this->load->model('m_tiket');
        $this->load->library(array('form_validation', 'session'));

        
    }

    public function index()
    {
        $data['record'] = $this->m_tiket->getList();
        $this->load->view('admin/v_tiket',$data);
    }

    public function create()
    {
            if ($this->form_validation->run() == FALSE) {
            $data['gambar'] = $this->input->post('gambar') ? $this->input->post('gambar') : '';
        }
        $this->load->view('admin/v_addtiket');
    }

    public function tambah()
    {
        $config = array(
            'upload_path' => './images/',
            'allowed_types' => 'jpeg|jpg|png',
            
        );
        $this->load->library('form_validation');
        $this->load->library('upload', $config);


        if (!$this->upload->do_upload('gambar')) {
            $this->session->set_flashdata('message', "<div style='color:#ff0000;'>" . $this->upload->display_errors() . "</div>");
            redirect(site_url('admin/tiket/create'));
        } else {
            $file = $this->upload->data();
            $data = array(
                    'no' => $this->input->post('no'),
                    'kode_tiket' => $this->input->post('kode_tiket'),
                    'nm_tiket' => $this->input->post('nm_tiket'),
                    'jumlah_tiket' => $this->input->post('jumlah_tiket'),
                    'harga_tiket' => $this->input->post('harga_tiket'),
                    'gambar' => $file['file_name']
            );


            $this->m_tiket->insert($data);
        }
        $this->session->set_flashdata('message', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
        redirect(site_url('admin/tiket'));
    }

    

    public function edit($no){
    $data = $this->m_tiket->get_by_id($no);
    $this->load->view('admin/v_update', ['data'=>$data]);

    }

    public function update()
    {
        
        $site = $this->m_tiket->listing();
        
        $this->load->library('form_validation');
        $this->form_validation->set_rules('kode_tiket','kode_tiket','required');
        $this->form_validation->set_rules('no','no','required');
        $this->form_validation->set_rules('nm_tiket','nm_tiket','required');
        $this->form_validation->set_rules('jumlah_tiket','jumlah_tiket','required');
        $this->form_validation->set_rules('harga_tiket','harga_tiket','required');
        $this->form_validation->set_rules('gambar','gambar','required');
        
        if( $this->form_validation->run() == FALSE) {
            
            $config['upload_path']      = './images/';
            $config['allowed_types']    = 'gif|jpg|png';        
            $this->load->library('upload', $config);
            if(! $this->upload->do_upload('gambar')) {
                
        $data = array(  'title' => 'Update Data',
                        'site'  => $site,
                        'error' => $this->upload->display_errors(),
                        'isi'   => 'admin/tiket/update');
        $this->load->view('admin/v_update',$data);
        }else{
                $upload_data                = array('uploads' =>$this->upload->data());
                // Image Editor
                $config['image_library']    = 'gd2';
                $config['source_image']     = './images/'.$upload_data['uploads']['file_name']; 
                $config['new_image']        = './images/update/';
                $config['create_thumb']     = TRUE;
                $config['maintain_ratio']   = TRUE;
                $config['thumb_marker']     = '';
                $this->load->library('image_lib', $config);
                $this->image_lib->resize();
                // Hapus gambar lama
       
                unlink('./images/update/'.$site['gambar']);
                // End hapus gambar lama
                // Masuk ke database
                $i = $this->input;
                $data = array(  'no'=> $i->post('no'),
                                'kode_tiket'=> $i->post('kode_tiket'),
                                'nm_tiket'=> $i->post('nm_tiket'),
                                'jumlah_tiket'=> $i->post('jumlah_tiket'),
                                'harga_tiket'=> $i->post('harga_tiket'),
                                'gambar'          => $upload_data['uploads']['file_name']
                            );
                $this->m_tiket->update($data);
                $this->session->set_flashdata('sukses','Konfigurasi Telah Diupdate');
                redirect(site_url('admin/tiket'));
        }}
        // Default page
        $data = array(  'title' => 'Update Gambar',
                        'site'  => $site,
                        'isi'   => 'admin/tiket/update');
       
    
       
    }

    public function delete($no)
    {
        $row = $this->m_tiket->get_by_id($no);

        if ($row) {

                // unlink() use for delete files like image.
                unlink('images/'.$row->gambar);

                $this->m_tiket->delete($no);
                $this->session->set_flashdata('pesan', "<div style='color:#00a65a;'>Gambar berhasil dihapus.</div>");
                redirect(site_url('admin/tiket'));
        } else {
                $this->session->set_flashdata('message', "<div style='color:#dd4b39;'>Data tidak ditemukan.</div>");
                redirect(site_url('admin/tiket'));
        }
    }

    public function rules()
    {
        $this->form_validation->set_rules('nama_file', 'Nama File', 'trim|required');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}

