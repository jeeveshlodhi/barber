<?php
    include_once 'includes/session.php';
    $sessionObj = Session::getInstance();
    $sessionObj -> logout();
    header('location: index.php');
?>
