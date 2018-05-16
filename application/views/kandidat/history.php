<section>
	<div class="container">

		<div class="col-md-3 col-sm-3">
			<div class="emp-pic">
				<img src="<?php echo base_url('assets/img/ucup.png') ?>" class= "img-responsive img-circle width-220" alt="">
			</div>
		</div>	
		<div class="col-md-4 col-sm-4">
			<div class="emp-des">
				<h3>Yusuf Farhan</h3>
				<span class="theme-cl">Mahasiswa</span>
				<p><i class="ti-location-pin padd-r-5"></i> Jl. Joglo Raya Blok H no 5</p> 
				<p><i class="ti-email padd-r-5"></i> yusuffarhan@gmail.com</p>
			</div>
			<div class="emp-bt">
				<a href="<?php echo site_url('kandidat/search') ?>" class="btn theme-btn"><i class="ti-plus"></i> Add More Jobs</a>
			</div>
		</div>
		<div class="col-md-5 col-sm-5">
			<div class="emp-detail">
				<ul>
					<li><span class="cl-primary">12</span> Lamaran</li>
					<li><span class="cl-success">4</span> Diterima</li>
					<li><span class="cl-danger">8</span> Ditolak</li>
				</ul>
			</div>
		</div>
	</div>
</section>
	<div class="container">
		<div class="col-md-12 col-sm-12">
			<div class="tab style-1" role="tabpanel">
				<ul class="nav nav-tabs" role="tablist">
					<li role="persentation" class="active"><a href="#lamaran" aria-controls="lamaran" role="tab" data-toggle="tab" >Lamaran <span class="cl-primary">(12)</span></a></li>
					<li role="persentation"><a href="#diterima" aria-controls="diterima" role="tab" data-toggle ="tab">Diterima <span style="color:green;">(4)</span></a> </li>
					<li role="persentation"><a href="#ditolak" aria-controls="ditolak" role="tab" data-toggle="tab">Ditolak <span class="cl-danger">(8)</span></a></li>
				</ul> 
				<!-- Tab Lamaran -->
				<div class="tab-content tabs">
					<div role="tabpanel" class="tab-pane fade in active" id="lamaran">
						<h3>Lamaran</h3>
						<div class="table-responsive">
							<table class="table table-lg table-hover">
								<thead>
									<tr>
										<th>Job</th>
										<th>Lokasi</th>
										<th>Salary</th>
										<th>Tanggal Apply</th>
										<th>Kategori</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
										<a href="">
										<img src="<?php echo base_url('assets/img/c-3.png') ?>" class="avatar-lg" alt="Avatar">Design Logo
										<span class="mng-jb">PT.Tana Toraja</span>
										</a>
										</td>
										<td>Mall Casablanca, Kuningan</td>
										<td>Rp.120.000/Day</td>
										<td>27 April 2018</td>
										<td>Design</td>
										<td>
										<a href="manage-job.html#" class="cl-success mrg-5" data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-edit"></i></a>
										<a href="manage-job.html#" class="cl-danger mrg-5" data-toggle="tooltip" data-original-title="Cancel"><i class="fa fa-times"></i></a>
										</td>  
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Tab Diterima -->
					<div role="tabpanel" class="tab-pane fade" id="diterima">
						<h3>Diterima</h3>
						<div class="table-responsive">
							<table class="table table-lg table-hover">
								<thead>
									<tr>
										<th>Job</th>
										<th>Lokasi</th>
										<th>Salary</th>
										<th>Tanggal Apply</th>
										<th>Kategori</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
										<a href="">
										<img src="<?php echo base_url('assets/img/c-1.png') ?>" class="avatar-lg" alt="Avatar">Sales Filma
										<span class="mng-jb">PT.Apple Ind</span>
										</a>
										</td>
										<td>Mall Casablanca, Kuningan</td>
										<td>Rp.120.000/Day</td>
										<td>27 April 2018</td>
										<td>Retail Staff</td>
										<td>
										<a href="manage-job.html#" class="cl-success mrg-5" data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-edit"></i></a>
										</td>  
									</tr>
								</tbody>
							</table>
						</div>
					</div>
					<!-- Tab Ditolak -->
					<div role="tabpanel" class="tab-pane fade" id="ditolak">
						<h3>Diterima</h3>
						<div class="table-responsive">
							<table class="table table-lg table-hover">
								<thead>
									<tr>
										<th>Job</th>
										<th>Lokasi</th>
										<th>Salary</th>
										<th>Tanggal Apply</th>
										<th>Kategori</th>
										<th>Aksi</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>
										<a href="">
										<img src="<?php echo base_url('assets/img/c-2.png') ?>" class="avatar-lg" alt="Avatar">Developer Web
										<span class="mng-jb">PT.Google</span>
										</a>
										</td>
										<td>Mall Casablanca, Kuningan</td>
										<td>Rp.120.000/Day</td>
										<td>27 April 2018</td>
										<td>Developer</td>
										<td>
										<a href="manage-job.html#" class="cl-danger mrg-5" data-toggle="tooltip" data-original-title="Detail"><i class="fa fa-trash"></i></a>
										</td>  
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>