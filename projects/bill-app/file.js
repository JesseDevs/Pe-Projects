console.clear();

const billContainer = {
    currentAmount,
    currentTip
}

let currentAmount = 0;
let currentTip = 0;

const outlet = document.querySelector(".outlet");
const output = document.querySelector("output");

function calculateTip(amount, tip) {
    var rawTip = amount * (parseFloat(tip) * .01);
    var roundedTip = rawTip.toFixed(2);

    currentTip = roundedTip;
}

function updateAmount(amount) {
    output.textContent = amount;
    currentAmount = amount;
    console.log(currentAmount);
}

function renderPage(window) {
    outlet.innerHTML = window;
}

function showButton(hasInput, selector) {
    const button = document.querySelector(selector);
    button.disabled = true;
    // check if theres an input
    if (hasInput) {
        button.disabled = false;
    }
    // if theres an input make the button appear
    // if theres no input then the button doesn't appear
}

const homeTemplate = `
<h2>HOME</h2>

<field>
    <label for="">Total amount?</label>
    <input id='sub-total' type="number">
</field>

<action-block>
    <button id='start' data-route="tip" disabled  >Start</button>
</action-block>
`;

const tipTemplate = `
<h2>TIP</h2>

<field rel='tip'>
    <label for="">How much should we tip?</label>
    <input id='tip' type="range" min="0" max="10">
</field>

<action-block>
    <button id='total' data-route="total">Total</button>
    <button data-route="split">Are we spliting?</button>
</action-block>
`;

const splitTemplate = `
<h2>SPLIT</h2>

<field rel='split'>
    <label for="">Spliting how many way?</label>
    <input type="number" min='1'>
</field>

<action-block>
    <button id='total' data-route="total">Total</button>
</action-block>

`;

const totalTemplate = `
<h2>TOTAL</h2>

<div rel='total'>
    <p class='total-amount'>

    </p>
</div>

`;

const routes = {
    home: homeTemplate,
    tip: tipTemplate,
    split: splitTemplate,
    total: totalTemplate
};

renderPage(homeTemplate);

window.addEventListener("click", function (event) {
    if (event.target.matches("[data-route]")) {
        var destination = event.target.dataset.route;
        renderPage(routes[destination]);
    }
});

window.addEventListener("input", function (event) {
    if (event.target.matches("#sub-total")) {
        updateAmount(event.target.value);
        showButton(event.target.value.length, "#start");
    }

    if (event.target.matches("#tip")) {
        calculateTip(currentAmount, event.target.value);
        console.log(currentTip);
    }
});
