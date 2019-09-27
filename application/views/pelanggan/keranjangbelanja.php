<!DOCTYPE html>
<html>
<head>
	<?php $this->load->view('common/scatas'); ?>
</head>
<body>
	<?php $this->load->view('common/header'); ?>
	<section id="content" class="slideshow-bg">
	

	<div class="text-center"><br><br><br><br><br><br><br>
	<h2 class="text-center"><center>Informasi Tiket Anda</center></h2>
	<br>
	<?php $psn = $this->session->flashdata('psn');?>
	                        <?php if (@$psn):?>
	                       				   <div class="sufee-alert alert with-close alert-success alert-dismissible fade show">
	                                            <span class="badge badge-pill badge-success">Berhasil</span>
	                                                Data anda telah disimpan!
	                                              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
	                                                <span aria-hidden="true">&times;</span>
	                                            </button>
	                                        </div>
	                        <?php endif?>

		 <form  action="<?php echo site_url('pelanggan/cart/update') ;?>" method="post" enctype="multipart/form-data">
		<table class="text-align:center" cellpadding="2" cellspacing="3" style="width:75%" border="1">

			

			<tr align="text-center">
					<th style="text-align:center;"> Opsi</th>
			        <th style="text-align:center;"> Jumlah Tiket</th>
			        <th style="text-align:center;"> Nama Tiket</th>
			        <th style="text-align:center;"> Tanggal </th>
					<th style="text-align:center;"> Harga</th>
					<th style="text-align:center;"> Gambar</th>
			        <th style="text-align:center;"> Sub-Total</th>
			</tr>

			<?php $i = 1; ?>
			<?php foreach ($this->cart->contents() as $items): ?>
			        <?php echo form_hidden($i.'[rowid]', $items['rowid']); ?>
			        <tr align="center">
			        		<td align="center"> <?php echo anchor('pelanggan/cart/hapus/'.$items['rowid'], 'hapus') ?> </td>
			                <td align="center"><?php echo form_input(array('name' => 'qty'.$i, 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
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
			                <td> <?php echo $items['tanggal']; ?>
			                        <?php if ($this->cart->has_options($items['rowid']) == TRUE): ?>

			                                <p>
			                                        <?php foreach ($this->cart->product_options($items['rowid']) as $option_name => $option_value): ?>

			                                                <strong><?php echo $option_name; ?>:</strong> <?php echo $option_value; ?><br />

			                                        <?php endforeach; ?>
			                                </p>

			                     <?php endif; ?>
			                </td>

			                <td style="text-align:center"><?php echo $this->cart->format_number($items['price']); ?></td>
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
			        <td colspan="5"> </td>
			        <td  style="text-align:center;" ><strong>Total</strong></td>
			        <td  style="text-align:center;">Rp<?php echo $this->cart->format_number($this->cart->total()); ?></td>
			</tr>

		</table>
	<br>
		<table border="0" align="center">
			<th>
				<td></td>
				<td></td>
				<td></td>
			</th>

			<tr>
				<td> <input type="submit" class="btn btn-primary"name="submit" value="Update"></td>
				<td><a align = "center" href="<?php echo site_url("pelanggan/checkout") ?>" data-toggle="tooltip" data-placement="bottom" title="Checkout" class="btn btn-danger"><i class="fa fa-edit"></i>Check Out</a></td>

			</tr>

		</table>


      <?php echo form_close() ;?>
      </form>
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
