<?php
if (isset($_GET['search'])) {
    $user = $_GET['user'];
    require('../../All/db/connexion.php');

    $db = connecteMyDb();
    $sql = "SELECT * FROM user 
    where firstName LIKE '%" . $user . "%' 
    OR lastName LIKE '%" . $user . "%' ";
    $query = $db->query($sql); ?>

    <?php if ($query) : ?>
        <?php while ($data = $query->fetch()) : ?>

            <div class="userInfo" onclick="confirm(<?= $data['id'] ?>, <?= $data['author'] ?>)">

                <p class="flex-column gap">
                    <!-- if user doesn't have a picture -->
                    <?php
                    if (empty($data['picture']))
                        if ($data['gender'] == 'Male') {
                            $data['picture'] = 'maleUserImageDefault.jpg';
                        } else {
                            $data['picture'] = 'femaleUserImageDefault.jpg';
                        }
                    ?>
                    <!-- get the full Name -->
                    <?php $fullName = $data['firstName'] . ' ' . $data['lastName']; ?>
                    <img src="../../User/images/<?= $data['picture'] ?>" alt="<?= $fullName ?> picture">
                    <span> <?= $fullName ?> </span>
                </p>

            </div>
        <?php endwhile ?>
<?php
    endif;
} ?>