<?php
    session_start();

    if(isset($_POST['login'])) {
        // to connect with data base: 
        require_once('../../All/db/connexion.php');

        //Data from user : 
        $email = $_POST['email'];
        $password = md5($_POST['password']);

        $db = connecteMyDb();
        $sql = 'SELECT * FROM user WHERE email = ?';
        $requet = $db->prepare($sql);
        $requet->execute(array($email));
        $donnee = $requet->fetch();

        if($donnee) {

            if($donnee['password'] == $password) {

                $_SESSION['userId'] = $donnee['id'];
                $_SESSION['userPicter'] = $donnee['picter'];
                $_SESSION['firstName'] = $donnee['firstName'];
                $_SESSION['lastName'] = $donnee['lastName'];

                header("Location: /Jarida/Home/php/index.php");

            } else {
                echo '<script> alert(\'Wrong password\') </script>';
            }

        } else {
            echo '<script> alert(\'Wrong email\') </script>';
        }

    }