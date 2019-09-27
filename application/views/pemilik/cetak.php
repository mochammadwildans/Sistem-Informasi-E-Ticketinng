<!DOCTYPE html>
<html>
<head>
	<title>Cetak Laporan</title>
	<link href="<?php echo base_url();?>aset/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
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


		<a href="<?php echo site_url() ?>/pemilik/laporan/cetak_pdf" class="btn btn-success" target="_blank"><i class="fa fa-print"></i>PDF</a>

		<table id="bootstrap-data-table" class="table center table-striped table-bordered " style="border-collapse: collapse;">
                                <thead align="text-center">
                                    <tr>
                                        <th class="text-center">No</th>
                                        <th class="text-center">ID Pembayaran</th>
                                        <th class="text-center">Nama Pelanggan</th>
                                        <th class="text-center">Tanggal Pesan</th>
                                        <th class="text-center">Biaya</th>
                                        

                                    </tr>
                                </thead>

                                <?php 
                                	$no = 1;
                                	$total = 0;
                                	foreach ($orders as $key):
                                		
                                 ?>

                                <tbody>
                                    
                                    
                                    <tr>
                                            <td><?= $no++;?></td>
                                            <td><?= $key->id;?></td>
                                            <td><?= $key->nm_pelanggan;?></td>
                                            <td><?= $key->date;?></td>
                                            <td>Rp. <?= $key->sub_total;?></td>

                                            <?php $total+= $key->sub_total; ?>
                                            
                                    </tr>
                                    
                                    <?php endforeach; ?>
                                   <tr>
                                        <td colspan="4" align="center"><strong>Pendapatan</strong>  </td>

                                        <td><strong>Rp.<?= number_format($total) ?></strong></td>
                                    </tr>

                                    
                                </tbody>
                            </table>
                          
                              
		
	</div><!--/.row-->
</body>
</html>