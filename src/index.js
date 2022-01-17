// import tester from "./js/tester.js";
// import HandleShowCartButton from "./js/showcart.js";
import HandleApartmentsGallery from "./js/slick/apartments";

import "normalize.css"; // Import normalize
import "milligram"; // Import miligram
import "./css/index.css"; // Import styles

window.addEventListener("DOMContentLoaded", function () {
	if (document.querySelector(".apartgallery")) {
		HandleApartmentsGallery();
	}

	// tester();
	// HandleShowCartButton();	// Show and mini cart by clicking showcart button
});
