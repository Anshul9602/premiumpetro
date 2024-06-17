<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<script src="https://code.jquery.com/jquery-3.6.1.slim.min.js" integrity="sha256-w8CvhFs7iHNVUtnSP0YKEg00p9Ih13rlL9zGqvLdePA=" crossorigin="anonymous"></script>
<style>
	.slick-prev:before,
	.slick-next:before {
		color: #000;
	}

	.tarns .card {
		background-color: transparent !important;
		border: none !important;
		border-radius: 0 !important;
		color: #FFF !important;
	}

	.tarns .card-body h5 {
		color: #FFF !important;
	}

	.tarns .card img {
		width: 150px;
	}

	.icon-styled i {
		width: auto;
	}

	.swiper {
		width: 100%;
		height: 100%;
	}

	.card {
		height: 100%;
	}

	.page_slider .intro_layers1 {

		display: flex;
		flex-direction: column;
		justify-content: center;
		margin-left: 250px;
		margin-right: 150px;
		padding: 250px 63px 187px 63px;
		position: relative;
		width: 100%;
		z-index: 1
	}

	.home-latest-posts {
		padding-bottom: 164px !important;
	}

	.supply-chain-img {
		width: 26%;
		align-self: center;
		padding: 20px;
	}

	.transport-card-body {
		text-align: center;
	}
	.row{
		margin:0px;
	}

	@media(max-width:1600px) {
		.page_slider .intro_layers1 {
			margin-left: 100px;
			margin-right: 50px;

			padding: 200px 50px 100px 50px;
		}
	}

	@media(max-width:1200px) {
		.page_slider .intro_layers1 {
			margin: 0 auto;
			padding: 200px 0px 100px 0px;
		}

		.home-latest-posts {
			padding-bottom: 144px !important;
		}
	}

	@media(max-width:768px) {
		.page_slider .intro_layers1 {
			padding: 120px 20px 50px 20px;
			text-align: center;
		}

		.cus_hh {
			font-size: 40px !important;
		}

		.home-latest-posts {
			padding-bottom: 114px !important;
		}
	}

	@media (min-width: 300px) and (max-width: 575px) {
		.page_slider .intro_featured_word1 {
			font-size: 25px;
			margin-bottom: 20px;
			text-align: center;
		}

		.home-latest-posts {
			padding-bottom: 164px !important;
		}

		.home-latest-posts {
			padding-bottom: 104px !important;
		}

	}
</style>
<h1 style="display:none">preimium petro</h1>

<section id="contact-pop-up" style="position:fixed; inset:0; background:rgba(0,0,0,0.5); display:none; z-index:999;">
	<div style="height:100%; width:100%; display:flex; justify-content:center; align-items:center">
		<div style="height:300px; width:80%; max-width:500px; background:#09445a; border-radius:10px; display:flex; align-items:center; justify-content:center; position:relative">
			<div style="padding:0 20px;text-align: center;">
				<h4 style="color:#fff;">Connect to one of our sales agent for all your bitumen needs</h4>
				<a class="btn btn-gradient big-btn d-none d-md-block" href="<?php echo base_url() ?>contact">Contact Us</a>
				<a class="btn btn-gradient big-btn d-md-none" href="tel:+919672007111">Contact Us</a>
			</div>

			<i class="fa fa-times" id="contact-pop-up-close" style="position:absolute; top:20px; right:20px; color:#000; cursor:pointer;" aria-hidden="true"></i>
		</div>

	</div>
</section>


