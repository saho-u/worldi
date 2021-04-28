<!DOCTYPE html>
<html>
	<head>
		<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'>
		<title>株式会社WORLDi</title>
		<?php if(is_post_type_archive('interview')) { ?>
			<meta name="description" content="株式会社WORLDiは”WORLD for all / すべての人に海外を” をモットーに世界で挑戦をしたいと想うすべての人たちを応援します。">
			<meta name="keywords" content="採用情報,インタビュー,株式会社WORLDi,パッション採用,外国人人材紹介,コンサルティング,日本語教育事業,海外留学事業,外国人生活サポート,東京,日本">
		<?php } // アーカイブページ以外は、All in One SEOが出力 ?>
		<link rel="icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/shared/images/favicon.ico" type="image/vnd.microsoft.icon" />
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/css/link_css.css" as="style">
		<link link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" as="style">
		<!-- <script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/shared/js/jquery-2.2.4.min.js"></script> -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script type="text/javascript" src="<?php echo esc_url(get_template_directory_uri()); ?>/shared/js/func.js"></script>
		<script src="https://unpkg.com/scrollreveal"></script>
		<?php wp_head(); ?>
		<meta content='width=device-width, initial-scale=1' name='viewport'>
		<link rel="shortcut icon" href="<?php echo esc_url(get_template_directory_uri()); ?>/shared/images/favicon.ico" type="image/vnd.microsoft.icon" />
		<!-- Global site tag (gtag.js) - Google Analytics -->
		<!-- <script async src="https://www.googletagmanager.com/gtag/js?id=G-F2QC9HL7YK"></script>
		<script>
			window.dataLayer = window.dataLayer || [];
			function gtag(){dataLayer.push(arguments);}
			gtag('js', new Date());
			gtag('config', 'UA-191730366-1');
		</script> -->
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5H29N6P');</script>
		<!-- End Google Tag Manager -->
		<!-- Facebook Pixel Code -->
		<script>
			!function(f,b,e,v,n,t,s)
			{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
			n.callMethod.apply(n,arguments):n.queue.push(arguments)};
			if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
			n.queue=[];t=b.createElement(e);t.async=!0;
			t.src=v;s=b.getElementsByTagName(e)[0];
			s.parentNode.insertBefore(t,s)}(window, document,'script',
			'https://connect.facebook.net/en_US/fbevents.js');
			fbq('init', '434274187688496');
			fbq('track', 'PageView');
		</script>
		<noscript><img height="1" width="1" style="display:none"
		src="https://www.facebook.com/tr?id=434274187688496&ev=PageView&noscript=1"
		/></noscript>
		<!-- End Facebook Pixel Code -->
	</head>
	<body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5H29N6P"
		height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
		<!-- End Google Tag Manager (noscript) -->
		<div class="all-wrap">
			<header class="header">
				<h1 class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo esc_url(get_template_directory_uri()); ?>/shared/images/hd-logo.svg">
					</a>
				</h1>
				<ul class="nav">
					<li><a href="<?php echo home_url(); ?>"></a>ホーム</li>
					<li><a href="<?php echo home_url(); ?>/service/"></a>サービス</li>
					<li><a href="<?php echo home_url(); ?>/interview/"></a>お客様の声</li>
					<li><a href="<?php echo home_url(); ?>/contact/"></a>採用</li>
					<li><a href="<?php echo home_url(); ?>/company/"></a>WORLDiについて</li>
					<li><a href="<?php echo home_url(); ?>/contact/"></a>お問い合わせ</li>
				</ul>
				<?php include("page_include/hamburger.php"); ?>
			</header>
