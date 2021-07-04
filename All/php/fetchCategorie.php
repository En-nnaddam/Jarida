<?php
if (isset($_GET['categorie'])) {
    // get variables: 
    $category = $_GET['categorie'];
    // function to load articles :
    require_once('../../All/php/articleFunctions.php');
    // connexion to the database:
    require_once('../../All/db/connexion.php');
    $db = connecteMyDb();
    // sql to search articles by categorie:
    $sql = "SELECT * FROM article where category = ? and validation = 1";
    // prepare request :
    $request = $db->prepare($sql);
    // execute request
    $request->execute(array($category));
    // case succes..
    if (!$request) {
        header('Location:javascript://history.go(-1)');
    } else {
        // include header site :
        require('../../All/php/header.php');
        // Break space:
        echo '<br><br>';
        // load artciles
        loadArticles($request, '/Jarida/Articles/images/', '../../Articles/pdfs/');
        // Break space:
        echo '<br><br>';
        // include footer :
        require('../../All/php/footer.php');
    }
}