<section class="page_slider">
	<div class="flexslider">
		<ul style="min-height:95vh" class="slides">

			<li class="ds cover-image">
				<img src="assets/img/Banner-1-min.webp" alt="img">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="intro_layers_wrapper">
								<div class="intro_layers">
									<div class="intro_layer">
										<h2 class="text-capitalize intro_featured_word" style='font-weight:400;'>
											PWD EMPANELMENT BY THE GOVT. OF UTTARAKHAND
										</h2>
										<a href="<?php echo base_url() ?>contact" class="btn btn-outline-darkgrey big-btn">get a quote</a>
									</div>
								</div> <!-- eof .intro_layers -->
							</div> <!-- eof .intro_layers_wrapper -->
						</div> <!-- eof .col-* -->
					</div><!-- eof .row -->
				</div><!-- eof .container-fluid -->
			</li>






			<li class="ds cover-image">
				<img src="assets/img/Banner-3-min.jpg" alt="img">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="intro_layers_wrapper">
								<div class="intro_layers">
									<div class="intro_layer">
										<h2 class="text-capitalize intro_featured_word" style='font-weight:400;'>
											WELCOME TO PREMIUM PETRO PRODUCTS
										</h2>
										<a href="<?php echo base_url() ?>contact" class="btn btn-outline-darkgrey big-btn">get a quote</a>
									</div>
								</div> <!-- eof .intro_layers -->
							</div> <!-- eof .intro_layers_wrapper -->
						</div> <!-- eof .col-* -->
					</div><!-- eof .row -->
				</div><!-- eof .container-fluid -->
			</li>
			<li class="ds cover-image">
				<img src="assets/img/Banner-2-min.webp" alt="img">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="intro_layers_wrapper">
								<div class="intro_layers">
									<div class="intro_layer">
										<h6 class="intro_before_featured_word"></h6>
										<h2 class="text-capitalize intro_featured_word" style='font-weight:400;'>
											AUTHORISED IMPORTER & SUPPLIER OF BITUMEN
										</h2>
										<a href="<?php echo base_url() ?>contact" class="btn btn-outline-darkgrey big-btn">get a quote</a>
									</div>
								</div> <!-- eof .intro_layers -->
							</div> <!-- eof .intro_layers_wrapper -->
						</div> <!-- eof .col-* -->
					</div><!-- eof .row -->
				</div><!-- eof .container-fluid -->
			</li>
			<li class="ds cover-image">
				<img src="assets/img/Banner-4-min.webp" alt="img">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="intro_layers_wrapper">
								<div class="intro_layers">
									<div class="intro_layer">
										<h6 class="intro_before_featured_word"></h6>
										<h2 class="text-capitalize intro_featured_word" style='font-weight:400;'>
											EMPANELLED SUPPLIER AUTHORIZED BY THE RAJASTHAN PWD
										</h2>
										<a href="<?php echo base_url() ?>contact" class="btn btn-outline-darkgrey big-btn">get a quote</a>
									</div>
								</div> <!-- eof .intro_layers -->
							</div> <!-- eof .intro_layers_wrapper -->
						</div> <!-- eof .col-* -->
					</div><!-- eof .row -->
				</div><!-- eof .container-fluid -->
			</li>


		</ul>
	</div> <!-- eof flexslider -->
</section>

<section class="ds text-sm-left text-center container-px-0 c-gutter-0">
	<div class="container-fluid">
		<div class="row service-v2">
			<div class="col-sm-6 col-md-3  ">
				<div class="icon-box service-single with-icon layout2 ds text-center">

					<div class="icon-styled  fs-50">
						<i class="fas fa-plane"></i>
					</div>


					<h5>
						Certified Importer
					</h5>



				</div>
			</div>
			<div class="col-sm-6 col-md-3  ">
				<div class="icon-box service-single with-icon layout2 ds text-center">

					<div class="icon-styled  fs-50">
						<i class="fas fa-shipping-fast"></i>
					</div>


					<h5>
						We Deliver Quality
					</h5>



				</div>
			</div>
			<div class="col-sm-6 col-md-3  ">
				<div class="icon-box service-single with-icon layout2 ds text-center">

					<div class="icon-styled  fs-50">
						<i class="fas fa-clock"></i>
					</div>

					<h5>
						Always On Time
					</h5>



				</div>
			</div>
			<div class="col-sm-6 col-md-3   ">
				<div class="icon-box service-single with-icon layout2 ds text-center">

					<div class="icon-styled  fs-50">
						<i class="fas fa-heart"></i>
					</div>


					<h5>
						We Are Passionate
					</h5>



				</div>
			</div>
		</div>
	</div>
</section>

