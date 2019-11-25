
<?php 
//ouverture à la bd
try {
    require_once("connexion.php");
   
// Preparation requete insertion (utilisation de SQl)
$resultat= $connexion->prepare("INSERT INTO husers VALUES (NULL,:nom,:prenom,:tel,:email,:pwd)");

//lier chaque valeur aux champs
    $resultat->bindValue(':nom',$_POST['nom'],PDO::PARAM_STR);
    $resultat->bindValue(':prenom',$_POST['prenom'],PDO::PARAM_STR);
    $resultat->bindValue(':tel',$_POST['tel'],PDO::PARAM_STR);
    $resultat->bindValue(':email',$_POST['email'],PDO::PARAM_STR);
    $resultat->bindValue(':pwd',$_POST['pwd'],PDO::PARAM_STR);
    
    } catch (MsgException $e) {
    echo 'Echec:' .$e-> getMessage();
}
//Execution de la requete préparée
$InsertIsOk= $resultat->execute();
var_dump ($_POST);
if ($InsertIsOk) {
    echo 'ajout effectué';
}else {
    echo 'Echec de linsertion';
}

?>