<?php
echo var_dump($_POST);

$name = $_POST['first_name'];
$prénom = $_POST['name'];
$sujet = $_POST['formulaire'];
$email = $_POST['user_email'];
$téléphone = $_POST['phone'];
$message = $_POST['message'];

echo "Merci $name $prénom de nous avoir contacté à propos de $sujet. Un de nos conseiller vous contactera soit à l'adresse $email ou par $téléphone 
dans les plus brefs délais pour traiter votre demande: $message ";


?>
