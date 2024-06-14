<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<style>
	*,
	*::before,
	*::after {
		box-sizing: border-box;
	}

	

	.timeline {
		position: relative;
		width: 100%;
		max-width: 1140px;
		margin: 0 auto;
		padding: 15px 0;
	}

	.timeline::after {
		content: '';
		position: absolute;
		width: 2px;
		background: #006E51;
		top: 0;
		bottom: 0;
		left: 50%;
		margin-left: -1px;
	}

	.timeline .container {
		padding: 15px 30px;
		position: relative;
		background: inherit;
		width: 50%;
	}

	.timeline .container.left {
		left: 0;
		margin-left: 0px;
	}

	.timeline .container.right {
		left: 50%;
		margin-left: 0px;
	}

	.timeline .container::after {
		content: '';
		position: absolute;
		width: 16px;
		height: 16px;
		top: calc(50% - 8px);
		right: -8px;
		background: #ffffff;
		border: 2px solid #006E51;
		border-radius: 16px;
		z-index: 1;
	}

	.timeline .container.right::after {
		left: -8px;
	}

	.timeline .container::before {
		content: '';
		position: absolute;
		width: 50px;
		height: 2px;
		top: calc(50% - 1px);
		right: 8px;
		background: #006E51;
		z-index: 1;
	}

	.timeline .container.right::before {
		left: 8px;
	}

	.timeline .container .date {
		position: absolute;
		display: inline-block;
		top: calc(50% - 8px);
		text-align: center;
		font-size: 14px;
		font-weight: bold;
		color: #006E51;
		text-transform: uppercase;
		letter-spacing: 1px;
		z-index: 1;
	}

	.timeline .container.left .date {
		right: -145px;
	}

	.timeline .container.right .date {
		left: -125px;
	}

	.timeline .container .icon {
		position: absolute;
		display: inline-block;
		width: 40px;
		height: 40px;
		padding: 9px 0;
		top: calc(50% - 20px);
		background: #fff;
		border: 2px solid #006E51;
		border-radius: 40px;
		text-align: center;
		font-size: 18px;
		color: #09445a;
		z-index: 1;
	}

	.timeline .container.left .icon {
		right: 56px;
	}

	.timeline .container.right .icon {
		left: 56px;
	}

	.timeline .container .content {
		padding: 30px 90px 30px 30px;
		background: #09445a;
		position: relative;
		border-radius: 0 500px 500px 0;
	}

	.timeline .container.right .content {
		padding: 40px 30px 30px 90px;
		border-radius: 500px 0 0 500px;
	}

	.timeline .container .content h2 {
		margin: 0 0 10px 0;
		font-size: 18px;
		font-weight: normal;
		color: #fff;
	}

	.timeline .container .content p {
		margin: 0;
		font-size: 16px;
		line-height: 22px;
		color: #000000;
	}

	@media (max-width: 767.98px) {
		.timeline::after {
			left: 90px;
		}

		.timeline .container {
			width: 100%;
			padding-left: 120px;
			padding-right: 30px;
		}

		.co1 h2 {
			font-size: 8px !important;
			margin: 0 0 5px 0 !important;
		}
		.d1 {
			font-size: 8px !important;
			margin: 0 0 5px 0 !important;
		}
		.timeline .container.right {
			left: 0%;
		}

		.timeline .container.left::after,
		.timeline .container.right::after {
			left: 82px;
		}

		.timeline .container.left::before,
		.timeline .container.right::before {
			left: 100px;
			border-color: transparent #006E51 transparent transparent;
		}

		.timeline .container.left .date,
		.timeline .container.right .date {
			right: auto;
			left: -5px;
		}

		.timeline .container.left .icon,
		.timeline .container.right .icon {
			right: auto;
			left: 146px;
		}

		.timeline .container.left .content,
		.timeline .container.right .content {
			
			padding: 6px 5px 10px 70px;
			border-radius: 500px 0 0 500px;
		}


	}

	@media (max-width: 767.98px) {

		.timeline .container.left .date,
		.timeline .container.right .date {
			right: auto;
			left: -5px;
		}
	}
</style>
<section class="page_title ds  s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60"
	style="background-image:url('images/AboutBanner.jpg'); background-size:cover!important; background-repeat:no-repeat!important; background-position:center!important;">
	<div class="container">
		<div class="row" style='margin:0!important;'>
			<div class="col-md-12 text-center" style="padding:30px;">
				<h1>About Us</h1>
				<div class="breadcrumb-wrap">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php echo base_url() ?>">Home</a>
						</li>
						<li class="breadcrumb-item active" style="background-color:transparent;">
							About Us
						</li>
					</ol>
				</div>

			</div>


		</div>
	</div>
</section>

