<!DOCTYPE html>
<html>
    <head>
        <title>Basics of PHP</title>
        <meta charset = "UTF-8">
        <style>
            h1 {
                background-color: yellow;
            }
        </style>
    </head>
    <body style="border-style:double;">
        <h1 style="background-color: green">Arrays</h1>
        <?php 
            $nameArray = array("John", "Peter", "Jimmy");
            $nameArray[10] = "Frank";
            echo $nameArray[10];
            echo "<br>";
            echo count($nameArray);
        ?>

        <!-- check boxes, [] signify to store all fruits in array -->
        <!-- <form action="syntax.php" method="post">
            Apples: <input type="checkbox" name="fruits[]" value="apple"> <br>
            Bananas: <input type="checkbox" name="fruits[]" value="banana"> <br>
            Pears: <input type="checkbox" name="fruits[]" value="pears"> <br>
            <input type="submit">
        </form> -->

        <?php 
            if (isset($_POST["fruits"])) {
                $fruits = $_POST["fruits"];
                echo $fruits[2];
            }
            
        ?>

        <!-- Associatiev Array, access by key instead of normal index 
            similar to map in java, and dic in python
        -->
        <?php
            $grades = array("Di"=>"2", "Pi"=>"3.14");
            $grades["Pi"];
            $grades["Di"] = "3.14159";
        ?>
        <h1 style="background-color: yellow;">Functions</h1>

        <!-- Functions, same as js -->
        <?php 
            function sayHi(){
                echo "Hello User";
                return;
            }
            sayHi();
        ?>

        <h1> If Statements</h1>
        <!-- If statements, same as java-->
        <?php 
            $isMale = true;
            $isTall = true;
            if ($isMale && $isTall){
                echo "You are a tall male"; 
            } elseif ($isMale && !$isTall) {
                echo "You are a short male";
            } elseif (!$isMale && $isTall) {
                echo "You are not male but you are tall";
            } else {
                echo "You are not male and not tall";
            }
        ?>


        <h1>Switch</h1>
        <!-- switch, same as java -->
        <form action="syntax.php" method="post">
            What's your grade?
            <input type="text" name="grade">
            <input type="submit">
        </form>

        <?php 
            $grade = $_POST["grade"];
            switch($grade) {
                case "A":
                    echo "You did amazing";
                    break;
                case "B":
                    echo "You did good";
                    break;
                case "C":
                    echo "You did as expected";
                    break;
                case "D":
                    echo "You did bad";
                    break;
                case "E":
                    echo "You did terrible";
                    break;
                case "F":
                    echo "You fail";
                    break;
                default:
                    echo "Invaid Grade";
                    break;
            }
        ?>

        <h1>Loops</h1>
        <!-- same as java -->
        <?php 
            echo "While Loop <br>";
            $index = 1;
            while($index <= 5) {
                echo "$index <br>";
                $index++;
            }
            echo "For Loop <br>";
            for($i = 1; $i < 5; $i++){
                echo "$i <br>";
            }
            echo "Array Iterations <br>";
            $luckyNumbers = array(4, 8, 14, 10 ,52, 44);
            for($i=0; $i<count($luckyNumbers); $i++){
                echo "$luckyNumbers[$i] <br>";
            }
        ?>

        <?php include "header.html" ?>
        <p>Hello Include</p>
        <?php include "footer.html" ?>

        <?php 
            $title = "My First Post";
            $author = "Penguin";
            $wordCount = strlen($author);
            include "articleHeader.php";
        ?>

    </body>
</html>