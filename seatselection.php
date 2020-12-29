<?php 
$host="localhost";
$user="root";
$pass="";
$database="theatrebooking";
$db=mysqli_connect($host,$user,$pass,$database);


if(isset($_GET['ID'])){
  $ID=mysqli_real_escape_string($db,$_GET['ID']);
  $sql="SELECT * FROM movies WHERE Movie_Id='$ID'";
  $result=mysqli_query($db,$sql) or die("Bad Query: $sql");
  $row=mysqli_fetch_array($result);
  }
  session_start();
  if(isset($_SESSION['username'])){
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $child="regularchild";
        $adult="regularadult";
        $senior="regularsenior";
        $taken=$child+$adult+$senior;
        $taken=$result2['taken']-$taken;
        $users_check_query=$sql="INSERT INTO movies (Movie_Id, MovieName, Director, Rating, RunTime, Synopsis, Image,taken,open) VALUES (NULL,NULL,NULL,NULL,NULL,NULL,NULL,$taken,NULL)";
        $result2=mysqli_query($db,$users_check_query);
        $users=mysqli_fetch_assoc($result2);
  
    }
?>
  <script type="text/javascript">
    function getregularTotal(){
    var regtotal;

    var regularchild=document.getElementById("regularchild").value;
    var seats=regularchild;
    var child=regularchild*9;

    var regularadult=document.getElementById("regularadult").value;
    seats=+regularadult;
    var adult=regularadult*13;

    var regularsenior=document.getElementById("regularsenior").value;
    seats=+regularsenior;
    var senior=regularsenior*10;

    regtotal=Math.round(child+adult+senior);
return regtotal;
}

function getSeats(){
  var regularchild=document.getElementById("regularchild").value;
    var seats=regularchild;

    var regularadult=document.getElementById("regularadult").value;
    seats=+regularadult;

    var regularsenior=document.getElementById("regularsenior").value;
    seats=+regularsenior;

    return seats;
}

function getcartTotal(){
var total=getregularTotal();
return total;
}

