<?php
session_start();
if (isset($_SESSION['alogin']) && strlen($_SESSION['alogin']) > 0) {
    header('location:dashboard.php');
} else {
    header('location:../adminlogin.php');
}
exit;
