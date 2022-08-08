const fullImgBox = document.getElementById("fullImgBox");
fullImg = document.getElementById("fullImg");
body = document.querySelector("body");
header = document.querySelector(".header.hcontainer");
zoon = document.querySelector("zoon");

function openFulImg(reference) {
  fullImgBox.style.display = "flex";
  fullImg.src = reference;
  header.style.display = "none";
  body.style.overflowY = "hidden";
}
function closeImg() {
  header.style.display = "flex";
  fullImgBox.style.display = "none";
  body.style.overflowY = "scroll";

  fullImg.style.transform = "scale(1)";
  zoon.style.transform = "scale(1)";
  fullImg.style.cursor = "zoom-in";
  zoon.style.zIndex = "-1";
}
function zoonIn() {
  fullImg.style.transform = "scale(1.4)";
  zoon.style.transform = "scale(1.4)";
  zoon.style.cursor = "zoom-out";
  zoon.style.zIndex = "+1";
}
function zoonOut() {
  fullImg.style.transform = "scale(1)";
  zoon.style.transform = "scale(1)";
  fullImg.style.cursor = "zoom-in";
  zoon.style.zIndex = "-1";
}
