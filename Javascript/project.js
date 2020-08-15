//Four conditions

var firstname= prompt("Enter the First Name  ");
var lastname = prompt("Enter last name");
var  height = prompt("Enter the Height");
var age = prompt("Enter the age");
var petname = prompt("Enter the pet name");

alert("Thanks for the information");

var nameCond= null;
var heightCond = null;
var ageCond = null;
var petCond = null;

//Name Condition the first letter of both words should be the same
if (firstname[0]===lastname[0]){
    nameCond = true;
}else {
    nameCond = false
}
//Age Condition should be bwn 20 and 30
if (age>20 && age<30 ){
    ageCond = true
}else{
    ageCond = false
}
//Height Condition
if (height >=170){
    heightCond = true
}else{
    heightCond = false
}
//petname Condition grab the last letter of the word
if (petname[petname.length-1] ==="y"){
    petCond = true
}else {
    petCond = false
}

if (nameCond && ageCond && heightCond &&petCond){
    console.log("Welcome spy enter this password and be an Admin")
}else {
    console.log("Nothing buddy")
}