function HandleMobileNavMenu() {
	const siteBody = document.querySelector(".site-body");
	const header = siteBody.querySelector('.header')
	const headerNavbtn = header.querySelector(".header__navbtn")
	const headerNav = header.querySelector(".header__nav")

	headerNavbtn.addEventListener("click", function (e) {
		e.preventDefault()

		siteBody.classList.toggle("site-body--no-scroll")
		headerNavbtn.classList.toggle("navbtn--active")
		headerNav.classList.toggle("header__nav--active")
	})
}

export default HandleMobileNavMenu;