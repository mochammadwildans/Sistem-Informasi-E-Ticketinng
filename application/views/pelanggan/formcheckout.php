<!DOCTYPE html>
<html>
<head>
    <?php $this->load->view('common/scatas'); ?>
</head>
<body>
    <?php $this->load->view('common/header'); ?>
    <section id="content" class="slideshow-bg">

<hr><hr>
<h2 class="cursive-font primary-color"><center>Informasi Pelanggan</center></h2>
	<br>
    <table align="center" cellpadding="2" cellspacing="3" style="width:75%" border="1">

			<tr align="center">
			
			        <th style="text-align:center;">Jumlah Tiket</th>
			        <th style="text-align:center;">Tanggal Tiket</th>
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
			                        <?php echo $items['tanggal']; ?>
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
            <br>
            <form method="POST" class="form-horizontal" <?php echo form_open("pelanggan/checkout/cekricek", array('enctype'=>'multipart/form-data')); ?>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

                                                    <div class="col-sm-9">
                                                        <input type="hidden" id="form-field-1" placeholder="Username" name="no" class="col-xs-10 col-sm-5" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-2"> Nama Pelanggan </label>

                                                    <div class="col-sm-9">
                                                        <input type="text" required  id="form-field-1-1" placeholder="Masukkan Nama Anda" name="nm_pelanggan" class="col-xs-10 col-sm-5" />
                                                    </div>
                                                </div>
                                                <div class="space-4"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-3">Nomor Telepon</label>

                                                        <div class="col-sm-9">
                                                            <input  type="text" required id="form-field-6" name="no_hp" placeholder="Masukkan Nomor Hp"  data-placement="mid" class="col-xs-10 col-sm-5" />
                                                            <span data-placement="left" data-content="More details." title="Masukkan nomor nda berupa angka ex: 08xx-xxxx-xxxx">?</span>
                                                        </div>
                                                    </div>
                                                     

                                                <div class="space-4"></div>

                                                 <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> Email </label>

                                                    <div class="col-sm-9">
                                                        <input type="email" id="form-field-5" placeholder="Msukkan E-mail" required name="email" class="col-xs-10 col-sm-5" />
                                                    </div>
                                                </div>



                                             <div class="space-4"></div>

                                                 <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-4"> Asal Kota </label>

                                                    <div class="col-sm-9">
                                                        <input type="text" id="form-field-5" placeholder="Msukkan Asal Kota" required name="asal_kota" class="col-xs-10 col-sm-5" />
                                                    </div>
                                                </div>
                                               

                                                 </div>        
                                                <br><br>
                                                <div class="clearfix form-actions">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <a><button href="<?php echo site_url("pelanggan/confirmation/cek_konfirmasi") ?>" class="btn btn-info" type="submit">
                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                            Submit
                                                        </button></a>

                                                        &nbsp; &nbsp; &nbsp;
                                                        <button class="btn" type="reset">
                                                            <i class="ace-icon fa fa-undo bigger-110"></i>
                                                            Reset
                                                        </button>
                                                    </div>
                                                </div>

                                                
                                                                        
                                                                    
           </form>
     </div>
 </div>
     <br><hr color="black">

    </section>
    
    <footer id="footer">
        <?php $this->load->view('common/footer'); ?>
    </footer>
</div>
<?php $this->load->view('common/scbawah'); ?>
</body>
</html>
