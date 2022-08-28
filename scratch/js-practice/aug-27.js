var body = document.querySelector('body');
var toggle = document.querySelector('button');


// change class of body
function toggleBackground() {
    body.classList.toggle('cute');
}

toggle.addEventListener('click', toggleBackground);



// hamburger menu
body.addEventListener('click', function (event) {
    //if the click happens on the toggle button

    if (event.target.matches('[rel="toggle"]')) {
        body.classList.toggle('menu-open');
    }
})


//change background of body with a checkbox
var checkbox = document.querySelector('.toggle');

function toggleStyles(event) {
    if (event.target.checked) {
        body.classList.remove('hot');
        body.classList.add('cold');

    } else {
        body.classList.remove('cold');
        body.classList.add('hot');
    }
}

checkbox.addEventListener('click', toggleStyles);