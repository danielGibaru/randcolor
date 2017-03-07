<?php require_once("core.php"); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/master.css">

        <meta charset="utf-8">
        <title>RandColor-V3.1</title>
    </head>
    <body>
        <?php
            $nb = !empty($_POST['nombre']) ? intval($_POST['nombre']) : 0;
            echo colorBlocks($nb);
        ?>
    </body>
</html>
