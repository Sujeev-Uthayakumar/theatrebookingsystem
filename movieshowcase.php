<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Film Factory</title>
<link rel="stylesheet" type="text/css" href="theatrestyles.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="showcasestyles.css">

	<!--style----->
	<style>
		body{
            font-family: 'Open Sans', sans-serif;
        }
        html{
            background: #485563; /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #485563, #29323c); /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #485563, #29323c); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        }
	</style>
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
            <
            <div class="dropdown">
                <button class="dropbtn">My Account <i class="arrow down"></i></i></button>
                <div class="dropdown-content">
                  <a href="signout.php">Sign Out</a>
                </div>
                </div>
            <a class="cta" href="index.php"><button>Login</button></a>
    
        </header>
</head>
<body>
    <section id="movies-list">
    <?php
        $host="localhost";
        $user="root";
        $pass="";
        $database="theatrebooking";

        $db=mysqli_connect($host,$user,$pass,$database);
        $sql="SELECT * FROM movies";
        $result=mysqli_query($db,$sql);
        if(mysqli_num_rows($result)>0){
        while($row =mysqli_fetch_array($result)){
            echo "<div class='movies-box'>";
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
</body>
</html>
