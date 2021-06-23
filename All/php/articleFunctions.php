<?php require_once('functionServer.php'); ?>

<?php function loadArticles($requet, $imageUrl = '../images/')
{ ?>

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
                <img src="<?= $imageUrl . $donnee['image'] ?>" alt="<?= $donnee['image']; ?>">

                <?php if (isMyArticlesServer()) : ?>
                    <button onclick="confirm(<?= $donnee['id'] ?>)">Delete</button>
                <?php endif; ?>


                <?php if (isJournalsServer()) : ?>

                    <!-- If The online user was the owner of article -->
                    <?php
                    if (isset($_SESSION['userId'])) {
                        if ($_SESSION['userId'] == $donnee['author']) {
                            // register the id of the article
                            $_SESSION['idArticle'] = $donnee['id'];
                            echo  '<a href="./deleteArticle.php"><button>Delete</button></a>';
                        }
                    } ?>

                <?php endif; ?>

            </article><br>

        <?php endwhile; ?>

    </section>

    <!-- ===== End Articles ===== -->
<?php } ?>