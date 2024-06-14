<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<section class="page_title ds  s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60" style="background-image:url('images/About-Us-Banner.jpg'); background-size:cover!important; background-repeat:no-repeat!important; background-position:center!important;">
	<div class="container" >
		<div class="row" style='margin:0!important;'>
			<div class="col-md-12 text-center" style="padding:30px;">
				<h1>Client Login</h1>
				<div class="breadcrumb-wrap">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php echo base_url() ?>">Home</a>
						</li>
						<li class="breadcrumb-item active">
							Client Login
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>

<section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
	<div class="container" style="padding:100px 0 150px 0!important;">
		<div class="d-flex justify-content-center" style='margin:0!important;'>
			<div style="padding:30px 20px; border:1px solid #000;">
				<form class="form" method="POST" action="<?php base_url() . 'Login' ?>">
						<h2 class="special-heading text-center">
							<span class="text-capitalize">
								Login
							</span>
						</h2>
					<div class="card-body">
						<div class="input-group mb-3">
						
							<input type="text" name="username" class="form-control" placeholder="Username">
							<br>
							
						</div>
						<div class="text-danger text-center"><?php echo form_error('username'); ?></div>
						

						<div class="input-group">
							<input type="password" name="password" class="form-control" placeholder="Password">
							<br>
							
						</div>
						<div class="text-danger text-center"><?php echo form_error('password'); ?></div>
						
					</div>
					<?php  
								echo '<p class="text-danger text-center">'.$this->session->flashdata

								("error").'</p>';  
							?>
					<div class="footer text-center">
						<button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">Get Started</button>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</section>


