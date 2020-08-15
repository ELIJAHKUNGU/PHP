var hot = false;
var temp = 10;

if (temp >80){
    console.log("It is beyond 80`")
}else{
    console.log("It below 80`");

}
if (temp >80){
    console.log("It is beyond 80`")
}else  if (temp <= 80 && temp >=50){
    console.log("Temp is btwn 80 and 50")

}else if (temp <=50 && temp >= 32){
    console.log("Temperature is bwn 50 and 32")
}else {
    console.log("A default value")
}