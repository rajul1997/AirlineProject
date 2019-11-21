<?php session_start();
if(isset($_POST['jetsubmit'])){
    $jet=$_POST['jetname'];
    $amount=$_POST['amount'];
    $offer=$_POST['offer'];
    $email=$_SESSION['email'];
    $mobile=$_POST['mobile'];
    $user=$_POST['username'];
    $days=$_POST['days'];
    $payment=$_POST['payment'];
    $date=$_POST['date'];
    $total=  (($row['Amount']-($row['Amount']*$row['Offer']/100))*$days);  
        $conn= mysqli_connect("localhost","root","","img");
     if(mysqli_query($conn,"insert into jetbooking values('','$jet','$amount','$offer','$total','$user','$email','$mobile','$payment','$date')")){
       ?><script>alert('Dear User your booking is accepted');
      window.location="http://localhost/Airline/Flights.php";
      </script>
          
          <?php
      
}}
?>


?>