<section class="ls s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
	<div class="container" style="padding:100px 0 30px 0!important;">
		<div class="row justify-content-around" style='margin:0!important;'>
			<div class="col-12 col-lg-3 text-center" style="padding:30px;">
				<h2 class="special-heading text-center">
					<span class="text-capitalize">
						WHO WE ARE
					</span>
				</h2>

			</div>
			<div class="col-12 col-lg-6" style="padding:30px;">
				<div class="divider-35 hidden-above-lg"></div>
				<div class="divider--5"></div>

				<p style="text-align: justify;">
					Our firm is manufacturing all types of Emulsion and Modified Bitumen and
					importing Bitumen (both Bulk and Packed) from Middle East countries.
					Premium Petro Products is also the Empanelled Supplier authorized by the Rajasthan PWD.
				</p>

				<p class="excerpt" style="text-align: justify;">

					<i> We are now PWD Empanelled authorized Bitumen Supplier by the Government of Uttarakhand. </i>

				</p>

				<p class="excerpt" style="text-align: justify;">
					Source Imported Viscosity Grade Bitumen, Penetration Grade Bitumen, Bitumen Emulsion And More, At
					Fair Prices!
				</p>
				<h6 style="margin-top: 0px;">We are among 5th largest in packed bitumen in India.</h6>

				<div class="divider-30"></div>

				<a download="" target="_blank" href="<?php echo base_url(); ?>/assets/PPP Company Profile.pdf"
					class="btn btn-gradient medium-btn" href="<?php echo base_url() ?>aboutus">Download Brochure</a>
			</div>
			<div class="col-12 col-lg-3 text-sm-left text-center d-none">
				<div class="divider-35 hidden-above-lg"></div>
				<div class="signature">
					<div class="signature-image">
						<img src="images/testimonial2.jpg" alt="img">
					</div>
					<div class="signature-content">
						<span>Diana T. Davis</span>
						<img src="images/signature.png" alt="img">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ds container-px-xl-0 d-none ">
	<div class="container-fluid">
		<div class="row" style='margin:0!important;'>
			<div
				class="col-lg-3 col-12 px-xl-50 ds column-overlay d-flex flex-column align-items-center justify-content-center text-center column-video">
				<div class="fw-divider-space divider-xl-160 divider-lg-130 divider-md-90 divider-60"></div>
				<h2 class="special-heading text-center">
					<span class="text-capitalize">
						Why Choose Us
					</span>
				</h2>
				<div class="divider-30"></div>


				<div class="divider-30"></div>

				<div class="fw-divider-space divider-xl-135 divider-lg-95 divider-md-65 divider-35"></div>
			</div>
			<div class="col-lg-9 p-0 col-12">
				<div class="step-gorizontal">
					<div class="step">
						<div class="step-number">
							<h3>
								01.
							</h3>
						</div>
						<h6>
							AUTHORISED BY RAJASTHAN PWD
						</h6>

					</div>
					<div class="step">
						<div class="step-number">
							<h3>
								02.
							</h3>
						</div>
						<h6>
							TOP QUALITY BITUMEN
						</h6>

					</div>
					<div class="step">
						<div class="step-number">
							<h3>
								03.
							</h3>
						</div>
						<h6>
							BEST CUSTOMER SERVICES
						</h6>

					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ls s-py-xl-160 text-sm-left text-center s-py-lg-130 s-py-md-90 s-py-60 c-gutter-60" id="our-vision">
	<div class="container" style="padding:100px 0 30px 0!important;">
		<div class="row" style='margin:0 0 80px 0!important;'>
			<div class="col-lg-6 col-12">
				<h2 class="special-heading text-sm-left text-center">
					<span class="text-capitalize">
						Our Vision
					</span>
				</h2>
				<div class="divider-line bg-maincolor"></div>
				<div class="fw-divider-space divider-30"></div>
				<p style="text-align: justify;">
					To build a brand which is synonymous with delivery of ‘Premium’ quality bitumen and bituminous
					products with primary focus on customer satisfaction. To play a vital role in bitumen supplies for
					road construction and upgradation activities in India and its neighbourhood.
				</p>


			</div>
			<div class="col-lg-6 col-12">
				<br /> <br />
				<img src="<?php echo base_url('assets/img/Vision.jpg'); ?>" alt="img" class="img-responsive">
			</div>
		</div>

		<div class="row" style='margin: 0!important;'>

			<div class="col-lg-6 col-12 order-lg-last">
				<h2 class="special-heading text-sm-left text-center">
					<span class="text-capitalize">
						Our Mission
					</span>
				</h2>
				<div class="divider-line bg-maincolor"></div>
				<div class="fw-divider-space divider-30"></div>
				<p style="text-align: justify;">
					To cater the needs of dynamic roads and highways construction sector through continuous upgradation
					of skills, technologies, performance, and capabilities to attain best quality and service benchmarks
					in bitumen industry.
				</p>


			</div>

			<div class="col-lg-6 col-12 ">
				<br /> <br />
				<img src="<?php echo base_url('assets/img/mission.png'); ?>" alt="img" class="img-responsive">
			</div>




		</div>



	</div>
</section>

