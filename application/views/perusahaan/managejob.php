<?php foreach ($perusahaan as $u) {
	# code...
} ?>
<section>
	<div class="container">
		<div class="col-md-3 col-sm-3">
			<div class="emp-pic">
				<img src="<?php echo base_url('assets/img/'.$u->logo) ?>" class= "img-responsive img-circle width-220" alt="">
			</div>
		</div>	
		<div class="col-md-5 col-sm-5">
			<div class="emp-des">
				<h3><?php echo $this->session->userdata('nama'); ?></h3>
				<p><i class="ti-location-pin padd-r-5"></i> <?php echo $u->alamat_perusahaan;?></p> 
				<p><i class="ti-email padd-r-5"></i><?php echo $u->email;?></p>
			</div>
			<div class="emp-bt">
				<a href="<?php echo site_url('perusahaan/create') ?>" class="btn theme-btn"><i class="ti-plus"></i> Create Jobs</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="emp-detail">
				<ul>
					<li><span class="cl-primary"><?php echo $jmlak; ?></span>Lowongan Aktif</li>
					<li><span class="cl-danger"><?php echo $jmlnon; ?></span>Lowongan Non-Aktif</li>
				</ul>
			</div>
		</div>
	</div>	
</section>	
<div class="container">
	<div class="col-md-12 dol-md-12">
		<div class="tab style-1" role="tabpanel">
			<ul class="nav nav-tabs" role="tablist">
				<li role="persentation" class="active"><a href="#aktif" aria-controls="aktif" role="tab" data-toggle="tab" >Lowongan Aktif <span class="cl-primary">(<?php echo $jmlak; ?>)</span></a></li>
				<li role="persentation"><a href="#nonaktif" aria-controls="nonaktif" role="tab" data-toggle ="tab">Lowongan Non-Aktif <span class="cl-danger">(<?php echo $jmlnon; ?>)</span></a> </li>
			</ul>
			<div class="tab-content tabs">
				<!-- Tab Lamaran Aktif -->
				<div role="tabpanel" class="tab-pane fade in active" id="aktif">
					<?php foreach ($la as $l ) {?>	
					<div class="col-md-4 col-sm-8">
						
								<div class="grid-job-widget">	
															
									<div class="u-content">
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/company.png') ?>" alt="">
											</a>
										</div>
										<h5><a href="#"><?php echo $l->nama_lowongan; ?></a></h5>
										<p class=""><?php echo $l->tgl_post." - ".$l->bataspendaftaran;?></p>
										<p class="text-muted"><span class="ti-location-pin"></span> 
											<?php echo $l->alamat_perusahaan; ?></p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span><?php echo $l->gaji; ?></p>
									</div>
									
									<div class="job-type-grid">
										<a href="<?php echo base_url("perusahaan/manageresume/$l->id_lowongan") ?>" class="btn theme-btn">Manage Resume<span class="ti-angle-right"></span></a>
									</div>	

								</div>
								
							</div>
							<?php } ?>	
				</div>
				<!-- Tab Lamaran Non-Aktif -->
				<div role="tabpanel" class="tab-pane fade" id="nonaktif">
					<div role="tabpanel" class="tab-pane fade in active" id="aktif">
						<?php foreach ($ln as $x ) {?>	
						<div class="col-md-4 col-sm-8">
						
								<div class="grid-job-widget">	
															
									<div class="u-content">
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/company.png') ?>" alt="">
											</a>
										</div>
										<h5><a href="#"><?php echo $x->nama_lowongan; ?></a></h5>
										<p class=""><?php echo $x->tgl_post." - ".$x->bataspendaftaran;?></p>
										<p class="text-muted"><span class="ti-location-pin"></span> 
											<?php echo $x->alamat_perusahaan; ?></p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span><?php echo $x->gaji; ?></p>
									</div>
									<div class="job-type-grid">
										<a href="<?php echo base_url("perusahaan/manageresume/$x->id_lowongan") ?>" class="btn theme-btn">Manage Resume<span class="ti-angle-right"></span></a>
									</div>	

								</div>
								
							</div>
							<?php } ?>	
				</div>

						


					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<br>