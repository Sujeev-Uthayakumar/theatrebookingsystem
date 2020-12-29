<?php 
$host="localhost";
$user="root";
$pass="";
$database="theatrebooking";
$db=mysqli_connect($host,$user,$pass,$database);

if(mysqli_connect_error()){
    die(mysqli_connect_error());
}
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $uname=$_POST['username'];
    $password=$_POST['password'];

    $sql="select * from users where Username='".$uname."'AND Password='".$password."' limit 1";
    $result = mysqli_query($db,$sql);
    $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

    $count = mysqli_num_rows($result);
    if($count == 1){
        $_SESSION['username'] = $uname;
                header("location: homepage.php");
        }else {
            header("location: notloggedin.html");
        }
    }
    /*
    if($uname=='admin' && $password=='password' && $count==1){
        $_SESSION['login'] = $uname;
        header("location: admin_index.php");
    }else {
    header("location: notloggedin.html");
    }
    */
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login Page</title>
        
        <link rel="stylesheet" type="text/css" href="loginstyles.css">
        <link rel="stylesheet" type="text/css" href="theatrestyles.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type=text/css>
        html {
            background:url("images/loginbackground.jpg");
        }
        </style>
</head>
        <header>
            <a class="logo" href="homepage.php"><img src="images/vectortrace.png" alt="logo" height="45px" width="70px"></a>
            <a class="cta" href="signup.php"><button>Sign Up</button></a>
            
        </header>
        <body>
            <div class="loginarea">
                <h1>Enter Login</h1><hr>
                <form action="" method="POST">
                    <p>Username</p><br>
                    <input class="logininput" type="text" name="username" placeholder="Username"><br>
                    <p>Password</p><br>
                    <input class="logininput" type="password" name="password" placeholder="Password"><br>
                    <input class="loginsubmit" type="submit" name="submit" value="Login"><br>
                    <a href="signup.php">Need an account? Sign Up</a><br>
                </form>
            </div>
                <div class="accountbenefits">
                    <h1>Not a Member? Membership Benefits Include</h1><hr>
                    <p><span>&#10003;Fast and Easy Checkout</span></p>
                    <p><span>&#10003;Membership Rewards</span></p>
                    <p><span>&#10003;Movie Experience Tailored to You</span></p>
                </div>
                
    </body>
</html>