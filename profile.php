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




include('views/profile.view.php');
