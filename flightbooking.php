<?php session_start();
if(isset($_POST['submit'])){
    $flightname=$_POST['flightname'];
    $source=$_POST['Source'];
    $destination=$_POST['Destination'];
    $email=$_SESSION['email'];
    $mobile=$_POST['mobile'];
    $firstname1=$_POST['firstname1'];
    $lastname1=$_POST['lastname1'];
    $firstname2=$_POST['firstname2'];
    $lastname2=$_POST['lastname2'];
    $firstname=($firstname1+$lastname1);
    $secoundname=($firstname2+$lastname2);
    $childname1=$_POST['childname'];
    $infantname1=$_POST['infantname'];
    $childname2=$_POST['childname1'];
    $infantname2=$_POST['childname2'];
    $child=($childname1+$childname2);
    $infant=($infantname1+$infantname2);
    $payment=$_POST['payment'];
    $date=$_POST['cal'];
     $conn= mysqli_connect("localhost","root","","img");
            if(mysqli_query($conn,"insert into flightbooking values('','$email','$mobile','$flightname','$source','$destination','$firstname','$secoundname','$child','$infant','$payment','$date')")){
            
                         
      ?><script type='text/javascript'>alert('Dear User<?php echo $email;?> your booking is accepted. ');
      window.location="http://localhost/Airline/Flights.php";
      </script><?php
            }    
}
?>