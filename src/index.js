require('../src/css/style.css');
import './js/webfont.js';


if (window.location.search === '?page=form') {
  require('./js/validatie.js');
}

if (window.location.search === '?page=tutorial') {
  require('./js/script.js');
}
