

// Global Variable declaraiton 
// ---------------------------------------------------------------------------
const initTabBtn = document.getElementById("bt1");
const saisieTabBtn  = document.getElementById("bt2");
const afficheTabBtn = document.getElementById("bt3");
const rechercheTabBtn = document.getElementById("bt4");
const infoTabBtn = document.getElementById("bt5");
const getIntegerBtn = document.getElementById("bt6");
let myArray;







// function declaration 
// ----------------------------------------------------------------------------------
const ok = () => {
    let acc = 0; 
    for (let i = 0; i < myArray.length; i++) {
        acc = myArray[i] + acc; 
    }
    console.log(acc)
};

const initTab = () =>{
// Variable longueur tableau souhaité
    let lenghtArray = parseInt(window.prompt("Entrez la taille de votre tableau svp"));
// Variable tableau
myArray =new Array(lenghtArray);
    console.log(myArray);
}

const saisieTab = () =>{
    //Crée une boucle pour la saisi
    for (let i=0; i<myArray.length;i++){
    // prendre en exemple ligne 24 var first = fruits[0]; (aide)   
    myArray[i]= Number(prompt(`Veuillez entrer votre valeur n° ${i+1}.`));
    }
console.log(myArray)
}
const afficheTab = () =>{
    window.alert(`Voici votre tableau ${myArray}`);
}
const rechercheTab = () =>{
    let callArray= myArray[prompt("Veuillez rentrer le n° de la valeur que vous voulez apellez :")-1];
    window.alert( `Vous avez apellé : ${callArray}`);    
}

const infoTab = () => {
    let moyenneArray = myArray.reduce((acc, val) => acc + val) / myArray.length; 
    let max = Math.max.apply(null, myArray);
    window.alert(`Le maximum est : ${max} la valeur moyenne est : ${moyenneArray}`);
}

const getInteger =() => {
    let entry = Number(prompt("veuillez entrer une valeur"));
    let result = Number.isInteger(entry) ? "une intégrale" : "une décimale"
    console.log("🚀 ~ file: exo1.js ~ line 62 ~ getInteger ~ result", result)
    
    window.alert(`Votre valeur est ${result}`); 
}









// Event handling 
// -----------------------------------------------------------------------------------------
initTabBtn.onclick = initTab; 
saisieTabBtn.onclick = saisieTab; 
afficheTabBtn.onclick = afficheTab; 
rechercheTabBtn.onclick = rechercheTab; 
infoTabBtn.onclick = infoTab; 
getIntegerBtn.onclick = getInteger; 



