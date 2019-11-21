<html>
    <head>
        <title>
            Bonvoyage Luxury
        </title>
        
        <link rel="stylesheet" type="text/css" href="engine1/style.css" />
<script type="text/javascript" src="engine1/jquery.js"></script>

        <link href="Style/Luxory.css" type="text/css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <header>
          <div class="Top">
            <div class="logo">
               <h1 style= "font-family:serif; color:white; font-size:3vw;padding-left: 10px;"><i class="fas fa-plane-departure"></i>&nbsp; Special Luxury Trips</h1>
            </div>
            <ul class="Register">
                <li class="Registermenu"><a href="Aboutus.php" style="font-family: serif;">About Us&nbsp;&nbsp;<i class="fas fa-plane-departure"></i></a></li>
                <li class="Registermenu1"><a href="signin.php" style="font-family:serif;">Log In&nbsp;<i class="fas fa-sign-in-alt"></i></a></li>
                <li class="Registermenu2"><a href="register.php" style="font-family:serif;"><i class="fas fa-user"></i>&nbsp;Create Account</a></li>
                <li class="Registermenu3"><a href="Profile.php" style="font-family:serif;"><i class="fas fa-user-tie"></i>&nbsp;My Profile</a></li>
            </ul> 
          </div>
            </header>
        <div class="content" style="position:absolute;margin-top: 100px; width:100%; height:auto; background-color:black; ">
            <div class="images">
                  <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from imgnikki");
                while($row= mysqli_fetch_array($sql)){
                ?>
                
                <img class="mySlides" src="images/<?php echo $row['Picture']; ?>" style="width:100%" height="500px">
                <?php 
                }
                ?>
                <div class="heading"><p>Welcome to Luxury</p></div>
                <script>
                var myIndex = 0;
carousel();

function carousel() 
{
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++)
  {
    x[i].style.display = "none";  
    }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 3000); // Change image every 3 seconds
  }
  </script>

            </div>
            
            <div class="imagelu">
                 <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from luxury where category='full image'");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
               
                <div class="fullimage"><img src="images/<?php echo $row['url'];?>" width="100%" height="400px"/> 
                <div class="nameofpic"><p><?php echo $row['name'];?></p></div>
                <div class="des"><p><?php echo $row['desc'];?></p>
                    <a href="Tourbook.php?type=luxury&id=<?php echo $row["id"];?>"><input style="width:20%; border-radius: 20px; float:right; height:30px; background-color:red; color:white;" type="submit" name="submit" value="Book Now"></a></div></div>
                <?php 
                    }
                    ?>
            </div>
            <hr>
            <div class="fx">
                <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from luxury where category='half image'");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
                <div class="box"><div class="imagehalf"><img src="images/<?php echo $row['url'];?>"height="200px" width="100%"></div>
                    <p style="color:white;"><?php echo $row['name'];?></p><p style="color:white;"><?php echo $row['desc'];?></p>
                <p style="color:red;">Booking Price: <?php echo $row['Price'];?></p>
                    <a href="Tourbook.php?type=luxury&id=<?php echo $row["id"];?>"><input style="width:20%; border-radius: 20px; float:right; height:30px; background-color:red; color:white;" type="submit" name="submit" value="Book Now"></a>
                 </div>
       <?php }?>
        </div>
        <button style="margin-top: -20%; height:40px; width:40px; background-color:white;font-size: 1.5vw; float: right;" onclick="incre(+1)">>></button>
        <button style="margin-top: -20%;height:40px;width:40px; background-color:white;font-size: 1.5vw;" onclick="incre(-1)"><<</button>
    </body>
    <script>
    index=-1;
    incre(1)
    function incre(a){
        
        var box=document.getElementsByClassName("box");
        
        for(var i=0;i<box.length;i++){
            box[i].style.display="none";
        }
        if(index==0&& a==-1){
            
        }else if(index==box.length-3 && a==1){
        }else{
            index+=a;
        
        }for(var i=index;i<box.length;i++){
            box[i].style.display="block";
       
        }
    }
    </script>
  </div>
            
    </body>
</html>