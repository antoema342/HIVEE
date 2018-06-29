<!-- ======================= End Navigation ===================== -->
<?php foreach ($perusahaan as $k) {
	# code...
}?>
<div class="page-title"  >
			<div class="container" >
				<div class="col-sm-7">
					<div class="page-caption">
						<h2>Profile Detail</h2>
						<hr>
						<p><a href="http://localhost/HIVEE/perusahaan" title="Edit Profile">Edit Profile</a> <i class="ti-arrow-right"> </i><?php echo $k->nm_perusahaan; ?></p>
					</div>
				</div>
			</div>
</div>

	<div class="container" style = "margin-top: 1%">
	<div class="row">
		<div class="col-md-12">
			<div class="notice notice-danger">
						<strong>Perhatian!</strong> Harap update profile company anda secara berkala, hal ini akan berpengaruh pada lowongan yang anda buat	.
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
										<img src="<?php echo base_url('assets/img/'.$k->logo);?>" class="img-responsive" alt="">
									</div>
									<div class="blog-list-info">
										<a href="#profile" aria-controls="profile" role="tab" data-toggle ="tab" title ="Profile"><h4><?php echo $k->nm_perusahaan; ?></h4></a>
									</div>
								</li>
								<li role="persentation">	
									<div class="blog-list-img">
										<h3 class="mrg-l-10"><i class="ti-user padd-r-10"></i></h3>
									</div>
									<div class="blog-list-info">
										<a href="#editprofile" aria-controls="editprofile" role="tab" data-toggle ="tab"  title ="Edit Profile"><h4> Edit Perusahaan</h4></a>
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
							<img src="<?php echo base_url('assets/img/'.$k->logo);?>" class="img-circle width-100" alt="">
							<h4 class="meg-0"><?php echo $k->nm_perusahaan; ?></h4>
							<span><i class="ti-location-pin padd-r-10"></i> <?php echo $k->alamat_perusahaan; ?></span><br> 
						</div>
						<div class="row">
							<div class="col-sm-4 mrg-bot-10 text-center">
								<i class="ti-world padd-r-10"></i><?php echo $k->website; ?>
							</div>
							<div class="col-sm-4 mrg-bot-10 text-center">
								<i class="ti-email padd-r-10"></i><?php echo $k->email; ?> 
							</div>
							<div class="col-sm-4 mrg-bot-10 text-center">
								<i class="ti-mobile padd-r-10 "></i><?php echo $k->telp; ?>
							</div>
						</div>

					</div>
				</div>

				<div class="detail-wrapper">
					<div class="detail-wrapper-header">
						<h4><i class="ti-user padd-r-10"></i> Tentang Perusahaan</h4>
					</div>
					<div class="detail-wrapper-body">
						<p><?php echo nl2br($k->deskripsi_perusahaan); ?></p>
						
					</div>
				</div>
			</div>
			
			<div role="tabpanel" class="tab-pane fade collapse " id="editprofile">
				<div class="detail-wrapper">
					<div class="detail-wrapper-header">
						<h4><i class="ti-user padd-r-10"></i>Edit Perusahaan</h4>
					</div>
					<div class="detail-wrapper-body">
						<?php echo form_open_multipart('Perusahaan/Ubahprofil')
?>
							<div class="row">
								<div class="col-md-12">
									<label>Foto / Logo Perusahaan</label>
									<div class="custom-file-upload">
										<input type="file" id="file" name="myfiles" />
									</div>
								</div>
							</div>	


							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Nama Perusahaan</label>
										<input type="text" name="nama" class="form-control" value="<?php echo $k->nm_perusahaan; ?>" >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Email</label>
										<input type="email" name="email" class="form-control" value="<?php echo $k->email; ?>">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Website</label>
										<input type="text" name="website" class="form-control" value="<?php echo $k->website; ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for=""> No Telepon</label>
										<input type="number" name="tlp" class="form-control" value="<?php echo $k->telp; ?>">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Alamat</label>
										<textarea name="alamat" id="" class="form-control" cols="30" rows="10" style="resize:none;"><?php echo $k->alamat_perusahaan; ?></textarea>
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label for="">Tentang Perusahaan</label>
										<textarea name="des" id="" class="form-control" cols="30" rows="10" style="resize:none;"><?php echo $k->deskripsi_perusahaan; ?></textarea>
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
		</div>
	</div>