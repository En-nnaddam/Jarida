<?php
// get variables :
$idUser = $_POST['idUser'];
$isAuthor = $_POST['isAuthor'];
// connect to database: 
require_once('../../All/db/connexion.php');
$db = connecteMyDb();
// prepare sql to delete user
$sql = "DELETE FROM user where id = ? ";
$requet = $db->prepare($sql);
// execute sql :
$requet->execute(array($idUser));
// if the requet is executed successfuly
if ($requet) {
    // if he is an author :
    if ($isAuthor) {
        // prepare sql to delete him from the database:
        $sql = 'DELETE FROM author where userId = ?';
        $requet = $db->prepare($sql);
        // execute sql :
        $requet->execute(array($idUser));
        // if the requet is executed successfuly
        if ($requet)
            // GO BACK TO REMOVE USER SERVER    
            header('Location: removeUser.php');
    }
} else
    // inform something wrong
    die('somthing Wrong');
