<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mad Libs</title>
        <link rel="stylesheet" href="madLibs.css">
    </head>
    <?php include '../PHP-leerpad2/model/header.php'?>
    <body>
        <div id="h1">
        <h1>Er heerst paniek</h1>
        </div>
        <?php require '../PHP-leerpad2/controller/input.php';?>
        <?php
            if(isset($_POST["submitBtn"])){
                require '../PHP-leerpad2/model/result.php';
            }
        ?>
    </body>
    <?php include '../PHP-leerpad2/footer.php';?>
</html> 