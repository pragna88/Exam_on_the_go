<?php 
session_start();
?>
<?php

if(isset($_POST["submit"])){

if(!empty($_POST['email']) && !empty($_POST['pass'])) {
	$email=$_POST['email'];
	$pass=$_POST['pass'];

	$con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('user_registration') or die("cannot select DB");

	$query=mysql_query("SELECT * FROM login WHERE email='".$email."' AND password='".$pass."'");
	$numrows=mysql_num_rows($query);
	if($numrows!=0)
	{
	while($row=mysql_fetch_assoc($query))
	{
	$dbemail=$row['email'];
	$dbpassword=$row['password'];
	}

	if($email == $dbemail && $pass == $dbpassword)
	{
	$_SESSION['sess_email']=$email;

	/* Redirect browser */
	header("Location:firstpage.html");
	}
	} else {
	echo '<script language="javascript">';
	echo 'alert("Invalid email or password!")';
	echo '</script>';
	}

} else {
	echo '<script language="javascript">';
	echo 'alert("All fields are required!")';
	echo '</script>';
}
}
?>
<!doctype html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 <style>
 .btn-primary{font-family: 'Oswald';
    border-radius: 15px 50px;
	border: 1px solid #4C3C1B;
    background: #CC3300;
	color:#fff;
   font-size:40px
    padding: 10px; 
    width: 150px;
    height: 30px;
	font-weight: bold;
margin-left: 1cm;
    letter-spacing: 1px;
  box-shadow: 0px 0px 8px #777;
}
.textbox { 
    -moz-border-radius-topright: 30px;
    -webkit-border-top-right-radius: 30px;
    border-top-right-radius: 30px;
    -moz-border-radius-bottomleft: 30px;
    -webkit-border-bottom-left-radius: 30px;
    border-bottom-left-radius: 30px;
    border: 1px solid #848484;
    outline:0; 
    height: 25px; 
    width: 250px; 
    padding-right:15px; 
    padding-left:15px; 
  }
  #h3 {
    font-family: 'Oswald';
    border-radius: 15px 50px;
	border: 1px solid #4C3C1B;
    font-weight: bold;
    background: #CC3300;
    padding: 10px; 
    width: 300px;
    height: 50px;
    margin-left: 0.1cm;
   text-align:center;
}
#rcorners6 {
    border-radius: 15px 50px;
	border: 1px solid #4C3C1B;
    background: #FF7F50;
    padding: 20px; 
    width: 400px;
	height: 400px;
margin-left:4cm;
margin-top:36px;
box-shadow: 0px 0px 8px #777;
}
#img{
background-image:url("home3.jpg");
width:100%;
height:auto;
}
#title{
margin-left:4cm;
margin-top:49px;
font-family:Edwardian Script ITC;
font-weight:bold;
font-size:60px;
}
.logo {  
  cursor:pointer;
    width:240px;
    height:250px;
    position:absolute;
    top:7%;
    left:5%;
    margin-left:-80px;
    margin-top:-100px;
}
.cssload-box-loading {
	width: 50px;
	height: 50px;
	margin: auto;
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
}
.cssload-box-loading:before {
	content: '';
	width: 50px;
	height: 7px;
	background: rgb(0,0,0);
	opacity: 0.1;
	position: absolute;
	top: 58px;
	left: 0;
	border-radius: 50%;
	animation: shadow 0.58s linear infinite;
		-o-animation: shadow 0.58s linear infinite;
		-ms-animation: shadow 0.58s linear infinite;
		-webkit-animation: shadow 0.58s linear infinite;
		-moz-animation: shadow 0.58s linear infinite;
}
.cssload-box-loading:after {
	content: '';
	width: 50px;
	height: 50px;
	background:#CC3300;
	position: absolute;
	top: 0;
	left: 0;
	border-radius: 3px;
	animation: cssload-animate 0.58s linear infinite;
		-o-animation: cssload-animate 0.58s linear infinite;
		-ms-animation: cssload-animate 0.58s linear infinite;
		-webkit-animation: cssload-animate 0.58s linear infinite;
		-moz-animation: cssload-animate 0.58s linear infinite;
}



