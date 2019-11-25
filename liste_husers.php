<?php  
    require_once("security.php");
?>

<?php 
    require_once("connexion.php");
    $ps = $connexion-> prepare("SELECT * FROM husers");
    $ps-> execute();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/Bootstrap 4.3.1/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php require_once("entete.php")?>
    <div class="col-md-12 spacer container">
        <div class="panel panel-info spacer">
            <div class="panel-heading"> Liste des utilisateurs </div>
            <div class="panel-body">
            <table class="table table-striped">
        <thead>
            <tr>
                <th> IDENTIFIANT </th>
                <th> NOM </th>
                <th> PRENOM </th>
                <th> TEL </th>
                <th> EMAIL </th>
                <th> PASSWORD </th>
                
            </tr>
        </thead>
        <tbody>
            <?php while ($husers = $ps->fetch()) { ?>
                <tr>
                    <td><?php echo ($husers['id']) ?></td>
                    <td><?php echo ($husers['nom']) ?></td>
                    <td><?php echo ($husers['prenom']) ?></td>
                    <td><?php echo ($husers['tel']) ?></td>
                    <td><?php echo ($husers['email']) ?></td>
                    <td><?php echo ($husers['password']) ?></td>
                    <td> <a href="editusers.php?id=<?php echo ($husers['id']) ?>">Modifier</a>  </td>
                    <td><a onclick="return confirm('Etes vous sure ?');" href="delete_husers.php?id=<?php echo ($husers['id']) ?>">Supprimer</a></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
            </div>
        </div>
   
    </div>
</body>
</html>
