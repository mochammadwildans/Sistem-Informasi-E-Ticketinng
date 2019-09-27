<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pagination extends CI_Controller {

	public function index()
	{
        $row = $this->m_pagination->baris();

        $config['base_url'] = 'pagination/index';
        $config['total_rows'] = $row;
        $config['per_page'] = '5';
        $config['first_link'] = 'pertama';
        $config['last_link'] = 'terakhir';
        $config['next_link'] = 'Selanjutnya';
        $config['base_url'] = 'sebelumnya';

        $start= $this->url->segment(5);
        $this->pagination->initialize($config);


        $data['user'] = $this->m_pagination->$ambildata($config['per_page'],$start);
		$this->load->view('admin/v_barang',$data);
	}
}
