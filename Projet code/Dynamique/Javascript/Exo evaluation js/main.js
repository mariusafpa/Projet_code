//-----------------Id Button------------------------
const button1 = document.getElementById("button1");
const button2 = document.getElementById("button2");
const button3 = document.getElementById("button3");
const button4 = document.getElementById("button4");
const button5 = document.getElementById("button5");
const button6 = document.getElementById("button6");

//----------------- Functions of the exercise------------------------------

//----------First function(calculate young,middle and old personn)-------
// ----------------final countdown method !!!----------------
function age() {
    let countYoung = 0;
    let countmiddle = 0;
    let countOld = 0;
    let ages = 0;
    while( ages<100)
    {
    ages = parseInt(prompt(`please, enter an age value :`));
    if(ages != ages)
    {
        window.alert(`It's not a good values !!`);
    }
    else if(ages<20)
    {
        countYoung++;
    }
    else if(ages<=40)
    {
        countmiddle++;
    }
    else countOld++;
    }
    window.alert(`you have: ${countYoung} young personn${sOrNotS(countYoung)}.\nyou have : ${countmiddle} middle personn${sOrNotS(countmiddle)}.\nyou have : ${countOld} old personn${sOrNotS(countOld)}.`);
}
//-----------------other method for create the function-----------------------------------
//--------------------------- Array push method --------------------------------
function ageArray (){
    let arrayYoung = [];
    let arrayMiddle = [];
    let arrayOld = [];
    let giveMeAge = 0;
    while(giveMeAge<=99)
    { 
        giveMeAge=parseInt(prompt(`please, enter an age value :`));
        if(giveMeAge != giveMeAge)
        {
            window.alert(`It's not a good values !!`);
        }
        else if(giveMeAge<20)
        {
            arrayYoung.push(giveMeAge);
        }
        else if(giveMeAge<=40)
        {
            arrayMiddle.push(giveMeAge);
        }
        else arrayOld.push(giveMeAge);
    }
    window.alert(`You have : ${arrayYoung.length} young personn${sOrNotS(arrayYoung.length)} and this is your entry [${arrayYoung}] \n You have : ${arrayMiddle.length} middle personn${sOrNotS(arrayMiddle.length)} and this is your entry [${arrayMiddle}] \n You have : ${arrayOld.length} old personn${sOrNotS(arrayOld.length)} and this is your entry [${arrayOld}]`);
}

// S ou pas S, function for add "s" or not, when the number of personn is superior to 1.
const sOrNotS = counter => counter > 1 ? "s" : ""; 

//-----------------multiplication table------------------
// while method

function multi () {
    let xNumber = 0;
    let yNumber = Number(prompt("Please, enter a multiple :"));
    let result = 0;
    while(xNumber<=10)
    {
        result = yNumber * xNumber ;
        console.log(`${yNumber} X ${xNumber} = ${result} `);
        xNumber++;
    }
    window.alert("look on your console !\nFor this push [F12].")
}
//------------------multiplication table ------------------
// for method

function multiFor () {
    let y = Number(prompt("Please, enter a multiple :"));
    let result=0;
    for(i=0; i<=10;i++)
    {
        result= i * y;
        console.log(`[${i}] X [${y}] = [${result}]`)
    }
    window.alert("look on your console !\nFor this push [F12].")
}
//-------------------Search a Name -------------------------------

function searchName () {



}









//------------------Call button---------------
button1.onclick = age;
button2.onclick = ageArray;
button3.onclick = multi;
button4.onclick = multiFor;