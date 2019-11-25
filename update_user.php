
<?php require_once("security.php"); ?>

<?php 
$id=$_POST['id'];
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$email=$_POST['email'];
$tel=$_POST['tel'];
$pwd=$_POST['pwd'];

//ouverture à la bd
try {
    require_once("connexion.php");

// Preparation requete insertion (utilisation de SQl)
$resultat= $connexion->prepare("UPDATE husers SET nom=?, prenom=?, email=?, tel=?, password=? WHERE id=?");

//lier chaque valeur aux champs
   $param= array($nom,$prenom,$email,$tel,$pwd,$id);
   $resultat->execute($param);
    
    } catch (PDOException $e) {
    echo 'Echec:' .$e-> getMessage();
}
//Execution de la requete préparée
$EditIsOk= $resultat->execute();
if ($EditIsOk) {
    echo 'Mise à jour effectuée';
}else {
    echo 'Echec de la mise à jour';
}

?>