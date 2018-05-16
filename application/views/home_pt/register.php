<!-- ======================= Start Page Title ===================== -->
		<!-- ======================= End Page Title ===================== -->
		
		<!-- ====================== Start Signup Form ============= -->
		<section>
			<div class="container">
				<div class="container">
					<div class="heading">
						<h2>Create Company Account</h2>
					</div>
					<div class="log-box">
				<div class="row">
				        <div class="col-md-12">
				          <?php if ($this->session->flashdata('usersalah')): ?>
				            <div class="alert alert-danger alert-dismissible">
				              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				              <h4><i class="icon fa fa-check"></i>Info</h4>
				              Username Yang Anda Masukan Sudah Terpakai !!
				            </div>
				       	  <?php elseif($this->session->flashdata('emailsalah')): ?>
				            <div class="alert alert-danger alert-dismissible">
				              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				              <h4><i class="icon fa fa-close"></i>Informasi</h4>
				              Email Anda Sudah Terdaftar !!
				           </div>  
				          <?php endif ?>
				        </div>
				      </div>
				  </div>
					<div class="log-box">
						<form class="log-form" action="<?php echo base_url('Daftar/DaftarPerusahaan');?>" method="POST">
							<div class="row">
								<div class="col-md-12">
									<div class="form-group">
										<label>Company Name</label>
										<span class="text-danger"><?=form_error('comname')?></span>
										<input type="text" class="form-control" placeholder="Your Name" name="comname">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Addres</label>
										<span class="text-danger"><?=form_error('alamat')?></span>
										<input type="text" class="form-control" placeholder="Company Addres" name="alamat">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Email</label>
										<span class="text-danger"><?=form_error('emailpt')?></span>
										<input type="email" class="form-control" placeholder="Your Email.." name="emailpt">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Phone Number</label>
										<span class="text-danger"><?=form_error('tlppt')?></span>
										<input type="number" class="form-control" placeholder="Telp" name="tlppt">
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<label>Username</label>
										<span class="text-danger"><?=form_error('userpt')?></span>
										<input type="text" class="form-control" placeholder="Username" name="userpt">
									</div>
								</div>
							</div>							
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Password</label>
										<span class="text-danger"><?=form_error('passpt')?></span>
										<input type="password" class="form-control" placeholder="********" name="passpt">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Confirm Password</label>
										<span class="text-danger"><?=form_error('repasspt')?></span>
										<input type="password" class="form-control" placeholder="********" name="repasspt">
									</div>
								</div>
							</div>
							
							<div class="row">
								<div class="col-md-12">
									<div class="form-group text-center mrg-top-15">
										<button type="submit" class="btn theme-btn btn-m">Create An Account</button>
									</div>
								</div>
							</div>
							
						</form>
						
						<div class="log-option"><span>OR</span></div>
						
						<div class="row">
							<div class="col-md-6">
								<a href="signup.html#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>SignUP With Facebook</a>
							</div>
							<div class="col-md-6">
								<a href="signup.html#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>SignUp With Google+</a>
							</div>
						</div>
						
					</div>
				</div>
				
			</div>
		</section>
		<!-- ====================== End Signup Form ============= -->