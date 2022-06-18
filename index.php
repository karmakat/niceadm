<?php
include('includes/functions.php');
include('config/database.php');
session_start();
if (isset($_POST['login'])) {
    $auth = validate($_POST['txtauth']);
    $password = validate($_POST['txtpass']);
    if (!empty($auth) && !empty($password)) {
        $q = $db->prepare("SELECT id FROM t_users 
        WHERE (user = :txtauth OR mail=:txtauth)
        AND password = :txtpass AND active='1'");
        $q->execute([
            'txtauth' => $auth,
            'txtpass' => sha1($password)
        ]);

        $userHasBeenFound = $q->rowCount();

        if ($userHasBeenFound) {
            $user = $q->fetch(PDO::FETCH_OBJ);
            $_SESSION['id'] = $user->id;
            $_SESSION['user'] = $user->user;
            include('filters/guest_filter.php');
            //redirect('profile.php');
        } else {
            
            set_flash('Invalid username, mail or password', 'danger');
            save_input_data();
        }
    } else {

        $errors[] = "All fields are required";
        save_input_data();
    }
} else {
    clear_input_data();
}
?>
<?php require('views/login.view.php'); ?>