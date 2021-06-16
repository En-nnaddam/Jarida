const navMobile = document.querySelector(".navmobile");

function toggleMenu()
{
    if(navMobile.style.display === "none")
        navMobile.style.display = "block";
    else
        navMobile.style.display = "none";
}