<section class="ls main-testimonial s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60">
	<div class="container">
		<div class="row justify-content-around">
			<div class="col-12 col-lg-3 row text-center">
				<h3 class="special-heading text-center col-12">
					<span class="text-capitalize">
						ABOUT US
					</span>
				</h3>
				<div class="col-12">
					<a class="btn btn-gradient" href="<?php echo base_url() ?>aboutus">Know More</a>
				</div>

			</div>
			<div class="col-12 col-lg-6 text-center">
				<div class="divider-35 hidden-above-lg"></div>
				<div class="divider--5"></div>

				<p class="excerpt" style="text-align: justify;color:#000;">
					Our firm is manufacturing all types of Emulsion and Modified Bitumen and
					importing Bitumen (both Bulk and Packed) from Middle East countries.
					Premium Petro Products is also the Empanelled Supplier authorized by the Rajasthan PWD.
				</p>
				<p class="excerpt" style="text-align: justify;color:#000;">

					We are now PWD Empanelled authorized Bitumen Supplier by the Government of Uttarakhand.

				</p>
				<p class="excerpt" style="text-align: justify;color:#000;">
					Source Imported Viscosity Grade Bitumen, Penetration Grade Bitumen, Bitumen Emulsion And More, At
					Fair Prices!
				</p>
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
<section class=" text-sm-left text-center container-px-0  ">
	<div class="container mt-md-5 mt-3 pt-4">
		<div class="row service-v2">
			<div class="col-md-4 mt-3">


				<a href="<?php echo base_url()  ?>aboutus#our-history">

					<img src="images/our.png" alt="img" width="100%">

				</a>



			</div>
			<div class="col-md-4 mt-3">


				<a href="<?php echo base_url()  ?>aboutus#our-reach">

					<img src="images/our_reach.png" alt="img" width="100%">

				</a>
			</div>
			<div class="col-md-4 mt-3">

				<a href="<?php echo base_url()  ?>aboutus#our-vision">

					<img src="images/mission.png" alt="img" width="100%">
				</a>

			</div>
		</div>
	</div>
</section>


