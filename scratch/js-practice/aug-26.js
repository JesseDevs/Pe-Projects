var items = [

	"Acai bowl",
	"Headphones",
	"Water bottle",
	"Phone",
	"Fan",
	"Glasses",
	"Background TV show"

];

var objectExample = {
	name: "Acai bowl",
	type: "food"
};

var itemObjects = [

	{
		name: "Acai bowl",
		type: "food"
	},
	{
		name: "Strawberry waffle",
		type: "food"
	},
	{
		name: "Headphones",
		type: "tool"
	},
	{
		name: "Water bottle",
		type: "drink"
	},
	{
		name: "Phone",
		type: "tool"
	},
	{
		name: "Fan",
		type: "tool"
	},
	{
		name: "Glasses",
		type: "tool"
	},
	{
		name: "Background TV show",
		type: "entertainment"
	}
];


var food = itemObjects.filter(function (item) {
	return item.type == "food";
});

var tools = itemObjects.filter(function (item) {
	return item.type == "tool";
});

console.log(tools);
console.log(food);


function generateList(items, heading) {
	var h2 = document.createElement('h2');
	h2.textContent = heading;
	document.body.appendChild(h2);

	// create a list
	var ol = document.createElement('ol');

	items.forEach(function (item) {
		console.log(item.name);
		var li = document.createElement('li');
		li.textContent = item.name;
		ol.appendChild(li);
	});

	document.body.appendChild(ol);
}

generateList(tools, "Jesse's tools");
generateList(food, "Jesse's snacks while programming..")


/*

function generate(items, type) {
	// create  heading element
	var heading = document.createElement('h1');
	heading.textContent = type;
	document.body.appendChild(heading);

	// create a list
	var ol = document.createElement('ol');

	// display each item
	items.forEach(function (item) {
		// a list of the items based on type
		if (item.type == type) {
			console.log(item.name);
			var li = document.createElement('li');
			li.textContent = item.name;

			//cool wasnt sure how to put li into a list.
			ol.appendChild(li);
		}
	});

	document.body.appendChild(ol);
}

generate(itemObjects, "tool");


itemObjects.forEach(function (item) {

	//if the item is a tool
	if (item.type == 'tool') {
		console.log(item.name);
		console.log("Type:", item.type);
		console.log('');
	}
});

itemObjects.forEach(function (item) {
	console.log(item.name);
	console.log("Type:", item.type);
	console.log('');
});


function displayItems(item, position, fullArray) {
	var number = position + 1;
	console.log(number, item);
};

items.forEach(displayItems);


// create function - that accepts an array and generates a markup

function generate(items) {

	// must have a heading element
	var heading = document.createElement('h1');
	heading.textContent = item.type;
	document.body.appendChild(heading);

	// a list of the items
	var list = document.createElement('ul');
	document.body.appendChild(list);


	itemObjects.forEach(function (item) {

		//if the item is a tool
		if (item.type == 'tool') {
			var listItem = document.createElement('li');
			listItem.textContent = item.name;
			document.ul.appendChild(li);
		}
	});

}

generate(itemObjects);
*/
