<?php
    $d=$_GET["id"];
        $conn= mysqli_connect("localhost","root","","img");
        if(mysqli_query($conn,"delete from flights where id=$d")){
            header("location:http://localhost/Airline/AdminFlight.php");
        }
        else{
            echo 'not insert';
        }
    
?>
