<!-- Blocking who is already connected -->
<?php if(isset($_SESSION['userId']))
  header('Location: /Jarida/Home/php/index.php');
?>

<?php require('confirmlogin.php') ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/Jarida/All/css/basics.css" />
    <link rel="stylesheet" href="../css/login.css" />

    <title>Login</title>

  </head>
  <body>
    <div class="login-container flex-center">
        
      <main class="flex-column gap">
          
        <a href="/Jarida/Home/php/index.php">
          <figure class="logo" onmouseover="logoHover()" onmouseout="logoOut()">
            <div class="flex-center">
              <img src="/Jarida/All/img/jarida-red.png" alt="Logo Jarida"/>
                
              <figcaption>
                <span class="arida">arida</span><br />
              </figcaption>
            </div>
          </figure>
        </a>

        <form action="" method="post" class="flex-column">
            
          <input type="email" placeholder="E-mail" name="email" required/>
          <input type="password" minlength="8" maxlength="16" placeholder="Password" name="password" required/>
          <input type="submit" value="Login" name="login" />

          <p class="sign">
            Not registred ?
            <a href="./register.php">Create an account</a>
          </p>
        </form>
        
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
