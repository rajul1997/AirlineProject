<?php session_start();
    if(isset($_POST["Search"])){
        $conn= mysqli_connect("localhost","root","","img");
        $from=$_POST["from"];
        $To=$_POST["To"];
        $dep=$_POST["depart"];
        $ret=$_POST["return"];
        $category=$_POST["Category"];
        
        
        if(mysqli_query($conn,"insert into search values('','$_SESSION[name]','$from','$To','$dep','$ret','$category')")){
            header("location:http://localhost/Airline/SearchFlight.php?from=$from&To=$To&dep=$dep&ret=$ret");
            echo 'insert sucessfully';
        }
        else{
            echo 'not insert'. mysqli_error($conn);
        }
    }
?>    

