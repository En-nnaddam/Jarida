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

                <button onclick="confirm(<?= $donnee['id'] ?>)">Delete</button>

            </article><br>

        <?php endwhile; ?>

    </section>

    <!-- ===== End Articles ===== -->

<?php else : ?>

    <script>
        alert("Something Wrong");
    </script>

<?php endif; ?>

<form class="confirmation" style="display: none;" action="deleteArticle.php" method="post">

<div>
<input type="text" id="idArticle" name="idArticle">
<p> Are you sure ? you want to delete this article</p> <br>
<button type="submit" name="confirmation">Sure</button>
<button type="button" onClick="hideConfirm()">Not Sure</button>
</div>

</form>

<br><br>
<!-- ===== Footer ===== -->
<?php require('../../All/php/footer.php'); ?>