<?php
    $con = mysqli_connect ("localhost","root","","stdinfo");
    if(mysqli_connect_error()){
        echo "Connection Error";
    }
    else{
        echo "databse connection succesfull<br>";
    }
    $name=$_POST["name"];
    $id=$_POST["id"];
    $enum=$_POST["enum"];
    $gen=$_POST["gen"];
    $hob=$_POST["hob"];
    $num=$_POST["num"];
    $g="";
    foreach($hob as $x){
        $g.=$x.",";
    }

    $sql = "INSERT INTO student_details(Name, Std_id, Enrollment,Gender,Hobby,Number) VALUES ('$name','$id','$enum','$gen','$g','$num')";
    if(mysqli_query($con ,$sql)){
        echo "new record created succesfully";
    }
    mysqli_close($con);
?>