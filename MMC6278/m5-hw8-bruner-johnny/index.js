// Create an Array of at least 3 losing messages
const losingMessage = [
	"Sorry that's the wrong box, try again!",
	"Nope, that's not it. Let's try that again!",
	"We knew you weren't psychic. Give it another try!",
];

// Create variables to count wins and losses
let winsCount = 1;
let lossCount = 1;

// Create variables that target elements with the following IDs: 'message', 'wins', 'losses'
let msg = document.getElementById("message");
let win = document.getElementById("wins");
let loss = document.getElementById("losses");

// target all .box elements and attach a click event listener to each one using a loop
let box = document.querySelectorAll(".box");

for (let i = 0; i < box.length; i++) {
	box[i].onclick = function (e) {
		// console.log(e.target);

		// within each click event...
		// determine which box was clicked with 'this.textContent' or event.target.textContent
		let boxClicked = e.target.textContent;
		console.log(boxClicked);

		// convert that value to a Number and store it to a variable
		// create a random number between 1-3 and store it to a variable
		// This number will represent the winning box
		let randomNumber = Math.floor(Math.random() * 3) + 1;
		console.log(randomNumber);

		// determine if the box clicked is equal to the random number
		if (boxClicked == randomNumber) {
			// console.log("win");
			// if the numbers match, display a winning message by changing the text content of the div#message element
			msg.textContent = "YES, you guessed it right! Give it another go.";

			// if the numbers match, increment wins and display the win count in div#wins
			win.textContent = "Wins: " + winsCount++ + " ";
		} else {
			// if the numbers don't match, change the div#message element's text to a random losing message from the array above
			let randomMessage = losingMessage[Math.floor(Math.random() * 3)];
			// console.log(randomMessage);
			msg.textContent = randomMessage;

			// if the numbers don't match, increment losses and display the loss count in div#losses
			loss.textContent = " Losses: " + lossCount++;
		}
	};
}
