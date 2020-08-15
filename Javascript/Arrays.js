//Arryas --> help to store more than one variable ,it can also store different data type

//Example
var countries = ["Kenya", "America", "USA","Netherlands"];

//indexing
countries[3] = "spain";
//it change the third index to spain

//mutable --> can be changed i.e arrays
//immutable --> cannot be changed i.e strings
var country = "China";
country[2] = "c"; //cannot be changed

//Different data type
var mixedDataType = [true , 20, "Hello"];

//Add and remove item in array
var Array = [1,2,"later"];

//add--> push
Array.push("Major");

//remove-->pop //the lastitem
var lastItem = Array.pop();


//Nested Arrays
var matrix =[ [2,3,4],[4,6,9],[4,3,]];

//To print all items in array

for (var i =0; i<matrix.length; i++){
    console.log(matrix[i]);
}
//OR//
for (letter of matrix){
    console.log(letter)
}