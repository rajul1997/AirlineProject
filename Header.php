<html>
    <head>
        <meta charset="UTF-8">
        <title>Airline Header</title>
        <link href="Style/Header.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>
        <div class="Top">
            <div class="logo">
               <h1 style= "padding-left: 10px;"><i class="fas fa-plane-departure"></i>&nbsp; BONVOYAGE</h1>
            </div>
            <ul class="Register">
                <li class="Registermenu"><a href="Aboutus.php" style="font-family:serif; font-size:1.5vw;"><b>About Us</b>&nbsp;&nbsp;<i class="fas fa-plane-departure"></i></a></li>
                <li class="Registermenu1">
                    <?php 
                    if(isset($_SESSION['name'])){
                  ?>
                    <a href="signout.php" style="font-family: serif; font-size:1.5vw;"><b>Log Out</b>&nbsp;<i class="fas fa-sign-in-alt"></i></a>
                         <?php   }
                        else{
                            ?>
                    <a href="signin.php" style="font-family: serif; font-size:1.5vw;"><b>Log In</b>&nbsp;<i class="fas fa-sign-in-alt"></i></a>
                            
                        <?php }?>
                        </li>
                        <li class="Registermenu2"><a href="register.php" style="font-family:serif; font-size:1.5vw;"><i class="fas fa-user"></i>&nbsp;<b>Create Account</b></a></li>
                <li class="Registermenu3"><a href="Profile.php" style="font-family:serif; font-size:1.5vw;"><p><b>
                            <?php 
                            if(isset($_SESSION['img'])){
                                ?> 
                            <div style="width:20%; margin-top: -20px; height:40px; border-radius:50%; transition-property: scale (.2)">
                                <img style="border-radius: 50%;" src="images/<?php echo $_SESSION['img'];?>"width="100%" height="40px" />
                            </div>
                            <?php }else{ ?>
                            
                                <p style="  margin-top:-20px;"><i class="fas fa-user-tie"></i></p>&nbsp;
                            <?php } ?>
                        <?php 
                    if(isset($_SESSION['name'])){
                        ?> <p style="margin-top: -40px; margin-left: 25%;"><?php echo $_SESSION['name']; ?></p>
                        <?php }
                        else{
                            ?>
                        <p style="margin-left: 13%; margin-top: -75px;"> My Profile</p>
                            
                        <?php }
