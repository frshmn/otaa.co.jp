import { gsap } from "gsap";

const burger = document.querySelector('#hamburger');
const menuTl = gsap.timeline();
menuTl.to('.js-menuLink', {
	translateY: '100%',
	duration: 0.5,
});

menuTl.to('.js-menuNavigation', {
	width: '0',
	opacity: '0'
})

menuTl.restart();

burger.addEventListener('click', () => {
	menuTl.reversed(!menuTl.reversed());
	burger.classList.toggle('js-open');
})