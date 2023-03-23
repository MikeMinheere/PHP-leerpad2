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
        <?php
            $errorMsg = "";
            function test_input($data) {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
            }
            
            if ($_SERVER["REQUEST_METHOD"] == "POST"){
                $input1 = test_input($_POST["input1"]);
                $input2 = test_input($_POST["input2"]);
                $input3 = test_input($_POST["input3"]);
                $input4 = test_input($_POST["input4"]);
                $input5 = test_input($_POST["input5"]);
                $input6 = test_input($_POST["input6"]);               
            }
            $styleForm = "";
            $styleResult = "";
            for ($i = 0; $i < 6; $i++){
                $errorMsg = "";
                if(isset($_POST["submitBtn"])){
                    if (empty($_POST["input$i"])) {
                        $errorMsg = "niet alle velden zijn correct ingevuld!";
                    }
                    else{
                        $styleForm = "style='display:none;'";
                        $styleResult = "style='display:flex;'";
                    }
                }
            }
            ?>
        <div id="h1">
        <h1>Er Heerst paniek</h1>
        </div>
        <div id= "mainDiv" class="container" <?php echo $styleForm;?>>
            <form action="paniek.php" method="post" id="formInput">
                <span> Wat zou je graag willen kunnen? <input type="text" name="input1"><br><br></span>
                <span> Met welke persoon kan je goed opschieten? <input type="text" name="input2"><br><br></span>
                <span> wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="input3"><br><br></span>
                <span> wat is je beste persoonlijke eigenschap? <input type="text" name="input4"><br><br></span>
                <span> wat is je slechtste persoonlijke eigenschap? <input type="text" name="input5"><br><br></span>
                <span> wat is het ergste wat je zou kunnen overkomen? <input type="text" name="input6"><br><br></span>
                <input type="submit" name="submitBtn" id="submitBtn">
            </form>
            <span><br><?php echo $errorMsg;?></span>
        </div>     
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