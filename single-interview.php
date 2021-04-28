<?php get_header(); ?>
<?php
	if(have_posts()) {
		while(have_posts()) {
			the_post();
			$detail_image_src = '';
			$detail_image_alt = '';
			$detail_image = post_custom('image');
			if($detail_image) {
				$attachment_image_src = wp_get_attachment_image_src($detail_image, 'full');
				$detail_image_alt = get_post_meta($detail_image, '_wp_attachment_image_alt', true);
				$detail_image_src = $attachment_image_src[0];
			}
			$name = get_the_title();
			$position = post_custom('position');
			$person = post_custom('person');
			$company_name = post_custom('company_name');
			$industry = post_custom('industry');
			$address = post_custom('address');
			$website = post_custom('website');
			$title = post_custom('title');
			$service_key = post_custom('service');
			$service_url = 'other';

			if($service_key == 'recruitment') {
				$service_key = 'passion';
			} else if($service_key == 'consulting') {
				$service_key = 'consulting';
			} else if($service_key == 'japanese') {
				$service_key = 'japanese';
			} else if($service_key == 'abroad') {
				$service_key = 'abroad';
			} else {
				$service_key = 'other';
			}


			$articles = array();
			$scf_articles = SCF::get('articles');
			foreach($scf_articles as $scf_artcle) {
				if($scf_artcle['article_image']) {
					$section_image_src = '';
					$section_image_alt = '';
					$section_image = $scf_artcle['article_note'];
					if($section_image) {
						$attachment_image_src = wp_get_attachment_image_src($section_image, 'full');
						$section_image_src = $attachment_image_src[0];
						$section_image_alt = get_post_meta($section_image, '_wp_attachment_image_alt', true);
					}
					$articles[] = array(
						'text' => $scf_artcle['article_text'],
						'image' => $scf_artcle['article_image'],
						'image_src' => $section_image_src,
						'image_alt' => $section_image_alt,
						'note' => $scf_artcle['article_note'],
					);
				} else {
					$articles[] = array(
						'text' => $scf_artcle['article_text'],
						'image' => $detail_image_src,
						'image_alt' => $detail_image_alt,
						'image_src' => $detail_image_src,
						'note' => $scf_artcle['article_note'],
					);
				}
			}
			$scf_interviewees = SCF::get('interviewee');
			foreach($scf_interviewees as $scf_interviewee) {
				$interviewee[] = array(
					'position' => $scf_interviewee['interviewee_position'],
					'name' => $scf_interviewee['interviewee_name']
				);
			}
?>
		<div class="ct-wrap">
			<div class="main-inner interview">
				<div class="pc">
					<section class="interview-top">
						<div class="interview-top__company">
							<div class="c-name">
								<div class="c-label"><span><?php echo $industry; ?></span></div>
								<a href="<?php echo $website; ?>" target="_blank" rel="noopener noreferrer"><?php echo $company_name; ?></a>
							</div>
							<ul class="c-person">
								<?php for($i = 0; $i < count($interviewee); $i++) { ?>
									<li>
										<div class="c-person__hr"><?php echo($interviewee[$i]['position']); ?></div>
										<div class="c-person__item"><?php echo($interviewee[$i]['name']); ?><span>様</span></div>
									</li>
								<?php } ?>
							</ul>
						</div>
						<div class="interview-top__img">
							<img src="<?php echo $detail_image_src; ?>">
						</div>
					</section>
				</div>
				<div class="sp">
					<section class="interview-top">
						<div class="interview-top__img">
							<img src="<?php echo $detail_image_src; ?>">
						</div>
						<div class="interview-top__company">
							<div class="c-label"><span><?php echo $industry; ?></span></div>
							<div class="c-name">
								<a href="<?php echo $website; ?>" target="_blank" rel="noopener noreferrer"><?php echo $company_name; ?></a>
							</div>
							<ul class="c-person">
								<?php for($i = 0; $i < count($interviewee); $i++) { ?>
									<li>
										<div class="c-person__hr"><?php echo($interviewee[$i]['position']); ?></div>
										<div class="c-person__item"><?php echo($interviewee[$i]['name']); ?><span>様</span></div>
									</li>
								<?php } ?>
							</ul>
						</div>
					</section>
				</div>
				<section class="interview-title">
					<hr class="title__line" />
						<p class="title__text"><?php echo nl2br($title); ?></p>
					<hr class="title__line" />
				</section>
				<section class="interview-detail">
					<ul class="i-col">
						<?php for($i = 0; $i < count($articles); $i++) { ?>
							<li class="col2-inner">
								<p class="i-col__text">
									<?php echo nl2br($articles[$i]['text']); ?>
								</p>
							</li>
						<?php } ?>
					</ul>

					<div class="button-block">

						<?php if($service_key = 'passion') { ?>
								<a class="btn" href="<?php echo home_url(); ?>/service/passion/">パッション採用のページへ</a>
						<?php } ?>

						<a class="btn" href="<?php echo home_url(); ?>/interview/">インタビュー一覧へ</a>
					</div>
				</section>
			</div>
	</div>
<?php
		}
	}
?>
<?php get_footer(); ?>
