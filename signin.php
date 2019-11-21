<?php session_start(); ?>
<html>
    <head>
       <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Login Page</title>
        <link href="Style/signin.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <p style="float:right; font-size: 2vw; margin-top: -50px;"><a style="text-decoration: none;font-size:1.5vw; color:white;" href="Home.php">Back To Home</a></p>
        <div class="loginbox">
            <p style="margin-left: 35%; width:25%; border-radius: 50%; height:120px; margin-top: -100px; background-color: white;font-size: 8vw; color:red;"><i class="fas fa-user-circle"></i></p>
            <h1>Login Here</h1>
            <form method="POST" action="#" enctype="multipart/form-data">
                <p>Email Id</p>
                <input type="email" name="email" placeholder="Enter E-Mail">
                <p>Password</p>
                <input type="password" name="pass" placeholder="Enter Password"><br><br>
                <input type="submit" name="login" value="login">
                <br><br>
                <a href="phpfiles/forgetpassword.php">Forget Password?</a><br>
                <a href="register.php">Register Now if you don't have an account....</a><br>
                
            </form>
        </div>
        
        
    </body>
</html>

<?php
if(isset($_POST["login"])){
  $Email=$_POST['email'];
  $pass=$_POST['pass'];
            $conn= mysqli_connect("localhost","root","","img");
            $sql=mysqli_query($conn,"select * from registration where Email='$Email' and password='$pass'");
        if(mysqli_num_rows($sql)>0){
            if($Email=='jsahu3969@gmail.com' || $pass=='jittu321'){
            header("location:http://localhost/Airline/AdminHome.php");    
            }
            else {
             $message="Login sucessfully..";
      echo "<script type='text/javascript'>alert('$message');</script>";
            header("location:http://localhost/Airline/Home.php");
            $row= mysqli_fetch_assoc($sql);
            $_SESSION['img']=$row['image'];
            $_SESSION['name']=$row['Name'];
            $_SESSION['email']=$row['Email'];
            $_SESSION['mob']=$row['mobile'];
            $_SESSION['address']=$row['Adress'];
            $_SESSION['city']=$row['City'];
            $_SESSION['state']=$row['State'];
            }
            }else{
            echo "<script type='text/javascript'>alert('invalid data');</script>";
        }
}
?>
