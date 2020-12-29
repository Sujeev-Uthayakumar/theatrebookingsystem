<?php 
$host="localhost";
$user="root";
$pass="";
$database="theatrebooking";
$db=mysqli_connect($host,$user,$pass,$database);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>User Directory</title>
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
        table{
        font-size:14px;
        margin:30px;
        text-align: left;
        border-collapse: collapse;
        width:95%;
        }
        caption{
        text-align: left;
        font-weight:bold;
        border-bottom:3px solid black;
        }
        th{
        background-color:#D3D3D3;
        font-weight: bold;
        height:40px;
        }
        tr{
        height:30px;
        }
        tbody tr:nth-child(odd){
            background-color:#DCDCDC;
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
                <a style="color:grey;" href="admin_user.php">Account Directory</a>
                <a style="margin-top:35%;" href="homepage.php"><button style="background-color: grey;"><span class="fa fa-angle-left"></span></button></a>
            </a>
            </nav>
        <body>
            <h1 style="margin-bottom:25px;">Account Directory</h1><hr>
            <?php
            $query="SELECT * FROM users";
            $result=mysqli_query($db,$query);
            echo "<table>";
            echo "<caption> Film Factory Users </caption>";
            echo "<tr> <th>First Name</th> <th>Last Name</th> <th>Username</th> <th>Password</th> <th>Email Address</th> </tr>";
            while($value=mysqli_fetch_assoc($result)){
                echo "<tr>";
                echo "<td>" . $value['FirstName'] . "</td>";
                echo "<td>" . $value['LastName'] . "</td>";
                echo "<td>" . $value['Username'] . "</td>";
                echo "<td>" . $value['Password'] . "</td>";
                echo "<td>" . $value['EmailAddress'] . "</td>";
                echo "</tr>";
                }
              echo "</table>";
              mysqli_close($db);
            ?>
        </body>
</html>