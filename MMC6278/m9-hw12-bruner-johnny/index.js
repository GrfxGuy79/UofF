// DECLARE CAR CLASS
class Car {
	constructor(make, model, year) {
		this.make = make;
		this.model = model;
		this.year = year;
	}

	// HONK METHOD
	honk() {
		console.log("BEEP BEEP!");
	}

	// MAINTENANCE METHOD
	performMaintenance() {
		setTimeout(() => console.log("maintenance complete"), 3000);
	}
}

// DECLARE MY SWEET RIDE VARIABLE
const mySweetRide = new Car("Pontiac", "Fiero", 1988);

// CALL METHODS
mySweetRide.honk();
mySweetRide.performMaintenance();
