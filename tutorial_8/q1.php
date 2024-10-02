<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q1.php" method="post">

        Enter first number:
        <input type="text" name="num1">
        <br><br>
        Enter second number:
        <input type="text" name="num2">
        <br><br>
        <input type="submit" value="Calculate" name="submit">
    </form>

    <?php

        if(isset($_POST['submit'])){
            $num1=$_POST['num1'];
            $num2=$_POST['num2'];
            print("<h3>Result</h3>");
            print("<br>$num1 + $num2 = ".$num1+$num2);
            print("<br>$num1 - $num2 = ".$num1-$num2);
            print("<br>$num1 x $num2 = ".$num1*$num2);
            print("<br>$num1 / $num2 = ".$num1/$num2);

        }

    ?>
</body>
</html>
