<?php foreach ($pelamar as $k) {}?>
<div class="page-title"  >
	<div class="container" >
		<div class="col-sm-7">
			<div class="page-caption">
				<h2>Profile Detail</h2>
				<hr>
				<p><a href="<?php echo site_url ('perusahaan/managejob') ?>" title="Home">Manage Job</a> <i class="ti-arrow-right"></i><?php echo $k->nama; ?></p>
			</div>
		</div>
		<div class="col-sm-5 text-right mrg-top-40">
			<button type="submit" class="btn btn-m btn-success">Download Resume</button>
		</div>
	</div>
</div>

<div class="detail-wrapper">
	<div class="detail-wrapper-body">
		<div class="detail-wrapper">
			<div class="detail-wrapper-header">
				<h4><i class="ti-user padd-r-10"></i> Tentang Saya</h4>
			</div>

			<div class="detail-wrapper-body">
				<?php foreach ($pelamar as $k) {?>
				<div class="text-center mrg-bot-30">
					<img src="<?php echo base_url('assets/img/default.png') ?>" class="img-circle width-100" alt="">
					<h4 class="meg-0"><?php echo $k->nama;?></h4>
					<span><?php echo $k->p_terakhir; ?></span><br>
					<span><?php echo $k->tgl_lahir; ?></span> 
					<div class="row">
						<div class="col-sm-4 mrg-bot-10 text-center">
							<i class="ti-location-pin padd-r-10"></i><?php echo $k->alamat; ?>
						</div>
						<div class="col-sm-4 mrg-bot-10 text-center">
							<i class="ti-email padd-r-10"></i><?php echo $k->email; ?>
						</div>
						<div class="col-sm-4 mrg-bot-10 text-center">
							<i class="ti-mobile padd-r-10"></i><?php echo $k->telp; ?>
						</div>
					</div>
				</div>
				<p><?php echo nl2br($k->deskripsi); ?></p>
				<hr>
				<h3>Pendidikan</h3>
				<hr>
				<div class="edu-history danger">
					<i></i>
					<div class="detail-info">
						<h3><?php echo $k->nm_instansi; ?></h3>
						<i><?php echo $k->tahun_masuk," - ".$k->tahun_lulus; ?></i>
						<span><?php echo $k->jurusan; ?></i></span>
					</div>
				</div>
				<?php } ?>
				<hr>
				<h3>Pengalaman</h3>
				<hr>
				<?php foreach ($pengalaman as $l) {
				?>
				<div class="edu-history info">
					<i></i>
					<div class="detail-info">
						<h3><?php echo $l->posisi." ,".$l->jabatan; ?></h3>
						<i><?php echo $l->lamakerja." tahun"; ?></i>
						<span><?php echo $l->nm_perusahaan; ?></span>
						<p><?php echo $l->desc; ?></p>
					</div>
				</div>
				<?php } ?>
			</div>

		</div>

	</div>
	
</div>
