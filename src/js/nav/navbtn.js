function HandleMobileNavMenu() {
	const header = document.querySelector('.header')
	const headerNavbtn = header.querySelector(".header__navbtn")
	const headerNav = header.querySelector(".header__nav")

	headerNavbtn.addEventListener("click", function (e) {
		e.preventDefault()

		headerNavbtn.classList.toggle("navbtn--active")
		headerNav.classList.toggle("header__nav--active")
	})
}

export default HandleMobileNavMenu;