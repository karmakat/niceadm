<?php
session_start();
include('filters/guest_filter.php');
include('includes/functions.php');
include('config/database.php');

if (
	isset($_POST['register'])
) {
	$username = validate($_POST['txtuser']);
	$mail = validate($_POST['txtmail']);
	$password = validate($_POST['txtpass']);
	$confirmpassword = validate($_POST['txtpassconf']);
	if (
		!empty($username) &&
		!empty($mail) &&
		!empty($password) &&
		!empty($confirmpassword)
	) {

		$errors = [];

		if (mb_strlen($username) < 3) {
			$errors[] = "Too short username(min 3)";
		}
		if (mb_strlen($username) > 11) {
			$errors[] = "Too long username(max 10)";
		}
		if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
			$errors[] = "Invalid mail";
		}
		if (mb_strlen($password) < 6) {
			$errors[] = "Too short password(min 6)";
		} else {
			if ($password != $confirmpassword) {
				$errors[] = "Differents passwords";
			}
		}
		if (is_already_in_use('user', $username, 't_users')) {
			$errors[] = "Username already in use";
		}
		if (is_already_in_use('mail', $mail, 't_users')) {
			$errors[] = "Mail already in use";
		}
		if (count($errors) == 0) {
			$to = $mail;
			$subject = WEBSITE_NAME . " - ACTIVATION DU COMPTE";
			$token = sha1($username . $mail . sha1($password));

			ob_start();
			require('templates/mails/activation.tmpl.php');
			$content = ob_get_clean();

			$headers = 'MIME-Version: 1.0' . "\r\n";
			$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

			mail($to, $subject, $content, $headers);

			set_flash("Activation mail sent to " . "<strong>".$mail."</strong>", "success");

			$q = $db->prepare("INSERT INTO t_users(user,mail,password)
			VALUES(:user, :mail, :password)");
			$q->execute([
				'user' => $username,
				'mail' => $mail,
				'password' => sha1($password)
			]);


			redirect('index.php');
		
		}
		else{
			save_input_data();
		}
	} else {
		$errors[] = "All fields are required";
		save_input_data();
	}
}
else{
	clear_input_data();
}
?>
<?php require('views/signup.view.php'); ?>