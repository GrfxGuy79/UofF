// DEFINE ELEMENTS
let snowimg = document.getElementById("snowimg");
let plotbtn = document.getElementById("plotbtn");
let inspbtn = document.getElementById("inspbtn");
let bookbtn = document.getElementById("bookbtn");
let plottext = document.getElementById("plottext");

// ONLICK SHOW PLOT TEXT
plotbtn.addEventListener("click", function () {
    plottext.style.display = "inline";
    plotbtn.style.display = "none";
});

// SNOW IMAGE HOVER EFFECTS
snowimg.addEventListener("mouseover", function () {
    snowimg.style.transform = "scaleX(-1)";
}, false);
snowimg.addEventListener("mouseout", function () {
    snowimg.style.transform = "scaleX(1)";
}, false);

// BUTTON HOVER EFFECTS
plotbtn.addEventListener("mouseover", function () {
    plotbtn.style.background = "blue";
}, false);
plotbtn.addEventListener("mouseout", function () {
    plotbtn.style.background = "red";
}, false);
inspbtn.addEventListener("mouseover", function () {
    inspbtn.style.background = "blue";
}, false);
inspbtn.addEventListener("mouseout", function () {
    inspbtn.style.background = "red";
}, false);
bookbtn.addEventListener("mouseover", function () {
    bookbtn.style.background = "yellow";
    bookbtn.style.color = "blue";
}, false);
bookbtn.addEventListener("mouseout", function () {
    bookbtn.style.background = "blue";
    bookbtn.style.color = "white";
}, false);