<?php
include('partials/_stylelinks.php');


?>

<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <h2>Acivate your account</h2>
    <p>
        To activate your account, please click on link bellow:
    </p>
    <br><br>
    <a href="<?php

                echo WEBSITE_URL . '/activation.php
            ?user=' . $username . '&token=' . $token


                ?>">Lien d'activation</a>
</body>

</html>