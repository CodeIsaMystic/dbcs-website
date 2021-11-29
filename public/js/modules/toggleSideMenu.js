const toggleSideMenu = () => {
  $(".ico01").click(function () {
    $(".mainWrapper").toggleClass("active")
  })
}

export { toggleSideMenu }
