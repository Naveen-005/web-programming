<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q2.php" method="post">
        <h3>Check if a string is a Paliandrome</h3>
        Enter a string:
        <input type="text" name="input_str">
        <input type="submit" value="check" name="submit">
    </form>

    <?php
    
        if(isset($_POST['submit'])){
            $s1=strtolower($_POST['input_str']);
            if($s1==strrev($s1)){
                print("<br><br>'$s1' is a paliandrome.");
            }else{
                print("<br><br>'$s1' is not a paliandrome.");
            }
        }

    ?>
</body>
</html>