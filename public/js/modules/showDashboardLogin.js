const showDashboardLogin = () => {
  const adminLink = document.querySelector("#adminLink")

  const dashboardLogin = document.querySelector(".dashboard--login")
  const dashboardLoginNavList = document.querySelector(
    ".dashboard--login__list"
  )

  adminLink.addEventListener("click", () => {
    dashboardLogin.classList.toggle("dashboard--login--is-visible")
    dashboardLoginNavList.classList.toggle("dashboard--login__list--is-visible")
  })
}

export { showDashboardLogin }
