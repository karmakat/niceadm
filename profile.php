<?php

session_start();
include('config/database.php');
include('filters/auth_filter.php');
include('includes/functions.php');
//select the username referenced by the id
$id = $_SESSION['id'];
$q = $db->prepare("SELECT * FROM t_users WHERE id='$id'");
$q->execute();
$data = $q->fetch(PDO::FETCH_OBJ);
$user = $data->user;
$mail = $data->mail;
//display the username in the title of the page
$title = $user;


include('views/profile.view.php');
