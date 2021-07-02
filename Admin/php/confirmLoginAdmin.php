<?php
session_start();

if (isset($_POST['login'])) {
    // include clean function
    require_once('../../All/php/functions.php');
    // get data and set them to variables :
    $valid = [];
    $valid['userName'] = true;
    $valid['password'] = true;

    $userName = clean($_POST['username']);
    $password = $_POST['password'];
    // include connect to database function :
    require_once('../../All/db/connexion.php');
    $db = connecteMyDb();
    // fetch data admin from database :
    $sql = 'SELECT * from admin
    where userName = ?';
    // prepare sql
    $requet = $db->prepare($sql);
    $requet->execute(array($userName));
    // fetch 
    $data = $requet->fetch();
    if ($data) {

        if ($data['password'] == $password) {
            $_SESSION['userName'] = $userName;
            header('Location: admin.html.php');
        } else {
            $valid['password'] = false;
        }

    }
    else {
        $valid['userName'] = false;
    }
}
