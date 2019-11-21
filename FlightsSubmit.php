<?php
    if(isset($_POST["submit"])){
        $conn= mysqli_connect("localhost","root","","img");
        $url=$_FILES["fileToUpload"]["name"];
        $flightid=$_POST["Flightid"];
        $flightname=$_POST["Flightname"];
        $company=$_POST["Companyname"];
        $source=$_POST["Source"];
        $destination=$_POST["Destination"];
        $arrival=$_POST["Arrival"];
        $departure=$_POST["Departure"];
        $duration=$_POST["Duration"];
        $economy=$_POST["Economy"];
        $business=$_POST["Business"];
        $premium=$_POST["Premium"];
        $firstclass=$_POST["First"];
        $offer=$_POST["offer"];
        $stp1=$_POST["StopA"];
        $stp2=$_POST["StopB"];
        $day1=$_POST["day1"]; $day2=$_POST["day2"]; $day3=$_POST["day3"];
        if(mysqli_query($conn,"insert into flights values('$flightid','$flightname','$company','$url','$source','$destination','$arrival','$departure','$duration','$economy','$business','$premium','$firstclass','$offer','$stp1','$stp2','$day1','$day2','$day3')")){
            header("location:http://localhost/Airline/AdminFlight.php");
        }
        else{
            echo 'not insert'. mysqli_error($conn);
        }
    }
?>    
