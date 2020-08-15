//write a function called sleepIN that takes in two parameter weekday and vacatopn

//The parameter weekday is true if it is om weekday and a parameter vacation is true if we are on
//vacation .we sleep in if it is not a weekday or we're on vacation.Return true if we sleep in .so some example input and output


function sleepIn(weekday , vacation) {
    return (!weekday || vacation)

}

//Monkey  Trouble
//Two monkeys if they are both smiling or neither of them is smiling  we're both in trouble

function monkeyTrouble(aSmile , bSmile) {
    return(aSmile && bSmile) || (!aSmile && !bSmile)

}

//function that multiply the strings
function stringTimes(str , n ) {
    var returnStr = "";
    var i = 0;
    while (i<n){
        returnStr += str
        i++
    }
    return   returnStr
}

//Lucky sum
//Given three numerical as input but if one value is 13 then the values on
// the right won't count
//Example  input and output


//luckySum(1,2,3) -> 6
//luckySum(1,2,13) -> 3
//luckySum(1,13,3) -> 1

function luckySum(a,b,c) {
    /*if (a==13){
        return 0
    }
    if (b==13){
        return a
    }
    if (c==13){
        return a+b;
    }
    return a + b +c ;*/
    if (a ===13){
        return 0
    }else if (b===13){
        return a
    }else if (c===13){
        return a + b;
    }else {
        return a+ b + c;
    }

}

//