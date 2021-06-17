<?php
session_start();
if(!isset($_SESSION['userId'])) {
    header('Location: /Jarida/User/php/profile.php'); 
}
//connexion
require '../../All/db/connexion.php';
$db = connecteMyDb();
$sql = 'DELETE FROM article WHERE id = ?';
$requet = $db->prepare($sql);
$reponse = $requet->execute(array($_GET['idArticle']));

if($reponse) {
    echo '<script> alert("Article removed") </script>';
    header('Location: ./myArticles.php');
} else {
    echo '<script> alert("Something wrong!") </script>';
}