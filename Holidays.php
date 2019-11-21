<?php session_start(); ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Airline Holidays Page</title>
        <link href="Style/Holidays.css" rel="stylesheet">
    </head>
    <body>
        
        <header><?php include 'Header.php';?></header>   
        <div class="content">
            <div class="holiday1" id="all"><p style="text-align: center;font-size: 25px;color:grey;">A Holiday for every mood........</p>
                <a href="#all"><div class="insideholiday">
                <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from holydays where Category='Couple'");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
                
                    <img src="images/<?php echo $row['url'];?>" width="100%" height="300px"/>
                    <p style="font-size:2vw; background-color:white; opacity:0.5; margin-top:-40px; color:black;"> <?php echo $row['Category'];?></p>
                    
                
                    
                <?php
                    break;}
                    ?>
                    </div></a>
                <a href="#couple"><div class="insideholiday2">
                        <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from holydays where Category='Friends'");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
                
                    <img src="images/<?php echo $row['url'];?>" width="100%" height="300px"/>
                    <p style="font-size:2vw; background-color:white; opacity:0.5; margin-top:-40px; color:black;"> <?php echo $row['Category'];?></p>
                    
                <?php
                    break;}
                    ?>
                    </div></a>
                <a href="#friends"><div class="insideholiday3">
                        <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from holydays where Category='Family'");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
                
                    <img src="images/<?php echo $row['url'];?>" width="100%" height="300px"/>
                    <p style="font-size:2vw; background-color:white; opacity:0.5; margin-top:-40px; color:black;"> <?php echo $row['Category'];?></p>
                    
                <?php
                    break;}
                    ?>
                    </div></a>
                <a href="#family"><div class="insideholiday4">
                <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from holydays where Category='Summer Vacation'");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
                
                    <img src="images/<?php echo $row['url'];?>" width="100%" height="300px"/>
                    <p style="font-size:2vw; background-color:white; opacity:0.5; margin-top:-40px; color:black;"> <?php echo $row['Category'];?></p>
                    
                
                    
                <?php
                    break;}
                    ?>
                    </div></a>
            </div>
        
            <div  id="couple" class="holiday2">
                <p style="font-size: 2vw;">For Couple</p>
               <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from holydays where Category='Couple' ");
                while($row= mysqli_fetch_array($sql)){
                ?>
               <div class="insideholiday5" id="slide-1"> <img style="border-radius: 10px;"  src="images/<?php echo $row['url'];?>" height="300px" width="100%"> 
                   <p style="font-size:2vw; background-color:white; opacity:0.5; margin-top:-40px; color:black;"> <?php echo $row['name'];?></p>
                   <P style="color:white; font-size:1vw;"><?php echo $row['desc'];?></P>
                   <a style="text-decoration: none; color:white;"href="Tourbook.php?type=holydays&id=<?php echo $row["Id"];?>"><div style="float:right; height:30px; text-align: center; width: 40%; border-radius: 20px; background-color:red; color:white;">Book Now</div></a>
               </div>
                
             <?php }?>
           </div>
            <div id="friends" class="holiday3"><p style="font-size: 2vw;">For Friends</p>
                <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from holydays where Category='Friends' ");
                while($row= mysqli_fetch_array($sql)){
                ?>
                <div class="insideholiday6" id="friend"> <img style="border-radius: 10px;"  src="images/<?php echo $row['url'];?>" height="300px" width="100%"> 
                   <p style="font-size:2vw; background-color:white; opacity:0.5; margin-top:-40px; color:black;"> <?php echo $row['name'];?></p>
                   <P style="color:white; font-size: 1vw;"><?php echo $row['desc'];?></P>
                   <a style="text-decoration: none; color:white;" href="Tourbook.php?type=holydays&id=<?php echo $row["Id"];?>"><div style="float:right; height:30px; text-align: center; width: 40%; border-radius: 20px; background-color:red; color:white;">Book Now</div></a>
               </div>
                
             <?php }?>
               
            </div>
            <div id="family" class="holiday4"><p style="font-size: 2vw;">For Family</p>
                <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from holydays where Category='Family' ");
                while($row= mysqli_fetch_array($sql)){
                ?>
                      <div class="insideholiday7" id="holiday"> <img style="border-radius: 10px;"  src="images/<?php echo $row['url'];?>" height="300px" width="100%"> 
                   <p style="font-size:2vw; background-color:white; opacity:0.5; margin-top:-40px; color:black;"> <?php echo $row['name'];?></p>
                   <P style="color:white; font-size:1vw;"><?php echo $row['desc'];?></P>
                   <a style="text-decoration: none; color:white;"href="Tourbook.php?type=holydays&id=<?php echo $row["Id"];?>"><div style="float:right; height:30px; text-align: center; width: 40%; border-radius: 20px; background-color:red; color:white;">Book Now</div></a>
               </div>
                
             <?php }?>

               
            </div>
            <div id="summer" class="holiday5"><p style="font-size: 2vw;">For<br> Summer<br> Vacation</p>
             <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from holydays where Category='Summer Vacation' ");
                while($row= mysqli_fetch_array($sql)){
                ?>
               <div class="insideholiday6" id="summer"> <img style="border-radius: 10px;"  src="images/<?php echo $row['url'];?>" height="300px" width="100%"> 
                   <p style="font-size:2vw; background-color:white; opacity:0.5; margin-top:-40px; color:black;"> <?php echo $row['name'];?></p>
                   <P style="color:white; font-size: 1vw;"><?php echo $row['desc'];?></P>
                  <a href="Tourbook.php?type=holydays&id=<?php echo $row["Id"];?>"><div style="float:right; height:30px; text-align: center; width: 40%; border-radius: 20px; background-color:red; color:white;">Book Now</div></a>
               </div>
               
               </div>
                
             <?php }?>

               
            </div>
            </div>
            
            
        <footer><?php include 'Footer.php';?></footer>
      
    </body>
</html>

