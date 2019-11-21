<?php
    if(isset($_POST["submit"])){
        $conn= mysqli_connect("localhost","root","","img");
        $logo=$_FILES["fileToUpload"]["name"];
        $id=$_POST["Jetid"];
        $name=$_POST["Jetname"];
        $com=$_POST["Company"];
        $offer=$_POST["offer"];
        $amt=$_POST["Amount"];
        if(mysqli_query($conn,"insert into Jet values('$id','$name','$com','$logo','$offer','$amt')")){
            header("location:http://localhost/Airline/AdminFlight.php");
        }
        else{
            echo 'not insert';
        }
    }
?>