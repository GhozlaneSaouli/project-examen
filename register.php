<?php

try {
      $bdd = new PDO('mysql:host=localhost;dbname=projectexam;charset=utf8','root', '');
    //  echo "Connexion à la base de données réussie";
  } catch (Exception $exc) {
     // echo "Connexion à la base de données échouée";
      //echo $exc->getTraceAsString();
  }

$username= $_POST['username'];

$email = $_POST['email'];
$password = $_POST["password"];
$confirm_password = $_POST['confirm_password'];

echo "$username $email $password $confirm_password";





if($password == $confirm_password){
 
    $inserer = $bdd->query("INSERT INTO connection(username,email,password,confirm_password) VALUES ('$username','$email', '$password', '$confirm_password')");//POUR INSIRER LES VALUE DANS LES ATRIBUE QUI EXISTE DANS LE TABLEAU

}


?>