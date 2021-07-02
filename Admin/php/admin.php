<?php
session_start();
// block no admin to join the page
if (!isset($_SESSION['userName'])) {
    header("Location: index.php");
} ?>
<!-- function servers -->
<?php require('../../All/php/functionServer.php') ?>
<!-- admin structer -->
<?php include('admin.html.php');