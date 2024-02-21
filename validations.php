<?php
    $name=$pass=$pin=$num=$email=$id="";
    $nameErr=$passErr=$pinErr=$numErr=$emailErr=$idErr="";
    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
        if(empty($_POST["name"]))
        {
            $nameErr="Name is empty";
        }
        else
        {
            $name=$_POST["name"];
        }
        if(empty($_POST["pass"]))
        {
            $passErr="Password is empty";
        }
        elseif(!preg_match("/^[a-zA-Z0-9]*$/",$_POST["pass"]))
        {
            $passErr="Password must be Alphanumeric ";
        }
        elseif(strlen($_POST["pass"])<6 || strlen($_POST["pass"])>12)
        {
            $passErr="Password must be of 6-12 length";
        }
        else
        {
            $pass=$_POST["pass"];
        }
        if(empty($_POST["pin"]))
        {
            $pinErr="Pincode is empty";
        }
        elseif(strlen($_POST["pin"])!=6)
        {
            $pinErr="Pincode must be of 6 length";
        }
        else
        {
            $pin=$_POST["pin"];
        }
        if(empty($_POST["num"]))
        {
            $numErr="Number is empty";
        }
        elseif(strlen($_POST["num"])!=10)
        {
            $numErr="Number must be of 10 digit";
        }
        else
        {
            $num=$_POST["num"];
        }
        if(empty($_POST["email"]))
        {
            $emailErr="Email is empty";
        }
        elseif(!filter_var($_POST["email"],FILTER_VALIDATE_EMAIL))
        {
            $emailErr="Email is not valid";
        }
        else
        {
            $email=$_POST["email"];
        }
        if(empty($_POST["id"]))
        {
            $idErr="ID is empty";
        }
        else
        {
            $id=$_POST["id"];
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .req{
           color: red; 
        }
        body{
            background-color: lightblue;
        }
    </style>
</head>
<body>
    <center>
    <h1>Form Validation</h1>
    <span class="req">*Required fields</span>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" value="<?php echo $name;?>"><span class="req">*<?php echo $nameErr;?></span></td>
        </tr>
        <tr>
            <td>password:</td>
            <td><input type="password" name="pass" value="<?php echo $pass;?>"><span class="req">*<?php echo $passErr;?></span></td>
        </tr>
        <tr>
            <td>Pincode:</td>
            <td><input type="number" name="pin" value="<?php echo $pin;?>"><span class="req">*<?php echo $pinErr;?></span></td>
        </tr>
        <tr>
            <td>Number:</td>
            <td><input type="number" name="num" value="<?php echo $num;?>"><span class="req">*<?php echo $numErr;?></span></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><input type="text" name="email" value="<?php echo $email;?>"><span class="req">*<?php echo $emailErr;?></span></td>
        </tr>
        <tr>
            <td>Student_ID:</td>
            <td><input type="text" name="id" value="<?php echo $id;?>"><span class="req">*<?php echo $idErr;?></span></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="submit"></td>
        </tr>
        </table>
    </form>
    </center>
</body>
</html>