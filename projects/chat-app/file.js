console.clear();

// assing varibles ot the main buttons on display on all pages.

const homeButton = document.querySelector('#home');
const searchButton = document.querySelector('#search');
const mentionsButton = document.querySelector('#mentions');
const chatButton = document.querySelector('#chat');
const signIn = document.querySelector('#signIn');
const profile = document.querySelector('#profile');

const outlet = document.querySelector('[rel="outlet"]');
const siteName = "Chat sign up?";

var routes = {};

routes.signIn = `
		<h1 class='attention-voice'>${siteName}</h1>

        <form action="POST">
            <input type="text" name="password" placeholder='Username'/>
            <input type="password" name="password" placeholder='Password'/>

            <button type="submit">Sign In</button>
        </form>
`;

routes.home = `
		<h1>Chat Here</h1>
		
		<output>
        <!-- message here -->
      </output>

		<form>
			<label>Message</label>
			<input />
			<button data-action='add'>Add</button>
		</form>

`;

routes.profile = `
	<section>
		<h1>USERNAME</h1>

		<button data-route='chat'>Chat</button>
		<button data-route='signIn'>Sign out</button>
	</section>
`;

function renderView(route) {
    outlet.innerHTML = route;
}

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


function init() {
    renderView(routes['signIn']);
}

init();


homeButton.addEventListener('click', renderView(routes['home']));

// // EVENT LISTENERS
// window.addEventListener('click', function (event) {

//     if (event.target.matches('[data-route]')) {
//         var route = event.target.dataset.route;
//         console.log(route);
//         renderView(routes[route]);
//         if (route == "chat") {
//             console.log('hi');
//             renderMessages(messagesData);
//         }
//     }

//     if (event.target.matches('[data-action="add"]')) {
//         event.preventDefault();
//         var input = event.target.closest('form').querySelector('input');
//         var message = input.value;
//         addMesssage(message);
//         input.value = "";
//     }

// });
