arida = document.querySelectorAll(".arida");


function logoHover() {
      arida.forEach(element => {
        element.classList.add("active");
      });
}

function logoOut() {
  arida.forEach(element => {
    element.classList.remove("active");
  });
}
