<!DOCTYPE html>
<html>
    <head>
        <title> Calculator </title>
        <meta name = "keywords" content = "php, calculator">
    </head>
    <body>
        <form action="calculator.php" method = "get">
            <input type="number" name = "num1">
            <br>
            <input type="number" name = "num2">
            <input type="submit">
        </form>

        Answer <?php
            if (isset($_GET["num1"]) && isset($_GET["num2"])) {
                echo $_GET["num1"] + $_GET["num2"];
            }
        ?>
    </body>
</html>
