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
    while (ages < 100) {
        ages = parseInt(prompt(`please, enter an age value :`));
        if (ages != ages) {
            window.alert(`It's not a good values !!`);
        } else if (ages < 20) {
            countYoung++;
        } else if (ages <= 40) {
            countmiddle++;
        } else countOld++;
    }
    window.alert(`you have: ${countYoung} young personn${sOrNotS(countYoung)}.\nyou have : ${countmiddle} middle personn${sOrNotS(countmiddle)}.\nyou have : ${countOld} old personn${sOrNotS(countOld)}.`);
}
//-----------------other method for create the function-----------------------------------
//--------------------------- Array push method --------------------------------
function ageArray() {
    let arrayYoung = [];
    let arrayMiddle = [];
    let arrayOld = [];
    let giveMeAge = 0;
    while (giveMeAge <= 99) {
        giveMeAge = parseInt(prompt(`please, enter an age value :`));
        if (giveMeAge != giveMeAge) {
            window.alert(`It's not a good values !!`);
        } else if (giveMeAge < 20) {
            arrayYoung.push(giveMeAge);
        } else if (giveMeAge <= 40) {
            arrayMiddle.push(giveMeAge);
        } else arrayOld.push(giveMeAge);
    }
    window.alert(`You have : ${arrayYoung.length} young personn${sOrNotS(arrayYoung.length)} and this is your entry [${arrayYoung}] \n You have : ${arrayMiddle.length} middle personn${sOrNotS(arrayMiddle.length)} and this is your entry [${arrayMiddle}] \n You have : ${arrayOld.length} old personn${sOrNotS(arrayOld.length)} and this is your entry [${arrayOld}]`);
}

// S ou pas S, function for add "s" or not, when the number of personn is superior to 1.
const sOrNotS = counter => counter > 1 ? "s" : "";

//-----------------multiplication table------------------
// while method

function multi() {
    let xNumber = 0;
    let yNumber = Number(prompt("Please, enter a multiple :"));
    let result = 0;
    while (xNumber <= 10) {
        result = yNumber * xNumber;
        console.log(`${yNumber} X ${xNumber} = ${result} `);
        xNumber++;
    }
    window.alert("look on your console !\nFor this, push [F12].")
}
//------------------multiplication table ------------------
// for method

function multiFor() {
    let y = Number(prompt("Please, enter a multiple :"));
    let result = 0;
    for (i = 0; i <= 10; i++) {
        result = i * y;
        console.log(`[${i}] X [${y}] = [${result}]`)
    }
    window.alert("look on your console !\nFor this, push [F12].")
}
//-------------------Search a Name -------------------------------

function searchName() {

    let arr = ["Audrey", "Aurélien", "Flavien", "Jérémy", "Laurent", "Melik", "Nouara", "Salem", "Samuel", "Stéphane"];
    window.alert(`Hold back this table ${arr} and try enter a name.`)

    let name = prompt("Please, enter a name :");

    let search = arr.indexOf(name);

    if (search >= 0) {
        arr.splice(search, 1);
        arr.push(" ");
        window.alert("look on your console !\nFor this, push [F12].");
        console.log(`The name [${name})] has been removed from the table.\nYour new array is [${arr}]`);
    } else {
        console.log(`The name [${name}] don't exist in the tab.\nCaution accents and capitals !`);
    }
}

//-------------------Price Command-------------------------------------

function price() {
    let unityPrice = parseInt(prompt(`Please, can you enter the price of the product ?`));
    let orderQauntity = parseInt(prompt(`Please, enter your quantity ?`));
    let total = unityPrice * orderQauntity;
    const remise = [0.05, 0.10];
    const port = [0, 6, 0.02];
    //Check if the total is includ between two values, here 100 and 200, if not we  go to the second fence
    if (total >= 100 && total <= 200) {
        let resultTotal = total * remise[0];
        total = total - resultTotal;
        let fPort = total * port[2];
        // check if shipping fees, it's superior to 6 ! if isn't calculate the new shipping fees
        if (fPort >= 6) {
            fPort = total * port[2];
            total = total + fPort;
        } else {
            total = total + port[1];
        }
        //-------------Second fence or second check, we check if the total is includ between two values like previously, if not we go third fence
    } else if (total >= 201 && total <= 499) {
        resultTotal = total * remise[1];
        total = total - resultTotal;
        fPort = total * port[2];

        if (fPort >= 6) {
            fPort = total * port[2];
            total = total + fPort;
        } else {
            total = total + port[1];
        }
    }
    // ---------------------------------- third fence----------------------------
    else if (total >= 500) {
        resultTotal = total * remise[1];
        total = total - resultTotal;
        if (total < 500) {
            fPort = total * port[2];
            total += fPort;
        } else {
            total;
        }
    }

    //-----------Every others situations-------------
    else {
        total = total + port[1];
    }
    window.alert(`vous devez payer ${total}€`);
}






//------------------Call button---------------
button1.onclick = age;
button2.onclick = ageArray;
button3.onclick = multi;
button4.onclick = multiFor;
button5.onclick = searchName;
button6.onclick = price;