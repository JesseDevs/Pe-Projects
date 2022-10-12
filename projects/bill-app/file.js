console.clear();

let currentAmount = 0;
let currentTip = 0;
let finalSum = 0;
let perPersonSum = 0;

const outlet = document.querySelector(".outlet");
const outputOne = document.querySelector(".output-one");
const outputTwo = document.querySelector(".output-two");
const outputThree = document.querySelector(".output-three");

function updateAmount(amount) {
    outputOne.textContent = amount;
    currentAmount = amount;
}

function calculateTotal(amount, tip) {
    finalSum = parseFloat(amount) + parseFloat(tip);
}

function calculatePerPerson(amount, people) {
    perPersonSum = parseFloat(amount) / parseInt(people);
}

function calculateTip(amount, tip) {
    var rawTip = amount * (parseFloat(tip) * .01);
    var roundedTip = rawTip.toFixed(2);

    currentTip = roundedTip;
    outputTwo.textContent = currentTip;

    calculateTotal(currentAmount, currentTip);
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

function renderPage(window) {
    outlet.innerHTML = window;
}

const homeTemplate = `
<output-block>
    <field>
        <label for="">Total amount?</label>
        <input id='sub-total' type="number">
    </field>

    <action-block>
        <button id='start' data-route="tip" disabled  >Start</button>
    </action-block>
</output-block>
`;

const tipTemplate = `

<output-block>
    <field>
        <label for="">How much should we tip?</label>
        <input id='tip' type="range" min="0" max="10" value='5'>
    </field>

    <action-block>
        <button id='total' data-route="total">Total</button>
        <button data-route="split">Are we spliting?</button>
    </action-block>
</output-block>
`;

const splitTemplate = `
<output-block>
    <field>
        <label for="">Spliting how many way?</label>
        <input id='split' type="number" min='1' value='1'>
    </field>

    <action-block>
        <button id='perPerson' data-route="perPerson" >Total</button>
    </action-block>
</output-block>

`;

const totalTemplate = `
<output-block>
    <h3 class='strict-voice'>TOTAL</h3>

    <output id='total'> 

    </output>

    <field rel='split'>
        <label for="">Want to split?</label>
        <input id='split' type="number" min='1' placeholder='1'>
    </field>

    <action-block>
        <button id='perPerson' data-route="perPerson" >Total</button>
    </action-block>
</output-block>

`;

const perPersonTemplate = `
<output-block>
    <h3 class='strict-voice'>TOTAL</h3>

    <output id='person-total'> 

    </output>
</output-block>

`;

const routes = {
    home: homeTemplate,
    tip: tipTemplate,
    split: splitTemplate,
    total: totalTemplate,
    perPerson: perPersonTemplate
};

renderPage(homeTemplate);

window.addEventListener("click", function (event) {

    if (event.target.matches("[data-route]")) {
        var destination = event.target.dataset.route;
        renderPage(routes[destination]);

        if (destination !== "home") {
            document.querySelector('#home').style.display = "block";
        }


        if (destination == "total") {
            const totalOutput = document.querySelector("#total");
            totalOutput.textContent = finalSum;

            const finalReceipt = {
                subTotal: currentAmount,
                tip: currentTip,
                total: finalSum,
                personAmount: perPersonSum
            }
        }

        if (destination == "perPerson") {
            const personOutput = document.querySelector("#person-total");
            personOutput.textContent = perPersonSum;

            const finalReceipt = {
                subTotal: currentAmount,
                tip: currentTip,
                total: finalSum,
                personAmount: perPersonSum
            }
        }

    }

});

window.addEventListener("input", function (event) {

    if (event.target.matches("#sub-total")) {
        updateAmount(event.target.value);
        showButton(event.target.value.length, "#start");
    }

    if (event.target.matches("#tip")) {
        calculateTip(currentAmount, event.target.value);
        outputThree.textContent = finalSum;
    }

    if (event.target.matches("#split")) {
        calculatePerPerson(finalSum, event.target.value);
        console.log(perPersonSum);
    }

});


