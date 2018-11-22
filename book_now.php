<!DOCTYPE html>
<html lang="en">    
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="style.css">   
<title>Nomadic</title>
</head>

<style>
input[type=text], input[type=number], input[type=email] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: none;
    border-bottom: 2px solid #05386B;
}

input[type=radio]{
    color:#05386B;
}

form{
    font-size:20px;
}

.submit_button{
    -moz-appearance: none;
    appearance: none;
    font-size: 13px;
    height:30px;
    font-weight: bold;
    background-color:whitesmoke;
    color: green;
    width:100%;
    text-align: center;
    border: none;
    
}

</style>



<body>
<?php
session_start();
$pass_count= $_SESSION["pass_count"];
$source=$_SESSION["source"];
$x=0;
$y=1;
$first=array();
?>
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

<?php $flight_details= $_POST['submit'];
        $_SESSION["flight_details"]=$flight_details;
        $_SESSION["pass_count"]=$pass_count;?>

    <div class="forms" style="display:table;margin:0 auto">
      <form action="confirm.php" method="POST">
        <?php
        while($x!=$pass_count){
            echo'<br>';
        echo "<p style='text-align:center;color:#05386B'>Passenger ".$y."</p>";
        echo'
            <hr>
          <input required type="text" name="first_name[]" placeholder="First Name">
          <br>
          <input required type="text" name="last_name[]" placeholder="Last Name">
          <br>
          Gender:
          <input type="radio" name="gender[]';echo $y;echo'" value="F">Female
            <input type="radio" name="gender[]';echo $y;echo'" value="M">Male
        <br>
            <input required type="number" name="age[]" placeholder="Age">';
        $pass_count=$pass_count-1;
        $y=$y+1;
        
        };
        
        ?>
        <br><hr>
        <input type="email" name="mail" placeholder="Mail ID">
        <input type="text" name="mobile" maxlength="10" placeholder="Phone Number">
        <input type="submit" name="submit" value="CONFIRM" class="submit_button">

    </form>

</div>
      

</body>

</html>