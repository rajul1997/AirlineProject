<?php session_start(); 
?>


<head>
    <meta charset="UTF-8">
    <title>Search Flight Page</title>
    <link href="Style/SearchFlights.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>
<body>

    <div class="Top">
        <div class="logo">
            <h1 style= "font-family: 'Tangerine', cursive; padding-left: 10px;"><i class="fas fa-plane-departure"></i>&nbsp; BONBOYZ</h1>
        </div>
        <ul class="Register">
            <li class="Registermenu"><a href="" style="font-family:serif; font-size:1.5vw;"><b>About Us</b>&nbsp;&nbsp;<i class="fas fa-plane-departure"></i></a></li>
            <li class="Registermenu1">
                <?php
                if (isset($_SESSION['name'])) {
                    ?>
                    <a href="signout.php" style="font-family: serif; font-size:1.5vw;"><b>Log Out</b>&nbsp;<i class="fas fa-sign-in-alt"></i></a>
                    <?php
                } else {
                    ?>
                    <a href="signin.php" style="font-family: serif; font-size:1.5vw;"><b>Log In</b>&nbsp;<i class="fas fa-sign-in-alt"></i></a>

                <?php } ?>
            </li>
            <li class="Registermenu2"><a href="" style="font-family:serif; font-size:1.5vw;"><i class="fas fa-user"></i>&nbsp;<b>Create Account</b></a></li>
            <li class="Registermenu3"><a href="Profile.php" style="font-family:serif; font-size:1.5vw;"><p><b>
                            <?php
                            if (isset($_SESSION['img'])) {
                                ?> 
                                <div style="width:20%; margin-top: -20px; height:40px; border-radius:50%; transition-property: scale (.2)">
                                    <img style="border-radius: 50%;" src="images/<?php echo $_SESSION['img']; ?>"width="100%" height="40px" />
                                </div>
                            <?php } else { ?>

                                <p style="  margin-top:-20px;"><i class="fas fa-user-tie"></i></p>&nbsp;
                            <?php } ?>
                            <?php
                            if (isset($_SESSION['name'])) {
                                ?> <p style="margin-top: -40px; margin-left: 25%;"><?php echo $_SESSION['name']; ?></p>
                                    <?php
                                } else {
                                    ?>
                                <p style="margin-left: 13%; margin-top: -75px;"> My Profile</p>

                            <?php }
                            ?>


                        </b> </p>
                </a></li>
        </ul> 
    </div>

    <div class="pagesmenu">
        <ul class="topmenus">
            <li class="topmenu"><a href="" style="font-family:serif; font-size:1.5vw;"><b>Home</b></a></li>
            <li class="topmenu"><a href="Flights.php"style="font-family:serif;font-size:1.5vw;"><b>Flights</b></a></li>
            <li class="topmenu"><a href="Holidays.php" style="font-family:serif;font-size:1.5vw;"><b>Holidays</b></a></li>
            <li class="topmenu"><a href="Xplore.php" style="font-family:serif;font-size:1.5vw;"><b>X-Plore</b></a></li>
            <li class="topmenu"><a href="" style="font-family:serif;font-size:1.5vw;"><b>Luxury Travel</b></a></li>
        </ul> 
    </div>

    <div class="flighthead">
        <p style="margin-left: 2%;">Total flights: 
            <?php if ($_GET['ret'] == '') { ?><style>.flighthead2{display: none;}.flighthead3{display:none;}.search2{display:none;}.search3{display:none;}</style>
            <?php
            $frm = $_GET['from'];
            $to = $_GET['To'];
            $dt = strtotime($_GET['dep']);
            $de = date("D", $dt);

            $conn = mysqli_connect("localhost", "root", "", "img");
            $sql = mysqli_query($conn, "select * from flights where Source='$frm' and (Destination='$to' or Stop1='$to' or stop2='$to') and (Availableday1 like '$de%' or Availableday2 like'$de%' or Availableday3 like'$de%') ");
            echo mysqli_num_rows($sql);
            ?>   </p>       
        <p style="margin-left:45%;margin-top: -40px;">
            <?php
            if (isset($_GET['from'])) {
                echo $_GET['from'];
            }
            ?>&#8652;
            <?php
            if (isset($_GET['To'])) {
                echo $_GET['To'];
            }
            ?>
        </p>
        <p style="margin-left: 80%; margin-top: -45px;">Depart Date:
            <?php
            if (isset($_GET['dep'])) {
                echo $_GET['dep'];
            }
            ?>
        </p>
    </div>
    <p style="font-size: 1.8vw; margin-left: 40%; color:blue;"> Flights Are Available </p>
    <div class="search1">
        <table width="100%" >
            <tr style="border-bottom: 5px solid white;background-color: black;color:white;height: 30px;">
                <td width="20%" style="text-align: center;">Airline</td>
                <td width="15%" style="text-align: center;">Depart</td>
                <td width="15%" style="text-align: center;">Arrive</td>
                <td width="15%" style="text-align: center;">Duration</td>
                <td width="15%" style="text-align: center;">Price</td>
                <td width="20%" style="text-align: center;">BookNow</td>

            </tr>
            <br>
    <?php while ($row = mysqli_fetch_array($sql)) { ?>
                <tr style="height: 50px;border-bottom: 5px solid white; background-color: silver;">
                    <td style="text-align: center;"><p style="font-size: 1.5vw;"><img style="border-radius: 100%;" src="images/<?php echo $row['Logo']; ?>"width="20%" height="30px"><?php echo $row['Flightname']; ?></p></td>
                    <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Arrival']; ?></td>
                    <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Departure']; ?></td>
                    <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Duration']; ?></td>
                    <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Amount']; ?></td>
                    <td style="text-align: center;font-size: 1.5vw;"><a href="flightbook.php?type=flights&id=<?php echo $row["Flightid"];?>"><div class="book" style="height: 30px;width: 70%;margin-left: 15%;border-radius: 20px;background-color: red;font-size: 1.5vw;">Book</div></a></td>
                </tr>
            </table>
        </div><?php
    } $count = mysqli_num_rows($sql);
}

    
else {
    ?><style>.search2{display:block;}.search3{display:block;}.flighthead2{display: block;}.flighthead3{display:block;}.search1{display: none;} </style>
    <div style="width:50%;" class="flighthead2">
        <p style="margin-left: 2%;">Total flights: 
            <?php
            $frm = $_GET['from'];
            $to = $_GET['To'];
            $dt = strtotime($_GET['dep']);
            $de = date("D", $dt);


            $conn = mysqli_connect("localhost", "root", "", "img");
            $sql = mysqli_query($conn, "select * from flights where Source='$frm' and (Destination='$to' or Stop1='$to' or stop2='$to') and (Availableday1 like '$de%' or Availableday2 like'$de%' or Availableday3 like'$de%') ");
            echo mysqli_num_rows($sql);
            ?>   </p>       
        <p style="margin-left:35%;margin-top: -40px;">
            <?php
            if (isset($_GET['from'])) {
                echo $_GET['from'];
            }
            ?>&#8652;
            <?php
            if (isset($_GET['To'])) {
                echo $_GET['To'];
            }
            ?>
        </p>
        <p style="margin-left:70%; margin-top:-40px;">Depart Date:
            <?php
            if (isset($_GET['dep'])) {
                echo $_GET['dep'];
            }
            ?>
        </p>
        </div>
        <p style="font-size: 1.8vw; position: absolute; margin-top:40px; margin-left: 40%; color:blue;"> Flights Are Available </p>
        <div class="search2">
            <table width="100%" >
                <tr style="border-bottom: 5px solid white;background-color: black;color:white;height: 30px;">
                    <td width="20%" style="text-align: center;">Airline</td>
                    <td width="15%" style="text-align: center;">Depart</td>
                    <td width="15%" style="text-align: center;">Arrive</td>
                    <td width="15%" style="text-align: center;">Duration</td>

                </tr>
                <br>
        <?php while ($row = mysqli_fetch_array($sql)) { ?>
                    <tr style="height: 50px;border-bottom: 5px solid white; background-color: silver;">
                        <td style="text-align: center;"><p style="font-size: 1.5vw;"><img style="border-radius: 100%;" src="images/<?php echo $row['Logo']; ?>"width="20%" height="30px"><?php echo $row['Flightname']; ?></p></td>
                        <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Arrival']; ?></td>
                        <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Departure']; ?></td>
                        <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Duration']; ?></td>

                    </tr><?php
            $amount = $row['Amount'];
        } $count = mysqli_num_rows($sql);
    
    ?>
        </table>
    </div>

    <div style="width:50%;" class="flighthead3">
        <p style="margin-left: 2%;">Total flights: 
            <?php
            $frm = $_GET['To'];
            $to = $_GET['from'];

            $dt = strtotime($_GET['ret']);
            $re = date("D", $dt);

            $conn = mysqli_connect("localhost", "root", "", "img");
            $sql = mysqli_query($conn, "select * from flights where Source='$frm' and (Destination='$to' or Stop1='$to' or stop2='$to') and (Availableday1 like '$re%' or Availableday2 like'$re%' or Availableday3 like'$re%') ");
            echo mysqli_num_rows($sql);
            ?>   </p>       
        <p style="margin-left:35%;margin-top: -40px;">
            <?php
            if (isset($_GET['To'])) {
                echo $_GET['To'];
            }
            ?>&#8652;
            <?php
            if (isset($_GET['from'])) {
                echo $_GET['from'];
            }
            ?>
        </p>
        <p style="margin-left:70%; margin-top: -40px;">
            Return Date:
        <?php
        if (isset($_GET['ret'])) {
            echo $_GET['ret'];
        }
        ?>
        </p>

        </div>
        <div class="search3">
            <table width="100%" >
                <tr style="border-bottom: 5px solid white;background-color: black;color:white;height: 30px;">
                    <td width="20%" style="text-align: center;">Airline</td>
                    <td width="15%" style="text-align: center;">Depart</td>
                    <td width="15%" style="text-align: center;">Arrive</td>
                    <td width="15%" style="text-align: center;">Duration</td>
                    <td width="15%" style="text-align: center;">Price</td>
                <a href="flightbook.php?type=flights&id=<?php echo $row["Flightid"];?>"><td width="20%" style="text-align: center;">BookNow</td></a>

                </tr>
                <br>
       <?php while ($row = mysqli_fetch_array($sql)) { ?>
                    <tr style="height: 50px;border-bottom: 5px solid white; background-color: silver;">
                        <td style="text-align: center;"><p style="font-size: 1.5vw;"><img style="border-radius: 100%;" src="images/<?php echo $row['Logo']; ?>"width="20%" height="30px"><?php echo $row['Flightname']; ?></p></td>
                        <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Arrival']; ?></td>
                        <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Departure']; ?></td>
                        <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Duration']; ?></td>
                        <td style="text-align: center;font-size: 1.5vw;"><?php echo $row['Amount'] + $amount; ?></td>
                        <td style="text-align: center;font-size: 1.5vw;"><div class="book" style="height: 30px;width: 70%;margin-left: 15%;border-radius: 20px;background-color: red;font-size: 1.5vw;">Book</div></td>
                    </tr><?php } $count = mysqli_num_rows($sql); ?>
    </table>
           
</div>
<?php } ?>
</body>
</html> 