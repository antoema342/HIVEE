<!-- ======================= Start Page Title ===================== -->
		<!-- ======================= End Page Title ===================== -->
		
		<!-- ======================= Search Filter ===================== -->
		<section class="">
			<div class="container">
				<div class="col-md-12 text-center">
						<h2>Search Job</h2>
				</div>
				<div class="col-md-12 search">
					<form>
						<fieldset class="search-form">
						
							<div class="col-md-4 col-sm-4 padd-0">
								<input type="text" class="form-control" placeholder="Cari yang cocok untukmu ..." />
							</div>
								
							<div class="col-md-3 col-sm-3 padd-0">
								<select class="wide form-control">
									<option data-display="Location">Semua Lokasi</option>
									<option value="1">Allahabad</option>
									<option value="2">India</option>
									<option value="3" disabled>Australia</option>
									<option value="4">United State</option>
								</select>
							</div>
								
							<div class="col-md-3 col-sm-3 padd-0">
								<select class="wide form-control">
									<option data-display="Category">Kategori</option>
									<option value="1">Web Design</option>
									<option value="2">Accountant</option>
									<option value="3" disabled>Marketting</option>
									<option value="4">Farmer</option>
								</select>
							</div>
								
							<div class="col-md-2 col-sm-2 padd-0">
								<button type="submit" class="btn theme-btn full-width height-50 radius-0">TEMUKAN!</button>
							</div>
								
						</fieldset>
					</form>
				</div>
			</div>
		</section>
		<!-- ======================= Search Filter ===================== -->
		
		<!-- ====================== Start Job Detail 2 ================ -->
		<section class="padd-top-0">
			<div class="container">
				<!-- row -->
				<div class="tab-content">
					<div class="row">
					<div class="col-sm-5">
						<h4>98 Jobs & Vacancies</h4>
					</div>
					<div class="col-sm-7">
						
						<div class="fl-right">
							<div class="search-wide">
								<h5>Short By</h5>
							</div>
							
							<div class="search-wide full">
								<select class="wide form-control">
									<option value="1">Most Recent</option>
									<option value="2">Most Viewed</option>
									<option value="4">Most Search</option>
								</select>
							</div>
							
							<div class="search-wide full">
								<select class="wide form-control">
									<option>10 Per Page</option>
									<option value="1">20 Per Page</option>
									<option value="2">30 Per Page</option>
									<option value="4">50 Per Page</option>
								</select>
							</div>
						</div>
						
					</div>
				</div>

					<div class="row " id="page_2">
						<!-- Single Job -->
						<?php foreach ($lowongan as $l ) {
						?>
							<div class="col-md-3 col-sm-6">
								<div class="grid-job-widget">									
									<div class="u-content">
										<div class="avatar box-80">
											<a href="#">
												<img class="img-responsive" src="<?php echo base_url('assets/img/'.$l->logo) ?>" alt="">
											</a>
										</div>
										<h5><a href="#"><?php echo $l->nama_lowongan; ?></a></h5>
										<p class=""><?php echo $l->nm_perusahaan; ?></p>
										<p class="text-muted"><span class="ti-location-pin"></span><?php echo $l->lokasi; ?></p>
										<p class="text-muted" style="color:green"><span class="ti-money"></span> <?php echo $l->gaji; ?></p>
									</div>
									
									<div class="job-type-grid">
										<a href="<?php echo site_url('kandidat/detail/'.$l->id_lowongan) ?>" class="btn light-btn btn-radius btn-m">Detail <span class="ti-angle-right"></span></a>
									</div>									
								</div>
							</div>
							<?php } ?>
							<!-- Single Job 2 -->
							<div class="flexbox padd-10">
						<ul class="pagination">
							<li class="page-item">
							  <a class="page-link" href="manage-job.html#" aria-label="Previous">
								<span aria-hidden="true">«</span>
								<span class="sr-only">Previous</span>
							  </a>
							</li>
							<li class="page-item "><a class="page-link" href="<?php echo site_url('kandidat/search') ?>">1</a></li>
							<li class="page-item"><a class="page-link" href="<?php echo site_url('kandidat/search') ?>">2</a></li>
							<li class="page-item"><a class="page-link" href="<?php echo site_url('kandidat/search') ?>">3</a></li>
							<li class="page-item">
							  <a class="page-link" href="<?php echo site_url('kandidat/search') ?>" aria-label="Next">
								<span aria-hidden="true">»</span>
								<span class="sr-only">Next</span>
							  </a>
							</li>
						</ul>
					</div>

						</div>
					</div>

				<!-- End Row -->
				
			</div>
		</section>
