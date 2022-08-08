const body = document.querySelector("body");
const hamburger = document.querySelector(
  ".header .nav-bar .nav-list .hamburger"
);
const mobile_menu = document.querySelector(".header .nav-bar .nav-list ul");
const menu_item = document.querySelectorAll(
  ".header .nav-bar .nav-list ul li a"
);
const header = document.querySelector(".header.hcontainer");

hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("active");
  mobile_menu.classList.toggle("active");
  // body.classList.toggle("active");
});

document.addEventListener("scroll", () => {
  var scroll_position = window.scrollY;
  if (scroll_position > 50) {
    header.style.backgroundColor = "var(--background-color-header)";
    header.style.boxShadow = "var(--background-color-intmarquue) 0px 8px 10px";
  } else {
    header.style.backgroundColor = "var(--background-color)";
    header.style.boxShadow = "var(--background-color-intmarquue) 0px 1px 10px";
  }
});

menu_item.forEach((item) => {
  item.addEventListener("click", () => {
    hamburger.classList.toggle("active");
    mobile_menu.classList.toggle("active");
    `body.classList.toggle("active");`;
  });
});

let ubicacionHeader = window.pageYOffset;
window.onscroll = function () {
  let desplazamientoActual = window.pageYOffset;
  if (ubicacionHeader >= desplazamientoActual) {
    document.getElementById("headerPosition").style.top = "0";
  } else {
    document.getElementById("headerPosition").style.top = "-100px";
    document.getElementById("headerPosition").style.transition = "0.7s";
  }
  ubicacionHeader = desplazamientoActual;
};
