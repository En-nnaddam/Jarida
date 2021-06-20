<?php
require('../../All/php/header.php');
require('../../Login&Register/php/functions.php');
?>

<!-- Blocking the not users to acces  -->
<?php if (!isset($_SESSION['userId'])) : ?>
    <script>
        location.replace("/jarida/Home/php/index.php");
    </script>
<?php endif; ?> <br><br>

<?php
if (isset($_POST['publish'])) {
    //The path to store the uploaded images:
    $target = "../images/" . basename($_FILES['image']['name']);
    $targetPdf =  "../pdfs/" . basename($_FILES['pdf']['name']);

    // init variables :
    $title = clean($_POST['title']);
    $description = clean($_POST['description']);
    $date = date("Y-m-d H:i:s");
    $category = $_POST['category'];
    $author = $_SESSION['userId'];
    $image = $_FILES['image']['name'];
    $pdf = $_FILES['pdf']['name'];

    //connection :
    // require('/Jarida/All/db/connexion.php');
    require '../../All/db/connexion.php';
    $db = connecteMyDb();

    $sql = 'INSERT INTO article(
    title,
    description,
    date,
    category,
    author,
    image,
    pdf
) VALUES(?, ?, ?, ?, ?, ?, ?)';
    $requet = $db->prepare($sql);
    $reponse = $requet->execute(array(
        $title,
        $description,
        $date,
        $category,
        $author,
        $image,
        $pdf
    ));
    echo '<script> alert("Here"); </script>';
    if ($reponse) {

        //Move the uploaded image into the folder images:
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
            echo '<script> alert("Image uploaded succesfuly"); </script>';
        } else {
            echo '<script> alert("Oops!"); </script>';
        }

        // Move the uploaded pdf into the folder pdfs:
        if (move_uploaded_file($_FILES['pdf']['tmp_name'], $targetPdf)) {
            echo '<script> alert("Article uploaded succesfuly"); </script>';
        } else {
            echo '<script> alert("Can not upload file The size is too big!"); </script>';
        }

        echo '<script> alert("Done."); </script>';
    } else {
        echo '<script> alert("Something Wrong!, can not upload Article"); </script>';
    }
} ?>

<br><br>
<form action="" method="POST" class="flex-column" id="addArticle" enctype="multipart/form-data">

    <label>Title</label>
    <input type="text" name="title" id="title" required><br>

    <input type="file" name="image" class="file-image" accept="image/png, image/jpeg" required><br>

    <label for="description">Description</label>
    <textarea name="description" id="description" cols="50" rows="10" required></textarea><br>

    <input type="file" name="pdf" class="file-pdf" accept="application/pdf" required><br>

    <select name="category">
        <option value="Physical Sciences and Engineering">Physical Sciences and Engineering</option>
        <option value="Life Sciences">Life Sciences</option>
        <option value="Health Sciences">Health Sciences</option>
        <option value="Social Sciences and Humanities">Social Sciences and Humanities</option>
        <option value="Social Sciences">Social Sciences</option>
    </select><br>
    <input type="submit" name="publish" value="Publish">

</form>
<br><br>

<?php require('../../All/php/footer.php'); ?>