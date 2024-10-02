<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="q3.php" method="post">
        <h2>Search for a String Pattern</h2>
        Enter text:<br>
        <textarea name="input_str" rows="6" cols="40"></textarea>
        <br>
        Enter pattern to search: <br>
        <input type="text" name="pattern"><br>
        <input type="submit" value="search" name="submit">
        <br><br>
    </form>

    <?php
    
        if(isset($_POST['submit'])){
            $s1=$_POST['input_str'];
            $pattern=$_POST['pattern'];
            if(preg_match("/$pattern/",$s1)){
                print("<h3>Pattern found!</h3>");
            }else{
                print("<h3>Pattern not found!</h3>");
            }
        }

    ?>
</body>
</html>