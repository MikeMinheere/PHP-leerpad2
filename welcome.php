<!DOCTYPE html>
<html>
    <body>
        <h1>Fill in form</h1>
        <form action="welcome.php" method="post">
            Name: <input type="text" name="name"><br>
            E-mail: <input type="email" name="email"><br>
            <input type="submit">
        </form> 
        <?php
        if (!empty($_POST["name"])) {
            echo $_POST["name"]."<br>";
        } 
        if (!empty($_POST["email"])) {
            echo $_POST["email"];}
        ?>
    </body>
</html> 