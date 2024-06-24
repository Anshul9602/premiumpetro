<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>


<style>
	.card {
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
	}

	@media (max-width: 767.98px) {
		.new_f {
			font-size: 14px !important;
			line-height: normal;

		}
	}
</style>
<section class="page_title ds s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-250 s-pt-180 s-pb-60" style="background-image:url('images/Blog-Page-Banner_4.jpg'); background-size:cover!important; background-repeat:no-repeat!important; background-position:center!important;">
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h1>Blog</h1>
				<div class="breadcrumb-wrap">
					<ol class="breadcrumb">
						<li class="breadcrumb-item">
							<a href="<?php echo base_url()  ?>">Home</a>
						</li>
						<li class="breadcrumb-item">
							<a href="<?php echo base_url() ?>blog">Blog</a>
						</li>

					</ol>
				</div>

			</div>


		</div>
	</div>
</section>

<section class="ls ms s-pt-xl-70 s-pb-xl-70 s-pt-lg-130 s-pb-lg-90 s-py-md-90 s-py-60">
	<div class="container">
		<div class="row c-gutter-60">
			<div class="col-md-6">
				<h2 class="mt-2 card-title text-sm-left text-start" style="text-align: start;">
					<span class="text-capitalize" style="color:#09202F;">
						Featured blogs
					</span>
				</h2>
				<?php for ($i = 0; $i < sizeof($posts); $i++) { ?>
					<div class="card text-center mt-4" style="background-color: #F4F4F4;border-radius: 26.5px;    overflow: hidden;">
						<a class="card-img-top" href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>">
							<img src="<?php echo base_url() . $posts[$i]['image'] ?>" alt="img">
						</a>
						<div class="card-body">
							<div class="entry-meta">
								<div class="byline">
									<span class="date">
										<a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>" rel="bookmark" style="color: #1475B5;font-weight: 700;">
											<time class="published entry-date" datetime="2019-04-09T12:23:09+00:00">
												<?php echo $posts[$i]['date'] ?>
											</time>
										</a>
									</span>
									<span class="author vcard">
										<a class="url fn n" href="#" rel="author" style="color: #1475B5;"><span>by</span>
											<?php echo $posts[$i]['author'] ?>
										</a>
									</span>
								</div>
							</div>
							<h6 class="mt-2 card-title  text-center" style="">

								<a class="text-capitalize" style="color:#000000;text-align: center;" href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>" rel="bookmark">
									<?php echo $posts[$i]['heading'] ?>
								</a>

								</h4>
								<p class=" mt-2 card-text text-start pb-2" style="    text-align: center;color:#000000;">
									<?php echo substr(strip_tags($posts[$i]['content']), 0, 150) ?>...
								</p>
								<a class="btn btn-gradient " style="padding:10px 20px;" href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>">read more</a><br>
						</div>
					</div> <?php } ?>

			</div>
			<div class="col-md-6 mt-md-0 mt-4">
				<h4 class="mt-2 card-title text-sm-left text-start" style="text-align: start;">
					<span class="text-capitalize " style="color:#09202F;">
						all blogs
					</span>
				</h4>
				<?php for ($i = 0; $i < sizeof($posts); $i++) { ?>
					<div class=" row m-0 pt-4" style="align-items: center;">
						<a class="media-image col-md-4 col-5 p-0 " href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>" style="border-radius: 10px;    overflow: hidden;">
							
							<div style="background-image: url('<?php echo $posts[$i]['image'] ?>');height:120px;width:100%;background-size: cover;background-position: center;"></div>
						</a>
						<div class=" col-md-8 col-7">
							<h6 class="mb-2 new_f">
								<a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>">
									<?php echo substr(strip_tags($posts[$i]['heading']), 0, 150) ?>
								</a>
							</h6>
							<p class="item-meta">
								<i class="far fa-calendar-alt"></i>
								<?php echo $posts[$i]['date'] ?>
							</p>

						</div>
					</div>

				<?php } ?>
			</div>






		</div>

	</div>
</section>