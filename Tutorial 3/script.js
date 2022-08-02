
console.log('Hello from script.js');

// Activity 2: Write your code for each task below.
// Task 1
let kangarooAvg = (97 + 109 + 89 + 90) / 4;
let gumtreesAvg = (89 + 92 + 92 + 111) / 4;

const answer1 = document.getElementById("activity2-task1");
if ( kangarooAvg > gumtreesAvg ) {
    var content = document.createTextNode("Kangaroos Win! Average Score: " + kangarooAvg);
} else if ( kangarooAvg > gumtreesAvg ) {
    var content = document.createTextNode("Gumtrees Win! Average Score: " + gumtreesAvg);
} else {
    var content = document.createTextNode("A DRAW! The wait continues");
}
answer1.appendChild(content);

// Task 2
let kangarooAvg2 = (98 + 113 + 102 + 100) / 4;
let gumtreesAvg2 = (109 + 96 + 124 + 98) / 4;

const answer2 = document.getElementById("activity2-task2");
if ( kangarooAvg2 > gumtreesAvg2 && kangarooAvg2 >= 100 ) {
    var content = document.createTextNode("Kangaroos Win! Average Score: " + kangarooAvg2);
} else if ( kangarooAvg2 < gumtreesAvg2 && gumtreesAvg2 >= 100) {
    var content = document.createTextNode("Gumtrees Win! Average Score: " + gumtreesAvg2);
} else {
    var content = document.createTextNode("A DRAW!");
}
answer2.appendChild(content);

// Task 3

let kangarooAvg3 = (98 + 112 + 102 + 100) / 4;
let gumtreesAvg3 = (110 + 96 + 107 + 99) / 4;

const answer3 = document.getElementById("activity2-task3");
if ( kangarooAvg3 > gumtreesAvg3 && kangarooAvg3 >= 100 ) {
    var content = document.createTextNode("Kangaroos Win! Average Score: " + kangarooAvg3);
} else if ( kangarooAvg3 < gumtreesAvg3 && gumtreesAvg3 >= 100) {
    var content = document.createTextNode("Gumtrees Win! Average Score: " + gumtreesAvg3);
} else if ( kangarooAvg3 == gumtreesAvg3 && gumtreesAvg3 >= 100 && kangarooAvg3 >= 100){
    var content = document.createTextNode("A DRAW!");
} else {
    var content = document.createTextNode("No Winners");
}
answer3.appendChild(content);



// Task 4
const kangaScores = [44, 95, 71, 85, 100];
const gumScores = [21, 54, 49, 23, 34];

function calculateAverageA(array) {
   var sum = 0;
   for (var i of array) {
       sum += i
   }
   
   return sum / array.length;
}

kangaAvg = calculateAverageA(kangaScores);
gumAvg = calculateAverageA(gumScores);

function determineWinner ( avgTeam1, avgTeam2) {
    return (avgTeam1 > avgTeam2 ? `Kangas Win! (${avgTeam1} vs. ${avgTeam2}) ` : `GumTrees Win!(${avgTeam2} vs. ${avgTeam1}) `)
}
const answer4 = document.getElementById("activity2-task4");
content = document.createTextNode(determineWinner(kangaAvg, gumAvg));
answer4.appendChild(content);

// Activity 3: Write your code for each task below.
// Task 1

function calcTax ( income ) {
    let taxRate = 0.35;

    if (income > 75000) {
        taxRate = 0.40;
    }
    if (income > 100000) {
        taxRate = 0.45;
    }
    return income * taxRate;
}
console.log(calcTax(40000));

// Task 2
const answer5 = document.getElementById("activity3-task4");
content = document.createTextNode(determineWinner(kangaAvg, gumAvg));
answer5.appendChild(content);


// Activity 4: Write your code for each task below.
// Task 1


// Task 2


// Task 3


// Task 4

