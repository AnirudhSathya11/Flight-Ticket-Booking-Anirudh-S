<?php

include('./includes/helper.php');
session_start();

if(!isset($_SESSION['user']))
{
    header('location:'.url('login.php'));
    $user = $_SERVER['user'];
    die();
}