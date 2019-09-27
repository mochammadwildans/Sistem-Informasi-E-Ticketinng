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
								<a href="#">Data Pembayaran</a>
							</li>
							<li class="active">Konfirmasi Pembayaran</li>
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






<div class="container">


	<div class="hr hr-18 dotted hr-double"></div>

<div class="row">
	<div class="col-xs-9">
		<h3 class="header smaller lighter blue">Data Konfirmasi</h3>

						<!-- <a> <button data-toggle="tooltip" onClick="popup_excel()" data-placement="bottom" title="pindah excel" class="btn btn-white btn-primary btn-bold"><i class="fa fa-file-excel-o bigger-110 green"></i> excel </button> </a>
					
						<a href="./directory/yourfile.pdf" download="pdf" data-toggle="tooltip" data-placement="bottom" title="pindah pdf" class="btn btn-white btn-primary btn-bold"><i class="fa fa-file-pdf-o bigger-110 red"></i> export pdf > </a>
					
						<a> <button data-toggle="tooltip" onClick="popup_print()" message="This print was produced using the Print button for DataTables" autoPrint="false" data-placement="bottom" title="pindah pdf" class="btn btn-white btn-primary btn-bold"><i class="fa fa-file-excel-o bigger-110 grey"></i> Print ></button> </a> -->
 
					<div class="clearfix">
					<div type="<?php echo site_url();?>pull-right tableTools-container"></div>
					</div>
		

		<!-- div.table-responsive -->

		<!-- div.dataTables_borderWrap -->
        <div class="card-body card-block">
                      
                      
                      <?php echo validation_errors(); ?>

                         <form  action="<?php echo site_url('admin/pembayaran/update') ;?>" method="post" enctype="multipart/form-data">



                         <?php if (!empty($data)): ?>
                                <?php echo form_input(['name'=>'id_pembayaran',
                                         'class'=>'form-control',
                                        'type'=>'hidden',
                                         // 'required'=>'required',
                                         'value'=>set_value('id_pembayaran', $data->id_pembayaran)]); ?>
                               <?php else: ?>

                                <?php echo form_input(['name'=>'id_pembayaran',
                                         'class'=>'form-control',
                                         'type'=>'hidden',
                                         // 'required'=>'required',
                                         'value'=>set_value('id_pembayaran')]); ?>
                                <?php endif ?>

                         
                          <br><br>

                         
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="nomes" class=" form-control-label">Status</label></div>
                            <div class="col-12 col-md-6">
                      <?php if (!empty($data)): ?>
                                <?php echo form_input(['name'=>'status',
                                         'class'=>'form-control',
                                         'placeholder'=>'status',
                                         // 'required'=>'required',
                                         'value'=>set_value('status', $data->status)]); ?>
                               <?php else: ?>

                                      <option>  <?php echo form_input(['name'=>'status',
                                         'class'=>'form-control',
                                         'placeholder'=>'status',
                                         'type'=>'option',
                                         // 'required'=>'required',
                                         'value'=>set_value('status')]); ?> </option>
                                <?php endif ?>
                           </div>
                          </div>
                     
                          
                      
                          
                         <div class="form-group">
                         <div class="col col-md-3">
                                <label for="text-input" class=" form-control-label"></label>
                            </div>
                            <div class="col-md-3">
                             <input type="submit" class="form-control btn btn-primary btn-sm" name="submit" value="Simpan">
                            </div>
                           
                   
                        </div>
                        <?php echo form_close() ;?>
                    </form>
             </div>
                      
    


    <script src="<?php echo base_url();?>/assets/assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="<?php echo base_url();?>/assets/assets/js/popper.min.js"></script>
    <script src="<?php echo base_url();?>/assets/assets/js/plugins.js"></script>
    <script src="<?php echo base_url();?>/assets/assets/js/main.js"></script>

    <!--  Chart js -->
    <script src="<?php echo base_url();?>/assets/assets/js/lib/chart-js/Chart.bundle.js"></script>
    <script src="<?php echo base_url();?>/assets/assets/js/widgets.js"></script>
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
