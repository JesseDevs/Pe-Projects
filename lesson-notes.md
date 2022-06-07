# Form Input Lesson Notes

## Mark up a form -

    label element
    input element
    button element

Input elements are self closing < input />
Inputs by default are set to ***type = 'text'*** and they have various attributes that can be used.

Buttons can be and are usually given the attribute of ***type = "submit"***

## PHP Ready -

* HTML can send forms to other systems.<br>
* Forms are given the attribute of ***method = "POST"***. This means we are sending data to the server.<br>
* Inputs are given a name attribute. Used as akey in the Array.

**Value** attribute represent the data.

We use **isset** to check if a $_POST['submitted'] exist.

When a form is submitted the data becomes a global variable and just hangs out read to be used.

We make variables to represent the inputed data from the user:

    $guests = $_POST['guests'];

**NUMBERS COME THROUGH AS STRINGS!!**

Turn a string into a number:<br>
    *floatval($guest)*

Remember to check if empty fields exist :<br>
    if ($_POST['guests']) >= 0{};


# Post Video Notes

Input and Label elements are inline-block. We should change them to block level elements.

We don't start with any numbers. It should, right?

**Wacky stuff**

Submitting a form does nothing unless we give the ability to.

A **GET** request is requesting something.<br>
While a **POST** request is sending something. Use the attribute "METHOD" to get this to start.

Remember gotta give our input and button elements names!

We could set a min and max value for numbers as an attribute in the input. Text inside of the input doesn't inherit from its parent!
