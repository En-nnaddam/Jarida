const heart = document.querySelector('.doPanel > p:first-child');
const heartLink = document.querySelector('.doPanel > p:first-child a');

function toggleHeart() {
    heart.classList.toggle('active');
    heartLink.removeAttribute("href");
}