<?php foreach ($profil as $u) {
	           } ?><div class="page-title"  >
			<div class="container" >
				<div class="col-sm-7">
					<div class="page-caption">
						<h2>Profile Detail</h2>
						<hr>
					</div>
				</div>
				<div class="col-sm-5 text-right mrg-top-40">
					<a href="<?php echo base_url('assets/img/'.$u->cv); ?>" class="btn btn-m btn-success">Download Resume</a>
				</div>
			</div>
</div>

	<div class="container" style = "margin-top: 1%">
	<div class="row">
		<div class="col-md-12">
			<div class="notice notice-danger">
						<strong>Perhatian!</strong> Harap update profile anda secara berkala, hal ini akan berpengaruh pada lamaran anda.
					</div>
		</div>
	</div>	
	<div class="row">	
	<!-- Side Bar -->

		<div class="col-md-4 col-sm-4">
			<div class="sidebar">

				<div class="widget-boxed">
					<div class="widget-boxed-body padd-top-5">
						<div class="side-list">

							<ul class="side-blog-list" role="tablist">
								<li role="persentation" class="active">
									<div class="blog-list-img">

										<img src="<?php echo base_url('assets/img/'.$u->foto) ?>" class="img-responsive" alt="">
									</div>
									<div class="blog-list-info">
										<a href="#profile" aria-controls="profile" role="tab" data-toggle ="tab" title ="Profile"><h4><?php echo $u->nama ?></h4></a>
									</div>
								</li>
								<li role="persentation">	
									<div class="blog-list-img">
										<h3 class="mrg-l-10"><i class="ti-user padd-r-10"></i></h3>
									</div>
									<div class="blog-list-info">
										<a href="#editprofile" aria-controls="editprofile" role="tab" data-toggle ="tab"  title ="Edit Profile"><h4> Edit Profile</h4></a>
									</div>	
								</li>
								<li>
									<div class="blog-list-img">
										<h3 class="mrg-l-10"><i class="ti-briefcase padd-r-10"></i></h3>
									</div>
									<div class="blog-list-info">
										<a href="#pengalaman" aria-controls="pengalaman" role="tab" data-toggle ="tab"  title ="Pengalaman"><h4>Pengalaman</h4></a>
									</div>
								</li>
								<li>
									<div class="blog-list-img">
										<h3 class="mrg-l-10"><i class="ti-medall padd-r-10"></i></h3>
									</div>
									<div class="blog-list-info">
										<a href="#pendidikan" aria-controls="pendidikan" role="tab" data-toggle ="tab"  title ="Pendidikan"><h4>Pendidikan</h4></a>
									</div>
								</li>
								<li>
									<div class="blog-list-img">
										<h3 class="mrg-l-10"><i class="ti-clip padd-r-10"></i></h3>
									</div>
									<div class="blog-list-info">
										<a href="#resume" aria-controls="resume" role="tab" data-toggle ="tab" title ="Upload Resume"><h4>Upload Resume</h4></a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
		<!-- End SideBar -->
		<div class="col-md-8 col-sm-8">

			<div role="tabpanel" class="tab-pane fade in active collapse" id="profile">

				
				<div class="detail-wrapper">
					<div class="detail-wrapper-body">
						<div class="text-center mrg-bot-30">
							<img src="<?php echo base_url('assets/img/'.$u->foto) ?>" class="img-circle width-100" alt="">
							<h4 class="meg-0"><?php echo $u->nama; ?></h4>
							<span><?php echo($u->p_terakhir); ?></span><br>
							<span><?php echo($u->tgl_lahir); ?></span> 
						</div>
						<div class="row">
							<div class="col-sm-4 mrg-bot-10">
								<i class="ti-location-pin padd-r-10"></i><?php echo($u->alamat); ?>
							</div>
							<div class="col-sm-4 mrg-bot-10">
								<i class="ti-email padd-r-10"></i><?php echo($u->email); ?>
							</div>
							<div class="col-sm-4 mrg-bot-10">
								<i class="ti-mobile padd-r-10"></i><?php echo($u->telp); ?>
							</div>
						</div>
					</div>
				</div>

				<div class="detail-wrapper">
					<div class="detail-wrapper-header">
						<h4><i class="ti-user padd-r-10"></i> Tentang Saya</h4>
					</div>
					<div class="detail-wrapper-body">
						<p><?php echo nl2br($u->deskripsi); ?></p>
					</div>
				</div>

				<div class="detail-wrapper">	
					<div class="detail-wrapper-header">
						<h4><i class="ti-medall padd-r-10"></i>Pendidikan Terakhir</h4>
					</div>
					<div class="detail-wrapper-body">	

						<div class="edu-history danger">
							<i></i>
							<div class="detail-info">
								<h3><?php echo($u->nm_instansi); ?></h3>
								<i><?php echo($u->tahun_masuk); ?> - <?php echo($u->tahun_lulus); ?></i>
								<span><i><?php echo($u->jurusan); ?></i></span>
							</div>
						</div>
						

					</div>
				</div>


				<div class="detail-wrapper">	
					<div class="detail-wrapper-header">
						<h4><i class="ti-briefcase padd-r-10"></i> Pengalaman Kerja</h4>
					</div>
					<div class="detail-wrapper-body">
						<?php foreach ($pengalaman as $k) {
							# code...
						?>
						<div class="edu-history info">
							<i></i>
							<div class="detail-info">
								<h3><?php echo $k->posisi.", ".$k->jabatan;?></h3>
								<i><?php echo $k->lamakerja." tahun";?></i>
								<span><?php echo $k->nm_perusahaan;?></span>
								<p><?php echo nl2br($k->desc);?></p>
							</div>
						</div>
						<?php } ?>

						
					</div>
				</div>


			</div>
			
			<div role="tabpanel" class="tab-pane fade collapse " id="editprofile">
				<div class="detail-wrapper">
					<div class="detail-wrapper-header">
						<h4><i class="ti-user padd-r-10"></i>Edit Profile</h4>
					</div>
					<div class="detail-wrapper-body">
						<?php
        echo form_open_multipart('kandidat/editprofil');
        ?>

							<div class="row">
								<div class="col-md-12">
									<label>Foto</label>
									<div class="">
										<input type="file" id="file" name="myfiles"  />
									</div>
								</div>
							</div>	


							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Nama</label>
										<input type="text" name="nama" class="form-control" value="<?php echo $u->nama;?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Jenis Kelamin</label>
										<div class="radio">
											<label for=""><input type="radio" name="gender" <?php if($u->jk=='Pria') {echo  'Checked';}?>> Pria</label>
										</div>
										<div class="radio">
											<label for=""><input type="radio" name="gender" <?php if($u->jk=='Wanita') {echo  'Checked';}?>> Wanita</label>
										</div>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-6">
							<label for="">Start Date</label>
							 <input type="text" name="tgl_lahir" id="dob2" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control " readonly="">
						</div>
									
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Email</label>
										<input type="email" name="email" class="form-control" value="<?php echo $u->email; ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for=""> No Telepon</label>
										<input type="number" name="telp" class="form-control" value="<?php echo $u->telp; ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Alamat</label>
										<textarea name="alamat" id="" class="form-control" cols="30" rows="10" style="resize:none;"><?php echo $u->alamat;?></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Tentang Saya</label>
										<textarea name="des" id="des" class="form-control" cols="30" rows="10" style="resize:none;"><?php echo nl2br($u->deskripsi); ?></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group text-center mrg-top-15">
										<button type="submit" class="btn theme-btn btn-m btn-block">SAVE CHANGES</button>
									</div>
								</div>
							</div>

						<?php echo form_close(); ?>
					</div>
				</div>
			</div>

			<div role ="tabpanel" class="tab-pane fade collapse" id= "pengalaman">

				<div class="panel-group style-1" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="#add">
								<h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#add" aria-expanded="false" aria-controls="add">
								<i class="ti-briefcase padd-r-10"></i>Tambah Pengalaman</a></h4>		
						</div>
						<div id="add" class="panel-collapse collapse" role="tabpanel" aria-labelledby="add">
							
								<div class="panel-body">

									<form class="log-form" action="<?php echo base_url('Kandidat/ubahpengalaman')?>" method="POST">

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="">Nama Perusahaan</label>
													<input type="text" name="nama" class="form-control" placeholder="ex: PT.Sinar Baru Wijaya">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="">Divisi / Bagian</label>
													<input type="text" name="posisi" class="form-control" placeholder="ex: Accounting">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="">Jabatan</label>
													<input type="text" name="jabatan" class="form-control" placeholder="ex: Kepala Bagian">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="">Lama Bekerja</label>
													<input type="text" class="form-control" name="lama" placeholder="ex : 1 Tahun 2 Bulan">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label for="">Deskripsi Pekerjaan</label>
													<textarea name="des" id="" cols="30" rows="10" class="form-control" style="resize:none;">
														
													</textarea>
												</div>
											</div>
										</div>
										<div class="row">
											<div class="col-md-12">
												<div class="form-group text-center mrg-top-15">
													<button type="submit" class="btn theme-btn btn-m btn-block">SAVE CHANGES</button>
												</div>
											</div>
										</div>

									</form>

								</div>

						</div>

					</div>	
				</div>

				<div class="detail-wrapper">
					<div class="detail-wrapper-header">
						<h4><i class="ti-briefcase padd-r-10"></i>Pengalaman</h4>
					</div>
					<div class="detail-wrapper-body">
						
						<div class="table-responsive">
							<table class="table table-lg table-hover">
								<thead>
									<tr>
										<th>Perusahaan</th>
										<th>Posisi</th>
										<th>Jabatan</th>
										<th>Lama Bekerja</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($pengalaman as $c) {
									?>
									<tr>
										<td><?php echo $c->nm_perusahaan; ?></td>
										<td><?php echo $c->posisi; ?></td>
										<td><?php echo $c->jabatan; ?></td>
										<td><?php echo $c->lamakerja; ?></td>
										<td>
											<a href="<?php echo base_url('Kandidat/Hapuspengalaman/'.$c->id_pengalaman)?>" class="cl-danger mrg-5" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
									<?php } ?>
									<tr>
										<td>PT. Bolt</td>
										<td>Accounting</td>
										<td>Staff</td>
										<td>4 Bulan</td>
										<td>
											<a href="" class="cl-danger mrg-5" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
								</tbody>

							</table>
						</div>

					</div>
				</div>
				
				

			</div>
			<div role ="tabpanel" class="tab-pane fade collapse" id= "pendidikan">

				<div class="detail-wrapper">	
					<div class="detail-wrapper-header">
						<h4><i class="ti-medall padd-r-10"></i>Pendidikan Terakhir</h4>
					</div>
					<div class="detail-wrapper-body">	

						<div class="edu-history danger">
							<i></i>
							<div class="detail-info">
								<h3><?php echo $u->nm_instansi;?></h3>
								<i><?php echo $u->tahun_masuk." - ".$u->tahun_lulus;?></i>
								<i><?php echo $u->p_terakhir; ?></i>
								<span><i><?php echo $u->jurusan; ?></i></span>
							</div>
							<div class="row">
								<div class="col-md-12 text-right mrg-top-40">
									<a href="#editpendidikan" class="btn theme-btn" aria-controls="pendidikans" role="tab" data-toggle ="tab" title ="Edit Pendidikan"><i class=""></i>Edit</a>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div role ="tabpanel" class="tab-pane fade collapse" id= "editpendidikan">
					<div class="detail-wrapper">
						<div class="detail-wrapper-header">
								<h4><i class="ti-medall"></i> Edit Pendidikan</h4>
							</div>
						<div class="detail-wrapper-body">
							<form action="<?php echo base_url('Kandidat/pendidikan')?>" method="POST" class="log-form">

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Nama Institusi</label>
											<input type="text" class="form-control" name="nama" value="<?php echo $u->nm_instansi;?>">
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Tahun Lulus</label>
											<input type="number" name="tl"class="form-control" min="1990" max ="2020" value="<?php echo $u->tahun_lulus; ?>">
										</div>
									</div>
								</div>

								<div class="row">

									<div class="col-md-4">
										<div class="form-group">
											<label for="">Kualifikasi</label>
											<br>
											<select name="kualifikasi" id="" class="form-control" >
												<option value="">-Pilih Kualifikasi-</option>
												<option value="S3">S3</option>
												<option value="S2">S2</option>
												<option value="S1">S1</option>
												<option value="D3">D3</option>
												<option value="SMA/SMK">SMA/SMK</option>
											</select>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label for="">Bidang Studi</label>
											<br>
											<select name="bidangstudi" id="" class="form-control" style="width:30px;">
												<option value="">-Pilih Bidang Studi-</option>
												<option value="Periklanan/Media">Periklanan/Media</option>
												<option value="Agrikultur/Aquakultur/Perhutanan">Agrikultur/Aquakultur/Perhutanan</option>
												<option value="Seni/Desain/Multimedia Kreatif"> Seni/Desain/Multimedia Kreatif</option>
												<option value="Teknik">Teknik</option>
												<option value="Ekonomi">Ekonomi</option>
												<option value="Hukum">Hukum</option>
												<option value="Ilmu Komputer/Teknologi Informasi">Ilmu Komputer/Teknologi Informasi</option>
												<option value="Lainnya">Lainnya</option>
											</select>
										</div>
									</div>

									<div class="col-md-4">
										<div class="form-group">
											<label for="">Tahun Masuk</label>
											<br>
											<input type="number" name="tm" class="form-control" name="tahunmasuk" min="1980" max="2018" value=<?php echo $u->tahun_masuk; ?> >
										</div>
									</div>

								</div>	
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Informasi Tambahan</label>
											<br>
											<textarea name="tambahan" id="" cols="30" rows="10" class="form-control" style="resize:none;"><?php echo $u->tambahan; ?></textarea>
										</div>
									</div>
								</div>

								<div class="row">
								<div class="col-md-12">
									<div class="form-group text-center mrg-top-15">
										<button type="submit" class="btn theme-btn btn-m btn-block">SAVE CHANGES</button>
									</div>
								</div>
							</div>

							</form>
						</div>
					</div>
				</div>	

			</div>

			<div role ="tabpanel" class="tab-pane fade collapse" id= "resume">
				<div class="detail-wrapper">	

					<div class="detail-wrapper-header">
						<h4><i class="ti-clip padd-r-10"></i>Upload Resume</h4>
					</div>

					<div class="detail-wrapper-body">
						<div class="text-center">
							<h5>Nama File :<?php echo $u->cv; ?> </h5>
							<hr></hr>
						</div>
						<div class="row">
							<div class="col-md-6 text-right mrg-top-40">
									<a href="<?php echo base_url('assets/img/'.$u->cv)?>" class="btn btn-success btn-block"  title ="Download"><i class=""></i>Download</a>
								</div>
							<div class="col-md-6 text-center mrg-top-40">
									<a href="javascript:void(0)"  data-toggle="modal" data-target="#editresume" class="btn btn-danger btn-block" aria-controls="pendidikans" role="tab" data-toggle ="tab" title ="Edit"><i class=""></i>Edit</a>
								</div>
						</div>
					</div>

					<div class="modal fade" id="editresume" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-body">
									<div class="text-center"><img src="<?php echo base_url('assets/img/hivee.png') ?>" alt="" class="gambar img-responsive"></div>
									<div class="row">
										<div class="col-md-12 col-sm-12 mrg-l-10">
										<ul>
											<li>Your file must be in Word (.doc or .docx), Text (.txt), Rich Text (.rtf) or PDF (.pdf) format</li>
											<li>File size must not exceed 1MB</li>
										</ul>
										</div>
									</div>
									<?php echo form_open_multipart('Kandidat/Uploadcv') ?>
									<div class="row">
										<div class="col-md-12 mrg-top-40">
										<label>Resume</label>
										<div class="custom-file-upload">
										<input type="file" id="file" name="myfiles"  />
										</div>
										</div>
									</div>
									<div class="row">
											<div class="col-md-12">
												<div class="form-group text-center mrg-top-15">
													<button type="submit" class="btn theme-btn btn-m btn-block">SAVE CHANGES</button>
												</div>
											</div>
										</div>
									<?php echo form_close();?>
								</div>
							</div>
						</div>
					</div>

				</div>	
			</div>	
			
		</div>
	</div>
