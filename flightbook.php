<?php session_start();

                    $flightid=$_GET['id'];
                    $table=$_GET['type'];
                    $email=$_SESSION['email'];
                    if($email==''){
                    header("location:http://localhost/Airline/Flights.php");
                    }else{
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from $table where Flightid=$flightid");
                    while($row= mysqli_fetch_array($sql)){
                    ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Flight booking</title>
        <link href="Style/flightbook.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="bookcontainer">
                <div class="insidebook">
                    <h3 style="color: red;font-size: 24px;margin-left: 130px;margin-top: 23px; ">Enter Traveller Details</h3>
                    <h3 style="color:blue;font-size:20px;margin-left: 40%;margin-top: -48px;">Sign in<h4 style="color:wheat;margin-left: 47%;margin-top: -40px;">to book faster and use eCash</h4></h3>
                    
                    <div class="icon">
                    <i class="fas fa-user-alt"></i>
                    </div>
                </div>
                    
                <form method="post" action="phpfiles/flightbooking.php" enctype="multipart/data-form">
                    <p style="color:yellow; margin-left: 30px;font-size: 20px;">Flight Detail: <input type="text" name="flightname" style="visibility: hidden;" value="<?php echo $row['Flightname']; ?>"><input type="text" name="Source" style="visibility: hidden;" value="<?php echo $row['Source']; ?>"><input type="text" name="Destination" style="visibility: hidden;" value="<?php echo $row['Destination']; ?>"></p>
                    <p style=" color:yellow; margin-left: 20px;">FlightName:<?php echo $row['Flightname']; ?> &nbsp; Source:<?php echo $row['Source']; ?>&nbsp; Destination: <?php echo $row['Destination']; ?>  </p>
                    <p style="color:yellow; margin-left: 30px;font-size: 20px;">Contact Details: <input type="text" value="<?php echo $email?>" name="email" required style="height: 40px;width: 30%;">&nbsp;&nbsp;&nbsp;<input style="height: 40px;width: 30%;" type="text" name="mobile" placeholder="Mobile no.">
                        </p><br>
                
                    <p style="color:blue;font-size: 18px; margin-left: 30px;">Your booking details will be sent to this email address and mobile number.</p><hr>
                    <h2 style="color:red; margin-left: 11%;">Traveller Information</h2>
                    
                        <p style="color:yellow; margin-left: 110px;font-size: 20px;">Adult1 &nbsp;<input type="text" placeholder="FirstName"name="firstname1" required style="height: 40px;width: 30%;">&nbsp;&nbsp;&nbsp;<input type="text"placeholder="LastName"name="lastname1" required style="height: 40px;width: 30%;"></p><br>
                        <p style="color:yellow; margin-left: 110px;font-size: 20px;">Adult2 &nbsp;<input type="text" placeholder="FirstName"name="firstname2"  style="height: 40px;width: 30%;">&nbsp;&nbsp;&nbsp;<input type="text"placeholder="LastName"name="lastname2"  style="height: 40px;width: 30%;"></p><br>
                        <p style="color:yellow; margin-left: 110px;font-size: 20px;">Child  &nbsp;<input type="text" placeholder="Firstname" name="childname"  style="height: 40px;width: 30%;">&nbsp;&nbsp;&nbsp;<input type="text"placeholder="LastName"name="childname1"  style="height: 40px;width: 30%;"></p><br>
                        <p style="color:yellow; margin-left: 110px;font-size: 20px;">Infant &nbsp;<input type="text" placeholder="FirstName" name="infantname"  style="height: 40px;width: 30%;">&nbsp;&nbsp;&nbsp;<input type="text"placeholder="LastName"name="childname2"  style="height: 40px;width: 30%;">&nbsp;&nbsp;<input type="Date"name="cal"placeholder="Date" required style="height: 40px;width: 20%;"></p>
                        <h2 style="color:red;margin-left: 9%;"> Select payment method</h2>
                        <input type="radio" name="payment" value="Netbanking" style="height:25px;margin-left:9%;"><p style="color:yellow;margin-top:-23px;margin-left: 13%;font-size: 20px;">Cash &nbsp;<input type="text" name="amount" placeholder="Amount" style="height: 40px;width: 30%;" ></p><br>
                        <input type="radio" name="payment" value="card" style="height:25px;margin-left: 9%;"><p style="color:yellow;margin-top:-23px;margin-left: 13%;font-size: 20px;">Card &nbsp;<select name="card" required style="height: 40px;width: 30%;" ><option>Debit</option> <option>Netbanking</option></select> 
                            <br><br><input style="border-radius: 20px; background-color:red; color:white; margin-left: 20%; height:30px; width:30%;" type="submit" name="submit" value="Payment Proceed">    
                </form>
                
        </div>
        </div>
                    <?php }}?>
    </body>
</html>
    
