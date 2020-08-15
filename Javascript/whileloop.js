var x = 1;

while (x<10){
    if (x%2 ===0){
        console.log("All evens number btwn 0---10   "+x);
        if (x===6){
            console.log("Just break")
            break;
        }
    }


    x = x+1;
}
