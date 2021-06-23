<?php require('../../All/php/header.php'); ?>

<?php require_once('../../All/php/functions.php'); ?>

<?php require_once('../../User/php/userFunctions.php'); ?>

<!-- Blocking the not users to acces  -->
<?php blockNoUser(); ?>

<?php

if (isset($_POST['submit'])) {

    $userId = $_SESSION['userId'];
    $nationality = clean($_POST['nationality']);
    $speciality = clean($_POST['speciality']);
    $degree = clean($_POST['degree']);


    require('../../All/db/connexion.php');

    $db = connecteMyDb();
    $sql = 'SELECT userId FROM author where userId = ' . $userId;
    $reponse = $db->query($sql);

    if (!$reponse->fetch()) {

        $sql = 'INSERT INTO author(
    userId,
    nationality,
    speciality,
    degree
) VALUES(?, ?, ?, ?)';
        $requet = $db->prepare($sql);
        $reponse = $requet->execute(array(
            $userId,
            $nationality,
            $speciality,
            $degree
        ));

        if ($reponse) {

    // update infos author and get data_author :
            $sql = "UPDATE user
    SET author = true
    WHERE id = ?";

            $requet = $db->prepare($sql);
            if ($requet->execute(array($userId))) {

                $_SESSION['author'] = true;
                getInfoAuthor(array(
                    $nationality,
                    $speciality,
                    $degree
                ));

            } else {
                echo "<script> alert('Somthing wrong!') </script>";
            }

?>

            <script>
                window.location.assign('/Jarida/User/php/profile.php');
            </script>

        <?php
        } else {
            echo "<script> alert('Somthing wrong!') </script>";
        } ?>

<?php } else {
        echo "<script> alert('You are Already an author') </script>";
    }
} ?>

<br><br>

<form action="" method="post" style="margin-inline: auto; width: max-content;">

    <input type="text" placeholder="Nationality" name="nationality">
    <input type="text" placeholder="Speciality" name="speciality">
    <input type="text" placeholder="Degree" name="degree"> <br><br>
    <input type="submit" name="submit" value="Submit" class="btn">

</form>

<br><br>

<?php require('../../All/php/footer.php'); ?>