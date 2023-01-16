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


// GSAP

const showAnim = gsap.from('.main-tool-bar', {
    yPercent: -100,
    paused: true,
    duration: 0.2
}).progress(1);

ScrollTrigger.create({
    start: "top top",
    end: 99999,
    onUpdate: (self) => {
        self.direction === -1 ? showAnim.play() : showAnim.reverse()
    }
});

function animateFrom(elem, direction) {
    direction = direction || 1;
    var x = 0,
        y = direction * 100;
    if (elem.classList.contains("gs_reveal_fromLeft")) {
        x = -100;
        y = 0;
    } else if (elem.classList.contains("gs_reveal_fromRight")) {
        x = 100;
        y = 0;
    }
    elem.style.transform = "translate(" + x + "px, " + y + "px)";
    elem.style.opacity = "0";
    gsap.fromTo(elem, { x: x, y: y, autoAlpha: 0 }, {
        duration: 2,
        x: 0,
        y: 0,
        autoAlpha: 1,
        ease: "expo",
        overwrite: "auto"
    });
}

function hide(elem) {
    gsap.set(elem, { autoAlpha: 0 });
}

document.addEventListener("DOMContentLoaded", function () {
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray(".gs_reveal").forEach(function (elem) {
        hide(elem); // assure that the element is hidden when scrolled into view

        ScrollTrigger.create({
            trigger: elem,
            onEnter: function () { animateFrom(elem) },
            onEnterBack: function () { animateFrom(elem, -1) },
            onLeave: function () { hide(elem) } // assure that the element is hidden when scrolled into view
        });
    });
});
