<?php session_start(); ?>
<html>
    <head>
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        
        <meta charset="UTF-8">
        <title>Airline Home Page</title>
       
        <link href="Style/Home.css" rel="stylesheet">
    </head>
    <body>
        
        <header><?php include 'Header.php';?></header>   
        <div class="content">
          
            <div class="firsttitle">
                <p style="font-family:serif; font-size:2.5vw; color:white;"><br>X-Plore<br></p>
            </div>
            <div class="xplorepic">
                <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from xplore");
                    while($row= mysqli_fetch_array($sql)){
                    
                
               echo '<div class="imagesxplore"><div class="imgxplore"><img style="width:100%; height:200px;" src="images/'.$row['url'].'"/>
                        <h2 style="color:white;">'.$row["name"].'<a href="Tourbook.php?type=xplore&id='.$row["id"].'"><input type="submit"  name="booknow" value="booknow" style="width:35%; height:30px; background-color: red; float:right; color:white;"></a></h2></div>
                    <div class="detailxplorepic" style="color:white;"><br>'.$row["desc"].'</div></div>'; }?> 
                <div style=" position: absolute; width:100%; margin-top: 450px; height:50px; float:right; cursor: pointer;
                     text-align: center;"><a style="text-decoration: none; color:wheat;" href="Xplore.php"> <h3>More Details >></h3></a></div>
                     
            </div>
            <hr>
             <div class="secoundtitle">
                <p style="font-family:serif; color:white; font-size:2.5vw;">Luxury Travels</p>
            </div>
            <div class="luxorypic">
                <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from luxury");
                    while($row= mysqli_fetch_array($sql)){
                    
                
               echo '<div class="imagesLuxory"><div class="imgluxory"><img style="width:100%; height:200px;" src="images/'.$row['url'].'"/>
                        <h2 style="color:white;"><'.$row["name"].'<a href="Tourbook.php?type=luxury&id='.$row["id"].'"><input type="submit"  name="booknow" value="booknow" style="width:35%; height:30px; background-color: red; float:right; color:white;"></a></h2>
                    
                    </div>
                    <br><br>
                    <div class="detailluxorypic" style="color:white;">'.$row["desc"].'</div></div>
                 '; } ?>
            
             <div style="width:100%; margin-top: -80px; height:30px; float:right; cursor: pointer;
                  text-align: center;"><a style="text-decoration: none; color:wheat;" href="Luxory.php"> <h3>More Details >></h3></a></div>
           
        </div>
            <hr>
            <div style="  width:100%; margin-top: -10px;height:150px;  ">
                <img style="border:5px solid white;" src="images/fam.jpg" width="49%" height="150px"/>
                <img style="border:5px solid white;margin-left: 50%;margin-top: -160px;" src="images/fly.jpg" width="49.5%" height="150px"/>
            </div>
            <hr>
            <br><br>
            </div>
        <footer><?php include 'Footer.php';?></footer>
      
    </body>
</html>
