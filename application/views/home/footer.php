<!-- ================= footer start ========================= -->
		<footer class="footer">
			<div class="container">
				
				<!-- Row Start -->
				<div class="row">
				
					<div class="col-md-8 col-sm-8">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<h4>Kandidat</h4>
								<ul>
									<li><a href="">Cari Lowongan</a></li>
									<li><a href="">Cara Bergabung</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4">
								<h4>Perusahaan</h4>
								<ul>
									<li><a href="">Buat Lowongan</a></li>
									<li><a href="">Cara Bergabung</a></li>
									<li><a href="">Managing Staff</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4">
								<h4>Tentang Kami</h4>
								<ul>
									<li><a href="index.html#">About</a></li>
									<li><a href="index.html#">Contact</a></li>
									<li><a href="index.html#">Careers</a></li>
									<li><a href="index.html#">Site Policy</a></li>	
								</ul>
							</div>
						</div>
					</div>
					
					<div class="col-md-4 col-sm-4">
						<h4>Follow Us!</h4>
						<!-- Newsletter -->
						<img src="<?php echo base_url('assets/img/hivee.png') ?>" class="gambar logo logo-display img-responsive" alt="">
						
						<!-- Social Box -->
						<div class="f-social-box">
							<ul>
								<li><a href="index.html#"><i class="fa fa-facebook facebook-cl"></i></a></li>
								<li><a href="index.html#"><i class="fa fa-google google-plus-cl"></i></a></li>
								<li><a href="index.html#"><i class="fa fa-twitter twitter-cl"></i></a></li>
								<li><a href="index.html#"><i class="fa fa-pinterest pinterest-cl"></i></a></li>
								<li><a href="index.html#"><i class="fa fa-instagram instagram-cl"></i></a></li>
							</ul>
						</div>
						
						<!-- App Links -->
						<div class="f-app-box">
							<ul>
								<li><a href="index.html#"><i class="fa fa-apple"></i>App Store</a></li>
								<li><a href="index.html#"><i class="fa fa-android"></i>Play Store</a></li>
							</ul>
						</div>
						
					</div>
					
				</div>
				
				<!-- Row Start -->
				<div class="row">
					<div class="col-md-12">
						<div class="copyright text-center">
							<p>&copy; Copyright 2018 Hivee | Powerd By <a href="#" title="">Kelompok 10</a></p>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
		<!-- =================== START JAVASCRIPT ================== -->
		<!-- Jquery js-->
		<script src=" <?php echo base_url('assets/js/jquery.min.js') ?>"></script>
		
		<!-- Bootstrap js-->
		<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?> "></script>
		
		<!-- Bootsnav js-->
		<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootsnav.js') ?> "></script>
		<script src="<?php echo base_url('assets/js/viewportchecker.js') ?> "></script>
		
		<!-- Slick Slider js-->
		<script src="<?php echo base_url('assets/plugins/slick-slider/slick.js') ?> "></script>
		
		<!-- wysihtml5 editor js -->
		<script src="<?php echo base_url('assets/plugins/bootstrap/js/wysihtml5-0.3.0.js') ?> "></script>
		<script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap-wysihtml5.js') ?> "></script>
		
		<!-- Aos Js -->
		<script src="<?php echo base_url('assets/plugins/aos-master/aos.js') ?> "></script>

		<!-- Date dropper js-->
		<script src="<?php echo base_url('assets/plugins/date-dropper/datedropper.js') ?>	"></script>
		
		<!-- Nice Select -->
		<script src="<?php echo base_url('assets/plugins/nice-select/js/jquery.nice-select.min.js') ?> "></script>
		
		<!-- Custom Js -->
		<script src="<?php echo base_url('assets/js/custom.js') ?>"></script>
		<script>
			$('#dob').dateDropper();
		</script>
		<script>
			$('#dob1').dateDropper();
		</script>

		<script src="<?php echo base_url('assets/Validator/bootstrapValidator.js') ?>"></script>
		
		<script type="text/javascript">
    $(document).ready(function() {
        $('.addButton').on('click', function() {
            var index = $(this).data('index');
            if (!index) {
                index = 1;
                $(this).data('index', 1);
            }
            index++;
            $(this).data('index', index);

            var template     = $(this).attr('data-template'),
                $templateEle = $('#' + template + 'Template'),
                $row         = $templateEle.clone().removeAttr('id').insertBefore($templateEle).removeClass('hide'),
                $el          = $row.find('input').eq(0).attr('name', template + '[]');
            $('#defaultForm').bootstrapValidator('addField', $el);

            // Set random value for checkbox and textbox
            if ('checkbox' == $el.attr('type') || 'radio' == $el.attr('type')) {
                $el.val('Choice #' + index)
                   .parent().find('span.lbl').html('Choice #' + index);
            } else {
                $el.attr('placeholder', 'Reqruitments #' + index);
            }

            $row.on('click', '.removeButton', function(e) {
                $('#defaultForm').bootstrapValidator('removeField', $el);
                $row.remove();
            });
        });

        $('#defaultForm')
            .bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    'textbox[]': {
                        validators: {
                            notEmpty: {
                                message: 'The textbox field is required'
                            }
                        }
                    },
                    'checkbox[]': {
                        validators: {
                            notEmpty: {
                                message: 'The checkbox field is required'
                            }
                        }
                    },
                    'radio[]': {
                        validators: {
                            notEmpty: {
                                message: 'The radio field is required'
                            }
                        }
                    }
                }
            })
            .on('error.field.bv', function(e, data) {
                //console.log('error.field.bv -->', data.element);
            })
            .on('success.field.bv', function(e, data) {
                //console.log('success.field.bv -->', data.element);
            })
            .on('added.field.bv', function(e, data) {
                //console.log('Added element -->', data.field, data.element);
            })
            .on('removed.field.bv', function(e, data) {
                //console.log('Removed element -->', data.field, data.element);
            });
    });
</script>

		<script>
			AOS.init();
		</script>

    </body>
</html>	