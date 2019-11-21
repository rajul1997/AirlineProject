<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Registration form</title>
        <link href="Style/register.css" rel="stylesheet">
    </head>
    <body>
       <div class="body-content">
           <p style="text-align: right; color:yellow; font-size: 1.5vw;"><a href="Home.php">Back To Home....</a></p>
  <div class="module">
      <h1>Create Your Account</h1><br>
    <form class="form" action="" method="POST" enctype="multipart/form-data" autocomplete="off">
      <input type="text" placeholder="User Name" name="username" required /><br><br>
      <input type="email" placeholder="Email" name="email" required /><br><br>
           <input type="text" placeholder="Mobile Number" name="mobile" autocomplete="off" required /><br><br>
      <input type="password" placeholder="Password" name="password" autocomplete="off" required /><br><br>
      
      <input type="password" placeholder="Confirm Password" name="confirmpassword" 
             autocomplete="off" required /><br><br>
  
      <div class="photo"><label style="position: absolute; margin-left: 1.5%;color:white;">Select Your Pic</label><br><br><input type="file" 
           name="fileToUpload" onchange="myFunction(this)" id="demoImage"  
      accept="image/*" required /></div><br>
      <div id="box" style=" display:none;width: 30%; height:100px;border:2px solid black;margin-left:25px;">
          <img id="image" width="100%" height="100px"/>
                                <script>
                            function myFunction(a)
                            {
                                if(a.value)
                                {
                                    var file = document.getElementById("demoImage").files[0];
                                    var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function()
                                    {
                                        if(this.readyState == 4 && this.status == 200)
                                        {
                                            document.getElementById("image").src="images/"+this.responseText;
                                              document.getElementById("box").style.display="block";
                                        }
                                    };
                                    var formData = new FormData();
                                    formData.append('fileToUpload',file);
                                    xmlhttp.open("POST","demoSubmit.php",false);
                                    xmlhttp.send(formData);
                                    
                                }
                                
                            }
                            </script>
      </div><br><br>
      <input type="submit" value="Register" name="register" class="btn btn-block btn-primary"  />
    </form>
  </div>
</div>
    </body>
</html>
<?php
if(isset($_POST["register"])){
            $conn= mysqli_connect("localhost","root","","img");
        $name=$_POST['username'];
$Email=$_POST['email'];
$pass=$_POST['password'];
$url=$_FILES["photo"]["name"];
$cpass=$_POST['confirmpassword'];
$mob=$_POST['mobile'];
    
    if($cpass!=$pass){
        $message="incorrect password";
      echo "<script type='text/javascript'>alert('$message');</script>";

    }
    else{
        if(mysqli_query($conn,"insert into registration values('$name','$Email','$pass','$url','$mob')")){
            ?>

      <script>alert('Insert Sucessfully');
      window.location="http://localhost/Airline/signin.php";</script>
      
      <?php
            
        }
        else{
            echo 'not insert';
        }
    }
}
?>
