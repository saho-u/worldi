<?php get_header(); ?>
	<div class="ct-wrap">
		<div class="main-inner">
			<section class="page-top">
				<div class="lead">
					<h1 class="lead-main slideUp">SERVICE</h1>
					<div class="lead-sub slideUp">サービス</div>
					<p class="lead-text slideUp">
						私たちは世界中の<span class="underline">「日本で働きたい」</span>と夢を持つ</br>すべての外国人の夢を応援します。
						外国人雇用および生活に関するトータルサポートをします。
					</p>
				</div>
			</section>
			<div class="pc">
				<?php include("page_include/service_pc.php"); ?>
			</div>
			<div class="sp">
				<?php include("page_include/service_sp.php"); ?>
			</div>
			<!-- <section class="service-flow">
				<div class="service-flow__img">
					<img class="back move-fast" src="<?php echo esc_url(get_template_directory_uri()); ?>/shared/images/service/img_service-flow.svg">
				</div>
			</section> -->
		</div>
	</div>
<?php get_footer(); ?>
