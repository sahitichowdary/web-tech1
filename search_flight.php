<!DOCTYPE html>
<html lang="en">    
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="style.css">   
<title>Nomadic</title>
</head>

<style>
    .card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 350px;
  margin: auto;
  text-align: center;
  font-family: arial;
  background-color: white;
  margin-top: 20px;
  font-family:"Lucida Sans Unicode", "Lucida Grande", sans-serif;
}

.price {
  color: blue;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #05386B;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>

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
    <?php
        session_start();
        
    
        if(isset($_POST['submit'])){
            $source = $_POST['source'];  
            $destination=$_POST['destination'];
            $pass_count=$_POST['passenger_count'];
            $travel_class=$_POST['class'];
            $date=$_POST['journey_date'];
            }
     

    ?>

    <?php 
        $_SESSION["source"]=$source;
        $_SESSION["destination"]=$destination;
        $_SESSION["class"]=$travel_class;
        $_SESSION["pass_count"]=$pass_count;
        $_SESSION["journey_date"]=$date;
    ?>

    <?php if($source=='BLR' && $destination=='HYD'): ?>

        <div class="card">
        
            <img src="jet_airways.png" alt="Jet Airways" style="height:100px;width:100px;padding-top: 10px;">
            <h1>BLR to HYD</h1>
            <h5>Jet Airways - 9W919</h5>
            <h3>03:15 - 04:30</h3>
            <p class="price">₹1400 * <?php echo $pass_count?> = <?php echo $pass_count*1400?></p>
            <form method="post">
            <p><button type="submit" formaction="book_now.php" value="Jet Airways 9W919 03:15 - 04:30" name="submit">BOOK NOW</button></p>
            </form>
            <?php
            if (isset($_POST['action'])) {
            echo '<br />The ' . $_POST['submit'] . ' submit button was pressed<br />';
            }
                ?>
    </div>
    <div class="card">
            <img src="indigo.png" alt="Indigo" style="height:100px;width:100px;padding-top: 10px;">
            <h1>BLR to HYD</h1>
            <h5>Indigo - 6E602</h5>
            <h3>05:15 - 06:25</h3>
            <p class="price">₹1600 * <?php echo $pass_count?> = <?php echo $pass_count*1600?></p>
            <form method="post">
            <p><button type="submit" formaction="book_now.php" name="submit" value="Indigo 6E602 05:15 - 06:25">BOOK NOW</button></p>
            </form>
    </div>

    <?php endif ?>
            
    <?php if($source=='HYD' && $destination=='MAA'): ?>

    <div class="card">
        <?php $_SESSION["flight_no"]='8F567'?>
        <img src="indigo.png" alt="Jet Airways" style="height:100px;width:100px;padding-top: 10px;">
        <h1>HYD -> MAA</h1>
        <h4>Indigo - 8F567</h4>
        <h3>16:35 - 17:50</h3>
        <p class="price">₹2600 X <?php echo $pass_count?> = <?php echo $pass_count*2600?></p>
        <form method="post">
        <p><button type="submit" formaction="book_now.php" name="submit" value="Indigo 8F567 16:35 - 17:50">BOOK NOW</button></p>
        </form>
    </div>
   
    <?php endif ?>


</body>

</html>