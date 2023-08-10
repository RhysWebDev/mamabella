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

// tabs

document.querySelectorAll('.tab').forEach((tab) => {
  tab.addEventListener('click', function () {
    // Remove active class from all tabs
    document.querySelectorAll('.tab').forEach((innerTab) => {
      innerTab.classList.remove('active');
      innerTab.classList.remove('bg-primary');
      innerTab.classList.add('text-primary');
      innerTab.classList.add('bg-gray-200');
    });

    // Add active class to clicked tab
    tab.classList.add('active');
    tab.classList.add('bg-primary');
    tab.classList.remove('text-primary');
    tab.classList.remove('bg-gray-200');

    // Hide all tab content
    document.querySelectorAll('.tab-content').forEach((content) => {
      content.classList.add('hidden');
    });

    // Show content for clicked tab
    const content = document.querySelector(
      `[data-content="${tab.getAttribute('data-tab')}"]`
    );
    content.classList.remove('hidden');
  });
});

// slider
document.addEventListener('DOMContentLoaded', function () {
  const sliderItemsContainer = document.querySelector('.slider-items');
  const sliderItem = document.querySelector('.slider-item'); // We just need one item to get its width
  const itemWidthWithGap =
    sliderItem.offsetWidth +
    parseInt(window.getComputedStyle(sliderItem).marginRight);

  function slide(direction) {
    // Adjust the scroll position
    sliderItemsContainer.scrollLeft += direction * itemWidthWithGap;
  }

  // Attach event listeners to the arrows
  document.querySelector('.slide-left').addEventListener('click', function () {
    slide(-1);
  });

  document.querySelector('.slide-right').addEventListener('click', function () {
    slide(1);
  });
});
