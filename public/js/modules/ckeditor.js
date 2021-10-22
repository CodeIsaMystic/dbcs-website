const setupCKEditor = () => {
  const editorHTMLEl = document.querySelector("#editor")
  let editorInstance

  if (document.querySelector("#editor")) {
    editorInstance = ClassicEditor.create(editorHTMLEl, {
      toolbar: [
        "heading",
        "|",
        "bold",
        "italic",
        "link",
        "bulletedList",
        "numberedList",
        "blockQuote",
        "undo",
        "redo",
      ],
      heading: {
        options: [
          {
            model: "paragraph",
            title: "Texte",
            class: "ck-heading_paragraph",
          },
          {
            model: "heading1",
            view: "Titre 1",
            title: "Heading 1",
            class: "ck-heading_heading1",
          },
          {
            model: "heading2",
            view: "Titre 2",
            title: "Heading 2",
            class: "ck-heading_heading2",
          },
        ],
      },
    })
      .then((editor) => {
        console.log("Is initialized!!", editor)
        console.log("let editorInstance = ", editorInstance)
      })
      .catch((error) => {
        console.error(error.stack)
      })
    return editorInstance
  } else {
    editorInstance = null

    return console.log("const editorInstance = null")
  }
}

export { setupCKEditor }
