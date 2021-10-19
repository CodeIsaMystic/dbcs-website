import { getNewYear } from "./helper/getNewYear.js"
import { getFlexboxGap } from "./helper/getFlexboxGap.js"
import { mobileMenu } from "./modules/mobileMenu.js"
import { stickyHeader } from "./modules/stickyHeader.js"
import { parallaxEffect } from "./modules/parallaxEffect.js"
import { toggle } from "./modules/toggle.js"
import { showDashboardLogin } from "./modules/showDashboardLogin.js"

function init() {
  stickyHeader()
  mobileMenu()
  parallaxEffect()
  getNewYear()
  showDashboardLogin()
  toggle()
  getFlexboxGap()
}

init()
