
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
    <div class="container spacer col-md-8 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                Authentification
            </div>
            <div class="panel-body">
                <form method="post" action="authentifier.php">
                <div class="form-group">
                    <tr>
                        <td><label for="login" class="control-label">Login:</label></td>
                        <td><input type="text" name="username" class="form-control" placeholder="username"></td>
                    </tr>
                </div>
                <div class="form-group">
                    <tr>
                        <td><label for="pwd">Mot de passe:</label></td>
                        <td><input type="password" name="pwd" class="form-control"></td>
                    </tr>
                 </div>
                <div>
                    <button type="submit">Connexion</button>
                </div>

                </form>
            </div>
        </div>
    </div>
    
</body>
</html>











