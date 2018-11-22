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

<style>

.select .option{
    font-size: 30px;
}

@-webkit-keyframes stamp{
  0%{
    opacity: 0;
  }
  10%{
    opacity:.50;
    transform-origin: 50% 50%;
    transform: rotate(-2deg) scale(5);
    transition: all .3s cubic-bezier(0.6, 0.04, 0.98, 0.335);
  }
  100%{
    opacity:1;
    transform: rotate(-15deg) scale(1);
  }
}

.stamp{
  animation-name: stamp;
  animation-delay:1.0s;
  animation-duration: 0.5s;
  opacity: 0;
   animation-fill-mode:forwards;
}
</style>

<?php 

$link = mysqli_connect("localhost", "root", "", "test");
    
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

if(isset($_POST['submit'])){
    $mail=$_POST['mail'];
    $phone=$_POST['mobile'];
}


$sql="DELETE FROM details WHERE mail='$mail'";
mysqli_query($link,$sql);
mysqli_close($link);

?>


<body>
    <h1 class="heading">
        NOMADIC
    </h1>
    <div style="display: table;margin:0 auto">
    <ul>
        <li><a  href="main.html">Book Ticket</a></li>
        <li><a class="active" href="cancellation.html">Cancellation</a></li>
        <li><a href="retrieve.html">Retrieve</a></li>
        <li><a href="offers.html">Offers</a></li>
        <li><a href="cust.html">Customer Care</a></li>
        <li><a href="policy.html">Policy</a></li>
        <li><a href="about.html">About Us</a></li>

      </ul>
      </div>

      <div style="display:table;margin:0 auto;margin-top:100px;">
          <img src="cancelled.png" height="300" widht="550" class="stamp">
    </div>  
</body>
</html>