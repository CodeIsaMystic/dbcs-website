const datatablesInit = () => {
  $(document).ready(function () {
    $("#myTable").DataTable({
      // "dom": '<"top"if>rt<"bottom"lp><"clear">'
      lengthMenu: [
        [10, 15, 25, -1],
        [10, 15, 25, "All"],
      ],
      language: {
        url: "//cdn.datatables.net/plug-ins/9dcbecd42ad/i18n/French.json",
      },
    })
  })
}

export { datatablesInit }
