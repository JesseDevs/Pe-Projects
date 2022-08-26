  var exampleArray = ["strawberries", "bananas", "tomatos", "pears"];

  var animalNames = ['spot','spike', 'princess'];

  function fruit(fruit){
    console.log("My favorite fruit is " + fruit + "!!!");
}

// fruit("Strawberry");

function printItem(item){
    var listItem = document.createElement('li');
    listItem.textContent = item;
    document.body.appendChild(listItem);
}

function doThings(anArray, aFunction){

    for (var i = 0; i < anArray.length; i++){
        aFunction( anArray[i]);
    }
}

doThings(exampleArray, fruit);

animalNames.forEach( function(item){
    console.log(item)
});
