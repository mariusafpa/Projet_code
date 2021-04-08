<?php

//Verif formulaire
// var_dump($_POST);

//---------conteur error

$count_error=0;
$form_pro_id = $_POST['id'];


//----------pro_ref varchar 10
$pro_ref = $_POST['ref'];
if(strlen($pro_ref)<=0 || strlen($pro_ref)>=10) {
    $ref_error = 'La reférence renseigner est trop longue ou trop courte';
    $count_error++;
}

//----------pro_libelle varchar 200
$pro_libel = $_POST['libel'];
if(strlen($pro_libel)<=0 || strlen($pro_libel)>=200){
    $pro_libel_error = 'Veuillez entrer un libellé de moins de 200 characteres';
    $count_error++;
}

//----------pro_prix decimal/num
$pro_prix = $_POST['prix'];
if(!is_numeric($pro_prix) && ($pro_prix)>=0){
    $prix_error = 'Veuillez entrer un nombre.';
    $count_error++;
}

//----------pro_stock int
$pro_stock = $_POST['stock'];
if(!is_numeric($pro_stock) && ($pro_stock)>=0){
    $stock_error = 'Veuillez entrer un nombre';
    $count_error++;
}

//Verif image upload
// var_dump($_FILES);
if($_FILES['photo']['error']===4){
    include('script_modif_jarditou.php');

//----------Check si user renseigne une image

}else {

//----------si oui check extension de l'image
$maxSize = 50000;
$fileSize = $_FILES['photo']['size'];
$fileName =  $_FILES['photo']['name'];
$fileType = $_FILES['photo']['type'];
$fileTmp = $_FILES['photo']['tmp_name'];
// Création de variable provennant des info du fichier

$fileExt = strtolower(substr(strrchr($fileName,'.'),1));

//recupération et creation de l'extension

$ValidType = array('jpg', 'jpeg', 'gif','png');

//Création d'un array avec les extensions recevable

if($_FILES['photo']['error'] > 0){
    $photo_error = 'Fichier invalide';
    $count_error++;
}
//Script verification d'erreur lors de l'upload
//---------- rename image && move image
$newName = $_POST['id'];
$filedest='../images/'. $newName .'.'.$fileExt;
//nouvelle apellation et destination du files.

//----------check size image
if($fileSize>$maxSize){
    $photo_error = 'le Fichier est trop lourd, maximum 5 Mo. Votre document fait '. $fileSize/10000 .'Mo';
    $count_error++;
}

if(!in_array($fileExt,$ValidType)){
    $photo_error = "le fichier n'est pas une image";
    $count_error++;
}
}
//----------redirection page form
//redirection
if ($count_error>0){
    include('formulaire_jarditou.php');
}else {
    move_uploaded_file($fileTmp,$filedest);
    include('script_modif_jarditou.php');
}


// script-modif_jarditou si (!error && !errorfiles) || (!error && !files)