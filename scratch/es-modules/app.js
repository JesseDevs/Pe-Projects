import library from './library.js';

const outlet = document.querySelector('output');

outlet.innerHTML = library.double(5); // should show a 10 on the screen