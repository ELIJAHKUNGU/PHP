var restart = document.querySelector("#b");
var squares = document.querySelectorAll("td")


function clearBoard (){
    for (var i = 0; i < squares.length ; i++)
    {
        squares[i].textContent = ' ';
    }
}

restart.addEventListener('click', clearBoard)

var cellOne = document.querySelector('#cell1')
var celltwo= document.querySelector('#cell2')
var cellthree = document.querySelector('#cell3')
var cellfour = document.querySelector('#cell4')
var cellfive = document.querySelector('#cell5')
var cellsix = document.querySelector('#cell6')
var cellseven = document.querySelector('#cell7')
var celleight = document.querySelector('#cell8')
var cellnine = document.querySelector('#cell9')


function changeMarker (){
    if(this.textContent === ''){
        this.textContent ='X';

    }else if(this.textContent ==='X'){
        this.textContent === 'O'
    }else{
        this.textContent =' ';
    }
}

for(var i = 0; i < squares.length; i++){
    squares[i].addEventListener('click',changeMarker)
}