<section class="ls ms s-pt-xl-160 s-pt-lg-130 s-pt-md-90 s-pt-60 s-pb-xl-280 s-pb-lg-250 s-pb-md-90 s-pb-60">
	<div class="container home-latest-posts">
		<div class="row">
			<div class="col-12">
				<h3 class="special-heading text-start">
					<span class="text-capitalize">
						Latest Posts
					</span>
				</h3>

				<div class="divider-50 hidden-below-lg"></div>
				<div class="divider-30 hidden-above-lg"></div>
				<div class="shortcode-posts row tiled-layout c-gutter-30 c-mb-30">
					<div class="bigitem col-xl-6 col-lg-5">
						<article class="vertical-item ls rounded post type-post status-publish format-standard has-post-thumbnail">
							<div class="item-media post-thumbnail">
								<a href="<?php echo base_url() . 'blog/post/' . $posts[sizeof($posts) - 1]['url'] ?>">
									<img src="<?php echo $posts[sizeof($posts) - 1]['image'] ?>" alt="img">
								</a>
							</div><!-- .post-thumbnail -->
							<div class="item-content">
								<header class="entry-header">
									<div class="entry-meta">
										<div class="byline">
											<span class="date">
												<a href="<?php echo base_url() . 'blog/post/' . $posts[sizeof($posts) - 1]['url'] ?>" rel="bookmark">
													<time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">
														<?php echo $posts[sizeof($posts) - 1]['date'] ?>
													</time>
												</a>
											</span>
											<span class="author vcard">
												<a class="url fn n" href="<?php echo base_url() . 'blog/post/' . $posts[sizeof($posts) - 1]['url'] ?>" rel="author"><span>by</span>
													<?php echo $posts[sizeof($posts) - 1]['author'] ?>
												</a>
											</span>
										</div>
									</div>
									<h4 class="entry-title">
										<a href="<?php echo base_url() . 'blog/post/' . $posts[sizeof($posts) - 1]['url'] ?>" rel="bookmark">
											<?php echo substr(strip_tags($posts[sizeof($posts) - 1]['heading']), 0, 150) ?>...
										</a>
									</h4>

									<!-- .entry-meta -->
								</header>
								<!-- .entry-header -->

								<div class="entry-content">
									<p>
										<?php echo substr(strip_tags($posts[sizeof($posts) - 1]['content']), 0, 350) ?>...
									</p>
								</div><!-- .entry-content -->
							</div><!-- .item-content -->
						</article><!-- #post-## -->
					</div>
					<div class=" smallitem col-xl-6 col-lg-7">

						<?php for ($i = 0; $i < sizeof($posts) && $i < 2; $i++) { ?>
							<article class="vertical-item side-item ls rounded post type-post status-publish format-standard has-post-thumbnail">
								<div class="item-media post-thumbnail">
									<a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>">
										<img src="<?php echo $posts[$i]['image'] ?>" alt="img">
									</a>
								</div><!-- .post-thumbnail -->
								<div class="item-content">
									<header class="entry-header">
										<div class="entry-meta">
											<div class="byline">
												<span class="date">
													<a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>" rel="bookmark">
														<time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">
															<?php echo $posts[$i]['date'] ?>
														</time>
													</a>
												</span>
												<span class="author vcard">
													<a class="url fn n" href="#" rel="author"><span>by</span>
														<?php echo $posts[$i]['author'] ?>
													</a>
												</span>
											</div>
										</div>
										<h4 class="entry-title">
											<a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>" rel="bookmark">
												<?php echo substr(strip_tags($posts[$i]['heading']), 0, 150) ?>...
											</a>
										</h4>

										<!-- .entry-meta -->
									</header>
									<!-- .entry-header -->

									<div class="entry-content">
										<p>
											<?php echo substr(strip_tags($posts[$i]['content']), 0, 150) ?>...
										</p>
									</div><!-- .entry-content -->
								</div><!-- .item-content -->
							</article>

						<?php } ?>
					</div>
				</div>
				<div class="mt--30"></div>
			</div>
		</div>
	</div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0 tarns" style="background-color: #09202F;">
	<div class="container" style="padding-bottom:20px; padding-top:90px;">
		<h3 class="special-heading text-center" style="margin-bottom:30px!important;color:#fff;">
			<span class="text-capitalize">
				Transportation System
			</span>
		</h3>
		<div class="row">
			<div class="col-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom:20px;">
				<div class="card" style="width:100%">
					<img src="assets/check-mark.png" class="card-img-top supply-chain-img" alt="...">
					<div class="card-body transport-card-body">
						<h5>Home Feets And Supply Chain</h5>
						<p class="card-text">We have our own fleet of services that will give you one stop solution for your transportation and delivery services of your petro product</p>
					</div>
				</div>
			</div>

			<div class="col-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom:20px;">
				<div class="card" style="width:100%">
					<img src="assets/supply-chain-management.png" class="card-img-top supply-chain-img" alt="...">

					<div class="card-body transport-card-body">
						<h5>Hassle Free Solutions</h5>
						<p class="card-text">Our live GPS fleet tracking service bridges communication gaps between managers, drivers, and your company, ensuring clarity on arrival times and enhancing overall business efficiency</p>
					</div>
				</div>
			</div>



			<div class="col-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom:20px;">
				<div class="card" style="width:100%">
					<img src="assets/smartphone.png" class="card-img-top supply-chain-img" alt="...">
					<div class="card-body transport-card-body">
						<h5>Live Tracking</h5>
						<p class="card-text">Our Real time tracking Services will put you in direct Control of the vechicle. It Provides Several benefits
							from real time tracking to increasing overall productivity of your business.</p>
					</div>
				</div>
			</div>



			<div class="col-12 col-sm-6 col-md-6 col-lg-6" style="margin-bottom:20px;">
				<div class="card" style="width:100%">
					<img src="assets/save-money.png" class="card-img-top supply-chain-img" alt="...">
					<div class="card-body transport-card-body">
						<h5>Cost Effectiveness</h5>
						<p class="card-text">Reduce the cost of transportation with our delivery system to boost your profitability. Depending on your freight’s shipping destination, costs related to logistics transportation services may vary.</p>
					</div>
				</div>
			</div>
		</div>




	</div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0 mt-5">
	<div class="row" style="justify-content: end;">
		<div class="col-md-4 col-5">
			<h3 class="special-heading cus_hh" style="font-size:130px;color:#09202F;">
				<span class="text-capitalize">
					Road
				</span>
			</h3>
		</div>
		<div class="col-md-8 col-7">
			<img src="assets/road.png" alt="img" width="100%">
		</div>
		<div class="col-md-10">
			<h3 class="special-heading text-center cus_hh" style="font-size:150px;color:#09202F;">
				<span class="text-capitalize">
					Construction
				</span>
			</h3>
		</div>
	</div>
	<div class="container" style="padding-bottom:20px; padding-top:50px;">

		<div class="row justify-content-between">
			<div class="col-md-5 text-center mt-3">
				<img src="images/roads/road1.png" class="card-img-top" alt="..." style="width:100%">
			</div>
			<div class="col-md-6 mt-md-3 mt-4" style="    align-items: center;    display: flex;">
				<div>
					<h2>National Highways</h2>
					<p style="color:#000;">The National highways in India are a network of trunk roads owned by the Ministry of Road Transport and Highways. They connect important cities, towns, ports etc. of different states. They may even connect the neighbouring countries. Most of the existing highways are now four-lane roads, much of this is being expanded to six or more lanes. National Highways constitute 2.7% of India's total road network.</p>
				</div>
			</div>
			<div class="divider-50 hidden-above-lg"></div>
			<div class="col-md-6 mt-3 " style="    align-items: center;    display: flex;">
				<div>
					<h2>State Highways</h2>
					<p style="color:#000;">This is the network of roads maintained by the state governments. These roads are constructed and managed by the states' Public Works Department. The state highways are usually roads that link important cities, towns and district headquarters within the state and connect them with National Highways or State Highways of neighbouring states.</p>
				</div>
			</div>
			<div class="col-md-5 text-center mt-md-3 mt-4">
				<img src="images/roads/road2.png" class="card-img-top" alt="..." style="width:100%">
			</div>
			<div class="divider-50 hidden-above-lg"></div>
			<div class="col-md-5 text-center mt-3">
				<img src="images/roads/road3.png" class="card-img-top" alt="..." style="width:100%">
			</div>
			<div class="col-md-6 mt-md-3 mt-4" style="    align-items: center;    display: flex;">
				<div>
					<h2>Major District Roads</h2>
					<p style="color:#000;">These are the roads within a district connecting market and production areas to state or national Highways or railways stations. The MDR has lower speed and geometric design specifications than National Highways or State Highways.</p>
				</div>
			</div>
			<div class="divider-50 hidden-above-lg"></div>
			<div class="col-md-6 mt-3" style="    align-items: center;    display: flex;">
				<div>
					<h2>Other District Roads</h2>
					<p style="color:#000;">These roads connect rural areas of production to market centres, or other main roads. These roads have lower design specifications than Major District Roads. These roads are looked after by district authorities with the help of State Government Departments. They are also known as Minor District Roads.</p>
				</div>
			</div>
			<div class="col-md-5 text-center mt-md-3 mt-4">
				<img src="images/roads/road4.png" class="card-img-top" alt="..." style="width:100%">
			</div>

		</div>




	</div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0 mt-5">

	<div class="row" style="justify-content: end;">
		<div class="col-md-12">
			<h3 class="special-heading cus_hh" style="font-size:200px;color:#09202F;">
				<span class="text-capitalize">
					Airport
				</span>
			</h3>
		</div>

		<div class="col-md-10">
			<h3 class="special-heading text-center cus_hh" style="font-size:200px;color:#09202F;">
				<span class="text-capitalize">
					Runways
				</span>
			</h3>
		</div>
	</div>

	<div class="container" style="padding-top:50px;">

		<div class="row justify-content-between ">
			<div class=" col-md-5" >
				<img src="images/air.png" class="img-responsive" alt="img">
			</div>
			<div class="col-md-6 mt-md-0 mt-4 align-content-center">
				<div>
					<h2>Airport Runways</h2>
					<p style="color:#000;">A runway is the most important part of any airport. Runways can be unpaved, gravel, asphalt or concrete. Unpaved runways cannot be operated in rainy weather, making the use of such facilities quite limited. To make top layer, a mix of gravel (19mm max size) and polymer-modified bitumen was used. Using such binding is required to make the runway more resistant to rutting in hot weather.</p>
				</div>
			</div>
		</div>





	</div>
