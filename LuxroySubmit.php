<?php
    if(isset($_POST["submit"])){
        $conn= mysqli_connect("localhost","root","","img");
        $url=$_FILES["fileToUpload"]["name"];
        $Name=$_POST["name"];
        $Desc=$_POST["desc"];
        $cate=$_POST["cate"];
        $price=$_POST["price"];
        $offer=$_POST["offer"];
        if(mysqli_query($conn,"insert into luxury values('','$url','$Name','$Desc','$offer','$price','$cate')")){
            header("location:http://localhost/Airline/AdminLuxory.php");
        }
        else{
            echo 'not insert';
        }
    }
?>    

