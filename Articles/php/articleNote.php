<?php
if (isset($_GET['idArticle'])) {
    // connect to db :
    require_once('../../All/db/connexion.php');
    $db = connecteMyDb();
    // sql fetch note article from db :
    $sql = 'SELECT note FROM article where id = ' . $_GET['idArticle'];
    // query sql :
    $query = $db->query($sql);
    $note = $query->fetch()['note'];
    // set note into article :
    $sql = "UPDATE article
    SET note = ?;
    where id = ?";
    // prepare & execute sql :
    $reponse = $db->prepare($sql);
    $reponse->execute(array(++$note, $_GET['idArticle']));
    header('Location: myArticles.php');
}
