<?php

$ref = filter_input(INPUT_POST,'ref');
$libel = filter_input(INPUT_POST,'libel');
$prix = filter_input(INPUT_POST,'prix');
$stock = filter_input(INPUT_POST,'stock');
$couleur = filter_input(INPUT_POST,'couleur');
$cat_id = $_POST['pro_cat_id'];
$textArea = $_POST['description'];
$id_photo = $_POST['text_id'];


$regexAlpha = '/^[a-zA-Z]+$/';
$regexNum = '/^(0|[1-9][0-9]*)$/';
$count_error = 0;

//Check the ref
if(empty($ref)){
    $ref_error = 'Please insert your reference.';
    $count_error++;
}elseif(strlen($ref)<3){
    $ref_error = 'Your reference needs to have minimum of 3 letters.';
    $count_error++;
}elseif(preg_match($regexAlpha,$ref)<1 ){
    $ref_error = 'Your reference needs to have letters and not numbers or others.';
    $count_error++;
}

//Check the libelle
if(empty($libel)){
    $libel_error = 'Please insert your libelle.';
    $count_error++;
}elseif(strlen($libel)<3){
    $libel_error = 'Your libelle needs to have minimum of 3 letters.';
    $count_error++;
}elseif(preg_match($regexAlpha,$libel)<1){
    $libel_error = 'Your libelle needs to have letters and not numbers or others.';
    $count_error++;
}

//Check texte area
// var_dump($_POST['textarea']);
if(strlen($textArea)<15){
    $textArea_error = 'Can you write on the text area, please, more 15 letters';
    $count_error++;
}

//Check price
if(empty($prix)){
    $prix_error = 'Please enter a price';
    $count_error++;
}elseif(preg_match($regexNum,$prix)){
    $prix_error = 'Your price do a number';
    $count_error++;
}
    

//Check the stock
if(empty($stock)){
    $stock_error = 'Please enter an number.';
    $count_error++;
}elseif(preg_match($regexNum,$stock)){
    $stock_error = 'Your stock do a number.';
    $count_error;
}//verif>0

//Check color
if (!preg_match($regexAlpha,$couleur)){
    $couleur_error = 'enter a color please.';
    $count_error++;
}elseif(strlen($couleur)>10){
    $couleur_error = 'Your color is so long, please no more 10 characters.';
    $count_error++;
}

if($count_error>0){
    include('../View/ajout.php');
}else include('../Controlers/script_ajout.php');

// include('contact.php');
?>





