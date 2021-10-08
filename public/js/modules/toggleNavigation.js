///////////////////////////////////////////////////////////
// Make mobile navigation work
const toggleNavigation = function () {
  const btnNavEl = document.querySelector(".btn-mobile-nav")
  const headerEl = document.querySelector(".header")

  btnNavEl.addEventListener("click", function () {
    headerEl.classList.toggle("nav-open")
  })
}

export { toggleNavigation }
