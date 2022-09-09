var body = document.querySelector('body');
var toggle = document.querySelector('button');

// hamburger menu
body.addEventListener('click', function (event) {
    //if the click happens on the toggle button

    if (event.target.matches('[rel="toggle"]')) {
        body.classList.toggle('menu-open');

    }


}
)



