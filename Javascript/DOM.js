var headOne = document.querySelector("#one");
var headTwo = document.querySelector("#two");
var headThree = document.querySelector("#three");


headOne.addEventListener('mouseover',function () {
    headOne.textContent = "Mouse Currently over";
    headOne.style.color = 'red';

});
headOne.addEventListener("mouseout",function () {
    headOne.textContent = "Hover over Me";
    headOne.style.color = "black"

});
headTwo.addEventListener("click",function () {
    headTwo.textContent = "CLICKE ON";
    headTwo.style.color = "blue";

});
headThree.addEventListener("dbclick",function () {
    headThree.textContent = "I was Double clicked";
    headThree.style.color = "red";

});