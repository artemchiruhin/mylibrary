function scrollTo(element) {
	window.scroll({
		left: 0,
		top: element.offsetTop,
		behavior: 'smooth'
	})
}
let aboutUs = document.querySelector('#about-link');
aboutUs.addEventListener('click', (e) => {
    e.preventDefault();
	scrollTo(document.querySelector('#about-section'));
});
let assortment = document.querySelector('#assortment-link');
assortment.addEventListener('click', (e) => {
    e.preventDefault();
	scrollTo(document.querySelector('#assortment-section'));
});
let contacts = document.querySelector('#contacts-link');
contacts.addEventListener('click', (e) => {
    e.preventDefault();
	scrollTo(document.querySelector('#contacts-section'));
});
let arrow = document.querySelector('.arrow');
arrow.addEventListener('click', (e) => {
    e.preventDefault();
	scrollTo(document.querySelector('#about-section'));
});

const swiper = new Swiper('.swiper-container', {
	loop: true,
	speed: 800,
	navigation: {
	  nextEl: '.swiper-button-next',
	  prevEl: '.swiper-button-prev',
	},
	autoplay: {
		delay: 3000,
	},
	pagination: {
		el: '.swiper-pagination',
		type: 'bullets',
		clickable: true,
		dynamicBullets: true
	},
	on: {
		init: function() {
			checkArrow();
		},
		resize: function () {
			checkArrow();
		}
	  }
});
function checkArrow() {
	let swiperPrev = document.querySelector('.swiper-button-prev');
	let swiperNext = document.querySelector('.swiper-button-next');
	if (window.innerWidth < 768) {
	  swiperPrev.style.display = 'none';
	  swiperNext.style.display = 'none';
	} else {
	  swiperPrev.style.display = 'block';
	  swiperNext.style.display = 'block';
	}
}

let menuBtn = document.querySelector('.menu-btn');
let menu = document.querySelector('.menu');
menuBtn.addEventListener('click', e => {
	e.preventDefault();
	menu.classList.toggle('menu-active');
	menu.classList.toggle('menu');
	menuBtn.classList.toggle('menu-btn-active');
});