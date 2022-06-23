<?php

session_start();
include('includes/functions.php');
include('config/database.php');
include('filters/auth_filter.php');
include('includes/functions.php');

if (!empty($_GET[sha1('id')])) {

    $user_info = find_user_by_id($_SESSION['id']);

    if(!$user_info){
        redirect('login.php');
    }
    
    $user = $user_info->user;
    $mail = $user_info->mail;
    //display the username in the title of the page
    $title = $user;
} else {
    include('filters/guest_filter.php');
}


if (
	isset($_POST['update'])
) {
	$about = validate($_POST['txtabout']);
    $names = validate($_POST['txtnames']);
	$company = validate($_POST['txtcompany']);
    $job = validate($_POST['txtjob']);
    $phone = validate($_POST['txtphone']);
    $availabe_for_hiring = $_POST['txtcheck'];
	if (
		!empty($about) &&
        !empty($names) &&
		!empty($company) &&
        !empty($job) &&
		!empty($phone)
        )
	 {

		$errors = [];

		if (mb_strlen($about) < 15) {
			$errors[] = "Too short bio(min 15)";
		}
		if (mb_strlen($about) > 255) {
			$errors[] = "Too long bio(max 255)";
		}
        if (mb_strlen($names) < 2) {
			$errors[] = "Too short bio(min 3)";
		}
		if (mb_strlen($names) > 30) {
			$errors[] = "Too long username(max 30)";
		}
		if (mb_strlen($phone) > 50) {
			$errors[] = "Too long phone numbre(max 50)";
		} 
		if (count($errors) == 0) {

			$q = $db->prepare("UPDATE t_users SET names = :names, job = :job, company = :company,
            phone =  :phone, available_for_hiring = :available_for_hiring, bio = :bio WHERE id = :id");
			$q->execute([
				'names' => $names,
				'job' => $job,
				'company' => $company,
				'phone' => $phone,
                'available_for_hiring' => !empty ($availabe_for_hiring) ? '1' : '0',
                'bio' => $about,
                'id' => get_session('id')
			]);
			set_flash("Your profile was been updated");
            redirect('profile.php');
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



include('views/profile.view.php');
