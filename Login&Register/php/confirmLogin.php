<?php
    session_start();
    require('../../User/php/userFunctions.php');
    
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

                if($data['author']){
                    
                    $sql = 'SELECT * FROM author WHERE userId = ?';
                    $requet = $db->prepare($sql);
                    $requet->execute(array($data['id']));
                    $dataAuthor = $requet->fetch();

                   if($dataAuthor)
                       getInfoAuthor($dataAuthor);
                    else 
                    echo '<script> alert(\'Something wrong with dataAuthor\') </script>';
                } 

                header("Location: /Jarida/Home/php/index.php");

            } else {
                echo '<script> alert(\'Wrong password\') </script>';
            }

        } else {
            echo '<script> alert(\'Wrong email\') </script>';
        }

    }