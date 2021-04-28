<?php get_header(); ?>
		<div class="ct-wrap contact">
			<div class="main-inner">
				<section class="page-top">
					<div class="lead">
						<h1 class="lead-main slideUp">CONTACT</h1>
						<div class="lead-sub slideUp">お問い合わせ</div>
						<p class="lead-text slideUp">
							弊社についてのご質問は、<br class="sp" />こちらのフォームよりお問い合わせください。<br>下記項目にご記入の上、「入力内容を確認」<br class="sp" />ボタンをクリックしてください。
						</p>
					</div>
				</section>
				<section class="contact-inner">
					<form action="" method="post" id="contactform">
						<div class="contact-form">
							<dl class="contact-form__item">
								<dt class="contact-form__head required">Name</dt>
								<dd class="contact-form__data">
									<input type="text" name="name01" id="username" placeholder="山田　太郎" value="<?php echo htmlspecialchars($c_data['name01']); ?>">
								</dd>
							</dl>
							<dl class="contact-form__item">
								<dt class="contact-form__head">Tel</dt>
								<dd class="contact-form__data">
									<input type="text" name="tel" id="phonenum" placeholder="000-0000-0000" value="<?php echo htmlspecialchars($c_data['tel']); ?>">
								</dd>
							</dl>
							<dl class="contact-form__item">
								<dt class="contact-form__head required">Email</dt>
								<dd class="contact-form__data">
									<input type="text" name="email" id="mailaddress" placeholder="example@worldi.jp" value="<?php echo htmlspecialchars($c_data['email']); ?>">
								</dd>
							</dl>
							<dl class="contact-form__item">
								<dt class="contact-form__head required">Message</dt>
								<dd class="contact-form__data">
									<textarea name="message"><?php echo htmlspecialchars($c_data['message']); ?></textarea>
								</dd>
							</dl>
							<div class="agree-check">
								<input type="checkbox" name="agree" id="agree" value="<?php echo $token; ?>">
								<label for="agree" class="check-box">個人情報保護方針に同意する</label>
							</div>
							<div class="contact-btn__input">
								<span><input class="btn" type="submit" value="入力内容を確認する　&gt;"></span>
							</div>
						</div>
						<input type="hidden" name="mode" value="C1">
						<input type="hidden" name="token" value="<?php echo $token; ?>">
					</form>
				</section>
			</div>
		</div>
<script>
$(function() {
	$('#contactform').on('submit', function() {
		var message = '';
		if($('input[name="name01"]').val() == '') {
			message += 'お名前を入力してください\n';
		}
		if(('input[name="email"]').val().match(/^[a-zA-Z0-9_.+-]+@([a-zA-Z0-9][a-zA-Z0-9-]*[a-zA-Z0-9]*\.)+[a-zA-Z]{2,}$/i)) {
			message += 'メールアドレスを入力してください\n';
		}
		if($('textarea[name="message"]').val() == '') {
			message += 'お問い合わせ内容を入力してください\n';
		}
		if(!$('input[name="agree"]').is(':checked')) {
			message += '個人情報保護方針に同意してください\n';
		}
		if(message != '') {
			alert(message);
			return false;
		}
		return true;
	});
});
</script>
<?php get_template_part('bottom'); ?>
<?php get_footer(); ?>