@keyframes cssload-animate {
	17% {
		border-bottom-right-radius: 3px;
	}
	25% {
		transform: translateY(9px) rotate(22.5deg);
	}
	50% {
		transform: translateY(18px) scale(1, 0.9) rotate(45deg);
		border-bottom-right-radius: 39px;
	}
	75% {
		transform: translateY(9px) rotate(67.5deg);
	}
	100% {
		transform: translateY(0) rotate(90deg);
	}
}

@-o-keyframes cssload-animate {
	17% {
		border-bottom-right-radius: 3px;
	}
	25% {
		-o-transform: translateY(9px) rotate(22.5deg);
	}
	50% {
		-o-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
		border-bottom-right-radius: 39px;
	}
	75% {
		-o-transform: translateY(9px) rotate(67.5deg);
	}
	100% {
		-o-transform: translateY(0) rotate(90deg);
	}
}

@-ms-keyframes cssload-animate {
	17% {
		border-bottom-right-radius: 3px;
	}
	25% {
		-ms-transform: translateY(9px) rotate(22.5deg);
	}
	50% {
		-ms-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
		border-bottom-right-radius: 39px;
	}
	75% {
		-ms-transform: translateY(9px) rotate(67.5deg);
	}
	100% {
		-ms-transform: translateY(0) rotate(90deg);
	}
}

@-webkit-keyframes cssload-animate {
	17% {
		border-bottom-right-radius: 3px;
	}
	25% {
		-webkit-transform: translateY(9px) rotate(22.5deg);
	}
	50% {
		-webkit-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
		border-bottom-right-radius: 39px;
	}
	75% {
		-webkit-transform: translateY(9px) rotate(67.5deg);
	}
	100% {
		-webkit-transform: translateY(0) rotate(90deg);
	}
}

@-moz-keyframes cssload-animate {
	17% {
		border-bottom-right-radius: 3px;
	}
	25% {
		-moz-transform: translateY(9px) rotate(22.5deg);
	}
	50% {
		-moz-transform: translateY(18px) scale(1, 0.9) rotate(45deg);
		border-bottom-right-radius: 39px;
	}
	75% {
		-moz-transform: translateY(9px) rotate(67.5deg);
	}
	100% {
		-moz-transform: translateY(0) rotate(90deg);
	}
}

@keyframes shadow {
	0%,
	100% {
		transform: scale(1, 1);
	}
	50% {
		transform: scale(1.2, 1);
	}
}

@-o-keyframes shadow {
	0%,
	100% {
		-o-transform: scale(1, 1);
	}
	50% {
		-o-transform: scale(1.2, 1);
	}
}

@-ms-keyframes shadow {
	0%,
	100% {
		-ms-transform: scale(1, 1);
	}
	50% {
		-ms-transform: scale(1.2, 1);
	}
}

@-webkit-keyframes shadow {
	0%,
	100% {
		-webkit-transform: scale(1, 1);
	}
	50% {
		-webkit-transform: scale(1.2, 1);
	}
}

@-moz-keyframes shadow {
	0%,
	100% {
		-moz-transform: scale(1, 1);
	}
	50% {
		-moz-transform: scale(1.2, 1);
	}
}

a{ color:black;
font-size:14px;}
 </style>
</head>
<body id="img">
<div>
<div class="logo">
 <div class="cssload-box-loading">
</div>   
</div>
<h1 id="title" >OnlineExam...</h1>
</div>
<div class="row">
   <div id="rcorners6">
    <div class="col-xs-6 col-md-4">
<br>
<h3 id="h3">LOGIN</h3>
<form action="" method="POST">
<b>Email:</b><br>
<input type="text" name="email" class="textbox" placeholder="email"><br><br>
<b>Password:</b><br>
<input type="password" name="pass" class="textbox" placeholder="password"><br><br>
<input type="submit" value="Sign in" name="submit" class="btn btn-primary" /><br><br>
<a href="register.php"><u><b>new user?</b></u></a>
</form>

</body>
</html>
