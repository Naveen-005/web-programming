<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q3.php" method="post">
    <h3>Odd or even</h3>
    Enter number: <br>
    <input type="number" name="num"/><br>
    <input type="submit" value="Submit" name="submit"><br><br>
    </form>
    <?php

        if(isset($_POST['submit'])){
            $num=(int) $_POST['num'];
            if($num%2==0){
                print("<br>$num is an even number");
            }else{
                print("<br>$num is an odd number");
            }
            
        }

    ?>

</body>
</html>


