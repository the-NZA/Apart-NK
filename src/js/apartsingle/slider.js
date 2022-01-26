import { tns } from "tiny-slider";

export default function HandleApartmentsSlider() {
	tns({
		container: ".apartgallery",
		items: 1,
		autoHeight: true,
		autoplay: true,
		autoplayTimeout: 6000,
		autoplayHoverPause: true,
		autoplayButtonOutput: false,
		nav: false,
		controlsText: [
			'&#10094;', // arrow prev
			'&#10095;',	// arrow next
		],
	})
}