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
								<a href="#">Kelola user</a>
							</li>

							<li>
								<a href="#">Tambah user</a>
							</li>
						
						</ul><!-- /.breadcrumb -->

						<div class="nav-search" id="nav-search">
							<form class="form-search">
								<span class="input-icon">
									<input type="text" placeholder="Search ..." class="nav-search-input" id="nav-search-input" autocomplete="on" />
									<i class="ace-icon fa fa-search nav-search-icon"></i>
								</span>
							</form>
						</div><!-- /.nav-search -->
                    </div>
            
        
            <!-- PAGE CONTENT BEGINS -->
            <br>
            <br>
            <h2 class="center"> Silahkan Masukkan Data User </h2>
            <br>
            <form class="form-horizontal" <?php echo form_open("admin/user/tambah", array('enctype'=>'multipart/form-data')); ?>
                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1">  </label>

                                                    <div class="col-sm-9">
                                                        <input type="hidden" id="form-field-1" placeholder="Username" name="id" class="col-xs-10 col-sm-5" />
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Nama  </label>

                                                    <div class="col-sm-9">
                                                        <input type="text" id="form-field-1-1" placeholder="Masukkan Nama" name="nama" class="col-xs-10 col-sm-5" />
                                                    </div>
                                                </div>

                                                <div class="space-4"></div>

                                                 <div class="form-group">
                                                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Username </label>

                                                    <div class="col-sm-9">
                                                        <input type="text" id="form-field-1" placeholder="Username" name="username" class="col-xs-10 col-sm-5" />
                                                    </div>
                                                </div>

                                                 <div class="space-4"></div>

                                                <div class="form-group">
                                                <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Level</label>

                                                <div class="col-sm-9">
                                                     <select class="col-xs-10 col-sm-5" name="level" required>
                                                            <option value=""> Masukkan Level User </option>
                                                            <option value="admin"> Admin </option>
                                                            <option value="pemmilik"> Pemilik </option>
                                                        </select>
                                                </div>
                                                </div>


                                                  <div class="space-4"></div>

                                                    <div class="form-group">
                                                        <label class="col-sm-3 control-label no-padding-right" for="form-field-6">Paassword</label>

                                                        <div class="col-sm-9">
                                                            <input  type="password" id="form-field-6" name="password" placeholder="Masukkan Password" title="Hello Tooltip!" data-placement="bottom" />
                                                            <span class="help-button"  data-placement="left" data-content="More details." title="Masukkan aangka atau huruf ">?</span>
                                                        </div>
                                                    </div>

                                                
                                             <br><br><br><br><br><br><br>
                                                <div class="clearfix form-actions">
                                                    <div class="col-md-offset-3 col-md-9">
                                                        <button class="btn btn-info" type="submit">
                                                            <i class="ace-icon fa fa-check bigger-110"></i>
                                                            Submit
                                                        </button>

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
     <br>
     <br>
<?php $this->load->view('layout/footer.php') ?>