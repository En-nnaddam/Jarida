<?php 
    session_start();
    session_destroy();
    header('Location: /jarida/Home/php/index.php');