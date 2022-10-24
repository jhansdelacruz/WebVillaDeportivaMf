// const details = document.getElementById("detailPreguntas");
// const deta = document.querySelectorAll("details");

// console.log(details);

// details.addEventListener("click", (e) => {
//   if (
//     e.target.tagName === "SUMMARY" ||
//     e.target.tagName === "SPAN" ||
//     e.target.tagName === "DETAILS"
//   ) {
//     console.log(e, "sii");
//     e.target.classList.add("detailOpen");
//   }
// });
function cambioPanel(index) {
  let node = document.querySelectorAll("details")[index];
  let nodeOpen = document.querySelectorAll("details[open]")[0];

  if (node.hasAttribute("open")) {
    //Cerramos el panel actual
    node.classList.remove("detailOpen");
  } else {
    //Cerramos el ultimo panel abierto si lo hay
    if (nodeOpen) {
      nodeOpen.removeAttribute("open");
      nodeOpen.classList.remove("detailOpen");
    }
    //Abrimos el panel actual
    node.classList.add("detailOpen");
  }
}
