<?php

echo var_dump($_POST);

$error = 'Le champ est manquant';
$errors = [];
$nomErr = $emailErr = $prénomErr = $sujetErr = $téléphoneErr = $messageErr = "";
$nom = $email = $prénom = $sujet = $téléphone = $message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $nomErr = $error;
    $errors[]="le prénom est manquant";
  } else {
    $nom = ($_POST["first_name"]);
  }

  if (empty($_POST["user_email"])) {
    $emailErr = $error;
    $errors[]="l'email est manquant";
  } else {
    $email = ($_POST["user_email"]);
  }

  if (empty($_POST["name"])) {
    $prénomErr = $error;
    $errors[]="le nom est manquant";
  } else {
    $prénom =($_POST["name"]);
  }

  if (empty($_POST["formulaire"])) {
    $sujetErr = $error;
    $errors[]="le sujet est manquant";
  } else {
    $sujet = ($_POST["formulaire"]);
  }

  if (empty($_POST["téléphone"])) {
    $téléphoneErr = $error;
    $errors[]="le téléphone est manquant";
  } else {
    $téléphone = ($_POST["téléphone"]);
  }

  if (empty($_POST["message"])) {
    $messageErr = $error;
    $errors[]="le message est manquant";
  } else {
    $message = ($_POST["message"]);
  }
}

var_dump(filter_var('bob@example.com', FILTER_VALIDATE_EMAIL));

if (count($errors) === 0) {
    echo "Merci $nom $prénom de nous avoir contacté à propos de $sujet. Un de nos conseiller vous contactera soit à l'adresse $email ou par $téléphone 
dans les plus brefs délais pour traiter votre demande: $message "; 
} else {
    var_dump($errors) ;
}



?>