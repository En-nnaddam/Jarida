<?php require('../../All/php/header.php'); ?>
<?php require_once('../../User/php/userFunctions.php'); ?>

<!-- Blocking the not users to acces  -->
<?php blockNoUser(); ?>

<div class="userContainer">

    <section id="profile-user" class="flex">
    
        <!-- User Picture -->
        <?php if (isset($_SESSION['userPicter'])) : ?>
            <img src="<?= '../images/' . $_SESSION['userPicter'] ?>" alt="User Image">
        <?php endif; ?> <br><br>
    
        <div class="userInfos flex-column gap">
    
            <?php if (
                isset($_SESSION['firstName']) &&
                isset($_SESSION['lastName'])
            ) : ?>
                <h1> <?= $_SESSION['firstName'] . ' ' . $_SESSION['lastName'] ?> </h1>
            <?php endif; ?>
    
            <?php if (isset($_SESSION['description'])) : ?>
                <div><?= $_SESSION['description'] ?></div>
            <?php endif; ?>
    
        </div>
    
    </section>

</div>


<br><br>

<?php require('../../All/php/footer.php'); ?>