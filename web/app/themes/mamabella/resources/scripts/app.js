import domReady from '@roots/sage/client/dom-ready';
import Swiper, { Navigation } from 'swiper';
import $ from 'jquery';
import 'slick-carousel';
import AOS from 'aos';
import './product-sidebar.js';

/**
 * Application entrypoint
 */
domReady(async () => {
  // ...
});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
if (import.meta.webpackHot) import.meta.webpackHot.accept(console.error);

// Init AOS
AOS.init();

/**
 * Swiper js
 */
const articleSwiper = new Swiper('.swiper-container', {
  modules: [Navigation],

  slidesPerView: 1,
  spaceBetween: 0,
  centeredSlides: true,
  loop: true,

  navigation: {
    nextEl: '.swiper-button-next-cstm',
    prevEl: '.swiper-button-prev-cstm',
  },
});

$(document).ready(function () {
  $('.latest-reviews-carousel').slick({
    slidesToShow: 2,
    slidesToScroll: 2,
    infinite: true,
    prevArrow: $('.review-carousel-prev'),
    nextArrow: $('.review-carousel-next'),
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          infinite: true,
        },
      },
    ],
  });
});
