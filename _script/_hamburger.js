import { gsap } from "gsap";

const burger = document.querySelector('#hamburger');
const menuTl = gsap.timeline();
menuTl.to('.js-menuLink', {
	translateY: '115%',
	duration: 0.5,
});

menuTl.from('.js-menuNavigation', {
	width: '100%',
	opacity: '1',
	visibility: 'visible'
})

burger.addEventListener('click', () => {
	menuTl.reversed(!menuTl.reversed());
	burger.classList.toggle('js-open');
})