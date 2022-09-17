
// create signin page
// create comments page
// create profile page

const siteName = "Welcome to the Chat";
const outlet = document.querySelector('[rel="outlet"]');

var channelsData = ['chit-chat', 'music', 'movies', 'games'];
// var messagesData = [];
var chitchatMessagesData = [];
var musicMessagesData = [];
var moviesMessagesData = [];
var gamesMessagesData = [];

var routes = {};

routes.signIn = `
    <section class='landing'>
        <inner-column>
            <h1 class='strict-voice'>${siteName}</h1>

            
		<button data-route='channels'>Sign in</button>
        <button data-route='newUser'>Create Account</button>
	</section>
        </inner-column>
    </section>
`;

routes.newUser = `
    <section class='landing'>
        <inner-column>
            <h1 class='strict-voice'>New User ? </h1>

            <form action="">
                <input type="text" name="username" placeholder="Username" />

                <input type="password" name="password" placeholder="Password" />

                <button type="submit" data-route='channels'>Sign In</button>
            </form>
        </inner-column>
    </section>
`;

routes.channels = `
    <section class="channels" id='channel-menu'>
        <inner-column>
            <h2 class='another-voice'>Channels</h2>

            <div id='channels-list'>

            </div>
        </inner-column>

    </section>
`;

routes.chat = `
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

function addMesssage(message) {
    if (message.length) {

        if ('[data-id]' == 'chitchat') {
            chitchatMessagesData.push(message);
            renderMessages(chitchatMessagesData);
        }
        if ('[data-id]' == 'music') {
            musicMessagesData.push(message);
            renderMessages(musicMessagesData);
        }
        if ('[data-id]' == 'movies') {
            moviesMessagesData.push(message);
            renderMessages(moviesMessagesData);
        }
        if ("[data-id]" == "games") {
            gamesMessagesData.push(message);
            renderMessages(gamesMessagesData);
        }

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

function renderChannelsList(list) {
    var template = `<ul>`;
    list.forEach(function (item) {
        template += `
        <li>
            <button data-route='chat' data-id="${item}" data-timestamp="" data-belongsTo="4">
                ${item}
            </button>
        </li>
        `;
    });
    template += `</ul>`;
    document.querySelector('#channels-list').innerHTML = template;
}

// EVENT LISTENERS
window.addEventListener('click', function (event) {

    if (event.target.matches('[data-route]')) {
        var route = event.target.dataset.route;
        renderView(routes[route]);
        if (route == "chat") {
            if ('[data-id]' == 'chitchat') {
                renderMessages(chitchatMessagesData);
            }
            if ('[data-id]' == 'music') {
                renderMessages(musicMessagesData);
            }
            if ('[data-id]' == 'movies') {
                renderMessages(moviesMessagesData);
            }
            if ("[data-id]" == "games") {
                renderMessages(gamesMessagesData);
            }
        }

        if (route == "channels") {
            renderChannelsList(channelsData);
        }

    }

    if (event.target.matches('[data-action="add"]')) {
        event.preventDefault();
        var input = event.target.closest('form').querySelector('input');
        var message = input.value;
        addMesssage(message);
        input.value = "";
    }

    // if (event.target.matches('[data-action="channel"]')) {
    //     channelMenu.classList.remove("hide");
    // } else {
    //     channelMenu.classList.add("hide");
    // }
});

console.log(chitchatMessagesData);
