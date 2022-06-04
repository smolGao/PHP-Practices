<!DOCTYPE html>
<html>
    <head>
        <title> Calculator </title>
        <meta name = "keywords" content = "php, calculator">
        <style>
            body {
                background-color: grey;
            }
            header {
                background: red;
            }
        </style>
    </head>
    <body>
        <header>Basic Calculator</header>
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

        <h1 style="background-color: gold">Better Calculator</h1>
        <form action="calculator.php" method="post">
            First number: <input type="number" step="0.01" name="num1"> <br>
            Operator: <input type="textbox" name="op"> <br>
            Second number: <input type="number" step="0.01" name="num2"> <br>
            <input type="submit">
        </form>

        <?php 
            $num1 = $_POST["num1"];
            $num2= $_POST["num2"];
            $op = $_POST["op"];

            if($op == "+"){
                echo $num1 + $num2;
            } elseif($op == "-"){
                echo $num1 - $num2;
            } elseif($op == "/"){
                echo $num1 / $num2;
            } elseif($op == "*"){
                echo $num1 * $num2;
            } else {
                echo "Invalid Operator";
            }
        ?>
    </body>
</html>