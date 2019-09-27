<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/scatas'); ?>
</head>
<body>
	<?php $this->load->view('common/header'); ?>



	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				
				<br><br><br>
				<center><h2>Halaman Konfirmasi</h2></center>
			</div>
			
		</div>
	</nav>
<br>


   <br><br>   

   
   <form method="POST" class="form-horizontal" <?php echo form_open("pelanggan/lanjutan/cek_lanjutan", array('enctype'=>'multipart/form-data')); ?>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Id pembayaran  </label>

                                                    <div class="col-sm-9">
                                                        <input type="text" id="form-field-1" name="id_pembayaran" echo="" />
                                                    </div>
                                                </div>

                                               <div class="space-4"></div>

												<div class="form-group">
													<label class="col-sm-3 control-label no-padding-right" for="form-field-3">Alamat</label>

													<div class="col-sm-9">
														<input  type="text" id="form-field-6" required name="alamat" placeholder="Masukkan Alamat Lengkap Anda"  data-placement="mid" class="col-xs-10 col-sm-5" />
														<span data-placement="left" data-content="More details." title="Masukkan alamat jelas beseta nama jalan dan nomor rumah">?</span>
													</div>
												</div>

                                                 </div>        
                                                <br><br>
                                                <div class="clearfix form-actions">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button href="<?php echo site_url("pelanggan/lanjutan/") ?>" class="btn btn-info" type="submit">
                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                            Submit
                                                        </button>
                                                    </div>
                                                </div>

                                                
                                                                        
                                                                    
           </form>


     <br><br>     <br><br>  


     <footer id="footer">
		<?php $this->load->view('common/footer'); ?>
	</footer>
</div>
<?php $this->load->view('common/scbawah'); ?>
</body>
</html>
