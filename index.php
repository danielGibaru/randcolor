
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css">
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="https://fonts.googleapis.com/css?family=Clicker+Script" rel="stylesheet">
        <meta charset="utf-8">
        <title>RandColor-V3.1</title>
    </head>
    <body id="index">
        <div class="form">
            <form class="" action="grid.php" method="post">
                <p class="titre">RandColor</p></br>
                <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                    <div class="input-group-addon">Combien de couleurs?</div>
                    <input type="number" class="form-control" name="nombre" value="0" min="0" max="10000">
                </div>
            </br></br>
                <input class="btn btn-primary" type="submit" name="valide" value="Valider">
            </form>
        </div>
    </body>
</html>
