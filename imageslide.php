<?php
    if(isset($_POST["submit"])){
        $conn= mysqli_connect("localhost","root","","img");
        $Name=$_FILES["fileToUpload"]["name"];
        if(mysqli_query($conn,"insert into imgnikki values('','$Name')")){
            header("location:http://localhost/Airline/AdminHome.php");
        }
        else{
            echo 'not insert';
        }
    }
?>    