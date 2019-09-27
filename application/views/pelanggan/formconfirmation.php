<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/scatas'); ?>
</head>
<body>
	<?php $this->load->view('common/header'); ?>
    <section id="content" class="slideshow-bg">
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				
				<br><br><br>
				<center><h1>Halaman Konfirmasi</h1></center>
				
			</div>
			
		</div>
	</nav>
<br>


   <br><br>     

   
   <form method="POST" class="form-horizontal" <?php echo form_open("pelanggan/confirmation/cek_konfirmasi", array('enctype'=>'multipart/form-data')); ?>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Kode pembayaran  </label>

                                                    <div class="col-sm-9">
                                                        <input type="form-data" placeholder="ID Bayar" id="form-field-1" name="id_pembayaran" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Jumlah Bayar </label>

                                                    <div class="col-sm-9">
                                                        <input type="form-data" id="form-field-1" required  name="jumlah_bayar" />
                                                    </div>
                                                </div>

												<div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Bukti Transfer</label>

                                                    <div class="col-sm-9">
                                                        <input type="file" id="form-field-1" required  placeholder="Username" name="bukti_transfer" class="col-xs-10 col-sm-5" />
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

       </section>
       <footer id="footer">
		<?php $this->load->view('common/footer'); ?>
	</footer>
</div>
<?php $this->load->view('common/scbawah'); ?>
</body>
</html>

			     