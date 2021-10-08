///////////////////////////////////////////////////////////
// Set current year
const getNewYear = function () {
  const yearEl = document.querySelector(".year")
  const currentYear = new Date().getFullYear()
  yearEl.textContent = currentYear
}

export { getNewYear }
