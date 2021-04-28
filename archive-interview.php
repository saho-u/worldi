<?php get_header(); ?>
	<div class="ct-wrap">
			<div class="main-inner">
				<section class="page-top">
					<div class="lead">
						<h1 class="lead-main slideUp">INTERVIEW</h1>
						<div class="lead-sub slideUp">お客様の声</div>
					</div>
			</section>
			<section class="interview">
				<div class="p__content">
					<ul class="interviewlist">
						<?php
							query_posts(array(
								'orderby' => 'date',
								'order' => 'DESC',
								'post_type' => 'interview',
								'posts_per_page' => -1,
							));
							if(have_posts()) {
								while(have_posts()) {
									the_post();
									$image_src = '';
									$image_alt = '';
									$image = post_custom('image');
									if($image) {
										$attachment_image_src = wp_get_attachment_image_src($image, 'full');
										$image_src = $attachment_image_src[0];
										$image_alt = get_post_meta($image, '_wp_attachment_image_alt', true);
									}
									$title = post_custom('title');
									$industry = post_custom('industry');
									$service_key = post_custom('service');
									$service_name = '';
									$company_name = post_custom('company_name');

									if($service_key == 'recruitment') {
										$service_name = '外国人人材紹介';
									} else if($service_key == 'consulting') {
										$service_name = 'コンサルティング';
									} else if($service_key == 'japanese') {
										$service_name = '日本語教育事業';
									} else if($service_key == 'abroad') {
										$service_name = '海外留学事業';
									} else {
										$service_key = 'other';
									}

						?>
							<li class="interviewlist__item slideUp">
								<a href="<?php echo get_permalink(); ?>">
									<div class="interviewlist__item-img">
										<img src="<?php echo $image_src; ?>">
									</div>
									<div class="interviewlist__item-txt">
										<div class="label <?php echo $service_key; ?>"><span><?php echo $service_name; ?></span></div>
										<div class="title"><?php echo nl2br($title); ?></div>
										<div class="company_name"><?php echo $company_name; ?>様</div>
									</div>
								</a>
							</li>
						<?php
								}
							}
						?>
					</ul>
				</div>
			</section>
		</div>
<?php get_template_part('bottom'); ?>
<?php get_footer(); ?>
