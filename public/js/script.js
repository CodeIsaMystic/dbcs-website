import { getNewYear } from "./helper/getNewYear.js"
import { getFlexboxGap } from "./helper/getFlexboxGap.js"
import { mobileMenu } from "./modules/mobileMenu.js"
import { stickyHeader } from "./modules/stickyHeader.js"
import { parallaxEffect } from "./modules/parallaxEffect.js"
import { showDashboardLogin } from "./modules/showDashboardLogin.js"

/*  prettier-ignore  */
function init() {
  stickyHeader()
  mobileMenu()
  parallaxEffect()
  getNewYear()
  showDashboardLogin()
  getFlexboxGap()
}

init()
