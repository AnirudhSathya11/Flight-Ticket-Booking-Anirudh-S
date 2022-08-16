<?php
include('./includes/helper.php');
session_start();
session_destroy();

header('location:'.url('index.php'));
die();
?>