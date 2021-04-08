<?php
// $firstname = $_POST['firstname'];

//$name = $_POST['name'];
$name = filter_input(INPUT_POST,'name');
$firstname = filter_input(INPUT_POST,'firstname');

$regexAlpha = '/^[a-zA-Z]+$/';
$regexDate = '/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/';
$regexEmail = '/^[a-z0-9][a-z0-9._-]*@[a-z0-9_-]{2,}(\.[a-z]{2,4}){1,2}$/';
$regexpostal = '/^\d{2,}$/';
$count_error = 0;

//Check to the firstname
if(empty($firstname)){
    $firstname_error = 'Please insert your Firstname.';
    $count_error++;
}elseif(strlen($firstname)<3){
    $firstname_error = 'Your Firstname needs to have minimum of 3 letters.';
    $count_error++;
}elseif(preg_match($regexAlpha,$firstname)<1 ){
    $firstname_error = 'Your Firstname needs to have letters and not numbers or others.';
    $count_error++;
}

//Check to the Name
if(empty($name)){
    $name_error = 'Please insert your Name.';
    $count_error++;
}elseif(strlen($name)<3){
    $name_error = 'Your Firstname needs to have minimum of 3 letters.';
    $count_error++;
}elseif(preg_match($regexAlpha,$name)<1){
    $name_error = 'Your Firstname needs to have letters and not numbers or others.';
    $count_error++;
}
//Check for the radio's button
if(!isset($_POST['sexeverif'])){
    $sexe_error = 'Please choose a sex.';
    $count_error++;
}
else
    $sexe_error = '';

    //Check to the birth's date

    $birth_date = $_POST['user_birth'];
if($birth_date==null){
    $birth_date_error = 'Please enter a birth date.';
    $count_error++;
}elseif(!preg_match($regexDate,$birth_date)){
    $birth_date_error = 'Wrong date, please retry.';
    $count_error++;
}

//Check postal
$postal = $_POST['postal'];
if (!preg_match($regexpostal,$postal)){
    $postal_error = 'This postal code is wrong.';
    $count_error++;
}elseif(strlen($postal)>5){
    $postal_error = 'Your postal code, much long, no more five numbers.';
    $count_error++;
}


//Check email

$email = $_POST['email'];
if(!preg_match($regexEmail,$email)){
    $email_error = 'This email is wrong';
    $count_error++;
}



// var_dump($_POST['choice']);
//check sujet
$choice = $_POST['choice'];
if(intval($choice)==0){
    $choice_error = 'Please selecte a choice.';
    $count_error++;
}

//Check texte area
// var_dump($_POST['textarea']);
$textArea = $_POST['textarea'];
if(strlen($textArea)<15){
    $textArea_error = 'Can you write on the text area, please, more 15 letters';
    $count_error++;
}

//check button
if(!isset($_POST['put'])){
    $put_error = 'Can you push the button, please...';
    $count_error++;
}

//check error(Test)
// if(!isset($firstname_error,$name_error,$sexe_error,$birth_date_error,$postal_error,$email_error,$choice_error,$textArea_error,$put_error)){
//     include('success.php');
// }else include('contact.php');

if($count_error>1){
    include('../View/contact.php');
}else include('../View/success.php');

// include('contact.php');
?>





