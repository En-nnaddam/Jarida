<?php require_once('functionServer.php'); ?>
<?php include('../../Articles/php/displayComments.php'); ?>

<?php
function getInfoAuthorById(int $id)
{
    //connect to the database : 
    require_once('../../All/db/connexion.php');

    $db = connecteMyDb();
    //code sql fetch info from user
    $sql = 'SELECT firstName, lastName, picture 
            from user
            WHERE id = ?';
    //execute the sql and catch erreurs :
    $requet = $db->prepare($sql);
    // check if exist problem in sql code :
    if (!$requet->execute(array($id)))
        die();


    // get infos author :
    $data = [];
    $data = $requet->fetch(PDO::FETCH_ASSOC);
    // check image of author :
    if (empty($data['picture']))
        $data['picture'] = 'maleUserImageDefault';
    // return infos author : 
    $db = null;
    return $data;
}
?>

<?php function loadArticles($requet, $imageUrl = '../images/', $pdfUrl = '../pdfs/')
{ ?>
    <!-- ===== Articles ===== -->
    <section class="journal flex-column">

        <?php while ($donnee = $requet->fetch()) : ?>

            <article class="article flex gap">


                <div class="card">

                    <img src="<?= $imageUrl . $donnee['image'] ?>" alt="<?= $donnee['image']; ?>">
                    <div class="dateAndCategory flex gap">
                        <p alt="Hi"><?= $donnee['category'] ?></p>
                        <P><?= $donnee['date']  ?></P>
                    </div>
                    <h1><?= $donnee['title'] ?></h1>
                    <!-- get Author infos -->
                    <?php
                    $data = getInfoAuthorById($donnee['author']);
                    $picture = '../../User/images/' . $data['picture'];
                    $fullName = $data['firstName'] . ' ' . $data['lastName'];
                    ?>
                    <!-- author markup -->
                    <p class="flex-center gap">
                        <img src="<?= $picture ?>" alt="Author">
                        <span><?= $fullName ?></span>
                    </p>
                    <!-- User can do panel -->
                    <div class="doPanel flex-column gap">
                        <!-- Article's note -->

                        <p onClick="toggleHeart()">
                            <a href="articleNote.php?idArticle=<?= $donnee['id'] ?> ">
                                <i class="far fa-heart"></i>
                                <span><?= $donnee['note'] ?></span>
                            </a>
                        </p>
                        <!-- Download -->
                        <a href="<?= $pdfUrl . $donnee['pdf'] ?>" target="_blank">
                            <i class="far fa-arrow-alt-circle-down"></i>
                        </a>
                        <!-- delete button -->
                        <?php if (isMyArticlesServer()) : ?>
                            <i onclick="confirm(<?= $donnee['id'] ?>)" class="far fa-trash-alt"></i>
                        <?php endif; ?>
                    </div>
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

                </div>

                <div class="description-comment flex-column gap">

                    <!-- ===== Description of Article ===== -->
                    <div class="description-article">
                        <p><q><?= $donnee['description'] ?></q></p>
                    </div>
                    <!-- Comments of Article -->
                    <form action="../../Articles/php/addComment.php" method="POST" class="comments flex-column gap">
                        <input type="text" name="comment" placeholder="Add Comment" required>
                        <input type="text" name="idArticle" value="<?= $donnee['id'] ?>" style="display:none;">
                        <a>
                            <input type="submit" name="publish" value="publish">
                        </a>
                        <!-- comments -->
                        <div id="comments" class="flex-column gap">
                            <?php displayComments( $donnee['id'] ); ?>
                        </div>
                    </form>

                </div>

            </article>

        <?php endwhile; ?>

    </section>

    <!-- ===== End Articles ===== -->
<?php } ?>