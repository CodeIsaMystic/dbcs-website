const mobileMenu = function () {
  const menuIcon = document.querySelector(".menu-icon")
  const primaryNav = document.querySelector(".header .primary-nav")
  // const siteHeader = document.querySelector(".header")

  function toggleTheMenu() {
    primaryNav.classList.toggle("primary-nav--is-visible")
    menuIcon.classList.toggle("menu-icon--close-x")
    // siteHeader.classList.toggle("header--is-expanded")
  }

  menuIcon.addEventListener("click", () => toggleTheMenu())
}

export { mobileMenu }
