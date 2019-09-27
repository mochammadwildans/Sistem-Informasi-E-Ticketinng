
<?php


class laporan extends CI_Controller{


	 public function __construct()
    {
        parent::__construct();
        if ($this->session->userdata('level')!="pemilik") {
            redirect('admin/login', 'referesh');
        }
        
        $this->load->library('pdf_report');
        $this->load->helper(array('url'));
        $this->load->library(array('form_validation', 'session'));

        $this->load->library('pagination');
    }

	public function index()
	{
		$this->load->view('pemilik/v_laporan');
	}

	

	public function viewreport()
	{
		$this->load->library('form_validation');
		$this->load->model('m_laporan');
		if($this->input->post('submit',TRUE == 'Submit'))
		{
			$this->form_validation->set_rules('bln','bulan','required');
			$this->form_validation->set_rules('thn','Tahun','required');

			if ($this->form_validation->run() == TRUE)
			{
				$bln = $this->input->post('bln',TRUE);
				$thn = $this->input->post('thn',TRUE);
			}

		} else {
			$bln = date('m');
			$thn = date('Y');
		}

		//YYYY-mm-dd ambil tanggal periode dari view
		$awal = $thn.'-'.$bln.'-1';
		$akhir = $thn.'-'.$bln.'-31';

		//kondisi/kriteria laporan anu dek ditampilkeun
		$where = ['tanggal >=' => $awal, 'tanggal_berakhir <=' => $akhir,'status'=>'sudah bayar'];
		$data['bln'] = $bln;
		$data['thn'] = $thn;
		
		
        $data['pembayaran'] = $this->m_laporan->all_transaksi($where);
        $this->load->view('pemilik/v_laporan',$data);
	}


public function cetak_pdf()
{


	$data = $this->session->userdata('result');

	$this->load->view('pemilik/pdf',['data'=>$data]);
}

	
}