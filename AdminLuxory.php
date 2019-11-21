<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin luxory</title>
        <link href="Style/AdminLuxory.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>

        <div class="Top">
            <div class="logo">
                <h1 style= "font-family: serif; font-size:40px;padding-left: 10px;"><i class="fas fa-plane-departure"></i>&nbsp; BONBOYZ</h1>
            </div>
            <ul class="Register">
                <li class="Registermenu"><a href="home" style="font-family:serif;">Go To User Side...</a></li>
                
            </ul> 
        </div>
        <div class="pagesmenu">
            <ul class="topmenus">
                <li class="topmenu"><a href="AdminHome.php" style="font-family: serif;">Home</a></li>
                <li class="topmenu"><a href="AdminFlight.php" style="font-family:serif;">Flights</a></li>
                <li class="topmenu"><a href="AdminHolidays.php" style="font-family: serif;">Holidays</a></li>
                <li class="topmenu"><a href="AdminXplore.php" style="font-family: serif;">X-Plore</a></li>
                <li class="topmenu"><a href="AdminLuxory.php" style="font-family: serif;">Luxory Travel</a></li>
            </ul> 
        </div>
        <div class="sliding"><p>image sliding</p></div>
        <div class="addcon">
            <form method="POST" action="phpfiles/LuxroySubmit.php" enctype="multipart/form-data">
            <table border="1" width="100%">
                <tr>
                    <td width="50%" style="text-align: center;">
                        <p style="font-size: 24px;color:rosybrown;">add slide</p><br>
                        <input style="border:1px;background-color: white;"type="file" name="fileToUpload" onchange="myFunction(this)" id="demoImage"/><br><br>
                        <p>Name: <input type="text" name="name"/></p>
                        <p>Description: <input type="text" name="desc"/></p>
                        <p>price: <input type="text" name="price"/></p>
                        <p>Category: <select name="cate"><option>full image</option><option>half image</option></select></p>
                        <p>Offer <select name="offer"><option>0%</option><option>10%</option><option>15%</option><option>20%</option> <option>30%</option></select></p>
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
                    <td style="text-align: center">S.no</td>
                    <td style="text-align: center">Name</td>
                    <td style="text-align: center">description</td>
                    <td style="text-align: center">Offer</td>
                    <td style="text-align: center">image</td>
                    <td style="text-align: center">delete</td>
                </tr>
                <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from luxury");
                while($row= mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td style="text-align:center;"><?php echo $row["id"];?></td>
                    <td style="text-align:center;"><?php echo $row["name"];?></td>
                    <td style="text-align:center;"><?php echo $row["desc"];?></td>
                    <td style="text-align:center;"><?php echo $row["offer"];?></td>
                    <td style="text-align:center;"><img style="width:120px;
                              height: 100px;" src="images/<?php echo $row['url'];?>"/></td>
                    <td><a href="phpfiles/deleteLuxory.php?id=<?php echo $row["id"];?>"<div style="width:90%;border-radius:20%;height:50px; background-color:brown;color:wheat;text-align:center;"><br>Delete</div></a></td>
                </tr>
                <?php
                }               
                ?>
        </table>
        </div>
        
    </body>
</html>



