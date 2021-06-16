<?php require('../../All/php/header.php'); ?>

<!-- Blocking the not users to acces  -->
<?php if (!isset($_SESSION['userId'])) : ?>
    <script>
        location.replace("/jarida/Home/php/index.php");
    </script>
<?php endif; ?> <br><br>

<section id="profile-user">

    <!-- User Picture -->
    <?php if (isset($_SESSION['userPicter'])) : ?>
        <img src="<?= '../images/'.$_SESSION['userPicter'] ?>" alt="User Image">
    <?php else : ?>
        <img src="../images/userImageDefault.png" alt="User Image Default">
    <?php endif; ?> <br><br>


    <?php if (
        isset($_SESSION['firstName']) &&
        isset($_SESSION['lastName'])
    ) : ?>
        <h1> <?= $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] ?> </h1>
    <?php endif; ?> <br>

    <?php if (isset($_SESSION['description'])) : ?>
        <div><?= $_SESSION['description'] ?></div>
    <?php endif; ?>

    <a href="./logout.php"><button>Logout</button></a>

    <br><br>
    <!-- Add article -->
    <a href="/Jarida/Articles/php/addArticle.php"><button>Add Article</button></a>

    <br><br>

    <!-- Users Articles articles -->
    <a href="../../Articles/php/myArticles.php"><button>My artciles</button></a>

    <br><br>

    <!-- Edit profile -->
    <a href="./editProfile.php"><button>Edit Profile</button></a>

    <br><br>

</section>

<br><br>

<?php require('../../All/php/footer.php'); ?>