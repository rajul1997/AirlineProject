<?php
    $d=$_GET["id"];
        $conn= mysqli_connect("localhost","root","","img");
        if(mysqli_query($conn,"delete from luxury where id=$d")){
            header("location:http://localhost/Airline/AdminLuxory.php");
        }
        else{
            echo 'not insert';
        }
    
?>    