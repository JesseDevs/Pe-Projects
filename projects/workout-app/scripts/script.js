import WorkoutApp from "./workoutapp.js";

const outlet = document.querySelector(".main-container");

function renderPage(template) {
    outlet.innerHTML = template;
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
<form class='main-form'>
    <field>
        <label for="x" class='loud-voice'>Create a routine</label>
        <input id='x' class='attention-voice' type="text" autocomplete="off" placeholder="ex. Bench Press" required>

        <div class="select-container">
            <select name="workoutType" id="workoutType" class='attention-voice'>
                <option value="">-- Workout Type --</option>
                <option value="chest">Chest</option>
                <option value="back">Back</option>
                <option value="legs">Legs</option>
                <option value="shoulders">Shoulders</option>
                <option value="cardio">Cardio</option>
            </select>
        </div>
    </field>

    <action-block>

        <button class='route-link' data-route="home">Home</button>
        <button type="submit" class='route-link'>Add</button>
    </action-block>
</form>
<output>

</output>
`;

const routes = {
    home: homeTemplate,
    list: listTemplate
};

renderPage(homeTemplate);

//workout app has to be called after the list template gets loaded in.
//maybe window.listen for dom load list template or something when more templates.

window.addEventListener("click", function (event) {

    if (event.target.matches("[data-route]")) {
        var destination = event.target.dataset.route;
        renderPage(routes[destination]);

        event.preventDefault();

        if (destination == "list") {
            const workoutApp = new WorkoutApp("Workouts");
            localStorage.setItem("template", JSON.stringify(routes.list, null, 2));
        }
    }
});



// load template on page load so it doesnt start at home if reloaded on list page

// window.addEventListener('DOMContentLoaded', (event) => {

//     const loadedTemplate = JSON.parse(localStorage.getItem("template")) || homeTemplate;
//     renderPage(loadedTemplate);
// });
