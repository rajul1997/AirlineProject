<?php session_start();

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>BonBoyz User Profile</title>
        <link href="Style/profile.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        
        <header>
        <div class="Top">
            <div class="logo">
               <h1 style="font-size:40px;padding-left: 10px;"><i class="fas fa-plane-departure"></i>&nbsp; BONBOYZ</h1>
            </div>
            <ul class="Register">
                <li class="Registermenu"><a href="Aboutus.php">About Us&nbsp;&nbsp;<i class="fas fa-plane-departure"></i></a></li>
                <li class="Registermenu1">
                <?php if(isset($_SESSION['name'])){?>
                    <a href="signout.php" style="font-family: serif; font-size:1.2vw;"><b>Log Out</b>&nbsp;<i class="fas fa-sign-in-alt"></i></a>
                         <?php   }else{ ?>
                    <a href="signin.php" style="font-family: serif; font-size:1.2vw;"><b>Log In</b>&nbsp;<i class="fas fa-sign-in-alt"></i></a>
                        <?php }?>    
                </li>
                <li class="Registermenu2"><a href="Registration.php"><i class="fas fa-user"></i>&nbsp;Create Account</a></li>
                <li class="Registermenu3"><a href="Profile.php">
                     <?php if(isset($_SESSION['img'])){?> 
                            <div style="width:20%; margin-top: -10px; height:40px; border-radius:50%; transition-property: scale (.2)">
                                <img style="border-radius: 50%;" src="images/<?php echo $_SESSION['img'];?>"width="100%" height="40px" />
                            </div>
                            <?php }else{ ?>
                        <p style="  margin-top:-3px; font-size: 1.3vw;"><b><i class="fas fa-user-tie"></i></b></p>&nbsp;
                            <?php } ?>
                        <?php if(isset($_SESSION['name'])){ ?> 
                                <p style="margin-top: -30px; margin-left: 25%;"><?php echo $_SESSION['name']; ?></p>
                        <?php }else{?>
                        <p style="margin-left: 13%; margin-top: -40px;"> My Profile</p>
                            <?php } ?>
                        
                    </a></li>
            </ul> 
            </div>
            <div class="pagesmenu">
                        <ul class="topmenus">
                            <li class="topmenu"><a href="Home.php">Home</a></li>
                <li class="topmenu"><a href="Flights.php">Airplane</a></li>
                <li class="topmenu"><a href="Holidays.php">Holidays</a></li>
                <li class="topmenu"><a href="Xplore.php">X-Plore</a></li>
                <li class="topmenu"><a href="Luxory.php">Luxury Travels</a></li>
            </ul> 
        </div>    
        </header>
        <div class="Profileback">
        <div class="profiledetail">
            
        <div class="profiletitle">
            <h2 style="font-size: 40px; color:gold; "><i class="fas fa-user"></i>&nbsp; Profile</h2>
        </div> 
             <div class="pic">
                 <?php 
                            if(isset($_SESSION['img'])){
                                ?> 
                            <div style="width:60%; height:150px;  transition-property: scale (.2)">
                                <img style="" src="images/<?php echo $_SESSION['img'];?>"width="100%" height="150px" />
                            </div>
                            <?php }else{ ?>
                            
                                <p style="font-size: 150px;"><i class="fas fa-user-circle"></i></p>&nbsp;
                            <?php } ?>
            
         </div>
        <div class="pichint">
            <p> Your E-Mail id is :-<?php echo $_SESSION['email']; ?></p>
        </div>
            <form action="#" method="post" enctype="multipart/data-form">
        <div class="createacc">
            <h2 style="margin-left: 30px;">Edit your Profile</h2>
            <input type="text" placeholder="Name" name="username" value="<?php echo $_SESSION['name'];?>" required /><br><br>
            
          <input type="text" placeholder="Mobile No." name="mobile" value="<?php echo $_SESSION['mob'];?>" /><br><br>
          <input type="address" name="Address" value="<?php echo $_SESSION['address'];?>"/><br><br>
          <input type="text" name="City" value="<?php echo $_SESSION['city'];?>"/><br><br>
          <input type="text" name="State" value="<?php echo $_SESSION['state'];?>"  /><br><br>
          <p> Change Your Profile Pic..<br><input type="file" name="fileToUpload" onchange="myFunction(this)" id="demoImage" >     
               <img id="image" width="100px" height="100px" style="border:none; margin-left: 40%; margin-top: -80px;"/>
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
                                            
                                        }
                                    };
                                    var formData = new FormData();
                                    formData.append('fileToUpload',file);
                                    xmlhttp.open("POST","demoSubmit.php",false);
                                    xmlhttp.send(formData);
                                    
                                }</script>
                  </p><br><br>
          <input type="submit" value="Update Profile" name="ok" class="btn btn-block btn-primary"/>
        </div></form>
        </div>
            
                   <?php 
        if(isset($_POST['ok'])){
            $mobile=$_POST['mobile'];
            $user=$_POST['username'];
            $address=$_POST['Address'];
            $city=$_POST['City'];
            $state=$_POST['State'];
            $img=$_FILES["fileToUpload"]["name"];
            $email=$_SESSION['email'];
            $conn= mysqli_connect("localhost","root", "","img");
                    
                   if( mysqli_query($conn, "update registration set Name='$user',image='$img',mobile='$mobile',Address='$address', City='$city', State='$state' where Email='$email'")){
                    echo '<script>alert("Your profile updated sucessfully");</script>';
                        
                    }else{
                        echo '<script>alert("Your profile not updated sucessfully'. mysqli_error($conn).'");</script>';
                    }
        }
?>
            
            <div class="priviousbooking">
                <h2 style="font-size: 40px; color:blueviolet;;">Previous Booking</h2>
                   <p>jitesh kumar sahu</p>
                   <p>jitesh kumar sahu</p>
                   <p>jitesh kumar sahu</p>
                   <p>jitesh kumar sahu</p>
                      <p>jitesh kumar sahu</p>
                   <p>jitesh kumar sahu</p>
                   <p>jitesh kumar sahu</p>
                   <p>jitesh kumar sahu</p>
            </div>
            

            
        </div>
        
        
    </body>
</html>