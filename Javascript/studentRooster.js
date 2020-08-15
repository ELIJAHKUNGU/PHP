var rooster = [];

//Add new student
function addNew() {
    var newName = prompt("what name would like to add");
    rooster.push(newName)

}

//Remove student
function remove() {
    var remName = prompt("what name would like you like remove");
    var index = rooster.indexOf(remName);
    rooster.splice(index,1);

}

//Display the student name
function display() {
    console.log(rooster);

}
//Logic

var start = prompt("Would like to start the web App: y/n");
var request = "empty";

if (start === 'y'){
    while (request !== 'quit' ){
        request = prompt("Please select an action: add,remove,display,quit .");
        if (request === 'add'){
            addNew()
        }else if (request ==='display'){
            display();
        }else if (request === 'remove'){
            remove()
        }else {
            alert("Not recognized")
        }
    }
}
alert("Thanks for using the web App");