</section>

<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0">
	<div class="container" style="padding-bottom:50px; padding-top:0px;">
		<h3 class="special-heading text-center" style="margin-bottom:30px!important;">
			<span class="text-capitalize">
				Testimonials
			</span>
		</h3>

		<div class="testimonials-slider-slick">
			<div style="padding:10px; width:100%; text-align:center;">
				<div style="border:2px solid #dd4454;padding:10px">
					<img src="<?php echo base_url()  ?>images/testimonials1-min.webp" alt="img" class="img-fluid">

				</div>

			</div>

			<div style="padding:10px; width:100%; text-align:center;">
				<div style="border:2px solid #dd4454;padding:10px">
					<img src="<?php echo base_url()  ?>images/testimonials2-min.webp" alt="img" class="img-fluid">

				</div>

			</div>

			<div style="padding:10px; width:100%; text-align:center">
				<div style="border:2px solid #dd4454;padding:10px">
					<img src="<?php echo base_url()  ?>images/testimonials3-min.webp" alt="img" class="img-fluid">

				</div>

			</div>

			<div style="padding:10px; width:100%; text-align:center">
				<div style="border:2px solid #dd4454;padding:10px">
					<img src="<?php echo base_url()  ?>images/testimonials4-min.webp" alt="img" class="img-fluid">

				</div>

			</div>

			<div style="padding:10px; width:100%; text-align:center">
				<div style="border:2px solid #dd4454;padding:10px">
					<img src="<?php echo base_url()  ?>images/testimonials5-min.webp" alt="img" class="img-fluid">

				</div>

			</div>

			<div style="padding:10px; width:100%; text-align:center">
				<div style="border:2px solid #dd4454;padding:10px">
					<img src="<?php echo base_url()  ?>images/testimonials6.jpg" alt="img" class="img-fluid">

				</div>

			</div>

			<div style="padding:10px; width:100%; text-align:center">
				<div style="border:2px solid #dd4454;padding:10px">
					<img src="<?php echo base_url()  ?>images/testimonials7-min.webp" alt="img" class="img-fluid">

				</div>

			</div>

			<div style="padding:10px; width:100%; text-align:center">
				<div style="border:2px solid #dd4454;padding:10px">
					<img src="<?php echo base_url()  ?>images/testimonials8-min.webp" alt="img" class="img-fluid">

				</div>

			</div>


		</div>

	</div>
