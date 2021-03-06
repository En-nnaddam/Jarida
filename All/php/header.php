<?php session_start(); ?>

<?php function isUserDo()
{
  if (
    ($_SERVER['PHP_SELF'] == '/Jarida/User/php/profile.php') ||
    ($_SERVER['PHP_SELF'] == '/Jarida/User/php/editProfile.php') ||
    ($_SERVER['PHP_SELF'] == '/Jarida/Articles/php/addArticle.php') ||
    ($_SERVER['PHP_SELF'] == '/Jarida/Articles/php/myArticles.php')
  ) return true;

  else return false;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <link rel="stylesheet" href="/Jarida/All/css/basics.css" />
  <link rel="stylesheet" href="/Jarida/All/css/loader.css" />
  <link rel="stylesheet" href="/Jarida/All/css/header.css" />

  <?php switch ($_SERVER['PHP_SELF']) {

    case "/Jarida/Home/php/index.php":
    case "/jarida/Home/php/index.php": ?>

      <link rel="stylesheet" href="/Jarida/Home/css/slideShow.css" />
      <link rel="stylesheet" href="/Jarida/Home/css/home.css" />

      <?php break; ?>

    <?php
    case "/Jarida/Articles/php/journals.php":
    case "/Jarida/Articles/php/myArticles.php":
    case "/Jarida/All/php/fetchCategorie.php":
    case "/Jarida/Home/php/search.php":
    case "/Jarida/Articles/php/addArticle.php": ?>

      <link rel="stylesheet" href="/Jarida/Articles/css/article.css" />
      <link rel="stylesheet" href="/Jarida/Articles/css/addArticle.css" />
      <link rel="stylesheet" href="/Jarida/Articles/css/confirmation.css" />
      <link rel="stylesheet" href="/Jarida/Articles/css/comments.css" />
      <link rel="stylesheet" href="/Jarida/User/css/navigProfile.css" />
      <?php include('../../User/php/profile.css.php'); ?>
      <link rel="stylesheet" href="/Jarida/All/css/lock.css">

      <?php break; ?>

    <?php
    case "/Jarida/User/php/profile.php":
    case " ": ?>

      <link rel="stylesheet" href="/Jarida/User/css/navigProfile.css" />
      <link rel="stylesheet" href="/Jarida/User/css/profile.css" />
      <?php include('../../User/php/profile.css.php'); ?>

      <?php break; ?>

  <?php } ?>

  <link rel="stylesheet" href="/Jarida/All/css/footer.css" />
  <link rel="Icon" href="../img/jarida-light.png" />

  <script src="https://kit.fontawesome.com/cd51ce947c.js" crossorigin="anonymous"></script>

  <title>Jarida</title>
</head>

<body>

  <div class="loader">
    <div class="loader-container">
      <img src="/Jarida/All/img/jarida-stroke.png" alt="Jarida Logo Stroke">
      <img src="/Jarida/All/img/jarida-red.png" alt="Jarida Logo Orange">
      <img src="/Jarida/All/img/Loader.png" alt="Jarida Logo Stroke">
    </div>
    <h1>Loading ...</h1>
  </div>

  <?php if (!isUserDo()) : ?>

    <header class="flex header-site gap" id="header">
      <i onclick="toggleMenu()" class="fas fa-bars"></i>

      <div class="userPicter">

        <?php if (isset($_SESSION['userPicter'])) : ?>
          <a href="/Jarida/User/php/profile.php">
            <img src="<?= '/Jarida/User/images/' . $_SESSION['userPicter'] ?>" alt="User Picter">
          </a>
        <?php endif; ?>

      </div>

      <figure class="logo">
        <div class="flex-center">
          <img src="/Jarida/All/img/jarida-red.png" alt="Logo Jarida" onmouseover="logoHover()" onmouseout="logoOut()" />

          <figcaption>
            <span class="arida">arida</span><br />
            <pre>International Scientific Journal</pre>
          </figcaption>
        </div>
      </figure>

      <div class="flex register">

        <?php if (
          isset($_SESSION['firstName']) &&
          isset($_SESSION['lastName'])
        ) : ?>
          <a href="/Jarida/User/php/profile.php">My profile</a>
        <?php else : ?>
          <a href="/Jarida/Login&Register/php/login.php">Login</a>
        <?php endif; ?>

      </div>

      <i class="far fa-bell"></i>
    </header>
  <?php endif; ?>

  <!-- Menu for mobile version -->

  <nav class="navmobile">
    <ul>
      <li><a href="/Jarida/Home/php/index.php">Home</a></li>
      <li><a href="./about.php">About</a></li>
      <li><a href="/Jarida/Articles/php/journals.php">Journals</a></li>
      <li><a href="./news.php">News</a></li>
      <li><a href="./archive.php">Archive</a></li>
      <li><a href="./contact.php">Contact us</a></li>
    </ul>
  </nav>

  <!-- End Menu for mobile version -->

  <nav class="navsite flex">
    <ul class="flex">
      <li><a href="/Jarida/Home/php/index.php">Home</a></li>
      <li><a href="./about.php">About</a></li>
      <li><a href="/Jarida/Articles/php/journals.php">Journals</a></li>

      <div class="select-box">
        <div class="options-container">

          <div class="option" onmouseover="show_subCategories(0)" onmouseout="hide_subCategories(0)">
            <input type="radio" name="produit" value="electro" id="electro" class="radio" />
            <label>Physical Sciences and Engineering</label>
          </div>
          <!-- Physical Sciences and Engineering -->
          <ul class="subCategories" onmouseover="show_subCategories(0)" onmouseout="hide_subCategories(0)">
            <li><a href="../../All/php/fetchCategorie.php?categorie=Chemistry">Chemistry</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Computer">Computer</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Earth and Planetary">Earth and Planetary</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Energy">Energy</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Mathematics">Mathematics</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Physics and Astronomy">Physics and Astronomy</a></li>
          </ul>

          <div class="option" onmouseover="show_subCategories(1)" onmouseout="hide_subCategories(1)">
            <input type="radio" name="produit" value="electro" id="electro" class="radio" />
            <label>Life Sciences</label>
          </div>
          <!-- Life Sciences -->
          <ul class="subCategories" onmouseover="show_subCategories(1)" onmouseout="hide_subCategories(1)">

            <li><a href="../../All/php/fetchCategorie.php?categorie=Biochemistry and Genetics">Biochemistry and Genetics</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Environment">Environment</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Microbiology">Microbiology</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Neuroscience">Neuroscience</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Materials">Materials</a></li>
          </ul>

          <div class="option" onmouseover="show_subCategories(2)" onmouseout="hide_subCategories(2)">
            <input type="radio" name="produit" value="electro" id="electro" class="radio" />
            <label>Health Sciences</label>
          </div>
          <!-- Health sciences -->
          <ul class="subCategories" onmouseover="show_subCategories(2)" onmouseout="hide_subCategories(2)">
            <li><a href="../../All/php/fetchCategorie.php?categorie=Medicine">Medicine</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Health">Health</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Pharmacology">Pharmacology</a></li>
          </ul>

          <div class="option" onmouseover="show_subCategories(3)" onmouseout="hide_subCategories(3)">
            <input type="radio" name="produit" value="electro" id="electro" class="radio" />
            <label>Social Sciences and Humanities</label>
          </div>
          <!-- Social Sciences and Humanities -->
          <ul class="subCategories" onmouseover="show_subCategories(3)" onmouseout="hide_subCategories(3)">
            <li><a href="../../All/php/fetchCategorie.php?categorie=Arts">Arts</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Economics">Economics</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Psychology">Psychology</a></li>
            <li><a href="../../All/php/fetchCategorie.php?categorie=Humanity">Humanity</a></li>
          </ul>


        </div>
        <div class="selected">Category</div>

      </div>


      <li><a href="./news.php">News</a></li>
      <li><a href="./archive.php">Archive</a></li>
      <li><a href="https://mail.google.com/mail/u/0/#inbox?compose=VpCqJbQVlNVCBnxkhnFCZKGwJkwBKQgwDWBRhtSlZSjknvrXMjbgJxvhhxVqpGZfnpbDFQv" target="_blank">Contact Us</a></li>

    </ul>
  </nav>


  <!-- ===== End navigation ===== -->

  <!-- ===== Navigation User profile ===== -->
  <?php
  if (isUserDo()) {
    try {
      require('../../User/php/navigProfile.php');
    } catch (Exception $e) {
      echo 'Erreur : ' . $e->getMessage();
    }
  }
  ?>
  <!-- ===== End Navigation User profile ===== -->