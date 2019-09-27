<?php


class cart extends CI_Controller{
	
	public function __construct(){
		parent::__construct();

		$this->load->library('form_validation'); //digunakan untuk proses validasi yang diinput
		$this->load->model('m_cart');
		$this->load->library('cart'); //load our cart models from our entire class
		$this->load->database('amazingartworld'); //load our cart models from our entire class
		$this->load->helper(array('url','form')); //digunakan untuk proses validasi yang diinput
		
	}

	

	public function index(){
		$data['tiket'] = $this->m_cart->gettiket('tiket');
		$this->load->view('pelanggan/keranjangbelanja',$data); //display the page
	}

	public function add($no)
	{	
		$ambildata = $this->m_cart->getProdukCart($no);
		$data = array(
					'id'=>$ambildata->no,
					'qty'=>1,
					'price'=>$ambildata->harga_tiket,
					'gambar'=>$ambildata->gambar,
					'name'=>$ambildata->nm_tiket,
					'satuan'=>$ambildata->satuan_tiket,
					'tanggal'=>$ambildata->tanggal_tiket);
		
		$this->cart->insert($data); 
		//data disimpan dikeranjang
		$this->session->set_flashdata('psn', "<div style='color:#00a65a;'>Gambar berhasil ditambah.</div>");
		redirect(site_url('pelanggan/cart/show'));
		
	}

	public function show(){
	 $lihatkeranjang = $this->cart->contents();
	 $this->load->view('pelanggan/keranjangbelanja');
	}

	public function hapus($rowid)
	{
		$this->cart->update(array('rowid'=>$rowid, 'qty'=>0));
		$this->load->view('pelanggan/keranjangbelanja');
	}

	public function update()
	{
		$i = 1;
		foreach ($this->cart->contents() as $tiket){
			$this->cart->update(array('rowid' => $tiket['rowid'], 'qty' => $_POST['qty'.$i]));
			$i++;
		}
		$this->load->view('pelanggan/keranjangbelanja');
	}
	
}


