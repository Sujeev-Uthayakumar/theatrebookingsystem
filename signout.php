<?php 
$host="localhost";
$user="root";
$pass="";
$database="theatrebooking";
$db=mysqli_connect($host,$user,$pass,$database);

session_start();
unset($_SESSION['username']);

?>
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
    .complete{
        padding:50px 30px;
  width:475px;
  height:575px;
  background:#24252A;
  color:#fff;
  box-sizing:border-box;
  top: 40%;
    left:50%;
    position: absolute;
    transform: translate(-50%,-35%);
  border-color:black;
  border-radius:50px;
    }
    h1{
        padding:0 0 20px;
  text-align:center;
  color:rgba(0,136,169,1);
    }
    p{
        color:white;
        font-size:16px;
    }
  </style>
  </head>
  <body>
        <div class="complete">
            <h1>Signed Out<h1><hr>
            <p>You been signed out!</p>
        </div>

    </body>
</html>