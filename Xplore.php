<?php session_start();?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Airline X-Plore Page</title>
        
        <link href="Style/Xplore.css" rel="stylesheet">
    </head>
    <body>
        
        <header><?php include 'Header.php';?></header>   
        <div class="content">
            
            <hr>
            <div class="firsttitle">
                <p style="font-size:2.5vw; color:red;">X-Plore</p>
            </div>
            <div class="xplorespic">
                <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from xplore where offer='0%'");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
                <div class="imagexplore"><div class="image"><img style="width:100%; height:200px;" src="images/<?php echo $row['url'];?>"/></div>
                    <div class="detailxplorepic" style="color:white;"><h2><?php echo $row["name"];?></h2><?php echo $row["desc"];?><br><p style="color:yellow;">Travelling Days: <?php echo $row["Tourdays"];?></p>
                        <br><a href="Tourbook.php?type=xplore&id=<?php echo $row["id"];?>"><input style="background-color:red; float: right; width:30%; height:30px; color:white;" type="submit" name="submit" value="booknow"></a></div>
                </div>
                <?php }?> 
            </div>
            <hr>
                <div class="secoundtitle">
                <p style="font-size:2.5vw;color: red;">Special Offers</p>
            </div>
            <div class="fx">
                <?php
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from xplore where offer<>'0%'");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
                <div class="box"><div class="imagehalf"><img src="images/<?php echo $row['url'];?>"height="200px" width="100%"></div>
                    <p style="color:white;"><?php echo $row['name'];?> </p><p style="color:white;"><?php echo $row['desc'];?></p>
                <p style="color:red;">Booking Price: <?php echo $row['Price'];?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; offer:<?php echo $row['offer']; ?> </p>
                    <a href="Tourbook.php?type=xplore&id=<?php echo $row["id"];?>"><input style="width:20%; border-radius: 20px; float:right; height:30px; background-color:red; color:white;" type="submit" name="submit" value="Book Now"></a>
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
            <div class="offerwin"><img style="width:100%;height: 400px;" src="images/holi.jpg"></div>
        </div>

        
        <footer><?php include 'Footer.php';?></footer>
      
    </body>
</html>


