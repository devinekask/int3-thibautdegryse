require('../css/style.css');

import WebFont from 'webfontloader';

WebFont.load({
  custom: {
    families: ['grotesk'],
    urls: ['assets/fonts.css'],
  },
  google: {
    families: ['Droid Sans', 'Droid Serif'],
  },
});

const sectionLoader = () => {
  let count = 0;

  const step1 = document.querySelector(`.step1`);
  const step2 = document.querySelector(`.step2`);
  const step3 = document.querySelector(`.step3`);
  const step4 = document.querySelector(`.step4`);
  const step5 = document.querySelector(`.step5`);
  const step6 = document.querySelector(`.step6`);
  const step7 = document.querySelector(`.step7`);

  const buttonPrevious = document.querySelector(`.button__previous`);
  const buttonNext = document.querySelector(`.button__next`);
  const buttonEnd = document.querySelector(`.button__end`);

  buttonNext.addEventListener(`click`, e => {
    e.preventDefault();

    if (count < 6) {
      count += 1;

      if (count === 1) {
        step1.classList.add(`hidden`);
        step2.classList.remove(`hidden`);

        buttonPrevious.classList.remove(`hidden`);
      }
    }

    if (count === 2) {
      step2.classList.add(`hidden`);
      step3.classList.remove(`hidden`);
    }

    if (count === 3) {
      step3.classList.add(`hidden`);
      step4.classList.remove(`hidden`);
    }

    if (count === 4) {
      step4.classList.add(`hidden`);
      step5.classList.remove(`hidden`);
    }

    if (count === 5) {
      step5.classList.add(`hidden`);
      step6.classList.remove(`hidden`);
    }

    if (count === 6) {
      step6.classList.add(`hidden`);
      step7.classList.remove(`hidden`);

      buttonEnd.classList.remove(`hidden`);
      buttonNext.classList.add(`hidden`);
    }
  });

  buttonPrevious.addEventListener(`click`, e => {
    e.preventDefault();

    count -= 1;

    if (count === 0) {
      step1.classList.remove(`hidden`);
      step2.classList.add(`hidden`);

      buttonPrevious.classList.add(`hidden`);
    }

    if (count === 1) {
      step2.classList.remove(`hidden`);
      step3.classList.add(`hidden`);

      buttonNext.classList.remove(`hidden`);
      buttonEnd.classList.add(`hidden`);
    }

    if (count === 2) {
      step3.classList.remove(`hidden`);
      step4.classList.add(`hidden`);

      buttonNext.classList.remove(`hidden`);
      buttonEnd.classList.add(`hidden`);
    }

    if (count === 3) {
      step4.classList.remove(`hidden`);
      step5.classList.add(`hidden`);

      buttonNext.classList.remove(`hidden`);
      buttonEnd.classList.add(`hidden`);
    }

    if (count === 4) {
      step5.classList.remove(`hidden`);
      step6.classList.add(`hidden`);

      buttonNext.classList.remove(`hidden`);
      buttonEnd.classList.add(`hidden`);
    }

    if (count === 5) {
      step6.classList.remove(`hidden`);
      step7.classList.add(`hidden`);

      buttonEnd.classList.add(`hidden`);
      buttonPrevious.classList.remove(`hidden`);
      buttonNext.classList.remove(`hidden`);
    }

    if (count === 6) {
      step7.classList.remove(`hidden`);

      buttonNext.classList.add(`hidden`);
      buttonEnd.classList.remove(`hidden`);
      buttonNext.classList.remove(`hidden`);
    }
  });
};

sectionLoader();
