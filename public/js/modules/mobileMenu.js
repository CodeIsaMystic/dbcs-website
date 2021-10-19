const mobileMenu = function () {
  const menuIcon = document.querySelector(".menu-icon")
  const primaryNav = document.querySelector(".header .primary-nav")

  function toggleTheMenu() {
    primaryNav.classList.toggle("primary-nav--is-visible")
    menuIcon.classList.toggle("menu-icon--close-x")
  }

  menuIcon.addEventListener("click", () => toggleTheMenu())
}

export { mobileMenu }
