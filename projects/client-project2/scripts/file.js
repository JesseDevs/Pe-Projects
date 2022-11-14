// window size add class --- - -
// window.addEventListener('resize', function () {
//     if (window.innerWidth > 2000) {
//     }
// });

var header = document.querySelector("header");
const numberFormatter = Intl.NumberFormat('en-US');

// converting first letter to uppercase
function capitalizeFirstLetter(str) {
    const capitalized = str.charAt(0).toUpperCase() + str.slice(1);

    return capitalized;
}

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
