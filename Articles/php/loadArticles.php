<?php
// Connection to the database
require("../../All/db/connexion.php");
require_once('../../All/php/articleFunctions.php');

$db = connecteMyDb();
$sql = 'SELECT ar.* , us.firstName, us.lastName
from article ar
INNER JOIN user us
on ar.author = us.id';
$reponse = $db->query($sql);
?>
<br><br>

<?php loadArticles($reponse); ?>

<br><br>