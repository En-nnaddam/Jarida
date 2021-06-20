<?php
// verification data : 
function estValideName($donnee)
{
    $pattern = '#^[a-zA-Z-]+$#';
    if (preg_match($pattern, $donnee))
        return true;
    else
        return false;
}

// Clean data : 
function clean($data)
{
    $data = htmlspecialchars($data);
    $data = stripslashes($data);
    $data = trim($data);
    return $data;
}
