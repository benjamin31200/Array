<?php

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
        <form  method="post" action="thanks.php">
        <div>
          <label  for="nom">Nom :</label>
          <input  type="text"  id="nom"  name="first_name">
          
        </div>
        <div>
          <label  for="prénom">prénom :</label>
          <input  type="text"  id="prénom"  name="name">
          
        </div>
        <div>
          <label  for="courriel">Courriel :</label>
            <input  type="email"  id="courriel"  name="user_email">
            
        </div>
        <div>
          <label  for="message">Message :</label>
          <textarea  id="message"  name="user_message"></textarea>
          
        </div>
        <div  class="button">
          <button  type="submit">Envoyer votre message</button>
        </div>
        <div>
        <label for="fname">numéro de téléphone</label>
        <input type="text" id="numberPhone" name="téléphone">
        
        </div>
        <div>
        <label for="formulaire">choisis ton sujet !</label>
        <select id="formulaire" name="formulaire">
        <option value="free">La liberté</option>
        <option value="not free">L'égalité</option>
        <option value="?">Aucun des deux</option>
        
        </select>
        </div>
        <div>
        <textarea name="message" rows="10" cols="30">
        Explique ton choix.
        </textarea>
        
        </div>
      </form>
</body>
</html>