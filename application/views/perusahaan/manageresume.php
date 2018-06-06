<section>
	<div class="container">
		<div class="col-md-3 col-sm-3 text-center">
			<div class="emp-pic">
				<img src="<?php echo base_url('assets/img/company.png') ?>" class= "img-responsive img-circle width-220" alt="">
			</div>
		</div>
		<div class="col-md-6 col-sm-6">
			<div class="emp-des">
				<br>
				<h3>IOS DEVELOPER</h3>
				<p>2 Juni 2018 - 18 Juni 2018</p> 
				<p class="text-muted"><span class="ti-location-pin"></span> Jakarta Pusat, DKI Jakarta</p>
				<p class="text-muted" style="color:green"><span class="ti-money"></span> 2.500.000 - 3.000.000</p>
			</div>
		</div>
	</div>
</section>
<div class="container">
	<div class="table-responsive"> 
		<table class="table table-lg table-hover">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Telepon</th>
					<th>Email</th>
					<th>Tanggal Lamar</th>
					<th>Action</th>
				</tr>
			</thead>

			<tbody>

				<tr>
					<td>
						<a href="job-detail.html">
							<img src="<?php echo base_url('assets/img/ucup.png') ?> " class="avatar avatar-lg" alt="Avatar">Yusuf Farhan
							<span class="mng-jb">Mahasiswa</span>
						</a>
					</td>
					<td>089637632173</td>
					<td>yusuffarhan@gmail.com</td>                
					<td><i class="ti-credit-card"></i> 10 Jan 2017</td>
					<td>
						<a href="<?php echo site_url('perusahaan/checkdetail') ?>" class="cl-info mrg-5" title ="Check Detail"><i class="fa fa-edit"></i></a>
						<a href="javascript:void(0)"  data-toggle="modal" data-target="#terima" class="cl-success mrg-5" aria-controls="pendidikans" role="tab" data-toggle ="tab" title ="Terima" ><i class="fa fa-check"></i></a>
						<a href="javascript:void(0)"  data-toggle="modal" data-target="#delete" class="cl-danger mrg-5" aria-controls="pendidikans" role="tab" data-toggle ="tab" title ="Delete"><i class="fa fa-close"></i></a>
					</td>  
				</tr>

				<tr>
					<td>
						<a href="job-detail.html">
							<img src="<?php echo site_url ('assets/img/default.png') ?>" class="avatar avatar-lg" alt="Avatar">Tegar Ferdyla M
 							<span class="mng-jb">Mahasiswa</span>
						</a>
					</td>
					<td>089637632173</td>
					<td>tegarferdyla@gmail.com</td>                
					<td><i class="ti-credit-card"></i> 10 Jan 2017</td>
					<td>
						<a href="<?php echo site_url ('perusahaan/checkdetail') ?>" class="cl-info mrg-5" title ="Check Detail"><i class="fa fa-edit"></i></a>
						<a href="javascript:void(0)"  data-toggle="modal" data-target="#terima" class="cl-success mrg-5" aria-controls="pendidikans" role="tab" data-toggle ="tab" title ="Terima" ><i class="fa fa-check"></i></a>
						<a href="javascript:void(0)"  data-toggle="modal" data-target="#delete" class="cl-danger mrg-5" aria-controls="pendidikans" role="tab" data-toggle ="tab" title ="Delete"><i class="fa fa-close"></i></a>
					</td>  
				</tr>
				<tr>
					<td>
						<a href="job-detail.html">
							<img src="<?php echo base_url('assets/img/client-4.jpg') ?>" class="avatar avatar-lg" alt="Avatar">Nancy T. Clayton
							<span class="mng-jb">Wiraswasta</span>
						</a>
					</td>
					<td>089637632173</td>
					<td>nancy@gmail.com</td>                
					<td><i class="ti-credit-card"></i> 10 Jan 2017</td>
					<td>
						<a href="<?php echo site_url('perusahaan/checkdetail') ?>" class="cl-info mrg-5" title ="Check Detail"><i class="fa fa-edit"></i></a>
						<a href="javascript:void(0)"  data-toggle="modal" data-target="#terima" class="cl-success mrg-5" aria-controls="pendidikans" role="tab" data-toggle ="tab" title ="Terima" ><i class="fa fa-check"></i></a>
						<a href="javascript:void(0)"  data-toggle="modal" data-target="#delete" class="cl-danger mrg-5" aria-controls="pendidikans" role="tab" data-toggle ="tab" title ="Delete"><i class="fa fa-close"></i></a>
					</td>  
				</tr>

			</tbody>
		</table>
		<!-- flexbox -->
		<div class="flexbox padd-10">
			<ul class="pagination">
				<li class="page-item">
					<a class="page-link" href="manage-resume.html#" aria-label="Previous">
						<span aria-hidden="true">«</span>
						<span class="sr-only">Previous</span>
					</a>
				</li>
				<li class="page-item active"><a class="page-link" href="manage-resume.html#">1</a></li>
				<li class="page-item"><a class="page-link" href="manage-resume.html#">2</a></li>
				<li class="page-item"><a class="page-link" href="manage-resume.html#">3</a></li>
				<li class="page-item">
					<a class="page-link" href="manage-resume.html#" aria-label="Next">
						<span aria-hidden="true">»</span>
						<span class="sr-only">Next</span>
					</a>
				</li>
			</ul>
		</div>
		<!-- /.flexbox -->
	</div>
</div>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center"><img src="<?php echo base_url('assets/img/hivee.png') ?>" alt="" class="gambar img-responsive"></div>
				<hr>
				<h4> Apakah anda yakin ingin menolak lamaran ini ?</h4>
				<div class="row">
							<div class="col-md-6 text-right mrg-top-40">
									<a href="" class="btn btn-success btn-block" title ="Yes"><i class="fa fa-check"></i></a>
								</div>
							<div class="col-md-6 text-center mrg-top-40">
									<a href="" class="btn btn-danger btn-block" title ="No"><i class="fa fa-close"></i></a>
								</div>
						</div>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="terima" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<div class="text-center"><img src="<?php echo base_url('assets/img/hivee.png') ?>" alt="" class="gambar img-responsive"></div>
				<hr>
				<h4> Apakah anda yakin ingin menerima lamaran ini ?</h4>
				<div class="row">
							<div class="col-md-6 text-right mrg-top-40">
									<a href="" class="btn btn-success btn-block" title ="Yes"><i class="fa fa-check"></i></a>
								</div>
							<div class="col-md-6 text-center mrg-top-40">
									<a href="" class="btn btn-danger btn-block" title ="No"><i class="fa fa-close"></i></a>
								</div>
						</div>
			</div>
		</div>
	</div>
</div>