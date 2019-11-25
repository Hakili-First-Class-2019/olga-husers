<?php  
    require_once("security.php");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Bootstrap 4.3.1/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <?php require_once("entete.php")?>
    <div class="container spacer col-md-8 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Enregistrement d'un utilisateur
            </div>
            <div class="panel-body">
                <form method="post" action="classEnregistrement.php" >
                <div class="form-group">
                    <tr>
                        <td><label for="nom" class="control-label">Nom:</label></td>
                        <td><input type="text" name="nom" class="form-control"></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td><label for="prenom">Prénom:</label></td>
                        <td><input type="text" name="prenom" class="form-control"></td>
                    </tr>
                 </div>
                 <div class="form-group">
                    <tr>
                        <td><label for="email">Email:</label></td>
                        <td><input type="email" name="email" class="form-control"></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td><label for="tel">Téléphone:</label></td>
                        <td><input type="tel" name="tel" class="form-control"></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td><label for="password">Mot de passe:</label></td>
                        <td><input type="password" name="pwd" class="form-control"></td>
                    </tr>
                </div>
                <div>
                    <button type="submit">Enregistrer</button>
                </div>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>