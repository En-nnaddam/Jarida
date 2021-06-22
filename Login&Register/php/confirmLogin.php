<?php
    session_start();

    function getInfoUser($data) {
        $_SESSION['userId'] = $data['id'];

        if($data['picter']) {
            $_SESSION['userPicter'] = $data['picter'];
        } else {
            if($data['gender'] == 'Male')
                $_SESSION['userPicter'] = 'maleUserImageDefault.jpg';
            else
                $_SESSION['userPicter'] = 'femaleUserImageDefault.jpg';
        }
        
        $_SESSION['firstName'] = $data['firstName'];
        $_SESSION['lastName'] = $data['lastName'];

        if($data['description']) {
            $_SESSION['description'] = $data['description'];
        } else {
            $_SESSION['description'] = "Hi! My name is ".$data['firstName'].", I'm a creative designer and developer at TemPlaza. I enjoy creating eye candy solutions for web and mobile applications. I'd love to work on yours, too :)";
        }
        	
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