<section class="ls s-py-xl-160 text-sm-left text-center s-py-lg-130 s-py-md-90 s-py-60 c-gutter-60" id="our-history">
	<div class="container" style="padding:50px 0 30px 0!important;">
		<div class="row" style='margin:0!important;'>

			<div class="col-lg-6 col-12">
				<h2 class="special-heading text-sm-left text-center">
					<span class="text-capitalize">
						Our History
					</span>
				</h2>
				<div class="divider-line bg-maincolor"></div>
				<div class="fw-divider-space divider-30"></div>
				<p style="text-align: justify;">
					Our firm supplies all types of Viscosity grade Imported bitumen both in bulk and packed form.
					Incorporated in the year 2017, Premium Petro Products' Headquarters is located in Jaipur with its
					presence in Jodhpur, Pipavav, Kandla and Mundra. The Quality Philosophy is ingrained in Team PREMIUM
					PETRO PRODUCTS and our skilled personnel is dedicated to delivering the best quality products on a
					consistent basis.
				</p>


			</div>



			<div class="col-lg-6 col-12">
				<br /> <br />
				<img src="<?php echo base_url('images/01.jpg'); ?>" alt="img" class="img-responsive">
			</div>






		</div>
	</div>
</section>

<section class="ls s-py-xl-160 text-sm-left text-center s-py-lg-130 s-py-md-90 s-py-60 c-gutter-60" id="our-reach">
	<div class="container" style="padding:100px 0 30px 0!important;">
		<div class="row" style='margin:0!important;'>



			<div class="col-12 text-center">
				<h2 class="special-heading text-sm-left text-center">
					<span class="text-capitalize">
						Our Reach
					</span>
				</h2>
				<div class="divider-line bg-maincolor"></div>
				<div class="fw-divider-space divider-30"></div>
				<img src="<?php echo base_url('images/Map.png'); ?>" alt="img" style="width:100%; max-width:900px;">


			</div>

		</div>
	</div>
</section>

<section class="ls s-py-xl-160 text-sm-left text-center s-py-lg-130 s-py-md-90 s-py-60 c-gutter-60" id="our-reach">
	<div class="container" style="padding:100px 0 30px 0!important;">
		<div class="row" style='margin:0!important;'>



			<div class="col-12 text-center">
				<h2 class="special-heading text-sm-left text-center">
					<span class="text-capitalize">
						Awards and Certificates
					</span>
				</h2>
				<div class="divider-line bg-maincolor"></div>
				<div class="fw-divider-space divider-30"></div>
				<div class="row">
					<div class="col-12 col-md-6">
						<div style="padding:10px">
							<div>
								<img src="<?php echo base_url('assets/aw1.jpg'); ?>" alt="img"
									style="width:100%; max-width:900px;">

							</div>
						</div>

					</div>
					<div class="col-12 col-md-6">
						<div style="padding:10px">
							<div>
								<img src="<?php echo base_url('assets/aw2.jpg'); ?>" alt="img"
									style="width:100%; max-width:900px;">

							</div>
						</div>
					</div>
				</div>


			</div>

		</div>
	</div>
</section>

<section id="team" class="ls ms s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60">
	<div class="container">
		<div class="row" style='margin:0!important;'>
			<div class="col-sm-12">

				<h2 class="special-heading text-center">
					<span class="text-capitalize">
						Our Footprints
					</span>
				</h2>
				<br /><br />
				<div class="timeline">
					<div class="container left">
						<div class="date d1">July<br>2017</div>
						<i class="icon fa fa-home"></i>
						<div class="content co1">
							<h2>Mokhampura (Jaipur) Plant</h2>

						</div>
					</div>
					<div class="container right">
						<div class="date d1">January<br>2018</div>
						<i class="icon fa fa-home"></i>
						<div class="content co1">
							<h2>Mundra (Gujarat) Plant</h2>

						</div>
					</div>
					<div class="container left">
						<div class="date d1">September<br>2019</div>
						<i class="icon fa fa-home"></i>
						<div class="content co1">
							<h2>Pipavav (Gujarat) Plant</h2>

						</div>
					</div>
					<div class="container right">
						<div class="date d1">March<br>2020</div>
						<i class="icon fa fa-home"></i>
						<div class="content co1">
							<h2>Karwar (Jodhpur) Plant</h2>

						</div>
					</div>
					<div class="container left">
						<div class="date d1">October<br>2020</div>
						<i class="icon fa fa-home"></i>
						<div class="content co1">
							<h2>Kandla (Gujarat) Plant</h2>

						</div>
					</div> 	
					<div class="container right">
						<div class="date d1">Jun<br>2021</div>
						<i class="icon fa fa-home"></i>
						<div class="content co1">
							<h2>Kota (Rajasthan) Plant</h2>

						</div>
					</div>
					<div class="container left">
						<div class="date d1">April<br>2022</div>
						<i class="icon fa fa-home"></i>
						<div class="content co1">
							<h2>Barmer (Rajasthan) Plant</h2>

						</div>
					</div> 
					<div class="container right">
						<div class="date d1">Jun<br>2023</div>
						<i class="icon fa fa-home"></i>
						<div class="content co1">
							<h2>Parbatsar (Nagaur) Plant</h2>

						</div>
					</div>	
				</div>
			</div>
		</div>
		<div class="mt--20"></div>
	</div>
</section>