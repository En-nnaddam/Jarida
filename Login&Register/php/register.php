<!-- Blocking who is already connected -->
<?php if (isset($_SESSION['userId']))
  header('Location: /Jarida/Home/php/index.php');
?>

<?php require('confirmRegister.php'); ?>

<?php include('register.html.php'); ?>

  <script src="/Jarida/All/js/logo.js"></script>
  <script src="/Jarida/Login&Register/js/register.js"></script>
</body>

</html>