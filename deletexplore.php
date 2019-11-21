<?php
    $d=$_GET["id"];
        $conn= mysqli_connect("localhost","root","","img");
        if(mysqli_query($conn,"delete from xplore where id=$d")){
            header("location:http://localhost/Airline/AdminXplore.php");
        }
        else{
            echo 'not insert';
        }
    
?>    