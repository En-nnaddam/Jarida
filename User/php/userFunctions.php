<?php

function getInfoUser($data)
{
    $_SESSION['userId'] = $data['id'];

    if ($data['picture']) {
        $_SESSION['userPicter'] = $data['picture'];
    } else {
        if ($data['gender'] == 'Male')
            $_SESSION['userPicter'] = 'maleUserImageDefault.jpg';
        else
            $_SESSION['userPicter'] = 'femaleUserImageDefault.jpg';
    }

    $_SESSION['firstName'] = $data['firstName'];
    $_SESSION['lastName'] = $data['lastName'];

    $_SESSION['author'] = $data['author'];

    descriptionUser($data['description']);
}

function getInfoAuthor($data, $description)
{
    $_SESSION['authorAge'] = $data['age'];
    $_SESSION['authorNationality'] = $data['nationality'];
    $_SESSION['authorSpeciality'] = $data['speciality'];
    $_SESSION['authorDegree'] = $data['degree'];

    descriptionAuthor();
}

function descriptionAuthor()
{
    $_SESSION['description'] = "Hey there! My name is " . $_SESSION['firstName'] . ", i'm " . $_SESSION['authorAge'] . " years old. I was born and raised in " . $_SESSION['authorNationality'] . " I am a " . $_SESSION['authorDegree'] . " graduate, furthermore i'm qualified as a " . $_SESSION['authorSpeciality'] . ". I really enjoy writing and knowledge sharing, have fun reading my articles.";
}

function descriptionUser($description)
{
    if ($description) {
        $_SESSION['description'] = $description;
    } else {
        $_SESSION['description'] = "Hey there! My name is " . $_SESSION['firstName'] . ". I really enjoy writing and knowledge sharing, have fun reading articles.";
    }
}


function blockNoUser()
{ ?>

    <!-- Blocking the not users to acces  -->
    <?php if (!isset($_SESSION['userId'])) : ?>
        <script>
            location.replace("/jarida/Home/php/index.php");
        </script>
    <?php endif; ?>

<?php } ?>