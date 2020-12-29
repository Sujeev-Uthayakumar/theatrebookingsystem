<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Orders</title>
        <link rel="stylesheet" type="text/css" href="theatrestyles.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
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
        </style>
</head>
<header>
<a class="logo" href="homepage.php"><img src="images/vectortrace.png" alt="logo" height="45px" width="70px"></a>
    <h1 style="color:white;">Admin Console</h1>
</header>
            <nav>
                <a href="admin_movies.php">Movies List</a>
                <a href="admin_addmovies.php">Add Movies</a>
                <a href="admin_user.php">Account Directory</a>
                <a style="margin-top:35%;" href="homepage.php"><button style="background-color: grey;"><span class="fa fa-angle-left"></span></button></a>
            </a>
            </nav>
        <body>
            <h1>Customer Orders</h1>
        </body>
</html>