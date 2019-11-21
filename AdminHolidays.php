<html>
    <head>
        <meta charset="UTF-8">
        <title>BonBoyz Admin Holydays page</title>
        <link href="Style/AdminHome.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    </head>
    <body>

        <div class="Top">
            <div class="logo">
                <h1 style= "font-size:40px;padding-left: 10px;"><i class="fas fa-plane-departure"></i>&nbsp; BONBOYZ</h1>
            </div>
            <ul class="Register">
                <li class="Registermenu"><a href="Aboutus.php">Go to User side..</a></li>
                
            </ul> 
        </div>
        <div class="pagesmenu">
            <ul class="topmenus">
                <li class="topmenu"><a href="AdminHome.php">Home</a></li>
                <li class="topmenu"><a href="AdminFlight.php">Flights</a></li>
                <li class="topmenu"><a href="AdminHolidays.php">Holidays</a></li>
                <li class="topmenu"><a href="AdminXplore.php">X-Plore</a></li>
                <li class="topmenu"><a href="AdminLuxory.php">Luxory Travel</a></li>
            </ul> 
        </div>
        <div class="sliding"><p>image sliding</p></div>
        <div class="addcon">
            <form method="POST" action="phpfiles/Holydayssubmit.php" enctype="multipart/form-data">
            <table border="1" width="100%">
                <tr>
                    <td width="50%" style="text-align: center;">
                        <p style="font-size: 24px;color:rosybrown;">add slide</p><br>
                        <input style="border:1px;background-color: white;"type="file" name="fileToUpload" onchange="myFunction(this)" id="demoImage"/><br><br>
                        <p>Name: <input type="text" name="Name"/></p>
                        <p>Description: <input type="text" name="Description"/></p>
                        <p>Price: <input type="text" name="price"/></p>
                        <p>Category: <select name="category">Category  <option>Family</option><option>Friends</option><option>Couple</option><option>Summer Vacation</option></select></p>
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
                    <td>Description</td>
                    <td>Category</td>
                    <td>Image</td>
                    <td>Edit</td>
                </tr>
                <?php
                $conn= mysqli_connect("localhost","root","","img");
                $sql= mysqli_query($conn,"select * from Holydays");
                while($row= mysqli_fetch_array($sql)){
                ?>
                <tr>
                    <td style="text-align:center;"><?php echo $row["Id"];?></td>
                    <td style="text-align:center;"><?php echo $row["name"];?></td>
                    <td style="text-align:center;"><?php echo $row["desc"];?></td>
                    <td style="text-align: center"><?php echo $row["Category"];?></td>
                    <td style="text-align:center;"><img style="width:120px;
                              height: 100px;" src="images/<?php echo $row['url'];?>"/></td>
                    <td><a href="phpfiles/deleteholidays.php?id=<?php echo $row["Id"];?>"<div style="width:100%;border-radius:20%;height:50px; background-color:brown;color:wheat;text-align:center;"><br>Delete</div></a></td>
                </tr>
                <?php
                }               
                ?>
        </table>
        </div>
        
    </body>
</html>


