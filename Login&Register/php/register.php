<!-- Blocking who is already connected -->
<?php if(isset($_SESSION['userId']))
  header('Location: /Jarida/Home/php/index.php');
?>

<?php require('confirmRegister.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="/Jarida/All/css/basics.css" />
  <link rel="stylesheet" href="../css/login.css" />

  <title>Register</title>
</head>

<body>
  <div class="login-container flex-center">

    <main class="flex-column">

      <a href="/Jarida/Home/php/index.php">
        <figure class="logo" onmouseover="logoHover()" onmouseout="logoOut()">
          <div class="flex-center">
            <img src="/Jarida/All/img/jarida-red.png" alt="Logo Jarida" />

            <figcaption>
              <span class="arida">arida</span><br />
            </figcaption>
          </div>
        </figure>
      </a><br>

      <div class="register-container">

        <form action="" method="post" class="flex-column gap" enctype="multipart/form-data">
          <input type="text" placeholder="First-Name" name="firstName" <?php if (isset($_POST['firstName'])) : ?> value="<?= $_POST['firstName'] ?>" <?php endif ?> required />
          <!-- For invalid data -->
          <?php if (!empty($invalid['firstName'])) : ?>
            <p class="invalidMessage"> <?= $invalid['firstName'] ?> </p>
          <?php endif; ?>
          <input type="text" placeholder="Last-Name" name="lastName" <?php if (isset($_POST['lastName'])) : ?> value="<?= $_POST['lastName'] ?>" <?php endif ?> required />
          <!-- For invalid data -->
          <?php if (!empty($invalid['lastName'])) : ?>
            <p class="invalidMessage"> <?= $invalid['lastName'] ?> </p>
          <?php endif; ?>

          <input type="email" placeholder="E-mail" name="email" <?php if (isset($_POST['email'])) : ?> value="<?= $_POST['email'] ?>" <?php endif ?> required />
          <input type="password" onpaste="return false;" minlength="8" maxlength="16" placeholder="Password" name="password" <?php if (isset($_POST['password'])) : ?> value="<?= $_POST['password'] ?>" <?php endif ?> required />
          <input type="password" onpaste="return false;" minlength="8" maxlength="16" placeholder="Confirm Password" name="confirmPassword" <?php if (isset($_POST['confirmPassword'])) : ?> value="<?= $_POST['confirmPassword'] ?>" <?php endif ?> required />

          <select name="gender">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>

          <input type="file" name="picter" accept="image/png, image/jpeg" />
          <textarea name="description" cols="38" rows="10" placeholder="You can describe yourself here."></textarea>
          <input type="submit" value="Create" name="create" />

        </form>

      </div><br>

      <p class="sign">
        Already registred ?
        <a href="./login.php">login</a>
      </p>

    </main>

    <ul class="bg-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>

  <script src="/Jarida/All/js/logo.js"></script>
</body>

</html>