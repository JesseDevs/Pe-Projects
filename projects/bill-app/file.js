console.clear();

let currentAmount = 0;
let currentTip = 0;
let finalSum = 0;
let people = 0;
let perPersonSum = 0;

const outlet = document.querySelector(".outlet");
const outputOne = document.querySelector(".output-one");
const outputTwo = document.querySelector(".output-two");
const outputThree = document.querySelector(".output-three");
const outputFour = document.querySelector(".output-four");
const outputFive = document.querySelector(".output-five");

function updateAmount(amount) {
    outputOne.textContent = amount;
    currentAmount = amount;
}

function calculateTotal(amount, tip) {
    calculatedSum = parseFloat(amount) + parseFloat(tip);
    finalSum = calculatedSum.toFixed(2);

    outputThree.textContent = finalSum;
}

function calculatePerPerson(amount, people) {
    calculatedSum = parseFloat(amount) / parseInt(people);
    if (isNaN(calculatedSum)) {
        calculatedSum = parseFloat(amount);
    }
    perPersonSum = calculatedSum.toFixed(2);
    outputFour.textContent = people;

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
        <input id='sub-total' required min="1" type="number">
        <label for=""><span>Total amount?</span></label>
    </field>

    <action-block>
        <button id='start' data-route="tip" disabled  >Start</button>
    </action-block>
</output-block>
`;

const tipTemplate = `

<output-block>
    <field class='range-container'>
        <label for=""><span>How much tip?</span></label>
        <div class="percentage">
            <p></p>
        </div>
        <input id='tip' required type="range" orient="vertical" min="0" max="30" value="15">

    </field>

    <action-block>
        <button id='total' data-route="total">Total</button>
        <button data-route="split">Split?</button>
    </action-block>
</output-block>
`;

const splitTemplate = `
<output-block>
    <field>

        <input id='split' required type="number" min='1'>
        <label for=""><span>Split by?</span></label>
    </field>

    <action-block>
        <button id='perPerson' data-route="perPerson" >Total</button>
    </action-block>
</output-block>

`;

const totalTemplate = `
<output-block calss='total'>
    <h3 class='strict-voice'>TOTAL</h3>

    <output id='total' class='roar-voice'> 

    </output>

    <field class='split-container'>

        <input id='split' required type="number" min='1'>
        <label for=""><span>Split instead?</span></label>
    </field>

    <action-block>
        <button id='perPerson' data-route="perPerson" >Total</button>
    </action-block>
</output-block>

`;

const perPersonTemplate = `
<output-block class='total'>
    <h3 class='strict-voice'>TOTAL</h3>

    <output id='person-total'  class='roar-voice'> 

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
            document.querySelector('footer.home').style.display = "block";

        }

        if (destination == 'home') {
            currentAmount = 0;
            currentTip = 0;
            finalSum = 0;
            people = 0;
            perPersonSum = 0;

            updateAmount(currentAmount);
            calculateTip(currentAmount, currentTip);
            calculatePerPerson(finalSum, people);
            outputFive.textContent = perPersonSum;
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

        if (destination == "perPerson") {
            outputFive.textContent = perPersonSum;
        }

    }

});

window.addEventListener("input", function (event) {

    if (event.target.matches("#sub-total")) {
        updateAmount(event.target.value);
        showButton(event.target.value.length, "#start");
    }

    if (event.target.matches("#tip")) {
        const percentage = document.querySelector('.percentage p');

        calculateTip(currentAmount, event.target.value);
        percentage.textContent = event.target.value;
    }

    if (event.target.matches("#split")) {
        people = event.target.value;
        calculatePerPerson(finalSum, people);
    }

});
