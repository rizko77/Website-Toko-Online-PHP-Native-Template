<?php
if (!isset($_SESSION['user']) && isset($_COOKIE['remember_me'])) {
    $_SESSION['user'] = $_COOKIE['remember_me'];
}
session_start();
include "db.php";
include "remember_me.php";
?>
