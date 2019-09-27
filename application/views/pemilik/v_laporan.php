<?php $this->load->view('pemilik/header.php'); ?>
<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
<?php $this->load->view('pemilik/sidebar.php'); ?>

<div class="main-content">
<div class="main-content-inner">
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Laporan</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Kelola Laporan</h1>
			</div>

			<div class="form-group">
				<form method="post">
					
				<div class="col-md-2">
					<label>Bulan</label>
						<select class="form-control" name="bln">
						<option value="1" <?php if ($bln == 1) {echo 'selected';} ?>>Januari</option>
						<option value="2" <?php if ($bln == 2) {echo 'selected';} ?>>Februari</option>
						<option value="3" <?php if ($bln == 3) {echo 'selected';} ?>>Maret</option>
						<option value="4" <?php if ($bln == 4) {echo 'selected';} ?>>April</option>
						<option value="5" <?php if ($bln == 5) {echo 'selected';} ?>>Mei</option>
						<option value="6" <?php if ($bln == 6) {echo 'selected';} ?>>Juni</option>
						<option value="7" <?php if ($bln == 7) {echo 'selected';} ?>>Juli</option>
						<option value="8" <?php if ($bln == 8) {echo 'selected';} ?>>Agustus</option>
						<option value="9" <?php if ($bln == 9) {echo 'selected';} ?>>September</option>
						<option value="10" <?php if ($bln == 10) {echo 'selected';} ?>>Oktober</option>
						<option value="11" <?php if ($bln == 11) {echo 'selected';} ?>>November</option>
						<option value="12" <?php if ($bln == 12) {echo 'selected';} ?>>Desember</option>
					</select>
					
				</div>

				

				<div class="col-md-2">
					<label>Tahun</label>
						<select class="form-control" name="thn">
							<?php for($i = 2018; $i <= 2035; $i++) { ?>
						<option value="<?php echo $i; ?>" <?php if ($thn==$i){echo'selected';} ?>><?php echo $i;?></option>
							<?php }; ?>
					</select>
				</div>

				<div class="col-sm-1">
					<br>
					<button type="submit" name="submit" value="Submit" class="btn btn-md btn-primary">Cari</button>
				</div>

					<div class="col-md-1">
						<br>
						
					</div>

				</form>

		</div>
	</div>

		
		<?php
			switch ($bln) {
				case '1':
					$bulan = 'Januari';
					break;
				case '2':
					$bulan = 'Februari';
					break;
				case '3':
					$bulan = 'Maret';
					break;
				case '4':
					$bulan = 'April';
					break;
				case '5':
					$bulan = 'Mei';
					break;
				case '6':
					$bulan = 'Juni';
					break;
				case '7':
					$bulan = 'Juli';
					break;
				case '8':
					$bulan = 'Agustus';
					break;
				case '9':
					$bulan = 'September';
					break;
				case '10':
					$bulan = 'Oktober';
					break;
				case '11':
					$bulan = 'November';
					break;
				case '12':
					$bulan = 'Desember';
					break;

			}
		?>
		<h2>Laporan Bulan <?= $bulan;?> Tahun <?= $thn;?>  </h2>
		<br>
		
				
		<?php if ($pembayaran): ?>
			<div class="form-group">
			<a class="btn block btn-success btn-md btn-block" href="<?php echo site_url('laporan/cetak_pdf');?>" target="_blank"><i class="fa fa-print"></i> Print PDF</a>
		</div>
		 <?php if (isset($pembayaran)){
		 	$_SESSION['result'] = $pembayaran;
		 ?>
		<table id="bootstrap-data-table" class="table center table-striped table-bordered " style="border-collapse: collapse;">
                                <thead align="text-center">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">ID Pembayaran </th>
                                        <th class="text-center">Nama Pelanggan</th>
                                        <th class="text-center">Tanggal Pesan</th>
                                        <th class="text-center">Biaya</th>
                                        

                                    </tr>
                                </thead>

                                <?php 
                                	$no = 1;
                                	$total = 0;
                                	foreach ($pembayaran as $key):
                                		
                                 ?>

                                <tbody>
                                    
                                    
                                    <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= $key->id_pembayaran;?></td>
                                            <td><?= $key->nm_pelanggan;?></td>
                                            <td><?= $key->tanggal;?></td>
											<td><?= $key->jumlah_bayar;?></td>
                                            
  											<?php $total += $key->jumlah_bayar; ?>
                                           
                                            
                                    </tr>
                                    
                                    <?php endforeach; ?>
                                   <tr>
                                        <td colspan="4" align="center"><strong>Pendapatan</strong>  </td>

                                        <td><strong>Rp. <?=number_format($total) ?></strong></td>
                                    </tr>

                                    
                                </tbody>
                            </table>
                            
                        <?php } ?>
                            <br>
                            <br>
                         <?php else: ?>
                         <h3><strong>Tidak Ada Transaksi</strong></h3>
                         <?php endif ?>   
                           
                              
                         <br><br>

</div>
</div>
</div>
</div>	



					 
						 
				
			 </div>			
		 </div>
	 </div>


<br>
<?php $this->load->view('pemilik/footer.php'); ?>