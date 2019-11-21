<?php
    if(isset($_POST["submit"])){
        $conn= mysqli_connect("localhost","root","","img");
        $Name=$_FILES["fileToUpload"]["name"];
        $name=$_POST["Name"];
        $des=$_POST["Description"];
        $cat=$_POST["category"];
        $price=$_POST["price"];
        if(mysqli_query($conn,"insert into Holydays values('','$name','$Name','$des','$cat','$price')")){
            header("location:http://localhost/Airline/AdminHolidays.php");
        }
        else{
            echo 'not insert';
        }
    }
?>