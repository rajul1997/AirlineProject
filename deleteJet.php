<?php
    $d=$_GET["id"];
        $conn= mysqli_connect("localhost","root","","img");
        if(mysqli_query($conn,"delete from Jet where Jetid=$d")){
            header("location:http://localhost/Airline/AdminFlight.php");
        }
        else{
            echo 'not insert';
        }
    
?>