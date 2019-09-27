<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/scatas'); ?>
</head>
<body>
	<?php $this->load->view('common/header'); ?>
	<section id="content" class="slideshow-bg">
		
	

<br>
<div class="container-fluid">
	<div class="row justify-content-center my-3">
	
		<div class="alert alert-danger">
			<h2> PASTIKAN !! TETAP TERHUBUNG SETELAH MELAKUKAN PEMBAYARAN </h2>
			<h3>Jangan Refresh Halaman Ini, Untuk Melanjutkan ke Halaman Konfirmasi</h3>
		</div>
		
	
	</div>
</div>			







	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="container">
			<div class="row">
				
				<div class="col-md-6 col-xs-6 text-center menu-1">
					<ul>
						
						<li class><b><center><h1><a allign="text-center" href="<?php echo site_url();?>pelanggan/confirmation">                                    Payment Confirmation </a></h1></center></b></li>
					
					</ul>
				</div>
				
			</div>
			
		</div>
	</nav>
<br>


   <br>
    <table align="center" cellpadding="2" cellspacing="3" style="width:75%" border="1">

			<tr align="center">
			
			        <th style="text-align:center;">Jumlah tiket</th>
			        <th style="text-align:center;">Nama tiket</th>
                		<th style="text-align:center;">Harga</th>
                    		<th style="text-align:center;">Gambar</th>
			        <th style="text-align:center;">Sub-Total</th>
			</tr>
            <?php $i = 1; ?>
			<?php foreach ($this->cart->contents() as $items): ?>
			        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
			        <tr align="center">
			                <td align="center"><?php echo ($items['qty']); ?></td>
			                <td>
			                        <?php echo $items['name']; ?>
			                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

			                                <p>
			                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

			                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

			                                        <?php endforeach; ?>
			                                </p>

			                        <?php endif; ?>

			                </td>
			                <td style="text-align:center;"><?php echo $this->cart->format_number($items['price']); ?></td>
			                <td>
			                        <?php echo "<img src='".base_url("images/".$items['gambar'])."' width='100' height='100'>";  ?>
			                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

			                                <p>
			                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

			                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

			                                        <?php endforeach; ?>
			                                </p>

			                        <?php endif; ?>

			                </td>
			                <td style="text-align:center;">Rp<?php echo $this->cart->format_number($items['subtotal']); ?></td>
			        </tr>

			<?php $i++; ?>

			<?php endforeach; ?>

			<tr>
			        <td colspan="3"> </td>
			        <td  style="text-align:center;" ><strong>Total</strong></td>
			        <td  style="text-align:center;">Rp<?php echo $this->cart->format_number($this->cart->total()); ?></td>
			</tr>

	

			</table>
   
   
    <br><br>   


   
    <center><h3> Terima Kasih Telah Melakukan Pembelian Tiket :) </h3></center>
	<hr>
				<h3>             1. Silahkan transfer sejumlah yang tertera pada total Pembelian Tiket anda  </h3><br>
				<h3>             2. kirim sejumlah yang tertera pada rek. <b> BCA a.n. Amazing Art World No. Rek. 2176526521</b> </h3><br>
				<h3>             3. Setelah itu kembali ke haalaman ini dan pilih <b>payment Confirmation </b>  </h3><br>
				<h3>             4. Isi semua field yang tersedia nantinya, Pastikan anda memasukkan alamat anda dengan lengkap </h3>
					<br>
					<br>

 </div>        
                                        

     <br><br>     <br><br>     

	 </section>
     <footer id="footer">
		<?php $this->load->view('common/footer'); ?>
	</footer>
</div>
<?php $this->load->view('common/scbawah'); ?>
</body>
</html>
