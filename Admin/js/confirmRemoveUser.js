const confirmation = document.querySelector('.confirmation');
const idUser = document.getElementById("idUser");
const isAuthor = document.getElementById("isAuthor");

function confirm(id, author) {
 confirmation.style.display = "flex ";
 idUser.value = id;
 isAuthor.value = author;
}

function hideConfirm() {
    confirmation.style.display = "none";
}