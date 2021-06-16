const loader = document.querySelector(".loader");
const imgAnimate = document.querySelector(".loader img:nth-child(3)");

imgAnimate.classList.add("loader-active");

window.addEventListener("load",() => {
    loader.style.display = "none";
})

// setTimeout(() => {
//   loader.style.display = "none";
// }, 3000);
