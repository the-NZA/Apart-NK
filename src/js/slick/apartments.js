export default function HandleApartmentsGallery() {
	jQuery(document).ready(function ($) {
		$('.apartgallery').slick({
			infinite: true,
			speed: 500,
			slidesToShow: 1,
			adaptiveHeight: true,
			autoplay: true,
			autoplaySpeed: 6000,
			prevArrow: '<button class="slick-prev">&#10094;</button>',
			nextArrow: '<button class="slick-next">&#10095;</button>',
		});
	});
}