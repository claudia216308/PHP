<?php
  require ("../CONNEXION/connexion.php");  
  $email=$_GET['email'];
  $mdp=$_GET['mdp'];
  $genre=$_GET['genre'];
  $prenom=$_GET['prenom'];
  $nom=$_GET['nom'];


  $sql =  mysql_query("INSERT INTO utilisateur(super,prenom,nom,email,motdepasse) VALUES ('$genre','$prenom','$nom','$email','$mdp');");

  mysqli_close($bdd);
?>