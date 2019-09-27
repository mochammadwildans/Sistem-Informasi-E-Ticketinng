<?php $this->load->view('pelanggan/header.php'); ?>




	<header id="fh5co-header" class="fh5co-cover fh5co-cover-sm" role="banner" style="background-image:url(<?php echo base_url();?>assets/images/ambil.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Product</h1>
							<h2>Toko Terlengkap di dalam perlengkapan Bangunan <a href="http://freehtml5.co" target="_blank"></a></h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<div id="fh5co-product">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<span>Bahan Bangunan</span>
					<h2>Toko Bangunan - Laksana</h2>
					<p>Melayani untuk perbaikan bangunan yang lebih baik</p>
				</div>
			</div>
			<div class="row">
			<!-- looping products -->
			
			<?php foreach ($record as $row): ?>
				<div class="col-md-4 text-center animate-box">
					<div class="product">

						<p>
						<div  href="<?php echo site_url("pelanggan/cart/add/{$row->no}")?>" class="fh5co-card-item">
						
						<div class="product-grid" style="background-image:url(<?php echo base_url("images/".$row->gambar) ?>);">
						
								
					
							<a href="<?php echo site_url("pelanggan/cart/add/{$row->no}")?>" class="icon"><i class="icon-shopping-cart"></i></a>
						
						
								</p>
							</div>
						</div>
						<div class="desc">
							<h3><a href="<?php echo site_url();?>pelanggan/cart"><?php echo $row->nm_tiket?></a></h3>
							<span class="price"><?php echo $row->harga_tiket?></span>
						</div>
					</div>
				</div>
              <?php endforeach; ?>
				<!-- end looping -->
				
			</div>
		</div>
	</div>



	<?php $this->load->view('pelanggan/footer.php'); ?>

