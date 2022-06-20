<?php
if(isset($_SESSION['id']) || isset($_SESSION['user'])){
    header('Location: profile.php');
    exit();
}
?>