const selected = document.querySelector('.selected');
const optionsContainer = document.querySelector(".options-container");

const optionsList = document.querySelectorAll(".option");

selected.addEventListener("click", () => {
    optionsContainer.classList.toggle("active");
});

optionsList.forEach( option => {
    option.addEventListener("click", () => {
        selected.innerHTML = option.querySelector("label").innerHTML;
        option.querySelector("input").checked ="true";
        optionsContainer.classList.remove("active");
    })
});
