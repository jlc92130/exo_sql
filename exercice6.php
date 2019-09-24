<?php
// lancement de la requete et execution
//      $stmt = $conn->prepare("SELECT id, first_name, last_name FROM `table 2` WHERE last_name='palmer'");
//      $stmt->execute();
    $sql =  $conn->prepare( 'INSERT INTO `table 2` (first_name,last_name,email,gender,ip_address,birth_date,zip_code,avatar_url,state_code,country_code) VALUES ("jean","toto","erkins0@cnbc.com","Male","10.101.200.001","01/01/2000","","http://slideshare.net/felis.jpg","","CN")') ;

    $sql->execute();
