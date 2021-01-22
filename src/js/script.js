require('../css/style.css');

import WebFont from 'webfontloader';


WebFont.load({
  custom: {
    families: ['testfont'],
    urls: ['assets/fonts.css'],
  },
  google: {
    families: ['Droid Sans', 'Droid Serif'],
  },
});




const initLottie = async () => {

  const lottie = await import ('lottie-web');
  console.log(lottie);
  lottie.loadAnimation({
    container: $lottieContainer,
    renderer: 'svg',
    loop: true,
    autoplay: true,
    path: 'assets/lottie/data.json'
  });
};

const $lottieContainer = document.getElementById('lottie-container');
if ($lottieContainer) {
  initLottie();
}

