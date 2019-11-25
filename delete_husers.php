<?php require_once("security.php"); ?>

<?php 
    $id = $_GET['id'];
    require_once("connexion.php");
    $req= $connexion -> prepare("DELETE FROM husers WHERE id=?");
    $param= array($id);
    $req -> execute($param);

    $DeleteIsOk= $resultat->execute();
if ($DeleteIsOk) {
    echo 'Suppression effectuée';
}else {
    echo 'Echec de la suppresion';
}

?>