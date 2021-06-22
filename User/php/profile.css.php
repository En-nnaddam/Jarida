<style>
 <?php switch ($_SERVER['PHP_SELF']) {

    case '/Jarida/User/php/profile.php': ?>
    .userDo a:nth-child(1) {
        color: var(--main-color-0);
        padding-bottom: 1.5em;
        border-bottom: 0.2em solid;
        }
    <?php break; ?>

    <?php case '/Jarida/Articles/php/addArticle.php': ?>
    .userDo a:nth-child(2) {
        color: var(--main-color-5);
        padding-bottom: 1.5em;
        border-bottom: 0.2em solid;
    }
    <?php break; ?>

    <?php case '/Jarida/Articles/php/myArticles.php': ?>
    .userDo a:nth-child(3) {
        color: var(--main-color-9);
        padding-bottom: 1.5em;
        border-bottom: 0.2em solid;
    }
     <?php break; ?>

     <?php case '/Jarida/User/php/editProfile.php': ?>
    .userDo a:nth-child(4) {
        color: var(--main-color-2);
        padding-bottom: 1.5em;
        border-bottom: 0.2em solid;
    }
    <?php break; ?>

    <?php } ?>
</style>