<?php
session_start();

include("connection.php");
include("functions.php");


if($_SERVER['REQUEST_METHOD'] == "POST")
{
	//something was posted
	$user_name = $_POST['user_name'];
	$password = $_POST['password'];

	if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
	{
	   //read from database
	   //$user_id = random_num(20);
	   $query = "select * from users where user_name = '$user_name' limit 1";

	   $result = mysqli_query($con,$query);

       if($result)
	   {
		   if($result && mysqli_num_rows($result) > 0)
           {

              $user_data = mysqli_fetch_assoc($result);
            
			   if($user_data['password'] == $password)
			   {

				  $_SESSION['user_name'] = $user_data['user_name'];
				  header("Location: index.php");
				  die;
			   }
           }
	   }
		echo '<i style="color:white;font-size:30px;font-family:Arial, Helvetica, sans-serif ;">wrong username or password!!</i>';


	}else
	{
		echo '<i style="color:white;font-size:30px;font-family:Arial, Helvetica, sans-serif ;">please enter valid information!!</i>';
	}

}

?>














 <html>
 <head>
    <style>
        body{
	margin:0;
	padding:0;
	background: url(nature.jpg) no-repeat center center fixed;
	background-size: cover;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	font-family: sans-serif;

}
form{
	border: 1px solid #99bbff;
	padding: 30px;

}
.login_box, .signup_box{
	background-color: rgba(0,0,0,0.55);
	position: absolute;
	top:50%;
	left:70%;
	transform: translate(-50%, -46%);
	padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 20px;
    padding-right: 20px;
    border-radius: 15px;
    border-color:#d2d2d2;
    border-width: 5px;
    color:#ff0000;
    box-shadow:-10px -10px 9px #ccddff;
}
.user{
	width: 500px;
	height:200px;
	position: absolute;
	top:-100px;
	left:calc(50% - 240px);
	

}
h3{
	margin: 0;
	padding: 50px 0 20px;
	font-size:25px;
	color:#f1f1f1;
	text-align: center;

}

p{
	color: #fff;
	margin: 0;
	padding:0;
	font-weight: bold;
}
input{
	width:100%;
	margin-bottom: 10px;

}
input[type="text"], input[type="password"], input[type="email"]{
	border:none;
	border-bottom: .5px solid #fff;
	background: transparent; 
	outline:none;
	height:40px;
	color:#f5f5f0;
	font-size: 15px;
}
input[type="submit"]{
	border:none;
	outline:none;
	background:#1a1aff;
	font-size: 20px;
	color:#fff;
	border-radius: 30px;
	font-weight: bold;

}
input[type="submit"]:hover{
	cursor:pointer;
	background:#e6b800; 
}
a{
	text-decoration: none;
	color:#fff;
	font-size:15px;
	line-height:15px;

}
a:hover{
	color:#ffff00;
}
span{
	font-weight: bold;
}
    </style>
 	<title>Login Form</title>
 	<link rel="stylesheet" type="text/css" href="style.css">
 	<script type="text/javascript" src="javascript.js"></script>
 </head>
 <body>
   
 <div class="login_box">

 	
 	<h3>USER LOGIN</h3>

 	<form method="post">

 	<p>User Name</p>
 	<input type="text" name="user_name" placeholder="Enter Username">

 	<p>Password</p>
 	<input type="password" name="password" placeholder="password"><br>

	<div id="errorbox"></div><br>

 	<input type="submit" value="LOGIN"><br><br>

 	<p>Not registered?</p>
    <br>
    <a href="signup.php"> <span>Create an account</span></a>

 </form>
 </div>
 </body>
 </html> 