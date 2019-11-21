<html>
    <head><title>forget password</title>
        <style>
            body
            {
                background-image: url("../images/forget.jpg");
            }
            h3{
                color:red;
                font-size:30px;
            }
            p{
               font-size:20px; 
            }
            
        </style>
    </head>

    <body>
       <form action="" method="post">
           <div class="hold" style="height:400px;width:800px;border:2.5px solid black;
                margin-left:25%;margin-top:100px;text-align:center;border-radius:20px;">
        
               <h3>Change Your Password</h3>
               <p>Enter your mobile no.</p><input type="text" name="mobile" style="width: 200px;"><br>
               <p>Enter your new password:</p><input type="text" name="pass" style="width: 200px;"><br><br><br>
        
               <input type="submit" name="submit" style="height:50px;width:100px;color:red;border-radius: 20px;">
       
               </div>
            </form>
        
        <?php 
        if(isset($_POST['submit'])){
            $mobile=$_POST['mobile'];
            $pass=$_POST['pass'];
            $conn= mysqli_connect("localhost","root", "","img");
                    
                   if( mysqli_query($conn, "update registration set password='$pass' where mobile=$mobile")){
                    ?><script>alert('Your password updated sucessfully');
      window.location="http://localhost/Airline/signin.php";
      </script>
                     <?php  
                       
                        
                    }else{
                        echo 'your mobile no. is not registed';
                    }
        }
        ?>
        
    </body>
</html>
