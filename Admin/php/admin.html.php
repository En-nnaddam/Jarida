<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../All/css/basics.css">
    <link rel="stylesheet" href="../css/admin.css">

    <title>Admin page</title>
    <!-- Font awesome -->
    <script src="https://kit.fontawesome.com/cd51ce947c.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="../css/addUser.css">
    <link rel="stylesheet" href="../css/logo.css">

    <!-- Remove User Server -->
    <?php if (removeUserServer()) : ?>
        <link rel="stylesheet" href="../css/removeUser.css">
        <?php include('confirmRemoveUser.css.php') ?>
    <?php endif ?>
    <!-- Admin Server -->
    <?php if (adminServer()) : ?>
        <?php include('admin.css.php'); ?>
    <?php endif ?>
    <!-- approve_disapprove_Article Server -->
    <?php if (approve_disapprove_Article_Server()) : ?>
        <link rel="stylesheet" href="/Jarida/Articles/css/article.css" />
        <link rel="stylesheet" href="/Jarida/Articles/css/confirmation.css" />
        <link rel="stylesheet" href="/Jarida/Articles/css/comments.css" />
        <link rel="stylesheet" href="../css/approve_desaprove_Article.css" />
    <?php endif ?>

</head>

<body>
    <div class="container flex">

        <nav class="flex-column gap">

            <!-- logo Jarida -->
            <figure class="logo">
                <div class="flex-center">
                    <a href="/Jarida/Home/php/index.php"><img src="/Jarida/All/img/jarida-red.png" alt="Logo Jarida" onmouseover="logoHover()" onmouseout="logoOut()" /></a>

                    <figcaption>
                        <span class="arida">arida</span><br />
                    </figcaption>
                </div>
            </figure>

            <ul class="flex-column gap">
                <li><a href="addUser.php">Add an User</a></li>
                <li><a href="removeUser.php">Remove an User</a></li>
                <li><a href="approve_disapprove_Article.php">Approve/desaprove an Article</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <h1>Welcome</h1>
        </nav>

        <!-- display conetnt  -->
        <section class="flex-center flex-column gap">
            <!-- Add User Server -->
            <?php
            if (addUserServer()) {
                require_once('confirmAddUser.php');
                include('addUser.html.php');
            } ?>
            <!-- Remove User -->
            <?php if (removeUserServer()) : ?>
                <?php include("search.html.inc.php"); ?>

                <div class="displayUsers">
                    <?php require('searchUser.php'); ?>
                </div>
                <?php require('confirmRemoveUser.html.php'); ?>

            <?php endif ?>
            <!-- Approve_disapprove_Articles -->
            <?php if (approve_disapprove_Article_Server()) : ?>
                <div class="content">
                    <?php include('fetch_Artilces_Waiting.php'); ?>
                </div>
                <?php require('../../All/php/boiteConfirmation.html.php') ?>
            <?php endif ?>

        </section>
    </div>

    <script src="/Jarida/Login&Register/js/register.js"></script>
    <!-- remove user server -->
    <?php if(removeUserServer()) : ?>
    <script src="../js/confirmRemoveUser.js"></script>
    <?php endif; ?>
    <!-- approve / desapprove artcile -->
    <?php if(approve_disapprove_Article_Server()) : ?>
    <script src="/Jarida/Articles/js/confirmation.js"></script>
    <?php endif; ?>
</body>

</html>