?>
                            
                    
                        </b> </p>
                        </a></li>
            </ul> 
            </div>
        
            <div  style=" max-width:100%; height: 650px;z-index: -1 ; ">
                <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from imgnikki");
                while($row= mysqli_fetch_array($sql)){
                echo '<img class="mySlides" src="images/'.$row['Picture'].'" style="width:100%" height="650px">
                '; 
                }
                ?>
               </div>
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

        <div class="pagesmenu">
                        <ul class="topmenus">
                            <li class="topmenu"><a href="Home.php" style="font-family:serif; font-size:1.5vw;"><b>Home</b></a></li>
                            <li class="topmenu"><a href="Flights.php"style="font-family:serif;font-size:1.5vw;"><b>Flights</b></a></li>
                            <li class="topmenu"><a href="Holidays.php" style="font-family:serif;font-size:1.5vw;"><b>Holidays</b></a></li>
                            <li class="topmenu"><a href="Xplore.php" style="font-family:serif;font-size:1.5vw;"><b>X-Plore</b></a></li>
                            <li class="topmenu"><a href="Luxory.php" style="font-family:serif;font-size:1.5vw;"><b>Luxury Travel</b></a></li>
            </ul> 
        </div>
  
        
  <div class="tablesearch"><p style="color:#cc0033;margin-left:20px;"><b>Search and book Flights .....</b></p>
      <div class="oneway" onclick="myfun()"><p style="padding-top:10px;"><b>One way</b></p></div>
      <div class="round" onclick="myfun1()"><p style="padding-top:10px;"><b>Round Trip</b></p></div><br>
     
      <form method="post" action="phpfiles/Search.php" enctype="multipart/form-data">
          <br><br>
          <label>From:</label><input type="text" name="from">
          <label>To:</label><input type="text" name="To" >
          <label>Depart:</label><input type="date" name="depart">
          <label id="r">Return:</label><input type="date" id="return" name="return">
          <label>Adult/Class:</label><input id="ca" type="text" name="Category">
          <i id="icon" class="fas fa-caret-square-down" onclick="myfun2()" ></i>
          <input class="search" type="Submit"name="Search" value="Search"><i style="margin-left: -50px; color:white;" class="fas fa-search"></i>
          <div class ="adult" onclick="myfun3()" id="ad">
             <div class="adult1">
                  <h4><input id="count" value="0"/> Adult</h4>
                  <div class="incre">
                      <p><i id="plus" class="fas fa-plus" onclick="increments(document.getElementById('count'))"></i></p></div>
                      <div class="decre">
                          <p><i id="minus" class="fas fa-minus" onclick="decrements(document.getElementById('count'))" ></p></i>
                  </div>
              </div>
              <div class="child">
                  <h4><input id="count1" value="0"/> Child</h4>
                  <div class="incre2">
                      <p><i id="plus" class="fas fa-plus" onclick="increments(document.getElementById('count1'))"></i></p></div>
                      <div class="decre2">
                          <p><i id="minus" class="fas fa-minus" onclick="decrements(document.getElementById('count1'))" ></p></i>
                  </div>
              </div>
              
              <div class="infant">
                  <h4><input id="count2" value="0"/> Infant</h4>
                  <div class="incre3">
                      <p><i id="plus" class="fas fa-plus" onclick="increments(document.getElementById('count2'))"></i></p></div>
                      <div class="decre3">
                          <p><i id="minus" class="fas fa-minus" onclick="decrements(document.getElementById('count2'))" ></p></i>
                  
              </div>
                  <div class="econ">
                      <input type="radio" name="airclass" value="economy" id="eco"
                             style="height:20px;margin-left: 20px;"><b>economy</b><br>
                      <input type="radio" name="airclass" value="Premium economy" id="premium"
                             style="height:20px;margin-left: 20px;"><b>Premium economy</b><br>
                      <input type="radio" name="airclass" value="Business" id="Business"
                             style="height:20px;margin-left: 20px;"><b>Business</b><br>
                      <input type="radio" name="airclass" value="First Class" id="First"
                             style="height:20px;margin-left: 20px;"><b>First Class</b>
                      
                      <div style="height:30px; float: right; text-align: center; margin-right: 3%;
                           bottom: 0px; width:30%;color:white; background-color:black;" onclick="myfun4()">ok </div>
                  </div>
             
          </div>
   
      </form>

</div>
<script>
      function myfun(){
          document.getElementById("return").style.display="none";
           document.getElementById("r").style.display="none";
      }
      function myfun1(){
          document.getElementById("return").style.display="inline";
           document.getElementById("r").style.display="inline";
      }
      function myfun2(){
         
           document.getElementById("ad").style.display="inline";
      }
      function myfun4(){
          
           document.getElementById("ad").style.display="none";
           
           var c = document.getElementById("count").value;
           var d = document.getElementById("count1").value;
           var e = document.getElementById("count2").value;
           var check="";
           if(document.getElementById("eco").checked){
               check=document.getElementById("eco").value;
           }else if(document.getElementById("premium").checked){
               check=document.getElementById("premium").value;
           }else if(document.getElementById("Business").checked){
               check=document.getElementById("Business").value;
           }
           if(document.getElementById("First").checked){
               check=document.getElementById("First").value;
           }
           
           document.getElementById("ca").value=c+"adult,"+d+"child,"+e+"infants,"+check ;
           
      }
     
        function decrements(aa){
            var a=aa.value;
            if(a!=0)
            a--;
            aa.value=a;
        }
        function increments(aa){
            var a=aa.value;
            if(a!=100)
            a++;
            aa.value=a;
        }
        </script>
      
 
 
  
      
   
 
    </body>
</html>
