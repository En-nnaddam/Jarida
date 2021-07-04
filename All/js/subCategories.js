const subCategories = document.querySelectorAll('.subCategories');

function hideAllOther() {
    subCategories.forEach(sub => sub.style.display = 'none');
}

function show_subCategories(num) {
    hideAllOther();
    subCategories[num].style.display = 'block';
}

function hide_subCategories(num) {
    subCategories[num].style.display = 'none';
}