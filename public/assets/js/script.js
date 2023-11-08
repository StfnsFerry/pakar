let menu = document.querySelector("#menu-icon");
let navlist = document.querySelector(".navlist");

menu.onclick = () => {
  menu.classList.toggle("bx-x");
  navlist.classList.toggle("open");
};

const headerEl = document.querySelector(".header");

window.addEventListener("scroll", () => {
  if (window.scrollY > 50) {
    headerEl.classList.add("header-scrolled");
  } else if (window.scrollY <= 50) {
    headerEl.classList.remove("header-scrolled");
  }
});

const arrowIcons = document.querySelector(".slider-icon i");

arrowIcons.forEach((icon) => {
  icon.addEventListener("click", () => {
    console.log(icon);
  });
});
