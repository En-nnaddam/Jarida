<?php session_start(); ?>

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
    case "/Jarida/Articles/php/addArticle.php": ?>

      <link rel="stylesheet" href="/Jarida/Articles/css/article.css" />
      <link rel="stylesheet" href="/Jarida/Articles/css/addArticle.css" />
      <link rel="stylesheet" href="/Jarida/Articles/css/confirmation.css" />
      <?php break; ?>

    <?php
    case "/Jarida/User/php/profile.php": ?>

      <link rel="stylesheet" href="/Jarida/User/css/profile.css" />

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
      <img src="/Jarida/All/img/jarida-light.png" alt="Jarida Logo Orange">
      <img src="/Jarida/All/img/Loader.png" alt="Jarida Logo Stroke">
    </div>
    <h1>Loading ...</h1>
  </div>

  <header class="header-site gap" id="header">
    <i onclick="toggleMenu()" class="fas fa-bars"></i>

    <figure class="logo">
      <div class="flex-center">
        <img src="/Jarida/All/img/jarida-light.png" alt="Logo Jarida" onmouseover="logoHover()" onmouseout="logoOut()" />

        <figcaption>
          <span class="arida">arida</span><br />
          <pre>International Scientific Journal</pre>
        </figcaption>
      </div>
    </figure>

    <div class="flex gap register">

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

      <form action="./search.php" method="POST" class="flex-center gap">
        <div class="select-box">
          <div class="options-container">
            <div class="option">
              <input type="radio" name="produit" value="mobile" id="mobile" class="radio" />
              <label for="mobile">Physical Sciences and Engineering</label>
            </div>
            <div class="option">
              <input type="radio" name="produit" value="cuisine" id="cuisine" class="radio" />
              <label for="cuisine">Life Sciences</label>
            </div>
            <div class="option">
              <input type="radio" name="produit" value="console" id="console" class="radio" />
              <label for="console">Health Sciences</label>
            </div>
            <div class="option">
              <input type="radio" name="produit" value="electro" id="electro" class="radio" />
              <label for="electro">Social Sciences and Humanities</label>
            </div>
            <div class="option">
              <input type="radio" name="produit" value="Accessoires" id="Accessoires" class="radio" />
              <label for="Accessoires">Social Sciences</label>
            </div>

          </div>
          <div class="selected">Category</div>
        </div>

      </form>

      <li><a href="./news.php">News</a></li>
      <li><a href="./archive.php">Archive</a></li>
      <li><a href="./contact.php">Contact Us</a></li>

    </ul>
  </nav>
  <!-- ===== End  navigation ===== -->