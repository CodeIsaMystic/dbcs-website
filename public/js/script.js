import { getNewYear } from "./helper/getNewYear.js"
import { getFlexboxGap } from "./helper/getFlexboxGap.js"
import { mobileMenu } from "./modules/mobileMenu.js"
import { parallaxEffect } from "./modules/parallaxEffect.js"
import { toggleSideMenu } from "./modules/toggle.js"
import { showDashboardLogin } from "./modules/showDashboardLogin.js"
import { setupCKEditor } from "./modules/ckeditor.js"
import { datatablesInit } from "./modules/datatablesInit.js"

function init() {
  mobileMenu()
  parallaxEffect()
  getNewYear()
  showDashboardLogin()
  toggleSideMenu()
  datatablesInit()
  setupCKEditor()
  getFlexboxGap()
}

init()
