<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q1.php" method="post">
    <h3>Factorial</h3>
    Enter number: <br>
    <input type="number" name="num"/><br>
    <input type="submit" value="Calculate" name="submit"><br><br>
    </form>
    <?php

        function factorial($num){
            $fact=1;
            for($i=2;$i<=$num;$i++){
                $fact=$fact*$i;
            }
            return $fact;
        }

        if(isset($_POST['submit'])){
            $num=(int) $_POST['num'];
            $fact=factorial($num);
            print("Factorial of $num = $fact");
            
        }

    ?>


</body>
</html>


