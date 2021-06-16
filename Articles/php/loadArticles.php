<?php
// Connection to the database
require("../../All/db/connexion.php");

$db = connecteMyDb();
$sql = 'SELECT * FROM article';
$reponse = $db->query($sql);
?>
<br><br>

<!-- ===== Articles ===== -->
<section class="journal">

    <?php while ($donnee = $reponse->fetch()) : ?>
        <article class="page">
            <h1><?= $donnee['title'] . '<br>'; ?></h1>
            <?= $donnee['description'] . '<br>'; ?>
            <?= $donnee['date'] . '<br>'; ?>
            <?= 'Note ' . $donnee['note'] . '<br>'; ?>
            <?= $donnee['category'] . '<br>'; ?>
            <?= 'Author ' . $donnee['author'] . '<br>'; ?>
            <img src="<?= '../images/' . $donnee['image'] ?>" alt="<?= $donnee['image']; ?>">

            <!-- If The online user was the owner of article -->
            <?php
            if (isset($_SESSION['userId'])) {
                if ($_SESSION['userId'] == $donnee['author']) {
                    // register the id of the article
                    $_SESSION['idArticle'] = $donnee['id'];
                    echo  '<a href="./deleteArticle.php"><button>Delete</button></a>';
                }
            } ?>

        </article><br>
    <?php endwhile; ?>

</section>

<!-- ===== End Articles ===== -->
<br><br>