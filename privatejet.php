<?php session_start();
 $jetid=$_GET['id'];
                    $table=$_GET['type'];
                    $email=$_SESSION['email'];
                     if($email==''){
                         ?>
<script>
    alert('please log in first');
    window.location="http://localhost/Airline/Flights.php";
</script>
<?php
                    
                    }
                    else{
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from $table where Jetid=$jetid");
                    while($row= mysqli_fetch_array($sql)){
                   ?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Jet Booking</title>
        <link href="Style/privatejet.css" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="bookcontainer">
                <div class="insidebook">
                    <h3 style="color: red;font-size: 24px;margin-left: 130px;margin-top: 23px; ">Enter Traveller Details</h3>
                    <h3 style="color:blue;font-size:20px;margin-left: 40%;margin-top: -48px;">Sign in<h4 style="color:wheat;margin-left: 47%;margin-top: -40px;">To book faster and use eCash</h4></h3>
                    
                    <div class="icon">
                    <i class="fas fa-user-alt"></i>
                    </div>
                </div>
               

                
                <form method="post" action="phpfiles/jetbookingsubmit.php" enctype="multipart/form-data">
                    <div class="tourpic">
                            <div class="heading"><img style="width:100%; height:250px;" src="images/<?php echo $row['Logo'];?>"/></div>
                            <div class="tourpict">
                                <br>
                                <p style="color:yellow; font-size: 2vw"><?php echo $row['Jetname']; ?> <input type="text" name="jetname" value="<?php echo $row['Jetname']; ?>"style="visibility: hidden;"></p>
                                <p style="color:navajowhite; font-size: 1.5vw">Booking Price: <?php echo $row['Amount']; ?><input type="text" name="amount" value="<?php echo $row['Amount']; ?>"style="visibility: hidden;"></p>
                                <p style="color:navajowhite; font-size: 1vw">Discount: <?php echo $row['Offer']; ?><input type="text" name="offer" value="<?php echo $row['Offer']; ?>"style="visibility: hidden;"></p>
                    <p style="color:navajowhite; font-size: 1vw">Total Amount: <?php echo ($row['Amount']-($row['Amount']*$row['Offer']/100)); ?></p>
                            </div>
                        </div>
                    
                    <p style="color:yellow; margin-left: 30px;font-size: 20px;">Contact Details: <input type="text" value="<?php echo $email;?>" name="email" required style="height: 40px;width: 30%;">&nbsp;&nbsp;&nbsp;<input type="text" placeholder="mobile no." name="mobile" required style="height: 40px;width: 30%;"</p><br>
                
                    <p style="color:blue;font-size: 18px; margin-left: 30px;">Your booking details will be sent to this email address and mobile number.</p><hr>
                    <h2 style="color:red; margin-left: 11%;">Booking Details</h2>
                    <p style="color:red;margin-left: 10%;font-size:20px;">userName<input type="text" name="username" style="height:30px;width:25%;margin-left:3%;"> 
                        &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; Booking-Day: <select name="days"><option>1/2</option><option>1</option><option>2</option><option>3</option><option>4</option><option>5</option><option>6</option><option>7</option><option>8</option><option>9</option><option>10</option></select>
                        &nbsp; &nbsp; Booking-Date:<input type="date" name="date"></p>
                    <input type="radio" name="payment" value="NetBanking" style="height:25px;margin-left: 7%;"><p style="color:yellow;margin-top:-23px;
                                                                                                             margin-left: 10%;font-size: 20px;">Netbanking &nbsp;<input type="text" name="amount" placeholder="Amount" style="height: 40px;width: 30%;" ></p><br>
                     <input type="radio" name="payment" value="card" style="height:25px;margin-left: 7%;"><p style="color:yellow;margin-top:-23px; margin-left: 10%;font-size: 20px;">Card &nbsp;<select name="card"  style="height: 40px;width: 30%;margin-left: 6%;" ><option>Debit</option> <option>MasterCard</option></select>
                         <br><br> <input style="height:40px; margin-left: 30%; width:30%; background-color:red; color:white; border-radius: 30px;" type="submit" name="jetsubmit" value="Payment Proceed">
                    
                </form>
                </div>
        </div>
                    <?php }}?>
    </body>
</html>