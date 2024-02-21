<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: beige;
        }
        table{
            border-block: 5px solid red;
        }
    </style>
</head>
<body>
    <center>
        <h1>Registration Form</h1>
    <form action="server_db.php" method="post">
        <table>
        <tr>
            <td>Name:</td>
            <td><input type="text" name="name" ></td>
        </tr>
        <tr>
            <td>Student_ID:</td>
            <td><input type="text" name="id" >
        </tr>
        <tr>
            <td>Enrollment number:</td>
            <td><input type="number" name="enum" ></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td>
                <input type="radio" name="gen" value="Male">Male
                <input type="radio" name="gen" value="Female">Female
            </td>
        </tr>
        <tr>
            <td>Hobby:</td>
            <td><input type="checkbox" name="hob[]" value="Reading">Reading
                <input type="checkbox" name="hob[]" value="Writing">Writing
                <input type="checkbox" name="hob[]" value="Swimming">Swimming
        </td>
        </tr>
        <tr>
            <td>Number:</td>
            <td><input type="number" name="num"></td>
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