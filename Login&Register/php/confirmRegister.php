<?php
require_once('./functions.php');

//init variables :
$invalid = [];
$invalid['firstName'] = '';
$invalid['lastName'] = '';

if (isset($_POST['create'])) {
    // Connect with the database
    require('../../All/db/connexion.php');

    //The path to store the uploaded images:
    $target = "../../User/images/" . basename($_FILES['picter']['name']);

    // Recupare data user :
    $firstName = clean($_POST['firstName']);
    $lastName = clean($_POST['lastName']);
    $email = $_POST['email'];
    $password = md5($_POST['password']);
    $confirmPassword = md5($_POST['confirmPassword']);
    $gender = $_POST['gender'];
    $description = clean($_POST['description']);
    $picter = $_FILES['picter']['name'];

    if (estValideName($firstName)) {

        if (estValideName($lastName)) {

            if ($password == $confirmPassword) {

                //connexion with database :
                $db = connecteMyDb();

                // check if the user existe in database
                $sql = 'SELECT email FROM user WHERE email = ?';
                $requet = $db->prepare($sql);
                $requet->execute(array($email));
                $data = $requet->fetch();

                // test if there is no email like that in the database :
                if ($data < 1) {

                    // insert data user into the database :
                    $sql = 'INSERT INTO user(
                    firstName,
                    lastName,
                    email,
                    password,
                    gender,
                    description,
                    picter)
                    values(?, ?, ?, ?, ?, ?, ?)';

                    $requet = $db->prepare($sql);
                    $requet->execute(array(
                        $firstName,
                        $lastName,
                        $email,
                        $password,
                        $gender,
                        $description,
                        $picter
                    ));

                    //Move the uploaded image into the folder images:
                    if (move_uploaded_file($_FILES['picter']['tmp_name'], $target)) {
                        echo '<script> alert("Image uploaded succesfuly") </script>';
                    } else {
                        echo '<script> alert("Oops!") </script>';
                    }

                    if ($requet) {
                        header('Location: ./login.php');
                    } else {
                        echo '<script> alert(\'Something wrong\') </script>';
                    }
                } else {
                    echo '<script> alert(\'Connot create, email Already exist \') </script>';
                }
            } else {
                $_POST['password'] = '';
                $_POST['confirmPassword'] = '';
                echo '<script> alert(\'No Matching passwords\') </script>';
            }
        } else {
            $invalid['lastName'] = "Invalide Name";
        }
    } else {
        $invalid['firstName'] = "Invalide Name";
    }
}
