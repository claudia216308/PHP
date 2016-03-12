<?php
  require ("../CONNEXION/connexion.php");   
  
  $email=$_GET['email'];

  $sql = mysql_query("SELECT email, motdepasse FROM utilisateur where EMAIL='$email' ;");

  while($row = mysql_fetch_assoc($sql))
  $output[]=$row;
  print(json_encode($output));
  mysql_close($bdd);
 
?>