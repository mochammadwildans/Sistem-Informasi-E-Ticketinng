<div id="sidebar" class="sidebar                  responsive                    ace-save-state">
				<script type="text/javascript">
					try{ace.settings.loadState('sidebar')}catch(e){}
				</script>

				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-large" id="sidebar-shortcuts-large">
						<button class="btn btn-success">
							<i class="ace-icon fa fa-signal"></i>
						</button>

						<button class="btn btn-info">
							<i class="ace-icon fa fa-pencil"></i>
						</button>

						<button class="btn btn-warning">
							<i class="ace-icon fa fa-users"></i>
						</button>

						<button class="btn btn-danger">
							<i class="ace-icon fa fa-cogs"></i>
						</button>
					</div>

					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!-- /.sidebar-shortcuts -->

				<ul class="nav nav-list">
					<li class="">
						<a href="#">
							<i class="menu-icon fa fa-tachometer"></i>
							<span class="menu-text"> Home </span>
						</a>

						<b class="arrow"></b>
					</li>

						
					<li>
						<a href="<?php echo site_url()?>pelanggan/utama" target='blank'>
						<i class="menu-icon fa fa-users"></i>
						<span class="menu-text"> Tampilan Pelanggan </span>
						</a>
					</li>
					

					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Kelola Tiket </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url();?>admin/tiket">
									<i class="menu-icon fa fa-caret-right"></i>
								Lihat Data Tiket
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo site_url();?>admin/tiket/create">
									<i class="menu-icon fa fa-caret-right"></i>
									tambah data Tiket
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Kelola Pembelian  </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url();?>admin/transaksi">
									<i class="menu-icon fa fa-caret-right"></i>
								Lihat Data Pembelian
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>

			

				<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Kelola Pembayaran </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url();?>admin/pembayaran">
									<i class="menu-icon fa fa-caret-right"></i>
								Lihat Data Pembayaran
								</a>

								<b class="arrow"></b>
							</li>
						
						</ul>
					</li>
					<li class="">
						<a href="#" class="dropdown-toggle">
							<i class="menu-icon fa fa-list"></i>
							<span class="menu-text"> Kelola User </span>

							<b class="arrow fa fa-angle-down"></b>
						</a>

						<b class="arrow"></b>

						<ul class="submenu">
							<li class="">
								<a href="<?php echo site_url();?>admin/user">
									<i class="menu-icon fa fa-caret-right"></i>
								Lihat Data User
								</a>

								<b class="arrow"></b>
							</li>

							<li class="">
								<a href="<?php echo site_url();?>admin/user/create">
									<i class="menu-icon fa fa-caret-right"></i>
									tambah data user
								</a>

								<b class="arrow"></b>
							</li>
						</ul>
					</li>
				
					
					<li>
						<a href="<?php echo site_url()?>admin/login/logout">
						<i class="menu-icon fa fa-power-off"></i>
						<span class="menu-text"> Logout </span>
						</a>
					</li>
					

					
				</ul><!-- /.nav-list -->

				<div class="sidebar-toggle sidebar-collapse" id="sidebar-collapse">
					<i id="sidebar-toggle-icon" class="ace-icon fa fa-angle-double-left ace-save-state" data-icon1="ace-icon fa fa-angle-double-left" data-icon2="ace-icon fa fa-angle-double-right"></i>
				</div>
			</div>