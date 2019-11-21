<?php session_start();
  
                    $tourid=$_GET['id'];
                    $table=$_GET['type'];
                    $email=$_SESSION['email'];
                    
                    if($email==''){
                  ?>  <script>
    alert('please log in first');
    window.location="http://localhost/Airline/Home.php";
</script>
<?php
}
                    else{
                    $conn= mysqli_connect("localhost","root", "","img");
                    $sql= mysqli_query($conn, "select * from $table where id=$tourid");
                    while($row= mysqli_fetch_array($sql)){
                   ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width-device-width,initial-scale=1.0"/>
        <title>Tour Booking</title>
        <link href="Style/Tourbook.css" rel="stylesheet">
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
               
                   
                
                <form action="phpfiles/Tourbooknowsubmit.php" method="GET" enctype="multipart/form-data">
                    <div class="tourpic">
                            <div class="heading"><img style="width:100%; height:250px;" src="images/<?php echo $row['url'];?>"/></div>
                            <div class="tourpict">
                                <h2 style="margin-left: 10px; color:peachpuff;"><?php echo $row['name'];?><input type="text" name="name" value="<?php echo $row['name'];?>" style="visibility: hidden;"></h2>
                          <p style="color:indianred;margin: 5px;"> <?php echo $row['desc'];?><br> Tour Days:<?php echo $row['Tourdays'];?><input type="text" name="Tourdays" value="<?php echo $row['Tourdays'];?>" style="visibility:hidden;"></p>
                            <h2 style="color:springgreen; font-size:1.2vw; bottom: 0px;">Amount: <?php echo $row['Price'];?><input type="text" name="Price" value="<?php echo $row['Price'];?>" style="visibility:hidden;"></p>
                            <p style="color:yellow;font-size:1vw;">Offer: <?php echo $row['offer']; ?><input type="text" name="offer" value="<?php echo $row['offer'];?>" style="visibility: hidden;"></p>    
                            <p style="color:yellow;font-size:1.2vw;">Total Amount: <?php echo ($row['Price']-($row['Price']*$row['offer']/100)); ?></p>    
                    </div>
                            </div>
                    
                    <p style="color:yellow; margin-left: 30px;font-size: 1.5vw;">Contact Details: 
                    <p style="color:yellow; margin-left: 30px;font-size: 1.5vw;">E-Mail:<input type="text" value="<?php echo $email; ?>" name="email" required style="height: 40px;width: 30%;"> &nbsp;&nbsp;&nbsp;Mobile: <input type="text" placeholder="mobile" name="mobile" required style="height: 40px;width: 30%;"></p></p>
                <p style="color:yellow; margin-left: 30px; font-size: 1.5vw;">Select Date for Tour: <input type="date" name="tourdate"></p><br>
                
                    <p style="color:blue;font-size: 18px; margin-left: 30px;">Your booking details will be sent to this email address and mobile number.</p><hr>
                    <h2 style="color:red; margin-left: 11%;">Booking Details</h2>
                    <p style="color:yellow;margin-left: 5%;font-size: 20px;">Adult1<input type="text" name="Adult1" placeholder="Name" required style="margin-left: 2%;height: 30px;width:20%;"></p>
                    <p style="color:yellow;margin-left:35%;font-size: 20px;margin-top: -50px;">Child1<input type="text" name="Child1" placeholder="Name" style="height: 30px;width: 32%;margin-left: 2%;"></p>
                    <p style="color:yellow;margin-left: 67%;font-size: 20px;margin-top: -50px;">Infant1<input type="text" name="Infant1" placeholder="name" style="height: 30px;width: 55%;margin-left: 2%;"></p>
                    <p style="color:yellow;margin-left: 5%;font-size: 20px;">Adult2<input type="text" name="Adult2" placeholder="Name" style="margin-left: 2%;height: 30px;width:20%;"></p>
                    <p style="color:yellow;margin-left:35%;font-size: 20px;margin-top: -50px;">Child2<input type="text" name="Child2" placeholder="Name" style="height: 30px;width: 32%;margin-left: 2%;"></p>
                    <p style="color:yellow;margin-left: 67%;font-size: 20px;margin-top: -50px;">Infant2<input type="text" name="Infant2" placeholder="name" style="height: 30px;width: 55%;margin-left: 2%;"></p>
                    <p style="color:yellow;margin-left: 5%;font-size: 20px;">Adult3<input type="text" name="Adult3" placeholder="Name" style="margin-left: 2%;height: 30px;width:20%;"></p>
                    <p style="color:yellow;margin-left:35%;font-size: 20px;margin-top: -50px;">Child3<input type="text" name="Child3" placeholder="Name" style="height: 30px;width: 32%;margin-left: 2%;"></p>
                    <p style="color:yellow;margin-left: 67%;font-size: 20px;margin-top: -50px;">Infant3<input type="text" name="Infant3" placeholder="name" style="height: 30px;width: 55%;margin-left: 2%;"></p>
                    <p style="color:yellow;margin-left: 5%;font-size: 20px;">Adult4<input type="text" name="Adult4" placeholder="Name" style="margin-left: 2%;height: 30px;width:20%;"></p>
                    <p style="color:yellow;margin-left:35%;font-size: 20px;margin-top: -50px;">Child4<input type="text" name="Child4" placeholder="Name" style="height: 30px;width: 32%;margin-left: 2%;"></p>
                    <p style="color:yellow;margin-left: 67%;font-size: 20px;margin-top: -50px;">Infant4<input type="text" name="Infant4" placeholder="name" style="height: 30px;width: 55%;margin-left: 2%;"></p>
                    <p style="color:yellow;margin-left: 5%;font-size: 20px;">Adult5<input type="text" name="Adult5" placeholder="Name" style="margin-left: 2%;height: 30px;width:20%;"></p>
                    <p style="color:yellow;margin-left:35%;font-size: 20px;margin-top: -50px;">Child5<input type="text" name="Child5" placeholder="Name" style="height: 30px;width: 32%;margin-left: 2%;"></p>
                    <p style="color:yellow;margin-left: 67%;font-size: 20px;margin-top: -50px;">Infant5<input type="text" name="Infant5" placeholder="name" style="height: 30px;width: 55%;margin-left: 2%;"></p>
                    <h2 style="color:red; margin-left: 11%;">Hotel Preference</h2>
                    <input type="radio" name="hotel" value="7-Star" style="margin-left:11%;"><p style="color: yellow;margin-left:15%;margin-top: -12px;font-size: 20px;">7-Star</p>
                    <input type="radio" name="hotel" value="5-Star" style="margin-left:35%;margin-top:-34px;"><p style="color: yellow;margin-left:40%;margin-top: -40px;font-size: 20px;">5-Star</p>
                    <input type="radio" name="hotel" value="3-Star" style="margin-left:60%;margin-top:-34px;"><p style="color: yellow;margin-left:65%;margin-top: -40px;font-size: 20px;">3-Star</p>
                    <p style="color:yellow;margin-left: 5%;font-size: 20px;">Address<input type="text" name="Address" placeholder="Address" required style="margin-left: 2%;height: 30px;width:80%;"></p>
                    <h2 style="color:red; margin-left: 11%;">Payment Details</h2>   
                    <input type="radio" name="payment" value="NetBanking" style="height:25px;margin-left: 9%;">
                    <p style="color:yellow;margin-top:-23px;margin-left: 13%;font-size: 20px;">Netbanking &nbsp;<input type="text" name="amount" placeholder="Amount" style="height: 40px;width: 30%;" ></p><br>
                    <input type="radio" name="payment" value="card" style="height:25px;margin-left: 9%;"><p style="color:yellow;margin-top:-30px;margin-left: 13%;font-size: 20px;">Card &nbsp;<select name="card" style="height: 40px;width: 30%;margin-left: 6%;" ><option>Debit</option><option>MasterCard</option></select><br>
                        <input type="submit" name="submit" value="Payment Proceed" style="width: 20%;height: 40px;background-color: red;margin-left:30%;margin-top:110px;font-size: 20px;border-radius: 10px;">                                                                                       
                         
                </form>
                    
                
               </div>
        </div>
                  
                    <?php }} ?>
    </body>
</html>