<?php require_once("security.php"); ?>
<?php 
require_once("security.php");
$id=$_GET['id'];
require_once("connexion.php");
$res = $connexion -> prepare("SELECT * FROM husers WHERE id=?");
$param= array($id);
$res -> execute($param);
$husers = $res -> fetch();
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Bootstrap 4.3.1/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php require_once("entete.php")?>
    <div class="container spacer col-md-8 col-xs-12">
         <div class="panel-heading">
                Modification des données de l'utilisateur Id=<?php echo ($husers['id'])?>
        </div>
        <div class="panel-body">
        <form method="post" action="update_user.php">
        <div class="form-group">
            <tr>
                <td><label for="id" hidden>Id:<?php echo ($husers['id'])?></label></td>
                
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td><label for="nom" class="control-label">Nom:</label></td>
                <td><input type="text" class="form-control" name="nom" value=" <?php echo ($husers['nom'])?> "></td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td><label for="prenom" class="control-label">Prénom:</label></td>
                <td><input type="text" name="prenom" class="form-control" value=" <?php echo ($husers['prenom'])?> "></td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td><label for="email">Email:</label></td>
                <td><input type="email" name="email" class="form-control" value="<?php echo ($husers['email'])?>"></td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td><label for="tel">Téléphone:</label></td>
                <td><input type="tel" class="form-control" name="tel" value=" <?php echo ($husers['tel'])?> "></td>
            </tr>
        </div>
        <div class="form-group">
            <tr>
                <td><label for="password" class="control-label">Mot de passe:</label></td>
                <td><input type="text" class="form-control" name="pwd" value=" <?php echo ($husers['password'])?>" ></td>
            </tr>
        </div>
        <div>
                <button type="submit">Modifier</button>
        </div>
        
    </form>
        </div>
    </div>
    
</body>
</html>