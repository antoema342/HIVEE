<section>
	<div class="container">
		<div class="container">
			<div class="modal-dialog">
				<div class="modal-content" id="myModalLabel1">
					<div class="modal-body">
						<div class="text-center"><img src=" <?php echo base_url('assets/img/hivee.png') ?>" alt="" class="gambar img-responsive "></div>
						
						<!-- Nav tabs -->
							
						<!-- Tab panels -->
						<div class="tab-content">
						<div class="log-box">
				<div class="row">
				        <div class="col-md-12">
				          <?php if ($this->session->flashdata('gagallogin')): ?>
				            <div class="alert alert-danger alert-dismissible">
				              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				              <h4><i class="icon fa fa-check"></i>Info</h4>
				              Login Gagal !! Username atau Password Salah !!
				            </div>
				          <?php endif ?>
				        </div>
				      </div>
				  </div>
							<!-- Employer Panel 1-->
							<div class="tab-pane fade in show active" id="employer" role="tabpanel">
								<form action="<?php echo base_url('Login/ceklogin')?>" method="POST">
									
									<div class="form-group">
										<label>User Name</label>
										<input type="text" class="form-control" placeholder="User Name" name="usname">
									</div>
									
									<div class="form-group">
										<label>Password</label>
										<input type="password" class="form-control" placeholder="*********" name="pass">
									</div>
									
									<div class="form-group">
										<span class="custom-checkbox">
											<input type="checkbox" id="4">
											<label for="4"></label>Remember me
										</span>
										<a href="index.html#" title="Forget" class="fl-right">Forgot Password?</a>
									</div>
									<div class="form-group text-center">
										<button type="submit" class="btn theme-btn full-width btn-m">LogIn </button>
									</div>
									
								</form>
								<div class="log-option"><span>OR</span></div>								
								<div class="row mrg-bot-20">
									<div class="col-md-6">
										<a href="index.html#" title="" class="fb-log-btn log-btn"><i class="fa fa-facebook"></i>Sign In With Facebook</a>
									</div>
									<div class="col-md-6">
										<a href="index.html#" title="" class="gplus-log-btn log-btn"><i class="fa fa-google-plus"></i>Sign In With Google+</a>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12 text-center">
										<p style=''>Don't have an account? <a href="<?php echo base_url('home/register_kandidat') ?>"><b>Create Account</b></a></p>
									</div>
								</div>
							</div>
							<!--/.Panel 1-->
						</div>
						<!-- Tab panels -->
					</div>
				</div>
			</div>
		</div>
	</div>	
</section>