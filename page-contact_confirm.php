<?php get_header(); ?>
		<div class="ct-wrap contact">
			<div class="main-inner">
				<section class="page-top">
					<div class="lead">
						<h1 class="lead-main">CONTACT</h1>
						<div class="lead-sub">お問い合わせ</div>
						<p class="lead-text">
							入力内容をご確認ください。
						</p>
					</div>
				</section>
				<section class="contact-inner">
					<form action="" method="post" id="contactform">
						<div class="contact-form confirmform">
							<dl class="contact-form__item">
								<dt class="contact-form__head">Name</dt>
								<dd class="contact-form__data">
									<span class="text"><?php echo htmlspecialchars($c_data['name01']); ?></span>
								</dd>
							</dl>
							<dl class="contact-form__item">
								<dt class="contact-form__head">Tel</dt>
								<dd class="contact-form__data">
									<span class="text"><?php echo htmlspecialchars($c_data['tel']); ?></span>
								</dd>
							</dl>
							<dl class="contact-form__item">
								<dt class="contact-form__head">Email</dt>
								<dd class="contact-form__data">
									<span class="text"><?php echo htmlspecialchars($c_data['email']); ?></span>
								</dd>
							</dl>
							<dl class="contact-form__item">
								<dt class="contact-form__head">Message</dt>
								<dd class="contact-form__data">
									<span class="text"><?php echo nl2br(htmlspecialchars($c_data['message'])); ?></span>
								</dd>
							</dl>
							<div class="contact-btn__confirm">
								<span class="back"><input class="btn" type="submit" value="&lt; 修正する"></span>
								<span class="send"><input class="btn" type="submit" value="送信する&gt;"></span>
							</div>
						</div>
						<input type="hidden" name="mode" value="C2">
						<input type="hidden" name="token" value="<?php echo $token; ?>">
					</form>
				</section>
			</div>
		</div>
<script>
$(function() {
	$('#contactform .back').on('click', function() {
		$('#contactform input[name="mode"]').val('CB');
		return true;
	});
});
</script>
<?php get_template_part('bottom'); ?>
<?php get_footer(); ?>
