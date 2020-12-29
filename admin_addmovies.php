<?php 
$host="localhost";
$user="root";
$pass="";
$database="theatrebooking";
$db=mysqli_connect($host,$user,$pass,$database);
$errors=array();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $target="movieposters/".basename($_FILES['image']['name']);


    $title=$_POST['moviename'];
    $director=$_POST['director'];
    $ratings=$_POST['rating'];
    $runtime=$_POST['runtime'];
    $summary=$_POST['synopsis'];
    $image=$_FILES['image']['name'];

    if(empty($title)){
        array_push($errors,"Movie title is required");
    }
        
    if(empty($director)){
        array_push($errors,"Director name is required");
    }
    
    if(empty($ratings)){
        array_push($errors,"Ratings is required");
    }
    
    if(empty($runtime)){
        array_push($errors,"Movie runtime is required");
    }
    
    if(empty($summary)){
        array_push($errors,"Movie summary is required");
    }
    
    if(empty($image)){
        array_push($errors,"Upload a movie poster");
    }

    if(count($errors)==0){
    $sql="INSERT INTO movies (Movie_Id, MovieName, Director, Rating, RunTime, Synopsis, Image) VALUES (NULL,'$title','$director','$ratings','$runtime','$summary','$image')";
    $retval=mysqli_query($db,$sql);
    if(! $retval ) {
        die('Could not enter data: ' .mysqli_connect_error() );
        }else
        header("location: admin_movies.php");
        mysqli_close($db);
    }
    
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Add Movies</title>
        <link rel="stylesheet" type="text/css" href="theatrestyles.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type="text/css">
            *{
                box-sizing:border-box;
            }
    nav a{
        display: inline-block;
        text-decoration: none;
        padding: 5px 15px;
        font-size: 0.9em;
        font-weight:bold;
        color: white;
    }
    nav a:hover {
        color: grey;
    }
        nav {
            position:fixed;
            top:0;
            left:0;
            width:250px;
            height:100%;
            background:#24252A;
            display:flex;
            flex-direction:column;
            align-items:center;
            justify-content:center;
        }
        html{
            background-color:white;
        }
        header{
            background-color:grey;
        }
        body{
            margin-left:250px;
        }
        .movieForm{
            margin:30px;
            background-color:#DCDCDC;
            border-radius:50px;
            width:95%;
            color:black;
            padding:40px;
        }
        .error{
            float:right;
            background-color:grey;
            margin:10px;
            padding: 40px 30px;
            border-radius:50px;
            color:white;
            align-items: center;
        }
        .movieInput{
        padding: 9px 25px;
        margin:10px;
        border-radius:50px;
        cursor:pointer;
        color:black;
        resize: none;
        }
        .synposisInput{
        padding: 9px 25px;
        margin:10px;
        border-radius:50px;
        cursor:pointer;
        color:black;
        resize: none;
        display:inline-block;
        position:relative;
        width:65%;   
        height:35%;
        }
        .file{
        margin-right:auto;
        margin:10px;
        border:none;
        color:black;
        width:200px;
        padding:5px;
        border-radius:50px;
        cursor:pointer;
        transition: all 0.3s ease 0s;
        margin-bottom:15px;
        }
        .moviesubmit{
        margin:10px;
        margin-top:15px;
        color:white;
        padding: 9px 25px;
        background-color:grey;
        border:none;
        border-radius:50px;
        cursor:pointer;
        transition: all 0.3s ease 0s;
        }
        </style>
</head>
<header>
<a class="logo" href="homepage.php"><img src="images/vectortrace.png" alt="logo" height="45px" width="70px"></a>
    <h1 style="color:white;">Admin Console</h1>
</header>
            <nav>
                <a href="admin_movies.php">Movies List</a>
                <a style="color:grey;" href="admin_addmovies.php">Add Movies</a>
                <a href="admin_user.php">Account Directory</a>
                <a style="margin-top:35%;" href="homepage.php"><button style="background-color: grey;"><span class="fa fa-angle-left"></span></button></a>
            </a>
            </nav>
        <body>
            <h1 style="margin-bottom:25px;">Add Movies</h1><hr>
           
            <form action="" method="POST" enctype="multipart/form-data">
            <div class="movieForm">
                <div class="formInput">
                <?php  if (count($errors) > 0) : ?>
                <div class="error">
                    <?php foreach ($errors as $error) : ?>
  	                <p><?php echo $error ?></p>
  	                <?php endforeach ?>
                 </div>
            <?php  endif ?>
                    <input class="movieinput" type="text" name="moviename" placeholder="Movie Title">
                    <input class="movieinput" type="text" name="director" placeholder="Director Name"><br>
                    <input class="movieinput" type="text" name="rating" placeholder="Rating">/10<br>
                    <input class="movieinput" type="text" name="runtime" placeholder="Duration"><br>
                </div>
                <div class="msgInput">
                    <input class="synposisInput" type="text" name="synopsis" placeholder="Synopsis">
                </div>
                <div class="imageInput">
                    <input class="file" type="file" name="image" id="image"><br><hr>
                    <input class="moviesubmit" type="submit" name="upload" value="Add Movie"><br>
                </div>
            </div>
                </form>
        </body>
</html>