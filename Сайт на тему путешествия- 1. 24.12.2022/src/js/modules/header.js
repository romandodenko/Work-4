const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {
  const targetElement = e.target;
  if(targetElement.closest(".burger")) {
    menu.classList.add("menu-active")
    document.body.style.overflow = "hidden";
  }
  if (targetElement.closest(".header__exit-menu")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
  if (targetElement.closest(".nav__link")) {
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
  if (targetElement.closest(".exit-popup")) {
    document.querySelector(".popup").classList.add("popup-disabled")
  }
})