function calculateTotal(){
    var total=getcartTotal();
    var tax=Math.round((total*0.13)*100)/100;
    var totalTaxed=total+tax;
    var totalTaxed=Math.round((total+tax)*100)/100;
    var divobj=document.getElementById("subtotal");
    divobj.style.display="block";
    divobj.innerHTML="Subtotal: "+total;
    
    var divobj2=document.getElementById("tax");
    divobj2.style.display="block";
    divobj2.innerHTML="Tax: "+tax;
    
    var divobj3=document.getElementById("totalprice");
    divobj3.style.display="block";
    divobj3.innerHTML="Total: "+totalTaxed;

    return totalTaxed;
    }
  </script>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" type="text/css" href="seatselectionstyles.css" />
    <link rel="stylesheet" type="text/css" href="theatrestyles.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" type="text/css"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Movie Seat Booking</title>
  </head>
    <header>
    <a class="logo" href="homepage.php"><img src="images/vectortrace.png" alt="logo" height="45px" width="70px"></a>
      <nav>
          <ul class="nav_links">
              <li><a class="current" href="homepage.php">Home</a></li>
              <li><a href="movieshowcase.php">Movies</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              
          </ul>
      </nav>
      <div class="dropdown">
                <button class="dropbtn">My Account <i class="arrow down"></i></i></button>
                <div class="dropdown-content">
                  <a href="signout.php">Sign Out</a>
                </div>
                </div>
      <a class="cta" href="index.php"><button>Logout</button></a>

  </header>
  <style>
    html{
  background: #485563; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #485563, #29323c); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #485563, #29323c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  color:white;
  overflow: hidden;
}
  </style>
  </head>
  <body>

    <div class="container">
      <div class="screen">Screen</div>
      <div class="rowlabels">
        <p class="label">A</p>
        <p class="label">B</p>
        <p class="label">C</p>
        <p class="label">D</p>
        <p class="label">E</p>
        <p class="label">F</p>
        <p class="label">G</p>
        <p class="label">H</p>
      </div>
      <div class="row">
        <button class="seat">1</button>
        <button class="seat">2</button>
        <button class="seat">3</button>
        <button class="seat">4</button>
        <button class="seat">5</button>
        <button class="seat">6</button>
        <button class="seat">7</button>
        <button class="seat">8</button>
        <button class="seat">9</button>
        <button class="seat">10</button>
      </div>
      <div class="row">
        <button class="seat">1</button>
        <button class="seat">2</button>
        <button class="seat">3</button>
        <button class="seat">4</button>
        <button class="seat">5</button>
        <button class="seat">6</button>
        <button class="seat">7</button>
        <button class="seat">8</button>
        <button class="seat">9</button>
        <button class="seat">10</button>
      </div>

      <div class="row">
        <button class="seat">1</button>
        <button class="seat">2</button>
        <button class="seat">3</button>
        <button class="seat">4</button>
        <button class="seat">5</button>
        <button class="seat">6</button>
        <button class="seat">7</button>
        <button class="seat">8</button>
        <button class="seat">9</button>
        <button class="seat">10</button>
      </div>

      <div class="row">
        <button class="seat">1</button>
        <button class="seat">2</button>
        <button class="seat">3</button>
        <button class="seat">4</button>
        <button class="seat">5</button>
        <button class="seat">6</button>
        <button class="seat">7</button>
        <button class="seat">8</button>
        <button class="seat">9</button>
        <button class="seat">10</button>
      </div>

      <div class="row">
        <button class="seat">1</button>
        <button class="seat">2</button>
        <button class="seat">3</button>
        <button class="seat">4</button>
        <button class="seat">5</button>
        <button class="seat">6</button>
        <button class="seat">7</button>
        <button class="seat">8</button>
        <button class="seat">9</button>
        <button class="seat">10</button>
      </div>

      <div class="row">
        <button class="seat">1</button>
        <button class="seat">2</button>
        <button class="seat">3</button>
        <button class="seat">4</button>
        <button class="seat">5</button>
        <button class="seat">6</button>
        <button class="seat">7</button>
        <button class="seat">8</button>
        <button class="seat">9</button>
        <button class="seat">10</button>
      </div>

      <div class="row">
        <button class="seat">1</button>
        <button class="seat">2</button>
        <button class="seat">3</button>
        <button class="seat">4</button>
        <button class="seat">5</button>
        <button class="seat">6</button>
        <button class="seat">7</button>
        <button class="seat">8</button>
        <button class="seat">9</button>
        <button class="seat">10</button>
      </div>

      <div class="row">
        <button class="seat">1</button>
        <button class="seat">2</button>
        <button class="seat">3</button>
        <button class="seat">4</button>
        <button class="seat">5</button>
        <button class="seat">6</button>
        <button class="seat">7</button>
        <button class="seat">8</button>
        <button class="seat">9</button>
        <button class="seat">10</button>
      </div>
    </div>

    <div class="order">
      <h1 class="title">Order Summary</h1>
      <div class=top>
      <p>Username: <?php echo $_SESSION['username'] ?></p>
      <p>Movie Title: <?php echo $row['MovieName'] ?></p><hr>
      </div>
      <!--<img class="poster" src='movieposters/<?php echo $row['Image']?>'>-->
      <div class="orderbreakdown">
    
      <div class="bottom">
      <p id="count">Seats Breakdown:</p>
      <form action="" method="post" onsubmit="return ValidationEvent()">
      <small>Child Tickets:</small>
      <small>$9.00</small>
      <input type="number" min="0" name="regularchild" id="regularchild" placeholder="0" onchange="calculateTotal()"><br>
      <small>Adult Tickets:</small>
      <small>$13.00</small>
      <input type="number" min="0" name="regularadult" id="regularadult" placeholder="0" onchange="calculateTotal()"><br>
      <small>Senior Tickets:</small>
      <small>$10.00</small>
      <input type="number" min="0" name="regularadult" id="regularsenior" placeholder="0" onchange="calculateTotal()"><hr>
      </form>
      </div>
      <div class="checkout">
        <p id="subtotal">Subtotal:</p>
        <p id="tax">Tax:</p>
        <p id="totalprice">Total:</p>
        <?php echo "<a href='checkout.php?ID= {$row['Movie_Id']}'><button type='button' value='submit' class='complete'>Complete Order</button></a>"?>
      </div>
    </div>
    </div>
  </body>
</html>
<?php }else{
  header("location:index.php");
}
  ?>