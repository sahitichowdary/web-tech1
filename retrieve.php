<!DOCTYPE html>
<html lang="en">    
<head>
<meta charset="UTF-8"> 
<link rel="stylesheet" type="text/css" href="style.css">   
<title>Nomadic</title>
</head>

<style>
.output{
    color:white;
    width:200px;
    display:table;
    margin:0 auto;
    margin-top:100px;
    text-align:center;
    font-size:25px;
    font-family:Josefin;
    border-style:dotted;
}

p{
    margin-top:-20px;
}
</style>

<body>


    <h1 class="heading">
        NOMADIC
    </h1>
    <div style="display: table;margin:0 auto">
    <ul>
        <li><a href="main.html">Book Ticket</a></li>
        <li><a href="cancellation.html">Cancellation</a></li>
        <li><a class="active" href="retrieve.html">Retrieve</a></li>
        <li><a href="offers.html">Offers</a></li>
        <li><a href="cust.html">Customer Care</a></li>
        <li><a href="policy.html">Policy</a></li>
        <li><a href="about.html">About Us</a></li>

      </ul>
      </div>
      <?php 
    $link = mysqli_connect("localhost", "root", "", "test");
    
    if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }
    
    if(isset($_POST['submit'])){
        $mail=$_POST['mail'];
        $phone=$_POST['mobile'];
    }

    $sql="SELECT * FROM details WHERE mail='$mail'";
 $result=mysqli_query($link,$sql);
 if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
       echo "<div class=\"output\" style=\"margin-top:30px\"> <h3> " . $row["first_name"]. " ".$row["last_name"]."</h3><br><p>Gender:".$row["gender"]."</p><br>".
       "<p>Age:".$row["age"]."</p><br>"."<p>".$row["flight_details"]."</p></div>";
       
    }
 } else {
    echo "0 results";
 };
mysqli_close($link);

?>

</body>
</html>

