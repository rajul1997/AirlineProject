<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Airline Flights Page</title>
        <link href="Style/Flights.css" rel="stylesheet">

    </head>
    <body>
        
        <header><?php include 'Header.php';?></header>   
        <div class="flightcontent" style="background-color:black;">
       <div class="flightcontenttop" style="background-color:black;">
                
       </div><br>
            
            <div class="flighttitle">
                <p style="margin-top:-80px;font-size: 40px; color:blueviolet;">Top Flights Booking</p>
            </div>
            <div class="topflights">
                <table width="100%">
                    <tr style="background-color: black; color:white; font-style: bold; height:50px; font-size: 2vw;">
                        <td align="center">Flight Name</td>
                        <td align="center">Source</td>
                        <td align="center">Destination</td>
                        <td align="center">Booking</td>
                    </tr>
                    <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from flights");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
                    <tr style="height:30px; font-size: 1vw;">
                        
                        <td width="25%"  align="center"><img style="border-radius: 50%;" src="images/<?php echo $row['Logo'];?>"width="10%" height="30px"><?php echo $row['Flightname']; ?></td>
                          <td width="25%" align="center"><?php echo $row['Source']; ?></td>
                          <td width="25%" align="center"><?php echo $row['Destination']; ?></td>
                          <td><a href="flightbook.php?type=flights&id=<?php echo $row["Flightid"];?>"><input type="submit"  name="booknow" value="booknow" style="width:100%; height:30px; border-radius:20px; background-color: red; float:right; color:white;"></a></td></tr>
                    <?php } ?>
                
                </table>
            </div><br><br><hr><br>
            <p style="font-size: 2vw; color:white; font-style: bold; margin-left: 5%;">Private Jets Are Also Available Here .....</p><br>
            
           <div class="slider">
               
               <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from Jet ");
                while($row= mysqli_fetch_array($sql)){
                ?>
               <div class="slide" id="slide-1"> <img style="border-radius: 50%;" src="images/<?php echo $row['Logo'];?>" height="300px" width="100%"> 
                   <br><p style="font-size: 1.5vw"><?php echo $row['Jetname'];?></p>
                   <br><p style="font-size: 1.5vw">Price: <?php echo $row['Amount'];?>
                       <a style="text-decoration: none; color:white;"href="privatejet.php?type=jet&id=<?php echo $row["Jetid"];?>""><div style="float:right; height:30px; text-align: center; width: 40%; border-radius: 20px; background-color:red; color:white;">Book Now</div></a>
                   </p>
               </div>
                
             <?php }?>
          
           </div>
<hr>
                <footer><?php include 'Footer.php';?></footer>
      
    </body>
</html>
