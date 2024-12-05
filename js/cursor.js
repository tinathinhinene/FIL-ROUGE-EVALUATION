const img = document.createElement("img");
img.src = "javascript.svg";
img.style.width = "100px";
img.style.position = "absolute";
img.style.display = "none";
img.style.pointerEvents = "none";

document.body.appendChild(img);

document.addEventListener("mouseenter", function () {
  img.style.display = "";
});
document.addEventListener("mouseleave", function () {
  img.style.display = "none";
});

document.addEventListener("mousemove", (event) => {
  let y = event.clientY + -50;
  let x = event.clientX + -50;

  img.style.top = y + "px";
  img.style.left = x + "px";
});
