<?php
if (!isset($_SESSION['user']) && isset($_COOKIE['remember_me'])) {
    $username = $_COOKIE['remember_me'];
    $_SESSION['user'] = $username;
}
?>
