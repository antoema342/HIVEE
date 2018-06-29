<section>
	<div class="container">

		<div class="col-md-3 col-sm-3">
			<div class="emp-pic">
				<img src="<?php echo base_url('assets/img/default.png') ?>" class= "img-responsive img-circle width-220" alt="">
			</div>
		</div>	
		<div class="col-md-4 col-sm-4">
			<div class="emp-des">
				<h3><?php echo $this->session->userdata('nama'); ?></h3>
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
					<li><span class="cl-primary"><?php echo $jmllam;?></span> Lamaran</li>
					<li><span class="cl-success"><?php echo $jmlter;?></span> Diterima</li>
					<li><span class="cl-danger"><?php echo $jmltol;?></span> Ditolak</li>
				</ul>
			</div>
		</div>
	</div>
</section>
	<div class="container">
		<div class="col-md-12 col-sm-12">
			<div class="tab style-1" role="tabpanel">
				<ul class="nav nav-tabs" role="tablist">
					<li role="persentation" class="active"><a href="#lamaran" aria-controls="lamaran" role="tab" data-toggle="tab" >Lamaran <span class="cl-primary">(<?php echo $jmllam;?>)</span></a></li>
					<li role="persentation"><a href="#diterima" aria-controls="diterima" role="tab" data-toggle ="tab">Diterima <span style="color:green;">(<?php echo $jmlter;?>)</span></a> </li>
					<li role="persentation"><a href="#ditolak" aria-controls="ditolak" role="tab" data-toggle="tab">Ditolak <span class="cl-danger">(<?php echo $jmltol;?>)</span></a></li>
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
										
									</tr>
								</thead>
								<tbody>
									<?php foreach ($lamaran as $k) {
									?>
									<tr>
										<td>
										<a href="">
										<img src="<?php echo base_url('assets/img/'.$k->logo) ?>" class="avatar-lg" alt="Avatar"><?php echo $k->nama_lowongan; ?>
										<span class="mng-jb"><?php echo $k->nm_perusahaan; ?></span>
										</a>
										</td>
										<td><?php echo $k->lokasi; ?></td>
										<td><?php echo $k->gaji; ?>/Day</td>
										<td><?php echo $k->tgl_daftar; ?></td>
										<td><?php echo $k->kategori; ?></td>  
									</tr>
									<?php } ?>
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
									<?php foreach ($lt as $o) {
										?>
									<tr>
										<td>
										<a href="">
										<img src="<?php echo base_url('assets/img/'.$o->logo) ?>" class="avatar-lg" alt="Avatar"><?php echo $o->nama_lowongan; ?>
										<span class="mng-jb"><?php echo $o->nm_perusahaan; ?></span>
										</a>
										</td>
										<td><?php echo $o->lokasi; ?></td>
										<td><?php echo $o->gaji; ?>/Day</td>
										<td><?php echo $o->tgl_daftar; ?></td>
										<td><?php echo $o->kategori; ?></td>

									</tr>
									<?php } ?>
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
									<?php foreach ($ltol as $p) {
										?>
									<tr>
										<td>
										<a href="">
										<img src="<?php echo base_url('assets/img/'.$p->logo) ?>" class="avatar-lg" alt="Avatar"><?php echo $p->nama_lowongan; ?>
										<span class="mng-jb"><?php echo $p->nm_perusahaan; ?></span>
										</a>
										</td>
										<td><?php echo $p->lokasi; ?></td>
										<td><?php echo $p->gaji; ?>/Day</td>
										<td><?php echo $p->tgl_daftar; ?></td>
										<td><?php echo $p->kategori; ?></td>
										  
									</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>