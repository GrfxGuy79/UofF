// Use the firstElementChild property to print the h2 in the section to the console
let contentfirst = document.getElementById('content');
console.log(contentfirst.firstElementChild.textContent);

// Use the lastElementChild property to log the last paragraph in the section to the console
let contentlast = document.getElementById('content');
console.log(contentlast.lastElementChild.textContent);

// Use the parentNode property to log the h2’s parent section to the console
let contentparent = document.getElementById('section-h2');
console.log(contentparent.parentNode);

// Use the children property to log the group of child elements of the section to the console
let contentchildren = document.getElementById('content');
let children = content.children;
console.log(children);

// Retrieve the content of the h1 node using innerHTML and log the content to the console
let title1 = title.innerHTML;
console.log(title1);

// Change the content actually shown on the page for the h1 node to “Updated Page Title” using innerHTML
let title2 = document.getElementById('title');
title2.innerHTML = "Updated Page Title";


// Retrieve the value of the id attribute on h1 using firstElementChild and the element property id and log it to the console
let titlefirst = document.getElementById('site-header');
console.log(titlefirst.firstElementChild);

// Change the value of the id attribute on h1 to “new-title” using firstElementChild and the element property id
let titlechange = document.getElementById('title');
titlechange.setAttribute('id', 'new-title');

// Use the appendChild method to add a new <p> node inside the section.
let appendcontent = document.getElementById("content");
let appendp = document.createElement("p");
appendp.appendChild(document.createTextNode("Hello"));
appendcontent.appendChild(appendp);

// Use the removeChild method to remove the <p> node in the aside.
let removep = document.getElementById("aside-p");
removep.parentNode.removeChild(removep);

// Use the replaceChild method to replace a the h2 in the section with an h3 with the value “New Heading”
let oldcontent = document.getElementById('content');
let oldtitle = oldcontent.firstElementChild;
let newh = document.createElement('h3');
newh.textContent = "New Heading";
oldcontent.replaceChild(newh, oldtitle);