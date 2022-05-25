// RANDOM IMAGES
var random_images = ["images/italianfood1.jpg", "images/italianfood2.jpg",
        "images/italianfood3.jpg",
        "images/italianfood4.jpg", "images/italianfood5.jpg"
    ],
    foodimg = document.getElementById("foodimg"),
    rand_int = Math.floor(Math.random() * 5);
foodimg.src = random_images[rand_int];

// LEAVING PAGE CONFIRMATION
var linkbtn = document.getElementById("linkbtn");
linkbtn.addEventListener("click", function () {
    var is_sure = confirm("You are about to leave this page, Are you sure you want to leave?");
    if (is_sure === false) {
        event.preventDefault();
        alert("OK. You can stay here.");
    }
}, false);

// BUTTON HOVER EFFECTS
linkbtn.addEventListener("mouseover", function () {
    linkbtn.style.background = "red";
    linkbtn.style.color = "white";
}, false);
linkbtn.addEventListener("mouseout", function () {
    linkbtn.style.background = "green";
    linkbtn.style.color = "white";
}, false);

// SCROLLDOWN
function scrollDown() {
    window.scrollBy(0, 200);
}