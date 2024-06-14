<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="page_title ds s-pb-xl-80  s-pb-lg-100  s-pb-md-90 s-pt-md-190 s-pt-180 s-pb-60" style="background-image:url('images/Blog-Page-Banner_4.jpg'); background-size:cover!important; background-repeat:no-repeat!important; background-position:center!important;">
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

<section class="ls ms s-pt-xl-160 s-pb-xl-280 s-pt-lg-130 s-pb-lg-250 s-py-md-90 s-py-60">
	<div class="container">
		<div class="row c-gutter-60">

			<main class="col-lg-7 col-xl-8">

				<?php for ($i = 0; $i < sizeof($posts); $i++) { ?>
					<article class="vertical-item ls text-center rounded post type-post status-publish format-standard has-post-thumbnail">
						<div class="item-media post-thumbnail">
							<a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>">
								<img src="<?php echo base_url() . $posts[$i]['image'] ?>" alt="img">
							</a>
						</div><!-- .post-thumbnail -->
						<div class="item-content">
							<header class="entry-header">
								<div class="entry-meta">
									<div class="byline">
										<span class="date">
											<a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>" rel="bookmark">
												<time class="published entry-date" datetime="2019-04-09T12:23:09+00:00"><?php echo $posts[$i]['date'] ?></time>
											</a>
										</span>
										<span class="author vcard">
											<a class="url fn n" href="#" rel="author"><span>by</span> <?php echo $posts[$i]['author'] ?></a>
										</span>
									</div>
								</div>
								<h3 class="entry-title">
									<a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>" rel="bookmark">
										<?php echo $posts[$i]['heading'] ?>
									</a>
								</h3>

								<!-- .entry-meta -->
							</header>
							<!-- .entry-header -->

							<div class="entry-content">
								<p>
									<?php echo substr(strip_tags($posts[$i]['content']), 0, 150) ?>...
								</p>
							</div><!-- .entry-content -->
							<a class="btn btn-gradient big-btn" href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>">read more</a>

						</div><!-- .item-content -->
					</article><!-- #post-## -->
				<?php } ?>





			</main>

			<aside class="col-lg-5 col-xl-4">

				<div class="widget widget_search d-none">
					<h3 class="widget-title">Search</h3>
					<form role="search" method="get" class="search-form" action="/">
						<label for="search-form-widget3">
							<span class="screen-reader-text">Search for:</span>
						</label>
						<input type="search" id="search-form-widget3" class="search-field" placeholder="Search" value="" name="search">
						<button type="submit" class="search-submit">
							<span class="screen-reader-text">Search</span>
						</button>
					</form>
				</div>





				<div class="widget widget_recent_posts">

					<h3 class="widget-title">All Posts</h3>
					<ul class="list-unstyled">

						<?php for ($i = 0; $i < sizeof($posts); $i++) { ?>
							<li class="media">
								<a class="media-image" href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>">
									<img src="<?php echo $posts[$i]['image'] ?>" alt="img">
								</a>
								<div class="media-body">
									<h4>
										<a href="<?php echo base_url() . 'blog/post/' . $posts[$i]['url'] ?>"><?php echo substr(strip_tags($posts[$i]['heading']), 0, 150) ?></a>
									</h4>
									<p class="item-meta">
										<i class="far fa-calendar-alt"></i>
										<?php echo $posts[$i]['date'] ?>
									</p>

								</div>
							</li>

						<?php } ?>




					</ul>
				</div>





			</aside>


		</div>

	</div>
</section>