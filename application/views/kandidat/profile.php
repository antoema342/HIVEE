<div class="page-title"  >
	<div class="container" >
		<div class="col-sm-7">
			<div class="page-caption">
				<h2>Profile Detail</h2>
				<hr>
			</div>
		</div>
		<div class="col-sm-5 text-right mrg-top-40">
			<button type="submit" class="btn btn-m btn-success">Download Resume</button>
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
										<img src="<?php echo base_url('assets/img/ucup.png') ?>" class="img-responsive" alt="">
									</div>
									<div class="blog-list-info">
										<a href="#profile" aria-controls="profile" role="tab" data-toggle ="tab" title ="Profile"><h4><?php echo $this->session->userdata('nama') ?></h4></a>
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
							<img src="<?php echo base_url('assets/img/ucup.png') ?>" class="img-circle width-100" alt="">
							<h4 class="meg-0"><?php echo $this->session->userdata('nama'); ?></h4>
							<span>Mahasiswa</span><br>
							<span>23 Juli 1997</span>
						</div>
						<div class="row">
							<div class="col-sm-4 mrg-bot-10">
								<i class="ti-location-pin padd-r-10"></i>Jl.Joglo Raya
							</div>
							<div class="col-sm-4 mrg-bot-10">
								<i class="ti-email padd-r-10"></i>Yusuffarhan@gmail.com
							</div>
							<div class="col-sm-4 mrg-bot-10">
								<i class="ti-mobile padd-r-10"></i>089637632193
							</div>
						</div>
					</div>
				</div>
				<div class="detail-wrapper">
					<div class="detail-wrapper-header">
						<h4><i class="ti-user padd-r-10"></i> Tentang Saya</h4>
					</div>
					<div class="detail-wrapper-body">
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio.</p>
						<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga.</p>
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
								<h3>Universitas Mercu Buana</h3>
								<i>2015 - 2019</i>
								<span>Fakultas Ilmu Komputer , <i>Sistem Informasi</i></span>
							</div>
						</div>
						
					</div>
				</div>
				<div class="detail-wrapper">
					<div class="detail-wrapper-header">
						<h4><i class="ti-briefcase padd-r-10"></i> Pengalaman Kerja</h4>
					</div>
					<div class="detail-wrapper-body">
						
						<div class="edu-history info">
							<i></i>
							<div class="detail-info">
								<h3>SPB Sabun</h3>
								<i>23 Mei - 28 Mei 2018</i>
								<span>PT. Sabun Indonesia</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam rerum perspiciatis officiis dolores similique nihil maxime eaque quas officia harum, praesentium facere dolor eligendi, amet mollitia quidem sint suscipit fugiat.</p>
							</div>
						</div>
						<div class="edu-history danger">
							<i></i>
							<div class="detail-info">
								<h3>Voulunter DWP</h3>
								<i>Juli 2017</i>
								<span>PT.Ismaya Live</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam dicta iusto necessitatibus accusamus, culpa quasi, consequuntur reprehenderit tempore commodi sed enim rem cupiditate, dolorum delectus explicabo numquam molestiae aut itaque.</p>
							</div>
						</div>
						<div class="edu-history success">
							<i></i>
							<div class="detail-info">
								<h3>Sales Bolt</h3>
								<i>Agustus 2017</i>
								<span>PT. Bolt Indonesia</span>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta ratione beatae assumenda, a soluta incidunt tempore, fugiat dolores, nemo fugit sint ab aperiam at amet numquam, eaque ex iste accusamus!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div role="tabpanel" class="tab-pane fade collapse " id="editprofile">
				<div class="detail-wrapper">
					<div class="detail-wrapper-header">
						<h4><i class="ti-user padd-r-10"></i>Edit Profile</h4>
					</div>
					<div class="detail-wrapper-body">
						<form class="log-form" action="">
							<div class="row">
								<div class="col-md-12">
									<label>Foto</label>
									<div class="custom-file-upload">
										<input type="file" id="file" name="myfiles[]" multiple />
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Nama</label>
										<input type="text" class="form-control" placeholder="Yusuf Farhan">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Jenis Kelamin</label>
										<div class="radio">
											<label for=""><input type="radio" name="gender	"> Pria</label>
										</div>
										<div class="radio">
											<label for=""><input type="radio" name="gender"> Wanita</label>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="form-group">
									<div class="col-md-4">
										<label for="">Tanggal Lahir</label>
										<br>
										<select name="tgl"  id=""  class="form-control" >
											<?php
												for ($i=1; $i <31 ; $i++) {
											?>
											<option value="<?php $i ?>"><?php echo $i; ?></option>
											<?php
												}
											?>
										</select>
									</div>
									<div class="col-md-4">
										<label for="">Bulan Lahir</label>
										<br>
										<select name="" id="bulan" class="form-control" >
											<option value="Januari">Januari</option>
											<option value="Februari">Februari</option>
											<option value="Maret">Maret</option>
											<option value="April">April</option>
											<option value="Mei">Mei</option>
											<option value="Juni">Juni</option>
											<option value="Juli">Juli</option>
											<option value="Agustus">Agustus</option>
											<option value="September">September</option>
											<option value="Oktober">Oktober</option>
											<option value="November">November</option>
											<option value="Desember">Desember</option>
										</select>
									</div>
									<div class="col-md-4">
										<label for="">Tahun Lahir</label>
										<br>
										<input type="number" class="form-control" min="1980" max="2018" placeholder="1980">
									</div>
								</div>
								
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Email</label>
										<input type="email" class="form-control" placeholder="yusuffarhan@gmail.com">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for=""> No Telepon</label>
										<input type="number" class="form-control" min="0" max="9" placeholder="089637632173">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Alamat</label>
										<textarea name="" id="" class="form-control" cols="30" rows="10" style="resize:none;"></textarea>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Tentang Saya</label>
										<textarea name="" id="" class="form-control" cols="30" rows="10" style="resize:none;"></textarea>
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
			<div role ="tabpanel" class="tab-pane fade collapse" id= "pengalaman">
				<div class="panel-group style-1" id="accordion" role="tablist" aria-multiselectable="true">
					<div class="panel panel-default">
						<div class="panel-heading" role="tab" id="#add">
							<h4 class="panel-title"><a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#add" aria-expanded="false" aria-controls="add">
							<i class="ti-briefcase padd-r-10"></i>Tambah Pengalaman</a></h4>
						</div>
						<div id="add" class="panel-collapse collapse" role="tabpanel" aria-labelledby="add">
							
							<div class="panel-body">
								<form class="log-form" action="">
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="">Nama Perusahaan</label>
												<input type="text" class="form-control" placeholder="ex: PT.Sinar Baru Wijaya">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="">Divisi / Bagian</label>
												<input type="text" class="form-control" placeholder="ex: Accounting">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="">Jabatan</label>
												<input type="text" class="form-control" placeholder="ex: Kepala Bagian">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="">Lama Bekerja</label>
												<input type="text" class="form-control" placeholder="ex : 1 Tahun 2 Bulan">
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-12">
											<div class="form-group">
												<label for="">Deskripsi Pekerjaan</label>
												<textarea name="" id="" cols="30" rows="10" class="form-control" style="resize:none;">
												
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
									<tr>
										<td>PT.Makanan</td>
										<td>Marketing</td>
										<td>Sales</td>
										<td>1 Tahun 8 Bulan</td>
										<td>
											<a href="" class="cl-danger mrg-5" data-toggle="tooltip" data-original-title="Delete"><i class="fa fa-trash"></i></a>
										</td>
									</tr>
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
								<h3>Universitas Mercu Buana</h3>
								<i>2015 - 2019</i>
								<i>S1</i>
								<span>Fakultas Ilmu Komputer , <i>Sistem Informasi</i></span>
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
							<form action="" class="log-form">
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Nama Institusi</label>
											<input type="text" class="form-control" name="" placeholder="Universitas Mercu Buana">
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Tahun Lulus</label>
											<input type="number" class="form-control" min="1990" max ="2020">
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
											<input type="number" class="form-control" name="tahunmasuk" min="1980" max="2018" >
										</div>
									</div>
								</div>
								
								<div class="row">
									<div class="col-md-12">
										<div class="form-group">
											<label for="">Informasi Tambahan</label>
											<br>
											<textarea name="tambahan" id="" cols="30" rows="10" class="form-control" style="resize:none;"></textarea>
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
							<h5>Nama File : CV-Ucup.pdf </h5>
							<h5>Tanggal Diperbarui	: 8 April 2017 12:11</h5>
						</div>
						<div class="row">
							<div class="col-md-6 text-right mrg-top-40">
								<a href="#editpendidikan" class="btn btn-success btn-block" aria-controls="pendidikans" role="tab" data-toggle ="tab" title ="Download"><i class=""></i>Download</a>
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
									<form action="" class="log-form">
										<div class="row">
											<div class="col-md-12 mrg-top-40">
												<label>Resume</label>
												<div class="custom-file-upload">
													<input type="file" id="file" name="myfiles[]" multiple />
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
				</div>
			</div>
			
		</div>
	</div>