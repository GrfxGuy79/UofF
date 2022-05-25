// acquire references to page elements
var nameSpan = document.querySelector("span");
var formEl = document.querySelector("form");
var clear = document.querySelector("#clear");
var textarea = document.querySelector("textarea");

// Retrieve name and note content from cookies and localstorage
let cookies = document.cookie.split("; ");
let getUser = cookies.find(function (item) {
	return item.startsWith("username");
});

let usertext = localStorage.getItem("usertext");

// Then apply them to elements on the page
if (getUser) {
	nameSpan.textContent = getUser.split("=")[1];
}

if (usertext) {
	textarea.textContent = usertext;
}

formEl.onsubmit = function (e) {
	// prevents form submission
	e.preventDefault();

	// save name element's content to cookies
	document.cookie = "username=" + nameSpan.textContent + ";";
	// console.log(nameSpan.textContent);

	// save textarea's content to localstorage
	textarea.textContent = textarea.value;
	localStorage.setItem("usertext", textarea.value);
	// console.log(textarea.textContent);

	// triggers thumbs up animation
	this.elements.save.classList.add("emoji");
};

clear.onclick = function () {
	// Clear textarea's value
	textarea.textContent = "";

	// Clear localstorage's content
	localStorage.clear();

	// triggers thumbs up animation
	this.classList.add("emoji");
};

// this code allows repeated thumbs up animations
function endThumbsUp() {
	this.classList.remove("emoji");
}

formEl.elements.save.onanimationend = endThumbsUp;
clear.onanimationend = endThumbsUp;
