<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Flights</title>
        <link href="Style/AdminFlight.css" rel="stylesheet">
        
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>

        <div class="Top">
            <div class="logo">
                <h1 style= "font-family: 'Tangerine', cursive; font-size:40px;padding-left: 10px;"><i class="fas fa-plane-departure"></i>&nbsp; BONBOYZ</h1>
            </div>
            <ul class="Register">
                <li class="Registermenu"><a href="Home.php" style="font-family: serif;">Go To User..</li>
                 </ul> 
        </div>
        <div class="pagesmenu">
            <ul class="topmenus">
                <li class="topmenu"><a href="AdminHome.php" style="font-family: serif;">Home</a></li>
                <li class="topmenu"><a href="AdminFlight.php" style="font-family:serif;">Flights</a></li>
                <li class="topmenu"><a href="AdminHolidays.php" style="font-family: serif;">Holidays</a></li>
                <li class="topmenu"><a href="AdminXplore.php" style="font-family: serif;">X-Plore</a></li>
                <li class="topmenu"><a href="AdminLuxory.php" style="font-family: serif;">Luxury Travel</a></li>
            </ul> 
        </div>
        <div class="sliding"><p>image sliding</p></div>
        <div class="addcon">
            <form method="POST" action="phpfiles/FlightsSubmit.php" enctype="multipart/form-data">
            <table border="1" width="100%">
                <tr>
                    <td width="50%" height="auto" style="text-align: center;">
                        <p style="font-size: 24px;color:rosybrown;">add Flights</p><br>
                        <p>Flight Id: <input type="text" name="Flightid"/></p>
                        <p>Flight Name: <input type="text" name="Flightname"/></p>
                        <p>Company Name: <input type="text" name="Companyname"/></p>
                        <input style="border:1px;background-color: white;"type="file" name="fileToUpload" onchange="myFunction(this)" id="demoImage"/><br><br>
                        <p>Source : <input type="text" name="Source"/></p>
                        <p>Destination: <input type="text" name="Destination"/></p>
                       <p>Arrival Time: <input type="text" name="Arrival"/></p>
                       <p>Departure Time: <input type="text" name="Departure"/></p>
                        <p>Duration: <input type="text" name="Duration"/></p>
                        <p>Seats: <p>Economy: <input type="number" name="Economy"> Business: <input type="number" name="Business"></p>
                        <p>Premium Economy: <input type="number" name="Premium"> First Class: <input type="number" name="First"></p>
                        </p>
                        <p>Offer <select name="offer"><option>5%</option> <option>10%</option>
                            <option>20%</option><option>25%</option><option>30%</option></select></p>
                            <p>Stop1: <input type="text" name="StopA"/> Stop2: <input type="text" name="StopB"/></p>
                            <p>Available day 1 <input type="text" name="day1"></p>
                            <p>Available day 2 <input type="text" name="day2"></p>
                            <p>Available day 3 <input type="text" name="day3"></p>
                        <input style="background-color: darkgray; width:150px;height:50px;color:white;"type="submit" name="submit" value="submit">
                        
                    </td>
                    <td>
                        <img id="image" width="500px" height="310px" style="border:none;"/>
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
                                    
                                }
                                
                            }
                            </script>
                    </td>
                    
                </tr>
            </table>
            </form>
        </div>
        <div class="Jet"><p>ADD Jet</p></div>
        <div class="addconjet">
            <form method="POST" action="phpfiles/JetSubmit.php" enctype="multipart/form-data">
            <table border="1" width="100%">
                <tr>
                    <td width="50%" height="auto" style="text-align: center;">
                        <p style="font-size: 24px;color:rosybrown;">add Jet</p><br>
                        <p>Jet Id: <input type="text" name="Jetid"/></p>
                        <p>Jet Name: <input type="text" name="Jetname"/></p>
                        <p>Company Name: <input type="text" name="Company"/></p>
                        <input style="border:1px;background-color: white;" type="file" name="fileToUpload" onchange="myFunction(this)" id="jetimage"/><br><br>
                        
                        
                        <p>Offer <select name="offer"><option>5%</option> <option>10%</option>
                            <option>20%</option><option>25%</option><option>30%</option></select></p>
                        <p>Amount: <input type="text" name="Amount"/></p>
                            
                        <input style="background-color: darkgray; width:150px;height:50px;color:white;"type="submit" name="submit" value="submit">
                        
                    </td>
                    <td>
                        <img id="image1" width="500px" height="310px" style="border:none;"/>
                        <script>
                            function myFunction(a)
                            {
                                if(a.value)
                                {
                                    var file = document.getElementById("jetimage").files[0];
                                    var xmlhttp = new XMLHttpRequest();
                                    xmlhttp.onreadystatechange = function()
                                    {
                                        if(this.readyState == 4 && this.status == 200)
                                        {
                                            document.getElementById("image1").src="images/"+this.responseText;
                                            
                                        }
                                    };
                                    var formData = new FormData();
                                    formData.append('fileToUpload',file);
                                    xmlhttp.open("POST","demoSubmit.php",false);
                                    xmlhttp.send(formData);
                                    
                                }
                                
                            }
                            </script>
                    </td>
                    
                </tr>
            </table>
            </form>
        </div>
        <div class="imgtable">
            <table width="100%" border="1">
                <tr style="background-color: black;color: white;">
                    <td style="text-align: center">Flight No.</td>
                    <td style="text-align: center">Flight Name</td>
                    <td style="text-align: center">Company Name</td>
                    <td style="text-align: center">logo</td>
                    <td style="text-align: center">Source</td>
                    <td style="text-align: center">Destination</td>
                    <td style="text-align: center">Arrival Time</td>
                    <td style="text-align: center">Departure Time</td>
                    <td style="text-align: center">Duration</td>
                    <td style="text-align: center">Economy seat</td>
                    <td style="text-align: center">Business</td>
                    <td style="text-align: center">Premium</td>
                    <td style="text-align: center">First Class</td>
                    <td style="text-align: center">offer</td>
                    <td style="text-align: center">Stop1</td>
                    <td style="text-align: center">Stop2</td>
                    <td style="text-align: center">Edit</td>
                    
                </tr>
                <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from flights ");
                while($row= mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td style="text-align:center;"><?php echo $row['Flightid']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Flightname']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Company']; ?></td>
                    
                    <td style="text-align:center;"><img style="width:120px;
                              height: 100px;" src="images/<?php echo $row['Logo']; ?>"/></td>
                    <td style="text-align:center;"><?php echo $row['Source']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Destination']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Arrival']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Departure']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Duration']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Economy']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Business']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Premiumeconomy']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Firstclass']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Offer']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Stop1']; ?></td>
                   <td style="text-align:center;"><?php echo $row['stop2']; ?></td>
                    <td><a href="phpfiles/deleteFlights.php?id=<?php echo $row["id"];?>"<div style="width:90%;border-radius:20%;height:50px; background-color:brown;color:wheat;text-align:center;"><br>Delete</div></a></td>
                </tr>
                <?php
                }               
                ?>
        </table>
        </div>
        <div class="jettable">
            <table width="100%" border="1">
                <tr style="background-color: black;color: white;">
                    <td style="text-align: center">Jet No.</td>
                    <td style="text-align: center">Jet Name</td>
                    <td style="text-align: center">Company Name</td>
                    <td style="text-align: center">logo</td>
                    <td style="text-align: center">offer</td>
                    <td style="text-align: center">Amount</td>
                    <td style="text-align: center">Edit</td>
                    
                </tr>
                <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from Jet ");
                while($row= mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td style="text-align:center;"><?php echo $row['Jetid']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Jetname']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Company']; ?></td>
                    
                    <td style="text-align:center;"><img style="width:120px;
                              height: 100px;" src="images/<?php echo $row['Logo']; ?>"/></td>
                    
                    <td style="text-align:center;"><?php echo $row['Offer']; ?></td>
                    <td style="text-align:center;"><?php echo $row['Amount']; ?></td>
                    <td><a href="phpfiles/deleteJet.php?id=<?php echo $row["Jetid"];?>"<div style="width:90%;border-radius:20%;height:50px; background-color:brown;color:wheat;text-align:center;"><br>Delete</div></a></td>
                </tr>
                <?php
                }               
                ?>
        </table>
        </div>
    </body>
</html>

