<?php 
try {
    $connexion= new PDO("mysql:host=localhost;dbname=hakili",'root','');

} catch (PDOException $th) {
    echo 'Echec:' .$th-> getMessage();
}


?>