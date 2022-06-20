<?php
if(isset($_SESSION['id']) || isset($_SESSION['user'])){
    $hashId = sha1('id');
    $hashIdValue = sha1($user->id);
    header('Location: profile.php?'.$hashId.'='.$hashIdValue);
    exit();
}
?>