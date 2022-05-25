let formEl = document.querySelector("form");
let loc = document.getElementById("location");
let info = document.getElementById("information");

formEl.onsubmit = function (e) {
	e.preventDefault();
	var city = loc.value.trim();
	if (!city) return;
	fetch(
		"https://api.openweathermap.org/data/2.5/weather?q=" +
			city +
			"&units=imperial&appid=41eaea5954908f5ceb495cd38079652b"
	)
		.then(function (res) {
			return res.json();
		})
		.then(function (res) {
			console.log(res);
			getCity(res);
			loc.value = "";
		})
		.catch(function (err) {
			console.log(err);
		});
};

function getCity(cityObj) {
	// Clear previous city
	info.innerHTML = "";
	// If city was not found
	if (cityObj.cod != 200) {
		let cnfEl = document.createElement("h2");
		info.textContent = "City not found";
		info.appendChild(cnfEl);
		return;
	}

	// Display city name
	let cityEl = document.createElement("h2");
	let country = cityObj.sys;
	cityEl.textContent = cityObj.name + ", " + country.country;
	info.appendChild(cityEl);

	// Get weather conditions
	for (let weather of cityObj.weather) {
		// Display icon
		let iconEl = document.createElement("img");
		iconEl.src = "http://openweathermap.org/img/wn/" + weather.icon + "@2x.png";
		info.appendChild(iconEl);

		//Display Description
		let descEl = document.createElement("h3");
		descEl.style.textTransform = "capitalize";
		descEl.textContent = weather.description;
		info.appendChild(descEl);
	}

	// Add line break
	let br = document.createElement("br");
	info.appendChild(br);

	// Display temp
	let tempEl = document.createElement("h5");
	tempEl.textContent =
		"Current Temp: " + Math.floor(cityObj.main.temp) + "\xB0 F";
	info.appendChild(tempEl);

	// Display feels like temp
	let feelsEl = document.createElement("h5");
	feelsEl.textContent =
		"Feels Like: " + Math.floor(cityObj.main.feels_like) + "\xB0 F";
	info.appendChild(feelsEl);

	// Display date/time
	let dateTime = document.createElement("p");
	let getDate = new Date(cityObj.dt * 1000);
	let month = getDate.getMonth();
	let day = getDate.getDate();
	let year = getDate.getFullYear();
	let hour = getDate.getHours();
	let minutes = getDate.getMinutes();
	dateTime.textContent =
		"Last Updated: " +
		month +
		"/" +
		day +
		"/" +
		year +
		" " +
		hour +
		":" +
		minutes;
	info.appendChild(dateTime);
}
