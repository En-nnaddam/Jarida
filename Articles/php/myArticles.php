<?php require('../../All/php/header.php'); ?>
<!-- include the loadArticles function -->
<?php require_once('../../All/php/articleFunctions.php'); ?>

<?php require_once('../../User/php/userFunctions.php'); ?>

<!-- Blocking the not users to acces  -->
<?php blockNoUser(); ?>

<!-- accessibility only for authors -->
<?php if ($_SESSION['author']) : ?>
    <?php
    $userId = $_SESSION['userId'];
    // connection :
    require '../../All/db/connexion.php';
    $db = connecteMyDb();
    $sql = 'SELECT * FROM article WHERE author = ? AND validation = 1';
    $requet = $db->prepare($sql);

    if ($requet->execute(array($userId))) : ?>

        <?php loadArticles($requet); ?>

    <?php else : ?>

        <script>
            alert("Something Wrong");
        </script>

    <?php endif; ?>
    <!-- Boite Confirmation: -->
    <?php include('../../All/php/boiteConfirmation.html.php') ?>

<?php else : ?>

    <?php include('../../All/php/lock.html.php'); ?>

<?php endif ?>

<br><br>
<!-- ===== Footer ===== -->
<?php require('../../All/php/footer.php'); ?>