</section>


<section class="ls  s-py-xl-160 s-py-lg-130 s-py-md-90 s-py-60 text-sm-left text-center container-px-0 d-none">
	<div class="cover-image s-cover-left">
		<!-- <a href="images/service3.webp" class="photoswipe-link side-video" data-width="800" data-height="800"
			data-iframe="https://www.youtube.com/embed/GhthHC0s38A"></a> -->
		<img src="images/service3-min.webp" alt="01">
	</div>
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-12 col-lg-6">

			</div>
			<div class="col-xs-12 col-12 col-lg-6">
				<div class="content-center">
					<h2 class="special-heading text-sm-left text-center">
						<span class="text-capitalize">
							Airport Runways
						</span>
					</h2>
					<div class="divider-45 hidden-below-lg"></div>
					<div class="divider-30 hidden-above-lg"></div>
					<p>
						A runway is the most important part of any airport. Runways can be unpaved, gravel, asphalt or
						concrete. Unpaved runways cannot be operated in rainy weather, making the use of such facilities
						quite limited. To make top layer, a mix of gravel (19mm max size) and polymer-modified bitumen
						was used. Using such binding is required to make the runway more resistant to rutting in hot
						weather.
					</p>
					<div class="divider-50 hidden-below-lg"></div>
					<div class="divider-30 hidden-above-lg"></div>
					<!-- <div id="comingsoon-countdown"></div> -->
				</div>
			</div>
		</div>
	</div>
</section>