<?php
// start session :
session_start();
//check the click on the button publish:
if (isset($_POST["publish"])) {

    //connecting to the database :
    require_once('../../All/db/connexion.php');
    $db = connecteMyDb();
    // variables: 
    $userId = $_SESSION['userId'];
    $idArticle = $_POST['idArticle'];
    $comment = $_POST['comment'];
    //Insert comment to the database:
    $sql = "INSERT INTO 
    comment(comment, articleId, userId)
    VALUES(?, ?, ?)";
    $requet = $db->prepare($sql);
    $requet->execute(array(
        $comment,
        $idArticle,
        $userId
    ));
    if($requet) {
        header('Location: ../../Articles/php/myArticles.php');
    }
}
