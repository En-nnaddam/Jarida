<?php
    session_start();

    function getInfoUser($data) {
        $_SESSION['userId'] = $data['id'];
        $_SESSION['userPicter'] = $data['picter'];
        $_SESSION['firstName'] = $data['firstName'];
        $_SESSION['lastName'] = $data['lastName'];
    } 

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
        $data = $requet->fetch();

        if($data) {

            if($data['password'] == $password) {

                getInfoUser($data);
                header("Location: /Jarida/Home/php/index.php");

            } else {
                echo '<script> alert(\'Wrong password\') </script>';
            }

        } else {
            echo '<script> alert(\'Wrong email\') </script>';
        }

    }