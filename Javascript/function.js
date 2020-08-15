function hello() {
    console.log("hello world")

}
//function with default value
function Name(username="Major") {
    console.log("Hello" +username)

}
//A function with two parameter
function AddNum(num1 ,num2) {
    console.log(num1 + num2)
}

//function with keyword return
function multiply(num3) {
    var result = num3 * 5;
    return result;

}
//local variable --they are defined within a function and are only available within a function
//Global variables --they are defined outside the function and are variable in and out of the function

//global variables
var v = "Hello world";
var user = "Elijah";

function global(user) {
    console.log(v);
    user = "Major"

}
global();

