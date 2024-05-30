<?php
    $file = 'login_data.txt';
    if (file_exists($file)) {
        unlink($file);
    }
    include 'index.html';
?>