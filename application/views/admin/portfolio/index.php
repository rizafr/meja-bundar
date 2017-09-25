<div class="clearfix">
	<div class="row">
		<div class="col-lg-12">
			
			<div class="navbar navbar-inverse">
				<div class="container">
					<div class="navbar-header">
						<span class="navbar-brand">Manage Portofolio</span>
					</div>
					<div class="navbar-collapse collapse navbar-inverse-collapse" style="margin-right: -20px">
						<ul class="nav navbar-nav">
							<li><a href="<?php echo base_URL(); ?>admin/portfolio/add" class="btn-info"><i class="icon-plus-sign icon-white"> </i> Tambah Data</a></li>
						</ul>
						
						
					</div><!-- /.nav-collapse -->
				</div><!-- /.container -->
			</div><!-- /.navbar -->
			
		</div>
	</div>
	
	<?php echo $this->session->flashdata("k");?>
	<div class="adv-table">		
		<section id="unseen">
			<table  class="display table table-bordered table-striped table-condensed table-hover" id="example">
				<thead>
					<tr>
						<th width="5%">ID</th>
						<th width="20%">Judul</th>
						<th width="20%">Sub Judul</th>
						<th width="25%">Overview</th>
						<th width="25%">Role</th>
						<th width="25%">Client Name</th>
						<th width="25%">Tanggal Publikasi</th>
						<th width="20%">Aksi</th>
					</tr>
				</thead>
				
				<tbody>
					<?php 
						if (empty($data)) {
							echo "<tr><td colspan='5'  style='text-align: center; font-weight: bold'>--Data tidak ditemukan--</td></tr>";
							} else {
							$no 	= ($this->uri->segment(4) + 1);
							foreach ($data as $b) {
							?>
							<tr>
								<td class="ctr"><?php echo $b->id;?></td>
								<td><?php echo $b->title?></td>
								<td><?php echo $b->subTitle?></td>
								<td class="ellipsis"><?php echo $b->overview ?></td>
								<td><?php echo $b->role?></td>
								<td><?php echo $b->clientName?></td>
								<td><?php echo $b->publishedTime?></td>
								<td class="ctr">
									<div class="btn-group">
										<a href="<?php echo base_URL(); ?>admin/portfolio/edit/<?php echo $b->id; ?>" class="btn btn-success btn-sm" title="Edit Data"><i class="icon-edit icon-white"> </i> Edt</a>
										<a href="<?php echo base_URL(); ?>admin/portfolio/delete/<?php echo $b->id?>" class="btn btn-warning btn-sm" title="Hapus Data" onclick="return confirm('Anda Yakin..?')"><i class="icon-trash icon-remove">  </i> Del</a>			
									</div>					
								</td>
							</tr>
							<?php 
								$no++;
							}
						}
					?>
				</tbody>
			</table>
		</section>
	</div>
</div>
