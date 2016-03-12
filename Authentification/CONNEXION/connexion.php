<?php

  include("config.php");
  $etat = mysql_connect($serveur,$utilisateur,$motDePasse); 
  mysql_select_db($nomBase);
  
?>