<?php
$password = 'dratifawan9@gmail.com';
$hash = '$2y$10$zUqLEleGSpY.gWqMHR/lT.utBgIPWQ87V/uw8a/NEZqPoPytqvilC';

if (password_verify($password, $hash)) {
    echo "Password matches!";
} else {
    echo "Password does not match!";
}
?>
