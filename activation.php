<?php
session_start();
include('filters/guest_filter.php');
require('config/database.php');
require('includes/functions.php');
if (
    !empty($_GET['user']) &&
    is_already_in_use('user', $_GET['user'], 't_users')
    && $_GET['token']
) {
    $user = $_GET['user'];
    $token = $_GET['token'];

    $q = $db->prepare('SELECT * FROM t_users WHERE user=?');
    $q->execute([$user]);

    $data = $q->fetch(PDO::FETCH_OBJ);


    $token_verif = sha1($user . $data->mail . $data->password);

    if ($token == $token_verif) {
        $q = $db->prepare("UPDATE t_users SET active='1' WHERE user=?");
        $q->execute([$user]);
        set_flash('Account activated', 'success');
        redirect('index.php');
    } else {
        set_flash('Activation Failed', 'danger');
        redirect('index.php');
    }
} else {
    set_flash('Activation Failed', 'danger');
    redirect('index.php');
}
