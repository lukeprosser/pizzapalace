/** @format */

'use strict';

var slides = document.querySelectorAll('.slide');
var prevBtn = document.querySelector('#prev');
var nextBtn = document.querySelector('#next');
var auto = true;
var intervalTime = 5000;
var slideInterval;

var prevSlide = function prevSlide() {
  var current = document.querySelector('.current'); // Remove current class

  current.classList.remove('current'); // Add current class

  if (current.previousElementSibling) {
    current.previousElementSibling.classList.add('current');
  } else {
    slides[slides.length - 1].classList.add('current');
  }

  setTimeout(function () {
    return current.classList.remove('current');
  });
};

var nextSlide = function nextSlide() {
  var current = document.querySelector('.current'); // Remove current class

  current.classList.remove('current'); // Add current class

  if (current.nextElementSibling) {
    current.nextElementSibling.classList.add('current');
  } else {
    slides[0].classList.add('current');
  }

  setTimeout(function () {
    return current.classList.remove('current');
  });
};

var initSlideEventListeners = function initSlideEventListeners() {
  prevBtn.addEventListener('click', function (e) {
    prevSlide();

    if (auto) {
      clearInterval(slideInterval);
      slideInterval = setInterval(nextSlide, intervalTime);
    }
  });

  nextBtn.addEventListener('click', function (e) {
    nextSlide();

    if (auto) {
      clearInterval(slideInterval);
      slideInterval = setInterval(nextSlide, intervalTime);
    }
  });
};

if (slides.length) {
  initSlideEventListeners();

  // Auto slide
  if (auto) {
    slideInterval = setInterval(nextSlide, intervalTime);
  }
}
