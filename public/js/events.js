const burger = document.querySelector(".nav_burger");
const links = document.querySelector(".sidebar");

burger.addEventListener("click", () => {
    links.classList.toggle("active");
});