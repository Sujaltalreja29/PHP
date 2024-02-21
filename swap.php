<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="num1">Enter Number1:</label>
    <input type="text" name="n1" id="n2"><br><br>
    <label for="num2">Enter Number2:</label>
    <input type="text" name="n2" id="n2"><br>
    <input type="submit" value="Submit"  >
    <input type="reset" value="reset">
    </form>
</body>
</html>
<?php
    $a = $_POST["n1"];
    $b = $_POST["n2"];
    if($a=="" || $b=="")
    {
        echo "Error-Empty";
    }
    else{
    $a = $a + $b;
    $b = $a - $b;
    $a = $a - $b;
    echo "Number1 IS Now:".$a."<br>Number2 IS Now:".$b;
    }
?>