// Exercice 1
/*
var prenom = window.prompt("saississez votre prénom ");
var nom = window.prompt("saisissez votre nom ");
var Mr = "Bonjour Monsieur ";
var Miss = "Bonjour Madame ";

if (window.confirm("Etes vous un homme ?")) {
    window.alert(Mr + prenom + " " + nom + "\nBienvenue sur notre site web")
} else {
    window.alert(Miss + prenom + " " + nom + "\nBienvenue sur notre site web ")
};

//exercice 2

var a = "100";

var b = 100;

var c = 1.00;

var d = true;

document.write("<p>" + "Ceci est une chaîne de caractères :" + " " + a + "</p>" );

document.write("\nb est égal à :" + b);

b--; // est egal à b = b-1

document.write("<p>" + "nouvelle valeur de b aprés décrémentation :" + b + "</p>" );

var a =parseInt(a);

document.write("<p>" + "ajout de la valeur c à la valeur a ou inversement, ça depend du point de vue :" + "</p>" );

document.write( c + a);

document.write("changement de la valeur d de true en false(utilisation de !d) :" + " ")

var d = !d; // donne l'inverse de la valeur avant true mtn false

document.write(d);

//exercice3

var N=prompt("choisissez un nombre", "Tapez votre nombre ici ");

parseInt(N);

if (N/N && N%2==0) {
    window.alert("votre nombre est pair")
};
if (N/N && N%2!=0){
    window.alert("votre nombre est impair")
};

 //exercice 4

var age=prompt("Veuillez renseigner votre age","Tapez votre age ici");

parseInt(age);

if (age < 18){
    window.alert("vous etes mineur")
}
else if(age >= 18){
    window.alert("vous etes majeur")
};

//exercice 5

var n1=parseInt(window.prompt("veuillez rentrer un premier nombre",""));
var n2=parseInt(window.prompt("veuillez rentrez un deuxiéme nombre",""));
var op=prompt("veuillez rentrer votre opérateur","");


switch(op)
{
    case "+" :
        window.alert(n1 + n2);
        break;
    case "-" :
        window.alert(n1 - n2);
        break;
    case "*" :
        window.alert(n1 * n2);
        break;
    case "/" :
        window.alert(n1 / n2);
        break;
    default:
        window.alert("mauvais opérateur !!")
};



//exercice 6


var conteur = 1;
var N = "";
do{
    N=prompt("Veuillez saisir un prenom N°" + conteur + "\n ou appuyer sur Annuler pour stoper la saisie.");

if( N != null && N != ""){

    document.write("prenom n°"+conteur+" : "+N);

    conteur++;
}

}while (N != null && N != "");


//exercice 7

var N = "";

N=prompt("veuillez saisir un nombre entier svp");

N = parseInt(N);

var test = N - 1;
while(test>=0)
{
    document.write("\n nombre inférieur à la saisie : "+ test);
    
    test--;
};


// exercice 8

var nbr = 1;
var moyenne = 0;
var som = 0;
var nb_notes = -1;
    
while (nbr != 0) {
    nbr = parseInt(window.prompt("Saisissez un nombre"));
    som += nbr;
    nb_notes++ ;
}
moyenne = som / (nb_notes );
alert("Somme : " + som + ", Moyenne : " + moyenne);


//exercice 9

var x = parseInt(window.prompt("veuillez saisir un nombre"));
var y = parseInt(window.prompt("veuillez saisir votre limite de table")); //remplacer var y par 0 pour avoir une table croissante
var resultat = 0;

while(y>=0)// remplacer sup par inf pour avoir la table croissante
{
    resultat = y * x;

    document.write(" le résultat de " + y +" * " + x + " est :  " + resultat  );


    y--;
}


//exercice 10

var word = window.prompt('Saisir un mot :').toLowerCase();
var wordLength = word.length;
var count = 0;

for (i = 0; i < wordLength; i++) {
    switch (word[i]) {
        case 'a':
        case 'e':
        case 'i':
        case 'o':
        case 'u':
        case 'y':

            count++;
            break;
        default: ' ';
    }
}
alert('Nombre de voyelle dans le mot ' + word + ' : ' + count);



//exercice 11 ecrire une fonction simple !

function exemple(text)
{
if(exemple =! null)
{
    alert(text);
}}

exemple(prompt());



// const papillonDiv= document.getElementById("papillon")

// function product(x){
//     return  x * x * x
// }
// var cube = parseInt(product(prompt("veuillez renseigner un nombre")));5

// function product1(y){
//     papillon.hidden = false;
//     return 5 * y
// }
// var mult = parseInt(product1(prompt("Veuillez rensigner un multiplicateur")));

    // var img = document.createElement("img");
    // img.src ="papillon.jpg";

    // var div = document.getElementById("x");
    // div.appendChild(img);

const papillonDiv= document.getElementById("papillon")
const resultat= document.getElementById("resultat")

const papillonNombre = () => {
    let nombre = Number(window.prompt("Entrez un nombre"));
    let result = `le cube de votre nombre est ${nombre * nombre * nombre}`;
    papillonDiv.hidden = false;
    resultat.innerHTML = result;

}

papillonNombre();

var tableau = []; 
var nombre = parseInt(prompt("Définissez la taille du tableau"));  

for (counter = 0; counter < nombre; counter++) 
{
    var donnée = prompt("Entrez une donnée");  
    tableau[counter] = donnée;  
}
alert(tableau);  


// DEBUT
const strtok = () => {
    // LECTURE
    let s1 = prompt("Veuillez rentrer votre tableau","robert ;dupont ;amiens ;80000");
    let s2 = prompt("Veuillez rentrer une valeur ?", ";");
    let n = prompt(" Veuillez choisir une nombre ?", "3");
    // use str.split TO SPLIT STR& INTO AN ARRAY 
    // add str 2 as our separator 
    let strToArr = s1.split(s2);
    console.log("🚀 ~ file: exojava1.js ~ line 254 ~ strtok ~ strToArr", strToArr);
    
    // look for n in our array  
    let callInd = strToArr[n-1];
    console.log("🚀 ~ file: exojava1.js ~ line 256 ~ strtok ~ callInd", callInd);

    // RESULT 
    window.alert(callInd);
}
// APPEL DE LA FONCTION
console.log(strtok());
*/
let myArray = new Array();
let n = 1;
let getValues = Number(prompt(`Veuillez rentrer une  valeur ${n} `));

while(getValues != 0) {
    myArray.push(getValues);
    console.log("🚀 ~ file: exojava1.js ~ line 267 ~ myArray", myArray)
    getValues = Number(prompt(`Veuillez rentrer une valeur n° : ${n+1} \n pour stoper entrer 0 `));
    n++;
    if (getValues==0){
        break;
    }
}