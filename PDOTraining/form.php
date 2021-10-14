<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>
<body>
    <? require_once('PDOTraining.php'); ?>
<form  action="index.php"  method="post">
    <div>
      <label  for="firstname">firstname :</label>
      <input  type="text"  id="firstname"  name="firstname" value="firstname">
    </div>
    <div>
      <label  for="lastname">Lastname :</label>
        <input  type="text"  id="lastname"  name="lastname" value="lastname">
    </div>
    <div>
    <div  class="button">
    <input type="submit" value="Submit" />
    </div>
  </form>
</body>
</html>
