<!-- ================ Job Detail Basic Information ======================= -->
<?php foreach ($lowongan as $k) {
	# code...
} ?>
		<section class="detail-section tag-sec" style="background:url('<?php echo base_url('assets/img/slider-2.jpg') ?>');>
			<div class="overlay"></div>
			<div class="profile-cover-content">
				<div class="container">
					<div class="cover-buttons">
						<ul>
						<li><div class="buttons medium button-plain "><i class="fa fa-phone"></i><?php echo $k->telp; ?></div></li>
						<li><div class="buttons medium button-plain "><i class="fa fa-map-marker"></i><?php echo $k->alamat_perusahaan; ?></div></li>
						
						</ul>
					</div>
					<div class="job-owner hidden-xs hidden-sm">
						<div class="job-owner-avater">
							<img src="<?php echo base_url('assets/img/'.$k->logo) ?>" class="img-responsive img-circle" alt="" />
						</div>
						<div class="job-owner-detail">
							<h4><?php echo $k->nama_lowongan; ?></h4>
							<span class="theme-cl"><?php echo $k->nm_perusahaan; ?></span>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- ================ End Job Detail Basic Information ======================= -->
		
		<!-- ================ Start Job Overview ======================= -->
		<section>
			<div class="container">
				
				<!-- row -->
				<div class="row">
					
					<div class="col-md-8 col-sm-8">
						
						<div class="detail-wrapper">
							<div class="detail-wrapper-body">
							
								<div class="text-center mrg-bot-30">
									<img src="<?php echo base_url('assets/img/'.$k->logo) ?> " class="width-100"  alt=""/>
									<h4 class="meg-0"><?php echo $k->nama_lowongan; ?></h4>
								</div>
								
								<div class="row">
									<div class="col-sm-3 mrg-bot-10">
										<i class="ti-money padd-r-10"></i> <span class="mrg-l-5 full-type"><?php echo $k->gaji; ?> / Day </span>
									</div>
									<div class="col-sm-3 mrg-bot-10">
										<i class="ti-calendar padd-r-10"></i><?php echo $k->tgl_post." - ".$k->bataspendaftaran; ?>
									</div>
									<div class="col-sm-3 mrg-bot-10">
										<i class="fa fa-map-marker padd-r-10"></i><?php echo $k->lokasi; ?>
									</div>
								</div>
								
							</div>
						</div>

						
						<div class="detail-wrapper">
							<div class="detail-wrapper-header">
								<h4>Overview</h4>
							</div>
							<div class="detail-wrapper-body">
								<p><?php echo $k->deskripsi; ?></p>
							</div>
						</div>
						
						<div class="detail-wrapper">
							<div class="detail-wrapper-header">
								<h4>Requirements</h4>
							</div>
							<div class="detail-wrapper-body">
								<ul class="detail-list">
									<li><?php echo $k->syarat; ?></li>
									
								</ul>
							</div>
						</div>
						
					</div>					
					<div class="col-md-4 col-sm-4">
						<div class="sidebar">
							<div class="widget-boxed">
								<div class="widget-boxed-header">
									<h4><i class="fa fa-paper-plane padd-r-10"></i> Submit</h4>
								</div>
								<div class="widget-boxed-body">
									<?php if($checklam <= 0){?>
									<a href="<?php echo base_url('Kandidat/lamarpekerjaan/'.$k->id_lowongan.'/'.$k->id_perusahaan)?>" class="btn btn-m theme-btn full-width mrg-bot-10"><i class="fa fa-paper-plane"></i>Apply For Job</a><?php } ?>
									<?php if($checklam > 0){?>
									<a  class="btn btn-m theme-btn full-width mrg-bot-10" disabled>Applied</a><?php } ?>
								</div>
							</div>
							<!-- Start: Job Overview -->
							<div class="widget-boxed">
								<div class="widget-boxed-header">
									<h4><i class="ti-info-alt padd-r-10"></i>Informasi</h4>
								</div>
								<div class="widget-boxed-body">
									<div class="side-list no-border">
										<ul>
											<li><i class="ti-world padd-r-10"></i><?php echo $k->website; ?></li>
											<li><i class="ti-mobile padd-r-10"></i><?php echo $k->telp; ?></li>
											<li><i class="ti-email padd-r-10"></i><?php echo $k->email; ?></li>
										</ul>
										<h5>Share Job</h5>
										<ul class="side-list-inline no-border social-side">
											<li><a href="job-detail.html#"><i class="fa fa-facebook theme-cl"></i></a></li>
											<li><a href="job-detail.html#"><i class="fa fa-google-plus theme-cl"></i></a></li>
											<li><a href="job-detail.html#"><i class="fa fa-twitter theme-cl"></i></a></li>
											<li><a href="job-detail.html#"><i class="fa fa-linkedin theme-cl"></i></a></li>
											<li><a href="job-detail.html#"><i class="fa fa-pinterest theme-cl"></i></a></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End: Job Overview -->
							
							<!-- Start: Opening hour -->
							<div class="widget-boxed">
								<div class="widget-boxed-header">
									<h4><i class="ti-time padd-r-10"></i>Opening Hours</h4>
								</div>
								<div class="widget-boxed-body">
									<div class="side-list">
										<ul>
											<li>Monday <span>9 AM - 5 PM</span></li>
											<li>Tuesday <span>9 AM - 5 PM</span></li>
											<li>Wednesday <span>9 AM - 5 PM</span></li>
											<li>Thursday <span>9 AM - 5 PM</span></li>
											<li>Friday <span>9 AM - 5 PM</span></li>
											<li>Saturday <span>Closed</span></li>
											<li>Sunday <span>Closed</span></li>
										</ul>
									</div>
								</div>
							</div>
							<!-- End: Opening hour -->
							 
						</div>
					</div>
					
				</div>
				<!-- End Row -->
				
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<h4 class="mrg-bot-20">More Jobs</h4>
					</div>
				</div>
				<!-- End Row -->
				
				<!-- row -->
				<div class="row">
					<?php foreach ($more as $m) {
						# code...
					?>
						<!-- Single Job -->
							<div class="col-md-3 col-sm-6">
								<div class="grid-job-widget">									
									<div class="u-content">
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/'.$m->logo)?>" alt="">
											</a>
										</div>
										<h5><a href="#"><?php echo $m->nama_lowongan; ?></a></h5>
										<p class=""><?php echo $m->nm_perusahaan; ?></p>
										<p class="text-muted"><span class="ti-location-pin"></span><?php echo $m->lokasi; ?></p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span> <?php echo $m->gaji; ?></p>
									</div>
									
									<div class="job-type-grid">
										<a href="<?php echo site_url('kandidat/detail/'.$m->id_lowongan) ?>" class="btn light-btn btn-radius btn-m">Detail <span class="ti-angle-right"></span></a>
									</div>									
								</div>
							</div>
							<?php } ?>
							<!-- Single Job 2 -->
							
							<!-- Single Job -->
							
					</div>		
				<!-- End Row -->
				
			</div>
		</section>
		
		<!-- ====================== End Job Overview ================ -->
