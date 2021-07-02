<!-- include confirm login -->
<?php require('confirmLoginAdmin.php'); ?>
<!-- check if the admin is already connected -->
<?php
if (isset($_SESSION['userName'])) {
    header("Location: admin.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login Admin</title>
    <!-- css files -->
    <link rel="stylesheet" href="/Jarida/All/css/basics.css" />
    <link rel="stylesheet" href="../css/loginAdmin.css">
    <!-- font awesome icons -->
    <script src="https://kit.fontawesome.com/cd51ce947c.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container flex-center">
        <div class="content flex">

            <form action="" method="POST" class="flex-column gap">
                <h1>Login</h1>
                <h4>Sign in to your account</h4>

                <p class="flex">
                    <label for="Username"><i class="far fa-user"></i></label>
                    <input type="text" name="username" placeholder="Username" id="Username" <?php
                                                                                            if (isset($valid['userName'])) :
                                                                                                if ($valid['userName']) : ?> class="valid" <?php else : ?> class="invalid" <?php endif ?> <?php endif ?> <?php if (isset($_POST['username'])) : ?> value="<?= $_POST['username'] ?>" <?php endif; ?>>

                </p>

                <p class="flex">
                    <label for="Password"><i class="fas fa-lock"></i></label>
                    <input type="password" name="password" placeholder="Password" id="Password" <?php
                                                                                                if (isset($valid['password'])) :
                                                                                                    if ($valid['password']) : ?> class="valid" <?php else : ?> class="invalid" <?php endif ?> <?php endif ?>>

                </p>

                <input type="submit" name="login" value="Login">
            </form>

            <img src="../img/blank-792125_640.jpg" alt="login image">
        </div>
    </div>
</body>

</html>