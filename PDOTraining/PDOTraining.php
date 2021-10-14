<?php
require_once('connec.php');
$pdo = new PDO(DSN, USER, PASS);

$query = "SELECT * FROM friend";
$statement = $pdo->query($query);
$friends = $statement->fetchAll(PDO::FETCH_ASSOC);

$firstname = trim($_POST['firstname']);
$lastname = trim($_POST['lastname']);
$query = "INSERT INTO friend (firstname, lastname) VALUES ('$firstname', '$lastname')";
$pdo->exec($query);


$lastname = trim($_POST['lastname']);
$lastname = trim($_POST['firstname']);

$query = 'SELECT * FROM friend WHERE firstname=:firstname';
$statement = $pdo->prepare($query);
$statement->bindValue(':firstname', $firstname, \PDO::PARAM_STR);
$statement->execute();

$query = 'SELECT * FROM friend WHERE lastname=:lastname';
$statement = $pdo->prepare($query);
$statement->bindValue(':lastname', $lastname, \PDO::PARAM_STR);
$statement->execute();

$query = 'SELECT firstname, lastname FROM friend';
$statement = $pdo->query($query);
$allName = $statement->fetchAll(PDO::FETCH_ASSOC);









