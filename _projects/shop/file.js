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




const changer = document.querySelector("div.color-changer input")
const bodyTag = document.querySelector("body")
const htmlTag = document.querySelector("html")

changer.addEventListener("input", function () {


    htmlTag.style.setProperty("--highlight", changer.value)

    const color = chroma(changer.value)

    if (color.luminance() > 0.3) {
        bodyTag.classList.add("light")
    } else {
        bodyTag.classList.remove("light")
    }
}
)
