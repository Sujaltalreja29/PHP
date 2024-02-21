<?php
    echo "<h1>Registration Form</h1>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>
<body>
    <form action="submit.php" name="myform" onsubmit="validate()" method="post">
        <center>
        <table>
            <tr>
                <td><label for="Username">Username</label></td>
                <td><input type="text" name="name" id="name" required></td>
            </tr>
            <tr>
                <td><label for="password">Password</label></td>
                <td><input type="password" name="pass" required></td>
            </tr>
            <tr>
                <td><label for="Confirm">Confirm Password</label></td>
                <td><input type="password" name="confirm" required></td>
            </tr>
            <tr>
                <td><label for="gender">Gender</label></td>
                <td><input type="radio" name="gen" id="gen" value="Male">Male<input type="radio" name="gen" id="gen" value="Female">Female</td>
            </tr>
            <tr>
                <td><label for="Add">Address</label></td>
                <td><textarea name="add" id="add" cols="20" rows="4"></textarea></td>
            </tr>
            <tr>
                <td><label for="country">Country</label></td>
                <td>
                    <select name="country" id="country">
                    <optgroup label="Select Country" >
                    <option value="India" required>India</option>
                    <option value="England" required selected>England</option>
                    <option value="USA" required>USA</option>
                    <option value="Canada" required>Canada</option>
                    </optgroup>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="phone">Phone Number</label></td>
                <td><input type="text" name="number" id="number" pattern="[0-9]{10}" required></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Submit"><input type="reset" value="Reset"></td>
            </tr>
        </table>
        </center>
    </form>
</body>
</html>