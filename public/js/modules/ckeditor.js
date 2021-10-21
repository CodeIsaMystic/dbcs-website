function setupCKEditor() {
  ClassicEditor.create(document.querySelector("#editor"), {
    heading: {
      options: [
        {
          model: "paragraph",
          title: "Paragraphe",
          class: "ck-heading_paragraph",
        },
        {
          model: "heading2",
          view: "h3",
          title: "Titre 1",
          class: "ck-heading_heading2",
        },
        {
          model: "heading3",
          view: "h4",
          title: "Titre 2",
          class: "ck-heading_heading3",
        },
      ],
    },
    toolbar: ["Heading", "|", "Link", "|", "bold", "italic"],
  }).catch((error) => {
    console.error(error)
  })
}

export { setupCKEditor }
