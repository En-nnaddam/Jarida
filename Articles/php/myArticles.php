<?php require('../../All/php/header.php'); ?>

<!-- Blocking the not users to acces  -->
<?php if (!isset($_SESSION['userId'])) : ?>
    <script>
        location.replace("/jarida/Home/php/index.php");
    </script>
<?php endif; ?> <br><br>

<?php
$userId = $_SESSION['userId'];
// connection :
 require '../../All/db/connexion.php';
$db = connecteMyDb();
$sql = 'SELECT * FROM article WHERE author = ?';
$requet = $db->prepare($sql);
if ($requet->execute(array($userId))) : ?>

    <br><br>

    <!-- ===== Articles ===== -->
    <section class="journal">

        <?php while ($donnee = $requet->fetch()) : ?>
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

<?php else : ?>

<script>alert("Hello")</script>

<?php endif; ?>

<!-- ===== Footer ===== -->
<?php require('../../All/php/footer.php'); ?>