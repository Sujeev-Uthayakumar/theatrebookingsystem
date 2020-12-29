<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Film Factory</title>
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" type="text/css" href="homepage.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

     <body>
      <div class="container">
          <div class="header">
          <a class="logo" href="homepage.php"><img src="images/vectortrace.png" alt="logo" height="45px" width="70px"></a>
        <div class="search-container">
                <form action="/action_page.php">
                  <input type="search" placeholder="Search.." name="search">
                  <button class="searchbar" type="submit"><i class="fa fa-search"></i></button>
                </form>
              </div>
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
                <a class="cta" href="index.php"><button>Login</button></a>
            </div>
      <div class="row">
      <div class="col">
                <h1>Film Factory</h1>
                    <p>Our Film Factory guarantee during these trying times is a promise to guarantee great movies at great prices.
                    We’ve made comprehensive changes to ensure our guests and team stay safe. Select the learn more option to see more details.
                    </p>
                    <a href="https://www.ontario.ca/page/guidance-movie-theatres-during-covid-19"><button class="learn">Learn More</button>
                    <a href="movieshowcase.php"><button class="learn">Our Movies</button>
</div>
      <div class="col">
      <section id="movies-list">
    <?php
        $host="localhost";
        $user="root";
        $pass="";
        $database="theatrebooking";

        $db=mysqli_connect($host,$user,$pass,$database);
        $sql="SELECT * FROM movies WHERE Movie_Id IN (1,3,4,6)";
        $result=mysqli_query($db,$sql);
        if(mysqli_num_rows($result)>0){
        while($row =mysqli_fetch_array($result)){
            echo "<div class='card'>";
            echo "<div class='movies-img'>";
            echo "<a href='details.php?ID={$row['Movie_Id']}'><img src='movieposters/".$row['Image']."'></a>";
            echo "</div>";
            echo "<a class='test' href='details.php?ID= {$row['Movie_Id']}'>{$row['MovieName']}</a>";
            echo "</div>";
        }
        }else{
            echo "<h2>No Images to display</h2>";
        }
?>
    </section>
      </div>  
          </div>
      </div>
      </div>
    </body>
</html>