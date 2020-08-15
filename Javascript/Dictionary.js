var carinfo = {make: "Toyota", year:1990, model:"Camry"};


//dictionary with a method
var simple = {
    prop:"Hello world",
    mymethod = function () {
        console.log("My method was just called")

    }
};
//To call the method
simple.mymethod();

//Exercises



var employee = {
    name:"Jose Smith",
    job :"Programmer",
    age: "31",
    ///The function prints out the name length//
    namelength:function () {
        console.log(this.name.length)
    },
    //Prints outs the name,job amd age
    report:function () {
        alert("Name is "+this.name+",job is "+this.job +"age is "+this.age)
    },
    //prints out the last name
    lastName:function () {
        console.log(this.name.split(" "[1]))

    }
};
