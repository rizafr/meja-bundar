<div class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<span class="navbar-brand"><strong style="font-family: verdana;"><?= $q_instansi->nama_instansi?></strong></span>
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
		
		<div class="navbar-collapse collapse" id="navbar-main">
			<ul class="nav navbar-nav">	
				<li>
					<a href="<?php echo base_url(); ?>admin/portfolio">
						<i class="icon-home icon-white"> </i> Portfolio
					</a>
				</li>
				<li>
					<a href="<?php echo base_url(); ?>admin/client">
						<i class="icon-home icon-user"> </i> Client
					</a>
				</li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" href="#" id="themes"><i class="icon-user icon-white"></i> <?php echo $this->session->userdata('admin_nama'); ?> <span class="caret"></span></a>
					<ul class="dropdown-menu" aria-labelledby="themes">
						<li><a tabindex="-1" href="<?php echo base_url(); ?>pengaturan/passwod">Ubah Password</a></li>
						<li><a tabindex="-1" href="<?php echo base_url(); ?>logins/logout">Logout</a></li>
					</ul>
				</li>
			</ul>

		</div>
	</div>
</div>