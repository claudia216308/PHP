<?php

 $file_path = "/Users/claudia/Desktop/images/";

//sauvegarde de l'image dans un dossier du serveur 
    $file_path = $file_path . basename( $_FILES['uploaded_file']['name']);
    $title =$_FILES['title'];
   
    if(move_uploaded_file($_FILES['uploaded_file']['tmp_name'], $file_path)) {
        echo "success";
    } else{
        echo "fail";
    }
    

    
?>