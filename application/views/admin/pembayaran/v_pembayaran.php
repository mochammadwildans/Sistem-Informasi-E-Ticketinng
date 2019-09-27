
<?php $this->load->view('layout/header.php'); ?>
<div class="main-container ace-save-state" id="main-container">
			<script type="text/javascript">
				try{ace.settings.loadState('main-container')}catch(e){}
			</script>
<?php $this->load->view('layout/sidebar.php'); ?>


<div class="main-content">
				<div class="main-content-inner">
					<div class="breadcrumbs ace-save-state" id="breadcrumbs">
						<ul class="breadcrumb">
							<li>
								<i class="ace-icon fa fa-home home-icon"></i>
								<a href="#">Home</a>
							</li>

							<li>
								<a href="#">Kelola Pembayaran</a>
							</li>
							<li class="active">Lihat Data Pembayaran</li>
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="off" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
					</div>
				</div>
			





    


	<div class="container">


	<div class="hr hr-18 dotted hr-double"></div>

	<div class="row">
		<div class="col-xs-11">
			<h3 class="header smaller lighter blue">Data Pembayaran</h3>

						<!-- <a> <button data-toggle="tooltip" onClick="popup_excel()" data-placement="bottom" title="pindah excel" class="btn btn-white btn-primary btn-bold"><i class="fa fa-file-excel-o bigger-110 green"></i> excel </button> </a>
					
						<a href="./directory/yourfile.pdf" download="pdf" data-toggle="tooltip" data-placement="bottom" title="pindah pdf" class="btn btn-white btn-primary btn-bold"><i class="fa fa-file-pdf-o bigger-110 red"></i> export pdf </a>
					
						<a> <button data-toggle="tooltip" onClick="popup_print()" message="This print was produced using the Print button for DataTables" autoPrint="false" data-placement="bottom" title="pindah pdf" class="btn btn-white btn-primary btn-bold"><i class="fa fa-file-excel-o bigger-110 grey"></i> Print </button> </a> 
  -->
					<div class="clearfix">
					<div type="pull-right tableTools-container"></div>
					</div>
		<div class="table-header">
		<div class="col-xs-9.5"></div>
			Berikut merupakan tabel Pembayaran
		</div>
			
		<!-- div.table-responsive -->

		<!-- div.dataTables_borderWrap -->
							<div class="row">
							<div class="col-xs-12">
								<!-- PAGE CONTENT BEGINS -->
								<div class="row">
									<div class="col-xs-12">
                            <?php if ($record):?>
							<table id="dynamic-table" class="table table-striped table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>tanggal Mulai Pembayaran</th>
                                        <th>Tanggal Berakhir</th>
                                        <th>Jumlah bayar</th>
                                        <th>Nama</th>
										<th>Bukti transfer</th>
										<th>Status</th>
										<th >Aksi</th>
    
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php 
                                    $no = 0;
                                     foreach ($record as $row):
                                   	$no++; ?>
                                        <tr>
                                            <td><?php echo $row->id_pembayaran?>.</td>
                                            <td><?php echo $row->tanggal?></td>
                                            <td><?php echo $row->tanggal_berakhir?></td>
											<td><?php echo $row->jumlah_bayar?></td>
											<td><?php echo $row->nm_pelanggan?></td>
											<td><?php echo "<img src='".base_url("images/".$row->bukti_transfer)."' width='100' height='100'>";  ?></td>
											<td><?php echo $row->status?></td>
										
										  <td><a allign="right" href="<?php echo site_url("admin/pembayaran/edit/{$row->id_pembayaran}") ?>" data-toggle="tooltip" data-placement="bottom" class="btn btn-primary"><i class="fa fa-edit"></i> Konfirmasi</a>
                                          

											</td>
                                           
                                    </tr>
                                    
                                      
                                    <?php endforeach?>
                                    
                                </tbody>
							</table>
							
                            <?php else: ?>
                                Tidak ada data
                           <?php endif?>
  
                        </div>
					</div>
				</div>
			</div>	
			
			
			
											<div class="modal-footer no-margin-top">
												
											
									</div>			
								</div>
     					   </div>

	
<br>
<?php $this->load->view('layout/footer.php'); ?>









	

