console.clear();

let currentAmount = 0;
let currentTip = 0;
let finalSum = 0;
let people = 0;
let perPersonSum = 0;

// add comma to big
const numberFormatter = Intl.NumberFormat('en-US');

const outlet = document.querySelector(".outlet");
const outputOne = document.querySelector(".output-one");
const outputTwo = document.querySelector(".output-two");
const outputThree = document.querySelector(".output-three");
const outputFour = document.querySelector(".output-four");
const outputFive = document.querySelector(".output-five");

function updateAmount(amount) {
    outputOne.textContent = numberFormatter.format(amount);
    currentAmount = amount;
}

function calculateTotal(amount, tip) {
    calculatedSum = parseFloat(amount) + parseFloat(tip);
    finalSum = calculatedSum.toFixed(3);

    outputThree.textContent = numberFormatter.format(finalSum);
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

    if (isNaN(roundedTip)) {
        calculatedTip = 0;
    }
    currentTip = roundedTip;
    outputTwo.textContent = numberFormatter.format(currentTip);

    calculateTotal(currentAmount, currentTip);
}

function undoSplit(people, amount) {
    var originalValue = parseFloat(amount) * parseInt(people);
    finalSum = numberFormatter.format(originalValue);
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
<output-block class='home'>
    <field>
        <input id='sub-total' required min="1" type="number" pattern="[0-9]*" inputmode="numeric">
        <label for=""><span>Total amount?</span></label>
    </field>

    <action-block>
        
        <button id='fifteen' class='tip-btn' data-route="total" disabled  >
            15%
        </button>

        <button id='twenty' class='tip-btn' data-route="total" disabled >
            20%
        </button>

        <button id='start' class='tip-btn custom-btn' data-route="tip" disabled >Custom Tip</button>


        <button id='no-tip' class='tip-btn custom-btn' data-route="total" disabled>No Tip</button>
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

        <input id='split' required type="number" min='1' pattern="[0-9]*" inputmode="numeric">
        <label for=""><span>Split by?</span></label>
    </field>

    <action-block>
        <button id='perPerson' disabled data-route="perPerson" >Total</button>
    </action-block>
</output-block>

`;

const totalTemplate = `
<output-block calss='total'>
    <h3 class='strict-voice'>TOTAL</h3>

    <output id='total' class='roar-voice'> 

    </output>

    <field class='split-container'>

        <input id='split' required type="number" min='1' pattern="[0-9]*" inputmode="numeric">
        <label for=""><span>Split it?</span></label>
    </field>

    <action-block>
        <button data-route='home' id='home'>Home</button>

        <button id='perPerson' disabled data-route="perPerson" >Split</button>
    </action-block>
</output-block>

`;

const perPersonTemplate = `
<output-block class='total'>
    <h3 class='strict-voice'>TOTAL</h3>

    <output id='person-total'  class='roar-voice'> 

    </output>

    <action-block>
        <button data-route='home' id='home'>Home</button>

        <button data-route='split' id='peopleChange'>Edit</button>
    </action-block>
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

        if (destination == "tip" || destination == "split") {
            document.querySelector('footer.home').style.display = "block";
        } else {
            document.querySelector('footer.home').style.display = "none";
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
            totalOutput.textContent = numberFormatter.format(finalSum);

            // const finalReceipt = {
            //     subTotal: currentAmount,
            //     tip: currentTip,
            //     total: finalSum,
            //     personAmount: perPersonSum
            // }
        }

        if (destination == "perPerson") {
            const personOutput = document.querySelector("#person-total");
            personOutput.textContent = numberFormatter.format(perPersonSum);

        }

        if (destination == "perPerson") {
            outputFive.textContent = numberFormatter.format(perPersonSum);
        }

    }

    if (event.target.matches("#fifteen")) {
        calculateTip(currentAmount, 15);
        const totalOutput = document.querySelector("#total");
        totalOutput.textContent = numberFormatter.format(finalSum);
    }

    if (event.target.matches("#twenty")) {
        calculateTip(currentAmount, 20);
        const totalOutput = document.querySelector("#total");
        totalOutput.textContent = numberFormatter.format(finalSum);
    }

    if (event.target.matches("#no-tip")) {
        calculateTip(currentAmount, 0);
        const totalOutput = document.querySelector("#total");
        totalOutput.textContent = numberFormatter.format(finalSum);
    }


    if (event.target.matches("#people-change")) {
        undoSplit(people, perPersonSum);
        totalOutput.textContent = numberFormatter.format(finalSum);
    }

});

window.addEventListener("input", function (event) {

    if (event.target.matches("#sub-total")) {
        updateAmount(event.target.value);
        showButton(event.target.value.length, ".tip-btn:nth-of-type(1)");
        showButton(event.target.value.length, ".tip-btn:nth-of-type(2)");
        showButton(event.target.value.length, ".tip-btn:nth-of-type(3)");
        showButton(event.target.value.length, ".tip-btn:nth-of-type(4)");
    }

    if (event.target.matches("#tip")) {
        const percentage = document.querySelector('.percentage p');

        calculateTip(currentAmount, event.target.value);
        percentage.textContent = event.target.value;
    }

    if (event.target.matches("#split")) {

        people = event.target.value;
        showButton(event.target.value.length, "#perPerson");
        calculatePerPerson(finalSum, people);

    }

});

