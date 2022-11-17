import WorkoutApp from "./workoutapp.js";

const view = document.querySelector(".main-container");

function buildDayDisplay() {
    var secondTime = 1000;
    var minuteTime = 1000 * 60;
    var hourTime = 1000 * 60 * 60;
    var dayTime = 1000 * 60 * 60 * 24;
    var weekTime = 1000 * 60 * 60 * 24 * 7;
    var yearTime = 1000 * 60 * 60 * 24 * 365;

    var date = new Date()
    var dateTime = new Date().getTime();

    var yesterday = new Date(dateTime - (1000 * 60 * 60 * 24 * 1));

    var days = ['sunday', 'monday', 'tuesday', 'wednesday', 'thursday', 'friday', 'saturday'];
    let day = days[date.getDay()];
    return day;
}

function renderPage(template) {
    view.innerHTML = template;
}

const homeTemplate = `
<output-block class='home'>
    <text-content>
        <h2 class='loud-voice'>Let's Build A <span>Routine!</span></h2>
        <h6 class="small-voice">Everyday is a new opportunity</h6>
    </text-content>

    <action-block>

        <button class='route-link' data-route="list">Build</button>
        
    </action-block>
</output-block>
`;

const listTemplate = `
<output-block class='list'>
    <form class='main-form'>
        <field>
            <label for="x" class='loud-voice'>Add A Workout..</label>
            <input id='x' class='attention-voice' type="text" autocomplete="off" placeholder="ex. Bench Press" required>
    
            <div class="select-container">
                <select name="workoutType" id="workoutType" class='attention-voice'>
                    <option value="">-- Workout Type --</option>
                    <option value="chest">Chest</option>
                    <option value="back">Back</option>
                    <option value="legs">Legs</option>
                    <option value="shoulders">Shoulders</option>
                    <option value="cardio">Cardio</option>
                    <option value="core">Core</option>
                </select>
            </div>
        </field>
    
        <action-block>
    
            <button type="submit" class='route-link'>Add</button>
        </action-block>
    
    </form>
    <output>
    
    </output>
</output-block>
`;

const routineTemplate = `
<output-block class='routine'>
    <output id='routine-display'>

    </output>
</output-block>
`;

let day = buildDayDisplay();

const types = ["chest", "back", "legs", "shoulders", "cardio", "core"];
function graphLabels() {
    const labels = document.querySelector("#graphLabels");

    for (let x = 0; x < types.length; x++) {
        const element = types[x];

        var li = document.createElement('li');
        li.innerHTML = `<p>${types[x]}</p>`;
        labels.appendChild(li)
    }

}


const graphTemplate = `
<output-block class='graph'>

    <h3 class='loud-voice'> ${day}</h3>
    <output id='graph-display' class= "contains-graph">


        <ul class="graphValues">
            <li><p> 12</p></li>
            <li><p> 10</p></li>
            <li><p> 8</p></li>
            <li><p> 6</p></li>
            <li><p> 4</p></li>
            <li><p> 2</p></li>
            <li><p> 0</p></li>
        </ul>

        <div></div>
        <ul id="graphLabels">
     
        </ul>

    </output>
</output-block>
`;


const routes = {
    home: homeTemplate,
    list: listTemplate,
    routines: routineTemplate,
    graph: graphTemplate,
};

renderPage(homeTemplate);

// save routine to local storage and load when it access the routines page.
//workout app has to be called after the list template gets loaded in.
//maybe window.listen for dom load list template or something when more templates.

window.addEventListener("click", function (event) {

    if (event.target.matches("[data-route]")) {
        var destination = event.target.dataset.route;
        renderPage(routes[destination]);

        event.preventDefault();

        if (destination !== "home") {
            document.querySelector("#save").style.display = "block";
        }

        if (destination == "list") {
            const workoutApp = new WorkoutApp("Workouts");
            // localStorage.setItem("template", JSON.stringify(routes.list, null, 2));
        }

        if (destination == "graph") {
            graphLabels();
        }

    }
});

