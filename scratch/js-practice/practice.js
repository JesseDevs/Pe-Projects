// Writing pseudo code for E4P

//#1
// I want to ask the user for their name.
var name = prompt('What is your name?');
// I want to take their name and then say " Hello, nice to meet you!"
var message = "Hello, " + name + ". nice to meet you!"

//display it
alert(message);



//#2
// I want to ask the user for a word.
var string = prompt('Enter a word!')
// Take that word as an input.

// Go through the word and count amount of characters(letters) it takes to make the word.
var stringLength = string.length;
// Tell the user the amount of characters for their word.
var message = 'You entered ' + string + '. it has ' + stringLength + ' amount of character!';

alert(message)




//#3

// Ask for the author of said quote
var quote = prompt('Enter your favorite quote.');

// Ask for the user for a quote from an author
var author = prompt('Enter who said this quote.')

// Take the author and quote and make a message.
var message = author + ' said "' + quote + '"!';
// Display message




//#4

// Ask the user for a noun
var noun =prompt('Enter a noun');
// Ask the user for a verb
var verb =prompt('Enter a verb');
// Okay, what about an adjective
var adjective =prompt('Enter a adjective');
// And an adverb
var adverb =prompt('Enter a adverb');

// Now make a messages that contains all those items.
var message = noun + ' is ' + verb + adverb + ' while maintaining ' + adjective + ' poise!';

//display message
alert(message);




//#5

// Have the user pick a number
var numOne =prompt('Enter your first number.');

// Have the user pick a second number
var numTwo =prompt('Enter your second number.');

// Make sure the numbers are numerical values
var numOne = parseInt(numOne);
var numTwo = parseInt(numTwo);

// Multiply those numbers and place them in a variable
var multiply = numOne * numTwo;
// Divide those numbers and place them in a variable

var divide = numOne / numTwo;
// Add those numbers and place them in a variable

var add = numOne + numTwo;
// Subtract those numbers and place them in a variable
var sub = numOne - numTwo;

//Display all the variables
alert([multiply, divide, add, sub]);




//#6

// Ask the user for their age
var age =prompt('How old are you?');

// Ask the user for what age they would like to retire at
var retire =prompt('At what age do you plan to retire?');
// Make sure the numbers are numerical values

// Take the retire year and subtract away their current age.
var retirementAge = parseInt(retire) - parseInt(age);
// Take the subtracted total years and add that to the current year.

var retireDate = 2015 + retirementAge;

// Display subtract total as years and date as year of retirement.

var message = 'It will be ' + retirementAge + ' years until you can retire in ' + retireDate + '.';



//#7

// Ask for the length of the room
var length = prompt('What is the length of the room in feet?');

// Ask for the width of the room
var width = prompt('What is the width of the room in feet?');

// calculate area
var area = parseInt(length) * parseInt(width);

var meters = area * .09290304;

// create a message to display to the user

var message =  'You entered dimensions of ' + length + ' feet by ' + width + ' feet. The area is ' + area + ' square feet. That is ' + meters + ' square meters';



// #8

// Ask the user how many people are at this party

// Ask the user how many pizzas do they have?

// Calculate the amount of slices per pizza. ( 8 * number of pizzas)

// Take the total amount of slices and divide by the number of people.

//Display the amount of slices per person and how many leftoovers.


//#9

// Ask for the length of the ceilding
var length = prompt('What is the length of the room in feet?');

// Ask for the width of the ceiling
var width = prompt('What is the width of the room in feet?');

// It takes 1 gallon to cover 350 square feet.

// Divide the amount of square feet by 350 for each gallon required.

// Always round up the total amount of gallons




// #10

// Ask the user for the price and quantity of item 1

// Ask the user for the price and quantity of item 2

// Ask the user for the price and quantity of item 3

// Get the totals of each group by multiplying the price by the number of items.

// Add all totals

// multiple the combined totals by 5.5% to calculate the tax and add it on to the subtotl.

// display grand total.
