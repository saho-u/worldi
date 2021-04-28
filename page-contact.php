<?php
	session_start();

	define('BR', "\r\n");
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");

	$mode = '';
	$c_keys = array(
		'name01',
		'tel',
		'email',
		'message',
		'agree',
	);
	$c_data = array();
	foreach($c_keys as $key) {
		$c_data[$key] = '';
	}
	$c_errors = array();

	$token = isset($_SESSION['token']) ? $_SESSION['token'] : '';
	$token2 = isset($_POST['token']) ? $_POST['token'] : '';
	if(isset($token,$token2) && !empty($token) && ($token == $token2)) {
		$mode = isset($_POST['mode']) ? trim($_POST['mode']) : '';
		if($mode == 'C1' || $mode == 'C2' || $mode == 'CB') {
			if(isset($_POST['name01'])) {
				foreach($c_keys as $key) {
					$c_data[$key] = isset($_POST[$key]) ? trim($_POST[$key]) : '';
				}
			}
			else if(isset($_SESSION['c_data'])) {
				foreach($c_keys as $key) {
					$c_data[$key] = isset($_SESSION['c_data'][$key]) ? $_SESSION['c_data'][$key] : '';
				}
			}

			//お名前
			if(!$c_data['name01']) {
				$c_errors['name01'] = 'お名前を入力してください。';
			}

			//電話番号
			// if(!$c_data['tel']) {
			// 	$c_errors['tel'] = '電話番号を入力してください';
			// } else if(substr($c_data['tel'],0,1) != '0' || strlen($c_data['tel']) < 10) {
			// 	$c_errors['tel'] = '電話番号を入力してください';
			// }

			//メールアドレス
			if(!$c_data['email']) {
				$c_errors['email'] = 'メールアドレスを入力してください。';
			}
			else if(!filter_var($c_data['email'], FILTER_VALIDATE_EMAIL)) {
				$c_errors['email'] = 'メールアドレスを入力してください。';
			}

			//お問い合わせ内容
			if(!$c_data['message']) {
				$c_errors['message'] = 'お問い合わせ内容を入力してください';
			}

			if(!$c_data['agree'] || $c_data['agree'] != $token) {
				$c_errors['agree'] = '個人情報保護方針に同意してください。';
			}

			if($c_errors) {
				$mode = '';
			}
			else if($mode == 'C2') {
				//ユーザー宛て件名
				$subject = "お問い合わせありがとうございます。";

				$body = "";
				$body .= "お問い合わせありがとうございます。" . BR;
				$body .= "下記の内容でお問い合わせを承りました。" . BR;
				$body .= "" . BR;
				$body .= "ーーーーーーーーーー" . BR;
				$body .= "" . BR;
				$body .= "お名前：" . $c_data['name01'] . BR;
				$body .= "電話番号：" . $c_data['tel'] . BR;
				$body .= "メールアドレス：" . $c_data['email'] . BR;
				$body .= "お問い合わせ内容：" . BR;
				$body .= $c_data['message'] . BR;
				$body .= "" . BR;
				$body .= "ーーーーーーーーーー" . BR;
				$body .= "" . BR;
				$body .= "担当者から追ってご連絡いたしますので、今しばらくお待ちくださいませ。" . BR;
				$body .= "" . BR;
				$body .= "株式会社WORLDi" . BR;
				$body .= "https://www.worldi.jp/" . BR;

				$headers = array();
				$headers[] = 'From: 株式会社WORLDi <info@worldi.jp>';

				//ユーザー宛メール送信
				wp_mail($c_data['email'], $subject, $body, $headers);

				//管理者宛メール送信
				wp_mail('info@worldi.jp', $subject, $body, $headers);

				$mode = 'C3';

				unset($_SESSION['c_data']);

				$token = md5(uniqid() . mt_rand());
				$_SESSION['token'] = $token;
			}
			else if($mode == 'C1') {
				$mode = 'C2';
				$_SESSION['c_data'] = $c_data;
			}
		}
	}
	else {
		$token = md5(uniqid() . mt_rand());
		$_SESSION['token'] = $token;
	}

	if($mode == 'C3') {
		include('page-contact_complete.php');
	} else if($mode == 'C2') {
		include('page-contact_confirm.php');
	} else {
		include('page-contact_input.php');
	}
?>
