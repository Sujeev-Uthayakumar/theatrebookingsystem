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

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Film Factory</title>
        <link rel="stylesheet" type="text/css" href="theatrestyles.css">
        <link rel="stylesheet" type="text/css" href="details.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            *{
                margin:0;
                padding:0;
                font-family: 'Open Sans', sans-serif;
                box-sizing:border-box;
            }
            .title{
            display:inline-block;
            margin:25px;
            }
            h1{
                color:white;
                margin-top:90px;
            }
            .poster{
                width:200px;
                height:275px;
                margin:25px;
            }
            html{
                background: #485563; /* fallback for old browsers */
                background: -webkit-linear-gradient(to right, #485563, #29323c); /* Chrome 10-25, Safari 5.1-6 */
                background: linear-gradient(to right, #485563, #29323c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
                color:white;
            }
            .topinfo{
                display:flex;
            }
            .duration{
                font-size:12px;
            }
            .director{
                font-size:17px; 
            }
            .tickets{
                margin-top:95px;
            }
            .summary{
                margin-top:10px;
            }
            .bottom{
                margin-top:40px;
                font-size:17px;
            }
            .open{
                margin-top:10px;
            }
        </style>
</head>
    </head>
        <header>
        <a class="logo" href="homepage.php"><img src="images/vectortrace.png" alt="logo" height="45px" width="70px"></a>
            <div class="search-container">
                <form action="/action_page.php">
                  <input type="search" placeholder="Search.." name="search">
                  <button class="searchbar" type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
            <nav>
                <ul class="nav_links">
                    <li><a href="homepage.php">Home</a></li>
                    <li><a class="current" href="movieshowcase.php">Movies</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                </ul>
            </nav>
            <div class="dropdown">
                <button class="dropbtn">My Account <i class="arrow down"></i></i></button>
                <div class="dropdown-content">
                  <a href="signout.php">Sign Out</a>
                </div>
                </div>
            <a class="cta" href="index.php"><button>Login</button></a>
        </header>
        <body>
        <div class="topinfo">
        <img class="poster" src='movieposters/<?php echo $row['Image']?>'>
        <h1 class="title"><?php echo $row['MovieName'] ?></hl>
        <p class="duration"><?php echo $row['RunTime']?></p>
        <div class="bottom">
        <p class="director">Director: <?php echo $row['Director']?></p>
        <p class="rating">Rating: <?php echo $row['Rating']?>/10</p>
        <p class='summary'>Summary: <?php echo $row['Synopsis']?></p>
        <?php echo "<a href='seatselection.php?ID= {$row['Movie_Id']}'><button class='tickets'>Get Tickets</button></a>"?>
        </div>
        </div><hr>
        </body>
</html>