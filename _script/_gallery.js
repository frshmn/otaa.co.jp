import 'swiper/css/bundle';
import Swiper from "swiper/bundle";

// Hero slider section
const initThumbsGallery = () => {
    
    const thumbsSwiper = new Swiper('.p-front__hero-thumbs', {
        loop: true,
        spaceBetween: 10,
        slidesPerView: 4,
        freeMode: true,
        watchSlidesProgress: true,
    });
    const mainSwiper = new Swiper('.p-front__hero-slider', {
        loop: true,
        spaceBetween: 10,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        thumbs: {
            swiper: thumbsSwiper,
        },
    });
}


const gallerySpeed = 8000;
// const galleryLength = document.querySelectorAll('.slider__container .swiper-slide').length;

const changeTranslate = (swiper) => {
	let currentTranslate = swiper.getTranslate();
	let slideWidth = document.querySelector('.slider__container .swiper-slide-active').offsetWidth;
	swiper.setTranslate(currentTranslate - slideWidth);
	swiper.setTransition(gallerySpeed);
}
const initGallery = () => {
	const gallerySwiper = new Swiper('.slider__container', {
		slidesPerView: 'auto',
		spaceBetween: 8,
		loop: true,
		// loopedSlides: galleryLength,
		speed: gallerySpeed,
		autoplay: {
			delay: 0,
			disableOnInteraction: false,
		},
		// freeMode: {
		// 	enabled: true,
		// 	momentum: false,
		// },
		grabCursor: true,
		breakpoints: {
			1025: {
				spaceBetween: 16,
			}
		},
		on: {
			touchEnd: (swiper) => {
				changeTranslate(swiper);
			}
		},
		pagination: {
			el: ".gallery-pagination",
			type: "progressbar",
		},
	});
}

window.addEventListener('load', function(){
	initGallery();
    initThumbsGallery();
});
// End Gallery page scroll section setting