
const authorInfo = document.querySelectorAll('.authorInfo');
authorInfo.forEach(e => e.style.display = "none");

function toggleAuthorInfo() {
    const isAuthor =  document.querySelector('#isAuthor');
    if(isAuthor.checked) {
        authorInfo.forEach(e => {
            e.style.display = 'block';
            e.setAttribute('required', '');
        });
    } else {
        authorInfo.forEach(e => {
            e.style.display = 'none';
        e.removeAttribute('required');
        });
        
    }
}