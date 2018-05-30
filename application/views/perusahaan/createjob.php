<!-- ======================= Start Page Title ===================== -->
		<div class="page-title">
			<div class="container">
				<div class="page-caption">
					<div class="col-md-6">
						<h2>Create Job</h2>
						<hr>
					</div>

				</div>
			</div>
		</div>
		<!-- ======================= End Page Title ===================== -->
<section class="create-job">
	<div class="container">
		<div class="detail-wrapper">
			<div class="detail-wrapper-header">
				<h4><i class="ti-briefcase padd-r-10"></i> General Information</h4>
			</div>
			<div class="detail-wrapper-body">
				<form action="" class="log-form" id="defaultForm">
					
					<div class="row">
						<div class="col-md-12">
							<label for="">Job Title</label>
							<input type="text" class="form-control"> 
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="">Position</label>
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="">Salary</label>
							<input type="" class="form-control number">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="">Location</label>
							<input type="text" class="form-control">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<label for="">Start Date</label>
							 <input type="text" id="dob" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
						</div>
						<div class="col-md-6">
							<label for="">End Date</label>
							 <input type="text" id="dob1" data-lang="en" data-large-mode="true" data-min-year="2017" data-max-year="2020" data-disabled-days="08/17/2017,08/18/2017" data-id="datedropper-0" data-theme="my-style" class="form-control" readonly="">
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<label for="">Description</label>
							<textarea name="" id="" class="form-control" cols="30" rows="10" style="resize:none;"></textarea>
						</div>
					</div>
					
					<div class="row">
						<div class="col-md-12">
							<label for="">Reqruitments</label>
						</div>	
					</div>
					<div class="row">
						<div class="col-md-11">
							<input class="form-control" type="text" name="textbox[]" placeholder="Reqruitments #1" />
						</div>
						<div class="col-md-1">
							<button type="button" class="form-control btn btn-default btn-sm addButton" data-template="textbox"><i class="ti-plus"></i></button>
						</div>
					</div>
					<div class="row">
						<div class="hide" id="textboxTemplate">
						<div class="col-md-11">
							 <input class="form-control" type="text" />
						</div>
						<div class="col-md-1">
							<button type="button" class="form-control btn btn-default btn-sm removeButton">Remove</button>
						</div>
						</div>
					</div>


				</form>
			</div>
		</div>
	</div>
</section>