<section>
	<div class="container">
		<div class="col-md-3 col-sm-3">
			<div class="emp-pic">
				<img src="<?php echo base_url('assets/img/company.png') ?>" class= "img-responsive img-circle width-220" alt="">
			</div>
		</div>	
		<div class="col-md-5 col-sm-5">
			<div class="emp-des">
				<h3><?php echo $this->session->userdata('nama'); ?></h3>
				<p><i class="ti-location-pin padd-r-5"></i> Wisma Hayam Wuruk Lt. 5 Suite 500 
Jl. Hayam Wuruk No. 8 Jakarta Pusat 10120</p> 
				<p><i class="ti-email padd-r-5"></i> marketing@sbwp.co.id</p>
			</div>
			<div class="emp-bt">
				<a href="<?php echo site_url('perusahaan/createjob') ?>" class="btn theme-btn"><i class="ti-plus"></i> Create Jobs</a>
			</div>
		</div>
		<div class="col-md-4 col-sm-4">
			<div class="emp-detail">
				<ul>
					<li><span class="cl-primary">1</span>Lowongan Aktif</li>
					<li><span class="cl-danger">3</span>Lowongan Non-Aktif</li>
				</ul>
			</div>
		</div>
	</div>	
</section>	
<div class="container">
	<div class="col-md-12 dol-md-12">
		<div class="tab style-1" role="tabpanel">
			<ul class="nav nav-tabs" role="tablist">
				<li role="persentation" class="active"><a href="#aktif" aria-controls="aktif" role="tab" data-toggle="tab" >Lowongan Aktif <span class="cl-primary">(1)</span></a></li>
				<li role="persentation"><a href="#nonaktif" aria-controls="nonaktif" role="tab" data-toggle ="tab">Lowongan Non-Aktif <span class="cl-danger">(4)</span></a> </li>
			</ul>
			<div class="tab-content tabs">
				<!-- Tab Lamaran Aktif -->
				<div role="tabpanel" class="tab-pane fade in active" id="aktif">
					<div class="col-md-4 col-sm-8">
								<div class="grid-job-widget">									
									<div class="u-content">
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/company.png') ?>" alt="">
											</a>
										</div>
										<h5><a href="#">IOS DEVELOPER</a></h5>
										<p class="">2 Juni 2018 - 18 Juni 2018</p>
										<p class="text-muted"><span class="ti-location-pin"></span> Jakarta Pusat, DKI Jakarta</p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span> 2.500.000 - 3.000.000</p>
									</div>
									
									<div class="job-type-grid">
										<a href="<?php echo site_url('perusahaan/manageresume') ?>" class="btn theme-btn">Manage Resume<span class="ti-angle-right"></span></a>
									</div>									
								</div>
							</div>
				</div>
				<!-- Tab Lamaran Non-Aktif -->
				<div role="tabpanel" class="tab-pane fade" id="nonaktif">
					<div role="tabpanel" class="tab-pane fade in active" id="aktif">

						<div class="col-md-4 col-sm-8">
								<div class="grid-job-widget">									
									<div class="u-content">
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/c-2.png') ?>" alt="">
											</a>
										</div>
										<h5><a href="#">IOS DEVELOPER</a></h5>
										<p class="">2 Juni 2018 - 18 Juni 2018</p>
										<p class="text-muted"><span class="ti-location-pin"></span> Jakarta Pusat, DKI Jakarta</p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span> 2.500.000 - 3.000.000</p>
									</div>
									
									<div class="job-type-grid">
										<a href="" class="btn btn-danger">Delete <span class="fa fa-trash"></span></a>
									</div>								
								</div>
						</div>

						<div class="col-md-4 col-sm-8">
								<div class="grid-job-widget">									
									<div class="u-content">
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/c-1.png') ?>" alt="">
											</a>
										</div>
										<h5><a href="#">IOS DEVELOPER</a></h5>
										<p class="">2 Juni 2018 - 18 Juni 2018</p>
										<p class="text-muted"><span class="ti-location-pin"></span> Jakarta Pusat, DKI Jakarta</p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span> 2.500.000 - 3.000.000</p>
									</div>
									
									<div class="job-type-grid">
										<a href="" class="btn btn-danger">Delete <span class="fa fa-trash"></span></a>
									</div>									
								</div>
						</div>
						<div class="col-md-4 col-sm-8">
								<div class="grid-job-widget">									
									<div class="u-content">
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/c-4.png') ?>" alt="">
											</a>
										</div>
										<h5><a href="#">IOS DEVELOPER</a></h5>
										<p class="">2 Juni 2018 - 18 Juni 2018</p>
										<p class="text-muted"><span class="ti-location-pin"></span> Jakarta Pusat, DKI Jakarta</p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span> 2.500.000 - 3.000.000</p>
									</div>
									
									<div class="job-type-grid">
										<a href="" class="btn btn-danger">Delete <span class="fa fa-trash"></span></a>
									</div>										
								</div>
						</div>


					</div>
				</div>
			</div>	
		</div>
	</div>
</div>
<br>