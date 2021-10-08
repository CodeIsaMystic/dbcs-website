//////////////////////////////////////////////
// Show Dashboard Login
const showDashboardLogin = function () {
  const adminLink = document.querySelector("#adminLink")

  const dashboardLogin = document.querySelector(".dashboard-login")
  const dashboardLoginNavList = document.querySelector(".dashboard-login-list")

  adminLink.addEventListener("click", () => {
    dashboardLogin.classList.toggle("dashboard-login-is-visible")
    dashboardLoginNavList.classList.toggle("dashboard-login-list-is-visible")
  })
}

export { showDashboardLogin }
