console.clear();

// create signin page
// create comments page
// create profile page

const siteName = "Welcome to the Chat";
const outlet = document.querySelector('[rel="outlet"]');
const channelMenu = document.querySelector('#channel-menu');

var routes = {};

routes.signIn = `
    <section>
        <inner-column>
            <h1 class='strict-voice'>${siteName}</h1>
            <form action="">
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="password" placeholder="Password" />
                <button type="submit">Sign In</button>
            </form>
        </inner-column>
    </section>
`;

routes.home = `
    <section>
        <inner-column>
            <h1 class='strict-voice'>Chat</h1>

            <output>
            <!-- message here -->
            </output>

            <form>
                <label>Message</label>
                <input />
                <button data-action='add'>Add</button>
            </form>
        </inner-column>
    </section>
`;

routes.profile = `
    <section>
        <inner-column>
            <h1 class='strict-voice'>USERNAME</h1>
            <button data-route='signIn'>Sign out</button>
        </inner-column>
    </section>
`;

function renderView(route) {
    outlet.innerHTML = route;
}

function init() {
    renderView(routes['signIn']);
}

init();


var messagesData = [];

function addMesssage(message) {
    if (message.length) {
        messagesData.push(message);
        renderMessages(messagesData);
    }
}

function renderMessages(messages) {
    var template = `<ol>`;
    messages.forEach(function (message) {
        template += `
        <li>
        <message data-id="" data-timestamp="" data-belongsTo="4">
        ${message}
        </message>
        </li>
        `;
    });
    template += `</ol>`;
    document.querySelector('output').innerHTML = template;
}

// EVENT LISTENERS
window.addEventListener('click', function (event) {

    if (event.target.matches('[data-route]')) {
        var route = event.target.dataset.route;
        renderView(routes[route]);
        if (route == "home") {
            renderMessages(messagesData);
        }
    }

    if (event.target.matches('[data-action="add"]')) {
        event.preventDefault();
        var input = event.target.closest('form').querySelector('input');
        var message = input.value;
        addMesssage(message);
        input.value = "";
    }

    if (event.target.matches('[data-action="channel"]')) {
        channelMenu.classList.remove("hide");
    } else {
        channelMenu.classList.add("hide");
    }
});
