const barSearch = document.querySelector('.bar-search');
const navMobileUl = document.querySelector('.navmobile ul');
const mainVideo = document.getElementById('main-vid');

// make the event function in the small screans : 
const smallQuery = window.matchMedia("(max-width : 50em)");

function moveSearchBarBefore(element) {
    navMobileUl.insertBefore(barSearch, element);
}

function moveSearchBarAfter(element) {
    navMobileUl.insertAfter(barSearch, element);
}

function smallMedia(m) {
    if(m.matches) {
        moveSearchBarBefore(navMobileUl.firstElementChild);
    } else {
        moveSearchBarAfter(mainVideo.firstElementChild);
    }
}

smallMedia(smallQuery);

