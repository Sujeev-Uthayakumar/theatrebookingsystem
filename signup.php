<?php
$host="localhost";
$user="root";
$pass="";
$database="theatrebooking";
$db=mysqli_connect($host,$user,$pass,$database);
$errors=array();
if(mysqli_connect_error()){
    die(mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname=$_POST['firstname'];
    $lname=$_POST['lastname'];
    $email=$_POST['email'];
    $uname=$_POST['username'];
    $password1=$_POST['password'];
    $password2=$_POST['confirmpassword'];

if(empty($fname)){
    array_push($errors,"First name Needed");
}
    
if(empty($lname)){
    array_push($errors,"Last name Needed");
}

if(empty($uname)){
    array_push($errors,"Username Needed");
}

if(empty($email)){
    array_push($errors,"Email Needed");
}

if(empty($password1&&$password2)){
    array_push($errors,"Password Needed");
}

if(!($password1==$password2)){
    array_push($errors,"Passwords Different");
}

$users_check_query="SELECT * FROM users WHERE Username='$uname'OR EmailAddress='$email' LIMIT 1";
$result=mysqli_query($db,$users_check_query);
$users=mysqli_fetch_assoc($result);

if($users){
    if($users["Username"]===$uname){
        array_push($errors,"Username Exists");
    }
    if($users["EmailAddress"]===$email){
        array_push($errors,"Email Exists");
    }
}

if(count($errors)==0){
$sql = "INSERT INTO users (Id,FirstName, LastName,Username,Password,EmailAddress) VALUES(NULL,'$fname','$lname','$uname', '$password1','$email')";
$retval = mysqli_query($db,$sql);
if(! $retval ) {
    die('Could not enter data: ' .mysqli_connect_error() );
    }else
    header("location: signedup.html");
    mysqli_close($db);
}
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sign Up Page</title>
        
        <link rel="stylesheet" type="text/css" href="signupstyles.css">
        <link rel="stylesheet" type="text/css" href="theatrestyles.css">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet" type="text/css"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style type=text/css>
        html {
            background:url("images/signupbackground1.jpg");
        }
        </style>
</head>
        <header>
            <a class="logo" href="homepage.php"><img src="images/vectortrace.png" alt="logo" height="45px" width="70px"></a>
            <a class="cta" href="index.php"><button>Login</button></a>
        </header>
        <body>
            <?php  if (count($errors) > 0) : ?>
                <div class="error">
                    <?php foreach ($errors as $error) : ?>
  	                <p><?php echo $error ?></p>
  	                <?php endforeach ?>
                 </div>
            <?php  endif ?>
                </div>
                <div class="signuparea"> 
                    <h1>Sign Up</h1>
                    <p>Please fill in this form to create an account!</p><br>
                    <hr>
                    <form action="" method="POST">
                        <input class="signupinput" type="text" name="firstname" placeholder="First Name"><br>
                        <input class="signupinput" type="text" name="lastname" placeholder="Last Name"><br>
                        <input class="signupinput" type="text" name="email" placeholder="Email"><br>
                        <input class="signupinput" type="text" name="username" placeholder="Username"><br>
                        <input class="signupinput" type="password" name="password" placeholder="Password"><br>
                        <input class="signupinput" type="password" name="confirmpassword" placeholder="Confirm Password"><br>
                        <a href="index.php">Have an account? Login</a><br>
                        <input class="signupsubmit" type="submit" name="" value="Sign Up"><br>
                    </form>
                </div>
    </body>
</html>