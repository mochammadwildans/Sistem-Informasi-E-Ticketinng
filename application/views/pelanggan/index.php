
<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/scatas'); ?>
</head>
<body>
	<?php $this->load->view('common/header'); ?>
	<section id="content" class="slideshow-bg">
		<div id="slideshow">
			<div class="flexslider">
				<ul class="slides">
					<li>
						<div class="slidebg" style="background-image: url('<?php echo base_url(); ?>assets/images/smpk.jpg');"></div>
					</li>
				</ul>
			</div>
		</div>
		<div class="container">
			<div id="main">
				<h1 class="page-title"> Wisata keluarga dengan Sentuhan Edukasi </h1>
				<h2 class="page-description col-md-4 no-float no-padding"> Bandung - INDONESIA </h2>
				<div class="search-box-wrapper style2">
					<div class="search-box">
						<ul class="search-tabs clearfix">
							<li class="active"><a  data-toggle="tab"><i class="soap-icon-car takeoff-effect"></i><span>CARI TIKET Amazing Art World </span></a></li>
						</ul>
						<div class="visible-mobile">
							<ul id="mobile-search-tabs" class="search-tabs clearfix">
								<li class="active"><a> TIKET Wisata </a></li>
							</ul>
						</div>
						<div class="search-tab-content"><!-- KOTAK PENCARIAN -->
							<!-- TIKET PESAWAT -->
							<div class="tab-pane fade active in" id="flights-tab">





								<form action="<?php echo site_url('pelanggan/utama/cari_tiket'); ?>"  method="get">
									<h6 class="title"><center><b>Pesan Tiketmu Sahabat Amazing :) </b></center></h6>
									<div  allign="center" class="row">



										<!-- <div class="col-md-11">
											<div  allign="center" class="form-group row">
												<div class="col-xs-4">
													<div class="datepicker-wrap">
														<input name="tanggal_tiket" type="datelocal-time" class="input-text full-width" min="<?= date ('d-m-Y')?>" placeholder=" MAsukkan Tanggal" />
													</div>
												</div>
												<div  class="col-xs-4">
													<div class="selector">
														<select class="full-width" class="form-control" name="satuan_tiket" required>
															<?php for ($i=1; $i <=20; $i++) : ?>
															   <option placeholder="Masukkan Pengunjung =>4 Tahun" value="<?= $i ?>" > <?= $i ?> Pengunjung </option>
															<?php endfor; ?> 
														</select>
													</div>
												</div>
											
											</div>
											<div class="form-group row">
												<div class="col-xs-2 pull-right">
													<button type="submit" class="full-width"> CARI TIKET </button>
												</div>
											</div>
											<hr> -->

								<table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                    	<th class="text-center">No</th> 
                                        <th class="text-center">Tanggal Tiket</th>
                                        <th class="text-center">Tiket Tersedia</th>
										<th class="text-center">Aksi</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php $no = 1;?>
                                     <?php foreach ($record as $row):?>
                                        <tr>
                                        	<td class="text-center" ><?= $no++ ?></td>
									   		<td class="text-center" ><?php echo $row->tanggal_tiket?></td>
									   		<td class="text-center" ><?php echo $row->jumlah_tiket?></td>
					 						<td class="text-center" ><a href="<?php echo site_url("pelanggan/cart/add/{$row->no}")?>" class="btn btn-warning"> Beli Tiket </td>
  										</tr>
                                    
                                        <?php $i++?>
                                    <?php endforeach?> 
                                           
                                  
                                </tbody>
                            </table>
										</div>
									</div>
								</form>
							</div>
							<!-- TIKET PESAWAT -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer id="footer">
		<?php $this->load->view('common/footer'); ?>
	</footer>
</div>
<?php $this->load->view('common/scbawah'); ?>
</body>
</html>

