// Id button -----------------------------------------------------
const button1=document.getElementById("jeanClaude");
const button2=document.getElementById("loop");
const button3=document.getElementById("entier");
const button4=document.getElementById("Somme");
const button5=document.getElementById("multiX");



// Function one for button one------------------------------------
function tabJc (){
const lengthArray = Number(prompt("veuillez saisir la taille de votre tableau :"));
let myArray = []
for(i=1;i<=lengthArray;i++)
{
let values=myArray.push(prompt(`Veuillez entrer votre valeur n°: ${i}`));
}
window.alert(`les valeurs de votre tableau sont : [${myArray}]`);
}

// Fcuntion two for button two------------------------------------

function loopName (){
let myArray = [];
let count = 1;
let loopName = "";
do{
    loopName = prompt(`Veuillez rentrer le prénom n° : ${count} \nou appuyer sur annuler`);
    myArray.push(loopName);
    count++;
}while( loopName != null && loopName != "");
window.alert(`Voici le tableau des prenoms saisis [${myArray}]`);
}

//Function Three for button three-----------------------------------------------------

function entier (){
let nEntier = Number(prompt(`Veuillez entrer un nombre entier :`));
let i=1;
while (i<nEntier){
    let nInf = nEntier - i ;
    i++;
    window.alert(` Les nombres inférieurs à votre entier sont : ${nInf}`);
}
}
//Fucntion four for button Four

function sum () {
    let nEntier = 1;
    let count = 1;
    let sum = 0;
    let moy = 0;
    while (nEntier!=0){
        nEntier=Number(prompt(`Veuillez entrer un entier n°${count}: \n ou entrer 0 pour stoper la saisie.`));
        count++; 
        sum +=nEntier;   
    }
    moy = sum / count;   
    window.alert(`La Somme de vos saisis est :${sum}. \n La moyenne est : ${moy}.`)
}
// Function five for button five

function multi () {
    let xNumber = Number(prompt("Veuillez saisir un Entier :"));
    let yNumber = Number(prompt("Veuillez saisir un Multiple :"));
    let result = 0;
    while(yNumber>=0){
        result = yNumber * xNumber ;
        window.alert(`${yNumber} X ${xNumber} = ${result} `);
        yNumber--;
    }
}



















// Call button----------------------------------------------

button1.onclick = tabJc;
button2.onclick = loopName;
button3.onclick = entier;
button4.onclick = sum;
button5.onclick = multi;




//qu'est que j'ai ??
// - un entier (num)



//j'ai besoin de :

/*  -la suite de Fibo
- des nombres impair <= (num)
-de leur somme


*/
//Qu'est ce que je veux ??
// - la somme des nbres impair de la Sfib qui sont <= à (num)
