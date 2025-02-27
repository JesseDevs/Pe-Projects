var currentUser = {};

var userData = [
    {
        username: "jesse",
        password: "1234",
    },
];

const siteName = "Welcome to the Chat";
const outlet = document.querySelector('[rel="outlet"]');

var channelsData = ['chat', 'music', 'movies', 'games'];

var chatMessagesData = [];
var musicMessagesData = [];
var moviesMessagesData = [];
var gamesMessagesData = [];

var routes = {};

routes.signIn = `
    <section>
        <inner-column>
            <h2 class='strict-voice'>${siteName}</h2>

            <p class='signin-intro'>
                Let's get you started with account and then we could enter any channel with a topic you want to discuss.
            </p>

            <form action="" id='signIn'>
            <input type="text" name="username" placeholder="Username" value="Jesse" />

            <input type="password" name="password" placeholder="Password" value="1234" />

            <button type="submit" data-action='signIn' >Sign In</button>
            <form>

        </inner-column>
    </section>
`;

routes.newUser = `
    <section>
        <inner-column>
            <h2 class='strict-voice'>New User ? </h2>

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
            <h2 class='strict-voice'>Chit-Chat Channel</h2>

            <output>
            <!-- message here -->
            </output>

            <form>
                <label>Message</label>
                <input />
                <button data-action='add-chat'>Add</button>
            </form>
        </inner-column>
    </section>
`;

routes.music = `
<section>
    <inner-column>
        <h2 class='strict-voice'>Music Channel</h2>

        <output>
        <!-- message here -->
        </output>

        <form>
            <label>Message</label>
            <input />
            <button data-action='add-music'>Add</button>
        </form>
    </inner-column>
</section>
`;

routes.movies = `
<section>
    <inner-column>
        <h2 class='strict-voice'>Movies Channel</h2>

        <output>
        <!-- message here -->
        </output>

        <form>
            <label>Message</label>
            <input />
            <button data-action='add-movies'>Add</button>
        </form>
    </inner-column>
</section>
`;

routes.games = `
<section>
    <inner-column>
        <h2 class='strict-voice'>Games Channel</h2>

        <output>
        <!-- message here -->
        </output>

        <form>
            <label>Message</label>
            <input />
            <button data-action='add-games'>Add</button>
        </form>
    </inner-column>
</section>
`;


routes.profile = `
    <section>
        <inner-column>
            <h2 class='strict-voice'>${currentUser.name}</h2>
     
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
            <button data-route="${item}" data-timestamp="" data-belongsTo="4">
                ${item}
            </button>
        </li>
        `;
    });
    template += `</ul>`;
    document.querySelector('#channels-list').innerHTML = template;
}


function handleSignIn(userData, usernameInput, passwordInput) {
    for (var step = 0; step < userData.length; step++) {
        if (userData[step].username == usernameInput) {
            console.log(`username is ${usernameInput}`);
            if (userData[step].password == passwordInput) {
                console.log(`password is ${passwordInput}`);
                return true;
            }
        }
    }
    return false; // otherwise - explicitly 
}

// EVENT LISTENERS
window.addEventListener('click', function (event) {

    if (event.target.matches('[data-route]')) {
        var route = event.target.dataset.route;
        renderView(routes[route]);

        if (route == "chat") {
            renderMessages(chatMessagesData);
        }

        if (route == "music") {
            renderMessages(musicMessagesData);
        }

        if (route == "movies") {
            renderMessages(moviesMessagesData);
        }

        if (route == "games") {
            renderMessages(gamesMessagesData);
        }

        if (route == "channels") {
            renderChannelsList(channelsData);
        }

    }

    if (event.target.matches('[data-action="add-chat"]')) {
        event.preventDefault();
        var input = event.target.closest('form').querySelector('input');
        var message = input.value;
        if (message.length) {
            chatMessagesData.push(message);
            renderMessages(chatMessagesData);
        }
        input.value = "";
    }

    if (event.target.matches('[data-action="add-music"]')) {
        event.preventDefault();
        input = event.target.closest('form').querySelector('input');
        message = input.value;
        if (message.length) {
            musicMessagesData.push(message);
            renderMessages(musicMessagesData);
        }
        input.value = "";
    }

    if (event.target.matches('[data-action="add-movies"]')) {
        event.preventDefault();
        input = event.target.closest('form').querySelector('input');
        message = input.value;
        if (message.length) {
            moviesMessagesData.push(message);
            renderMessages(moviesMessagesData);
        }
        input.value = "";
    }

    if (event.target.matches('[data-action="add-games"]')) {
        event.preventDefault();
        input = event.target.closest('form').querySelector('input');
        message = input.value;
        if (message.length) {
            gamesMessagesData.push(message);
            renderMessages(gamesMessagesData);
        }
        input.value = "";
    }

    if (event.target.matches('[data-action="signIn"]')) {
        event.preventDefault();
        var form = event.target.closest('#signIn');
        var user = form.querySelector('#signIn input[type="text"]').value;
        var pass = form.querySelector('#signIn input[type="password"]').value;
        if (handleSignIn(userData, user, pass)) {
            console.log('must be signed in!!!');
            currentUser.name = user;
            console.log('currentUser: ', currentUser);
        }

        renderView(routes["channels"]);
        renderChannelsList(channelsData);
        console.log(`username is ${usernameInput}`);
    }
});
