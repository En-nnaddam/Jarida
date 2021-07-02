<?php
    require_once('../../All/php/functions.php');

    //init variables :
    $invalid = [];
    $invalid['firstName'] = '';
    $invalid['lastName'] = '';
    $invalid['email'] = '';
    
    if (isset($_POST['create'])) {
        // Connect with the database
        require('../../All/db/connexion.php');
    
        //The path to store the uploaded images:
        $target = "../../User/images/" . basename($_FILES['picture']['name']);
    
        // Recupare data user :
        $id = 0;
        $firstName = clean($_POST['firstName']);
        $lastName = clean($_POST['lastName']);
        $email = $_POST['email'];
        $password = md5($_POST['password']);
        $confirmPassword = md5($_POST['confirmPassword']);
        $gender = $_POST['gender'];
        $description = clean($_POST['description']);
        $picture = $_FILES['picture']['name'];
    
        if (isset($_POST['author'])) {
            $author = 1;
        } else {
            $author = 0;
        }
    
    
        if (isset($_POST['author'])) {
            $age = $_POST['age'];
            $nationality = clean($_POST['nationality']);
            $speciality = clean($_POST['speciality']);
            $degree = clean($_POST['degree']);
        } else {
            $age = '';
            $nationality = '';
            $speciality = '';
            $degree = '';
        }
    
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
                            picture,
                            author)
                            values(?, ?, ?, ?, ?, ?, ?, ?)';
    
                        $requet = $db->prepare($sql);
                        $requet->execute(array(
                            $firstName,
                            $lastName,
                            $email,
                            $password,
                            $gender,
                            $description,
                            $picture,
                            $author
                        ));
    
                        //Move the uploaded image into the folder images:
                        if (move_uploaded_file($_FILES['picture']['tmp_name'], $target)) {
                            echo '<script> alert("Image uploaded succesfuly") </script>';
                        } else {
                            echo '<script> alert("No picture Inserted") </script>';
                        }
    
                        // insert data author user into the database :
                        if ($author) {
                            $sql = 'SELECT id FROM user WHERE email = ?';
                            $requet = $db->prepare($sql);
                            $requet->execute(array($email));
                            $donnee = $requet->fetch();
    
                            if ($donnee) {
                                $id = $donnee['id'];
                            }
    
                            $sql = 'INSERT INTO author(
                                userId,
                                age,
                                nationality,
                                speciality,
                                degree)
                            VALUES(?, ?, ?, ?, ?)';
    
                            $requet = $db->prepare($sql);
                            $reponse = $requet->execute(array(
                                $id,
                                $age,
                                $nationality,
                                $speciality,
                                $degree
                            ));
    
                            if (!$reponse) {
                                echo '<script> alert("Cannot upload author Infos") </script>';
                            }
                        } 
                        
                        if ($requet) {
                            echo '<script> alert(\'Created succesfuly\') </script>';
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
    