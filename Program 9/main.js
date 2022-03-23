var input=prompt("Pick a number", );
var num = parseInt(input);
var square, third,guess;
square = num*num;
for(var i=1;i<6;i++){
    guess = prompt("Enter a square of "+num+"?");
    if (guess==square) {
        alert("correct");
        break;
    }
    else{
        alert("Attempt "+i+" is wrong");
    }
}