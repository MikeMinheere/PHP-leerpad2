<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mad Libs</title>
        <link rel="stylesheet" href="madLibs.css">
    </head>
    <header>
        <div class="container">
            <button onclick="window.location.replace('Onkunde.php')"><strong><h3>Onkunde</h3></strong></button>
            <button onclick="window.location.replace('paniek.php')"><strong><h3>Paniek</h3></strong></button>
        </div>
    </header>
    <body>
        <div id="h1">
        <h1>Er Heerst paniek</h1>
        </div>
        <?php include 'input.php';?>
        <div id="result" class="container" <?php echo $styleResult;?>>
            <p>Mijn geheime talent is <?php echo $input1?>. ik ben hier erg slectijd beter dan <?php echo $input2?>. ik gebruik hiealtijd een <?php echo $input3?> voor om miuit te voeren.
            <?php echo $input4?> is denk ik  die ik niet nodig heb. <?php echo $input5?> is iets wat ik meer moet doen. <?php echo $input6?> Bababoui.
            </p>    
        </div>
    </body>
    <footer>
        Gemaakt door: Mike Minheere &#169;
    </footer>
</html> 