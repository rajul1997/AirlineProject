<?php session_start();
if(isset($_GET["submit"])){
    $email=$_SESSION["email"];
    $mobile=$_GET['mobile'];
    $date=$_GET["tourdate"];
    $adult1=$_GET["Adult1"];
    $adult2=$_GET["Adult2"];
    $adult3=$_GET["Adult3"];
    $adult4=$_GET["Adult4"];
    $adult5=$_GET["Adult5"];
    $child1=$_GET["Child1"];
    $child2=$_GET["Child2"];
    $child3=$_GET["Child3"];$infant3=$_GET["Infant3"];
    $child4=$_GET["Child4"];$infant4=$_GET["Infant4"];
    $child5=$_GET["Child5"];$infant5=$_GET["Infant5"];
    $infant1=$_GET["Infant1"];
    $infant2=$_GET["Infant2"];
    $hotel=$_GET["hotel"];
    $address=$_GET["Address"];
    $payment=$_GET["payment"];
    $name=$_GET["name"];
    $offer=$_GET["offer"];
    $price=$_GET["Price"];
    $Total=($price-($price*$offer/100));
    $tourdays=$_GET["Tourdays"];
           $conn= mysqli_connect("localhost","root","","img");
     if(mysqli_query($conn,"insert into tourbooking values('','$email','$mobile','$name','$adult1','$adult2','$adult3','$adult4','$adult5','$child1','$child2','$child3','$child4','$child5','$infant1','$infant2','$infant3','$infant4','$infant5','$address','$hotel','$payment','$price','$offer','$Total','$tourdays')")){
       ?><script type='text/javascript'>alert('Dear User<?php echo $email;?> your booking is accepted. ');
      window.location="http://localhost/Airline/Home.php";
      </script><?php
      
}}
?>