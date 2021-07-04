<?php
// if approve button was clicked
if (isset($_POST['submit'])) {
    // varibles :
    $idArticle = $_POST['idArticle'];
    // connect to the database :
    require_once('../../All/db/connexion.php');
    $db = connecteMyDb();
    // sql to approve article:
    $sql = 'UPDATE article 
    set validation = 1 
    where id = ?';
    // prepare sql :
    $request = $db->prepare($sql);
    // execute sql
    $request->execute(array($idArticle));
    // check if the sql sucess
    if($request)  
        header('Location: approve_disapprove_Article.php');
        else
        echo 'Problem';
}
