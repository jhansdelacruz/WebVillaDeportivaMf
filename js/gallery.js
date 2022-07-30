const fullImgBox = document.getElementById("fullImgBox");
fullImg = document.getElementById("fullImg");
body = document.querySelector("body");
header = document.querySelector(".header.hcontainer");

function openFulImg(reference) {
  fullImgBox.style.display = "flex";
  fullImg.src = reference;
  header.style.display = "none";
}
function closeImg() {
  header.style.display = "flex";
  fullImgBox.style.display = "none";
}
