const confirmation = document.querySelector('.confirmation');
const idArticle = document.getElementById("idArticle");

function confirm(id) {
 confirmation.style.display = "flex ";
 idArticle.value = id;
}

function hideConfirm() {
    confirmation.style.display = "none";
}