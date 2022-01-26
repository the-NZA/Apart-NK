import HandleApartmentsSlider from "./js/apartsingle/slider";
import HandleMobileNavMenu from "./js/nav/navbtn";

import "normalize.css"; // Import normalize
import "milligram"; // Import miligram
import "./css/index.css"; // Import styles

window.addEventListener("DOMContentLoaded", function () {
	HandleMobileNavMenu(); // * Handle show and hide menu on mobile devices

	// * Handle showing gallery only when <item>.apartgallery exists
	if (document.querySelector(".apartgallery")) {
		HandleApartmentsSlider();
	}
});
