
<!-- <!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
 <div class="container">
 	<div class="header">
    <h2><b>Digital Census System</b></h2>
 		<h3> User login</h3>
 	</div>
 	<div class="main">
 		<form>
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="text" required placeholder="username" name="">
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input type="password"required placeholder="password" name="">
 			</span><br>
 				<button><a href="userform.html">login</a></button>

 		</form>
 	</div>
 </div>
</body>
</html> -->
<?php
$login=false;
$showerror=false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include 'connection.php';
    $name=$_POST["name"];
    $password=$_POST["password"];
    $sql="SELECT * FROM `registration` WHERE name='$name' AND password='$password' ";
    $result=mysqli_query($conn,$sql);
    $num=mysqli_num_rows($result);
    if($num==1){
        $login=true;
        session_start();
        $_SESSION['loggedin']=true;
        $_SESSION['name']=$name;
        header("location:userform.php");
    }
    else{
        $showerror="invalid username or password";
    }
    
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
  <style>

.main input, .form-btn {
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

.main .form-btn {
	padding-left: 0;
	background-color: #55e033;
	letter-spacing: 1px;
	font-weight: bold;
	margin-bottom: 70px;
}

.main .form-btn:hover {
	box-shadow: 2px 2px 5px #555;
	background-color: #7799d4;
}
  </style>
</head>
<body>
<?php
if($login){
echo '<div class="alert" role="alert">
  You are logged in
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div> ';
}
if($showerror){
  echo '<div class="alert" role="alert">
    '.$showerror.'
    
  </div> ';
  }
?>

  

  
 <div class="container">
 	<div class="header">
    <h2><b>Digital Census System</b></h2>
 		<h3> User login</h3>
 	</div>
 	<div class="main">
   <form action="" method = "post">
 			<span>
 				<i class="fa fa-user"></i>
 				<input type="text" required placeholder="username" name="name">
 			</span><br>
 			<span>
 				<i class="fa fa-lock"></i>
 				<input type="password"required placeholder="password" name="password">
 			</span><br>
       <input type="submit" name="submit" values="login" class="form-btn">

 		</form>
 	</div>
 </div>
</body>
</html>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digital census system</title>
</head>
<link rel="stylesheet" href="style.css">

<body>
    <section>
        <div class="login-box">
           <h1>Digital Census System</h1> 
             <br><br>
              <h3>Login</h3>
            <div class="ulog">
          <form action="no action">Username<input type="email" required placeholder="Enter your id">
        <br>
    <br>
   Password<input type="password" placeholder="Enter your password">
    </form>
      </div>
         <br>
           <br>
             <button class="btn4"><a href="userform.html">Submit</a></button> 
             </div>
               </section>
    
</body>
</html> -->