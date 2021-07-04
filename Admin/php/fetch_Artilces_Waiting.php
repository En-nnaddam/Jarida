<?php 
// function to load articles :
require_once('../../All/php/articleFunctions.php');
// connect to the dataBase :
require_once('../../All/db/connexion.php');
$db = connecteMyDb();
// sql to fetch articles waiting :
$sql = 'SELECT * from article where validation = 0';
// querying :
$query = $db->query($sql);
// fetch articles
loadArticles($query, '/Jarida/Articles/images/', '../../Articles/pdfs/');