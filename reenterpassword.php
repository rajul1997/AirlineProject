<?php 
        if(isset($_POST['submitpass'])){
            $pass=$_POST['pass'];
            $mob=$_POST['mo'];
            $conn= mysqli_connect("localhost","root", "","img");
                    $sql2= mysqli_query($conn, "update registration set password='$pass' where mobile='$mob' ");
            if($conn->query($sql2)===TRUE){
                echo 'password updated sucessfully.';
            }
        }
        ?>