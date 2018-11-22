<?php 
session_start();
$link = mysqli_connect("localhost", "root", "", "test");

        // Check connection
    
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
$x=0;
$first_names=$_POST['first_name'];
$last_names=$_POST['last_name'];
$genders=$_POST['gender'];
$ages=$_POST['age'];
$flight_detail=$_SESSION["flight_details"];
$mail=$_POST['mail'];
$phone=$_POST['mobile'];

$query="SELECT first_name from details";
$result=mysqli_query($link,$query);

if(empty($result)){
    $query="CREATE TABLE details (first_name varchar(20),last_name varchar(20),gender varchar(1),age int(3),flight_details varchar(50),mail varchar(50),mobile varchar(10))";
    $result=mysqli_query($link,$query);
};

while($x<$_SESSION["pass_count"]){
    $sql="INSERT INTO details (first_name,last_name,gender,age,flight_details,mail,mobile) VALUES ('$first_names[$x]','$last_names[$x]','$genders[$x]','$ages[$x]','$flight_detail','$mail','$phone')";
    mysqli_query($link,$sql);
    $x=$x+1;
    
};
mysqli_close($link);
?>
<!DOCTYPE html>
<html lang="en">    
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="style.css">   
<title>Nomadic</title>
</head>

<script>
    var date=sessionStorage.getItem('journey_date');
</script>

<body>
    <h1 class="heading">
        NOMADIC
    </h1>
    <div style="display: table;margin:0 auto">
    <ul>
        <li><a class="active" href="main.html">Book Ticket</a></li>
        <li><a href="cancellation.html">Cancellation</a></li>
        <li><a href="retrieve.html">Retrieve</a></li>
        <li><a href="offers.html">Offers</a></li>
        <li><a href="cust.html">Customer Care</a></li>
        <li><a href="policy.html">Policy</a></li>
        <li><a href="about.html">About Us</a></li>

      </ul>
      </div>
      <img src="booked.jpg" length="800" width="600" style="display:table;margin:0 auto;margin-top:50px">
</body>
</html>