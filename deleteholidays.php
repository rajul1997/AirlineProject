<?php
    $d=$_GET["id"];
        $conn= mysqli_connect("localhost","root","","img");
        if(mysqli_query($conn,"delete from Holydays where id=$d")){
            header("location:http://localhost/Airline/AdminHolidays.php");
        }
        else{
            echo 'not insert';
        }
    
?>
