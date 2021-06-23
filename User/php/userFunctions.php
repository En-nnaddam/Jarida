<?php

function getInfoUser($data) {
    $_SESSION['userId'] = $data['id'];

    if($data['picture']) {
        $_SESSION['userPicter'] = $data['picture'];
    } else {
        if($data['gender'] == 'Male')
            $_SESSION['userPicter'] = 'maleUserImageDefault.jpg';
        else
            $_SESSION['userPicter'] = 'femaleUserImageDefault.jpg';
    }
    
    $_SESSION['firstName'] = $data['firstName'];
    $_SESSION['lastName'] = $data['lastName'];

    if($data['description']) {
        $_SESSION['description'] = $data['description'];
    } else {
        $_SESSION['description'] = "Hi! My name is ".$data['firstName'].", I'm a creative designer and developer at TemPlaza. I enjoy creating eye candy solutions for web and mobile applications. I'd love to work on yours, too :)";
    }

    $_SESSION['author'] = $data['author'];
        
} 

function getInfoAuthor($data) {
    $_SESSION['authorNationality'] = $data['nationality'];
    $_SESSION['authorSpeciality'] = $data['speciality'];
    $_SESSION['authorDegree'] = $data['degree'];
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