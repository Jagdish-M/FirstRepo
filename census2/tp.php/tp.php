
<?php
$server="localhost";
$username="root";
$password="";
$database="census";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
    echo "s";
}
else{
    echo "";
}
$showalert=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  
  $existsql="SELECT * FROM `registration` WHERE email='$email'";
 
  $result=mysqli_query($conn,$existsql);
  $numrows=mysqli_num_rows($result);
  if($numrows>0){
    $showerror="user already exists";
  }
  else{
   
  

  if(($password == $cpassword)){
    $sql = "INSERT INTO `registration` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
  $result=mysqli_query($conn,$sql);

    if($result){
      $showalert=true;
    }
  }
  else{
    $showerror="password do not match";
  }
header("location:userlogin.php");
  
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <style>
   body {
	font-family: sans-serif;	
	background-image: url(bg.jpg);
	background-repeat: no-repeat;
	overflow: hidden;
	background-size: cover;
}

.form-container {
	width: 380px;
	margin:7% auto;
	border-radius: 25px;
	background-color: rgba(0,0,0,0.1);
	box-shadow: 0 0 17px #333;
}

.header {
	text-align: center;
	padding-top: 75px;
}

.header h1 {
	color: #333;
	font-size: 45px;
	margin-bottom: 80px;
}

.main {
	text-align: center;
}

.main input, button {
	width: 300px;
	height: 40px;
	border:none;
	outline: none;
	padding-left: 40px;
	box-sizing: border-box;
	font-size: 15px;
	color: #333;
	margin-bottom: 40px;
}

.main button {
	padding-left: 0;
	background-color: #55e033;
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 70px;
}

.main button:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #7799d4;
}
.main input:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #ddd;
}

.main span {
	position: relative;
}

.main i {
	position: absolute;
	left: 15px;
	color: #333;
	font-size: 16px;
	top: 2px;
}



    </style>
    
</head>
<body>
<?php
if($showalert){
echo '<div class="alert alert-dismissible fade show" role="alert">
  Your account is created and you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
}
if($showerror){
  echo '<div class="alert" role="alert">
    '.$showerror.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
  }
?>
      

  
<div class="form-container">
  <div class="header">
  <div class="main">
  <form action="" method="post">
   <h2>Digital Census System</h2>
    <h3> User Resistration</h3>
  

    <?php
     if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
     };
    ?>
    
      
        
        <input type="text" placeholder="name" name="name">
<br>
        
        <input type="email" placeholder="email" name="email">
      <br>
       
        <input type="password" placeholder="password" name="password">
    <br>

               
                  
                   <input type="password" placeholder=" confirm password" name="cpassword">
               <br>
               <button><a href="userlogin.php">login</a></button>
             

    </form>
    <div>
  </div>
</div>




<!--
<div class="form-container">
    

        <form action="" method="post">
            <h1>registration form</h1>
            <?php
     if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
     };
    ?>
            <input type="text" name="name" placeholder="enter your name">
            <input type="email" name="email" placeholder="enter your email">
            <input type="password" name="password" placeholder="enter your password">
            <input type="password" name="cpassword" placeholder="confirm your password">
            <input type="submit" name="submit" values="register now" class="form-btn">
            <p>already have an account ? <a href="login.php">login now</a></p>
</form>
</div>
 -->
</body>
</html>
















<?php
$server="localhost";
$username="root";
$password="";
$database="census";

$conn=mysqli_connect($server,$username,$password,$database);
if($conn){
    echo "";
}
else{
    echo "";
}
$showalert=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
  
  include 'connection_leave.php';
  $name=$_POST["name"];
  $email=$_POST["email"];
  $password=$_POST["password"];
  $cpassword=$_POST["cpassword"];
  
  $existsql="SELECT * FROM `registration` WHERE email='$email'";
 
  $result=mysqli_query($conn,$existsql);
  $numrows=mysqli_num_rows($result);
  if($numrows>0){
    $showerror="user already exists";
  }
  else{
   
  

  if(($password == $cpassword)){
    $sql = "INSERT INTO `registration` (`name`, `email`, `password`) VALUES ('$name', '$email', '$password')";
  $result=mysqli_query($conn,$sql);

    if($result){
      $showalert=true;
    }
  }
  else{
    $showerror="password do not match";
  }
header("location:login.php");
  
}

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registration</title>
    <style>
      *{
    font-family: 'Popping' sans-serif;
    margin:0;
    padding: 0;
    box-sizing:border-box;
}
body{
    background: url('clg.png');
    background-size: cover;    
    
}

.form-container{
    
    display: flex;
    align-items:center;
    justify-content:center;
    margin: auto;
    padding: 20px;
    padding-bottom: 60px;
    
    
    
    

    
   
}

#container div{
    
    margin: 20px;
}
.form-container form{
    
    border-radius: 3px;
    box-shadow: 0 5px 10px rgba(0,0,0,.1);
    text-align: center;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: #cec9c9;
   
    

}
.form-container form h1{
    font-size:20px;
    text-transform: uppercase;
    margin-bottom: 10px;
    color:#333;
}
.form-container form input{
    max-width: 600px;
    width:100%;
    padding-left: 10px;
    padding-right: 10px;
    padding-top: 10px;
    padding-bottom: 10px;
    font-size: 17px;
    margin:8px 0;
    
    border-radius: 5px;
}
.form-container form .form-btn{
    background: #fbd0d9;
    color: crimson;
    text-transform: capitalize;
    font-size: 20px;
    cursor: pointer;
}
.form-container form .form-btn:hover{
    background:crimson;
    color: #fff;
}
.form-container form p{
    margin-top: 10px;
    font-size: 20px;
    color:#333;
}
.form-container form p a{
    color:crimson;
}
.form-container form .error-msg{
    margin: 10px 0;
    display: block;
    background: crimson;
    color: #fff;
    border-radius: 15px;
    font-size: 20px;
} 


      .form-container form{
        width:400px;
        height:450px;
      }
      .form-container form h1{
        margin-top:20px;
        font-weight:bold;
      }
    </style>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
if($showalert){
echo '<div class="alert alert-dismissible fade show" role="alert">
  Your account is created and you can login.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
}
if($showerror){
  echo '<div class="alert" role="alert">
    '.$showerror.'
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div> ';
  }
?>
    <div class="form-container">
    

        <form action="" method="post">
            <h1>registration form</h1>
            <?php
     if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
     };
    ?>
            <input type="text" name="name" placeholder="enter your name">
            <input type="email" name="email" placeholder="enter your email">
            <input type="password" name="password" placeholder="enter your password">
            <input type="password" name="cpassword" placeholder="confirm your password">
            <input type="submit" name="submit" values="register now" class="form-btn">
            <p>already have an account ? <a href="userlogin.php">login now</a></p>
</form>
</div>
</body>
</html>