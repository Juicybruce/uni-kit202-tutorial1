/* The below variables have been defined for you. Please do not delete them. */
let secretNumber = Math.trunc(Math.random() * 30) + 1;
let guesses = 10;

/*
    Declare a function called 'displayMessage'. The function takes a single paramter called 'msg'.
    Within the function body:

    - set the text content of the 'message' element to the value of the 'msg' parameter.
*/

function displayMessage (msg) {
    message = document.getElementById("message");
    message.textContent = msg;
}

/*
    Declare a function called 'checkGuess'. The function takes no paramters.
    Within the function body:

    - retrieve the value entered by the player from the input element

    - if there is no input, display a message of "Please enter a number to play...".
      (Hint: use the 'displayMessage' function you created earlier)

    - if the value entered equals the 'secretNumber':
        - display a message of "You are correct. Well done!"
        - set the background colour of the 'number' element to #67c350
        - set the text content of the 'number' element to ":-)"

    - if the value entered **does not** equal the 'secretNumber':
        - check the number of guesses the player has left
            - if the guesses remaining is greater than 1:
                - display a message of "Too high" or "Too low" depending on the value entered
                - decrement the number of guessess remaining
                - set the text content of the 'remainingGuesses' element to the guesses remaining
            - if the player has no more guesses remaning:
                - display a message of "No more guesses remaining. Bad luck. The number was NN"
                  where NN is the secretNumber.
                - set the text content of the 'remainingGuesses' element to 0
                - disable the check button
                - set the background colour of the 'number' element to #d34f4f
                - set the text content of the 'number' element to ":-("
*/

function checkGuess () {
    guess = document.getElementById("guess").value;

    if ( guess == "") {
        displayMessage("Please enter a number to play...");
        return;
    }

    if ( guess == secretNumber) {
        displayMessage("You are correct. Well done!");
        number = document.getElementById("number");
        number.style.backgroundColor = "#67c350";
        number.textContent = ":-)";
    } else {
        if ( guesses > 0 ) {
            guess > secretNumber ? displayMessage("Too High!") : displayMessage("Too Low!");
            guesses--;
            document.getElementById("remainingGuesses").textContent = guesses;
        }
        else {
            displayMessage(`No more guesses remaining. Bad luck. The number was ${secretNumber}`)
            document.getElementById("checkBtn").disabled = true;
            number = document.getElementById("number");
            number.style.backgroundColor = "#d34f4f";
            number.textContent = ":-(";
        }
    }
}

/*
    Add an event listener for the check button's 'click' event. The event listener should call
    your 'checkGuess' function when raised.

    Hint: retrieve the check button element and then use the addEventListener function.
*/

document.getElementById("checkBtn").addEventListener("click", checkGuess);

