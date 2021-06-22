<?php
session_start();

// Blocking not user to access
if(!isset($_SESSION['userId'])) {
    header('Location: /Jarida/User/php/profile.php'); 
}

// blocking directly access :
if(!isset($_POST['idArticle'])) {
    header('Location: /Jarida/User/php/profile.php'); 
}

echo '<script>Welcome to delete article</script>';

//connexion
require '../../All/db/connexion.php';
$db = connecteMyDb();
$sql = 'DELETE FROM article WHERE id = ?';
$requet = $db->prepare($sql);
$reponse = $requet->execute(array($_POST['idArticle']));

if($reponse) {
    echo '<script> alert("Article removed") </script>';
    header('Location: ./myArticles.php');
} else {
    echo '<script> alert("Something wrong!") </script>';
}