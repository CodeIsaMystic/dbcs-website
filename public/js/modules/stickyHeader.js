const stickyHeader = function () {
  const siteHeader = document.querySelector(".site-header")
  const primaryNav = document.querySelector(".primary-nav")

  const runOnScroll = function () {
    if (window.scrollY > 60) {
      siteHeader.classList.add("site-header--dark")
      primaryNav.classList.add("primary-nav--dark")
    } else {
      siteHeader.classList.remove("site-header--dark")
      primaryNav.classList.remove("primary-nav--dark")
    }
  }

  window.addEventListener(
    "scroll",
    _.throttle(() => runOnScroll(), 200)
  )
}

export { stickyHeader }
