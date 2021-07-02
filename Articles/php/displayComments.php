<?php

function displayComments($idArticle)
{
    //connecting to the database :
    require_once('../../All/db/connexion.php');
    $db = connecteMyDb();
    //get comment data from the Database :
    $sql = 'SELECT userId, comment from comment
    where articleId = ?';
    $requet = $db->prepare($sql);
    $requet->execute(array($idArticle));
    while ($data = $requet->fetch()) :
        $userId = $data['userId'];
        $comment = $data['comment'];
        $infosUser = getInfoAuthorById($userId);
        $picture = '../../User/images/' . $infosUser['picture'];
        $fullName = $infosUser['firstName'] . ' ' . $infosUser['lastName'];
?>

        <!-- author markup -->
        <div class="userComment flex">

            <img src="<?= $picture ?>" alt="User of Comment">
            <div class="flex-column">
                <span><?= $fullName ?></span>
                <span><?= $comment ?></span>
            </div>

        </div><hr>

<?php endwhile;
}
