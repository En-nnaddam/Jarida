<?php require('../../All/php/header.php'); ?>
<!-- include the loadArticles function -->
<?php require('../../All/php/articleFunctions.php'); ?>

<br><br>

<?php
if (isset($_GET['search'])) {
    $article = $_GET['article'];
    require('../../All/db/connexion.php');

    $db = connecteMyDb();
    $sql = "SELECT * FROM article where title LIKE '%" . $article . "%' ";
    $reponse = $db->query($sql); ?>

<?php if ($reponse) : ?>

<?php  loadArticles($reponse, '../../Articles/images/', '../../Articles/pdfs/'); ?>

<?php endif;
} ?>

<br><br>

<?php require('../../All/php/footer.php'); ?>