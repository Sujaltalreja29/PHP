<?php
    $a = $_POST['name'];
    $b = $_POST['add'];
    $d = $_POST['gen'];
    $c = $_POST['number'];
    $e = $_POST['country'];
    echo "<center><h1>Submitted INFO</h1>";
    echo "<table><tr><td>Username :</td><td>".$a."</td></tr><tr><td>Address :</td><td>".$b."</td></tr><tr><td>Number :</td><td>".$c."</td></tr><tr><td>Gender :</td><td>".$d."</td></tr><tr><td>Country :</td><td>".$e."</td></tr>";
    echo  "</table><h2>Thank you</h2>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style1.css?v=<?php echo time();?>">
</head>
<body>
</body>
</html>