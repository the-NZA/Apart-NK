export default function HandleApartmentsGallery() {
	jQuery(document).ready(function ($) {
		$('.apartgallery').slick({
			dots: true,
			infinite: true,
			speed: 500,
			slidesToShow: 1,
			adaptiveHeight: true,
		});
	});
}