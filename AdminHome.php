<html>
    <head>
        <meta charset="UTF-8">
        <title>BonBoyz Admin Home page</title>
        <link href="Style/AdminHome.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>

        <div class="Top">
            <div class="logo">
                <h1 style= "font-family: 'Tangerine', cursive; font-size:40px;padding-left: 10px;"><i class="fas fa-plane-departure"></i>&nbsp; BONBOYZ</h1>
            </div>
            <ul class="Register">
                <li class="Registermenu"><a href="Home.php" style="font-family: Serif;">Go To User Side&nbsp;&nbsp;<i class="fas fa-plane-departure"></i></a></li>
            
            </ul> 
        </div>
        <div class="pagesmenu">
            <ul class="topmenus">
                <li class="topmenu"><a href="AdminHome.php" style="font-family:serif;">Home</a></li>
                <li class="topmenu"><a href="AdminFlight.php" style="font-family:serif;">Flights</a></li>
                <li class="topmenu"><a href="AdminHolidays.php" style="font-family:serif;">Holidays</a></li>
                <li class="topmenu"><a href="AdminXplore.php" style="font-family:serif;">X-Plore</a></li>
                <li class="topmenu"><a href="AdminLuxory.php" style="font-family:serif;">Luxory Travel</a></li>
            </ul> 
        </div>
        <div class="sliding"><p>image sliding</p></div>
        <div class="addcon">
            <form method="POST" action="phpfiles/imageslide.php" enctype="multipart/form-data">
            <table border="1" width="100%">
                <tr>
                    <td width="50%" style="text-align: center;">
                        <p style="font-size: 24px;color:rosybrown;">add slide</p><br>
                        <input style="border:1px;background-color: white;"type="file" name="fileToUpload" onchange="myFunction(this)" id="demoImage"/><br><br>
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
        <div class="imgtable">
            <table width="100%" border="1">
                <tr style="background-color: black;color: white;">
                    <td>S.no</td>
                    <td>Name</td>
                    <td>Image</td>
                    <td>Edit</td>
                </tr>
                <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from imgnikki");
                while($row= mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td style="text-align:center;"><?php echo $row["Id"];?></td>
                    <td style="text-align:center;"><?php echo $row["Picture"];?></td>
                    <td style="text-align:center;"><img style="width:120px;
                              height: 100px;" src="images/<?php echo $row['Picture'];?>"/></td>
                   <td><a href="phpfiles/deleteSlide.php?id=<?php echo $row["Id"];?>"<div style="width:100%;border-radius:20%;height:50px; background-color:brown;color:wheat;text-align:center;"><br>Delete</div></a></td>
                </tr>
                <?php
                }               
                ?>
        </table>
        </div>
        
    </body>
</html>

