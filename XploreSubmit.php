<?php
    if(isset($_POST["submit"])){
        $conn= mysqli_connect("localhost","root","","img");
        $url=$_FILES["fileToUpload"]["name"];
        $Name=$_POST["Name"];
        $Desc=$_POST["Description"];
        $price=$_POST["price"];
        $days=$_POST['tourdays'];
        $off=$_POST["offer"];
        
        if(mysqli_query($conn,"insert into xplore values('','$url','$Name','$Desc','$off','$price','$days')")){
            header("location:http://localhost/Airline/AdminXplore.php");
        }
        else{
            echo 'not insert';
        }
    }
?>    

