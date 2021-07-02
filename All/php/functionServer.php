<?php

function isEqualServer($path)
{
    if ($_SERVER['PHP_SELF'] == $path)
        return true;
    else
        return false;
}

function isJournalsServer()
{
    return isEqualServer('/Jarida/Articles/php/journals.php');
}

function isSearchServer()
{
    return isEqualServer('/Jarida/Home/php/search.php');
}

function isMyArticlesServer()
{
    return isEqualServer('/Jarida/Articles/php/myArticles.php');
}

function addUserServer()
{
    return isEqualServer('/Jarida/Admin/php/addUser.php');
}

function adminServer()
{
    return isEqualServer('/Jarida/Admin/php/admin.php');
}

function publishArticleServer()
{
    return isEqualServer('/Jarida/Admin/php/publishArticle.php');
}

function removeUserServer()
{
    return isEqualServer('/Jarida/Admin/php/removeUser.php');
}


