var header = document.querySelector("header");

window.addEventListener('click', function (event) {


    if (event.target.matches('[rel="hamburger"]')) {
        event.preventDefault();

        header.classList.toggle("display-menu");
    }

    if (header.classList.contains("display-menu")) {
        if (!event.target.matches("header *")) {

            header.classList.remove("display-menu");
        }
    }

});
