<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Form</title>
	<link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap');
*
{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body 
{
	display: flex;
	justify-content: center;
	align-items: center;
	min-height: 100vh;
	flex-direction: column;
	background: #23242a;
}
.box 
{
	position: relative;
	width: 380px;
	height: 480px;
	background: #1c1c1c;
	border-radius: 8px;
	overflow: hidden;
}
.box::before 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
	animation: animate 6s linear infinite;
}
.box::after 
{
	content: '';
	z-index: 1;
	position: absolute;
	top: -50%;
	left: -50%;
	width: 380px;
	height: 420px;
	transform-origin: bottom right;
	background: linear-gradient(0deg,transparent,#45f3ff,#45f3ff);
	animation: animate 6s linear infinite;
	animation-delay: -3s;
}
@keyframes animate 
{
	0%
	{
		transform: rotate(0deg);
	}
	100%
	{
		transform: rotate(360deg);
	}
}
form 
{
	position: absolute;
	inset: 2px;
	background: #28292d;
	padding: 50px 40px;
	border-radius: 8px;
	z-index: 2;
	display: flex;
	flex-direction: column;
}
h2 
{
	color: #45f3ff;
	font-weight: 500;
	text-align: center;
	letter-spacing: 0.1em;
}
.inputBox 
{
	position: relative;
	width: 300px;
	margin-top: 35px;
}
.inputBox input 
{
	position: relative;
	width: 100%;
	padding: 20px 10px 10px;
	background: transparent;
	outline: none;
	box-shadow: none;
	border: none;
	color: #23242a;
	font-size: 1em;
	letter-spacing: 0.05em;
	transition: 0.5s;
	z-index: 10;
}
.inputBox span 
{
	position: absolute;
	left: 0;
	padding: 20px 0px 10px;
	pointer-events: none;
	font-size: 1em;
	color: #8f8f8f;
	letter-spacing: 0.05em;
	transition: 0.5s;
}
.inputBox input:valid ~ span,
.inputBox input:focus ~ span 
{
	color: #45f3ff;
	transform: translateX(0px) translateY(-34px);
	font-size: 0.75em;
}
.inputBox i 
{
	position: absolute;
	left: 0;
	bottom: 0;
	width: 100%;
	height: 2px;
	background: #45f3ff;
	border-radius: 4px;
	overflow: hidden;
	transition: 0.5s;
	pointer-events: none;
	z-index: 9;
}
.inputBox input:valid ~ i,
.inputBox input:focus ~ i 
{
	height: 44px;
}
.links 
{
	display: flex;
	justify-content: space-between;
}
.links a 
{
	margin: 10px 0;
	font-size: 0.75em;
	color: #8f8f8f;
	text-decoration: beige;
}
.links a:hover, 
.links a:nth-child(2)
{
	color: #45f3ff;
}
input[type="submit"]
{
	border: none;
	outline: none;
	padding: 11px 25px;
	background: #45f3ff;
	cursor: pointer;
	border-radius: 4px;
	font-weight: 600;
	width: 100px;
	margin-top: 10px;
}
input[type="submit"]:active 
{
	opacity: 0.8;
}
    </style>
</head>
<body>
	<div class="box">
		<form  autocomplete="off" method="post">
			<h2>Get Your Password</h2>
			<div class="inputBox">
				<input type="text" name='email' pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required="required">
				<span> Register Username:</span>
				<i></i>
			</div>
            <div class="inputBox">
                <label for="Seqque" style="color:white;">Choose a Security Question:</label>&nbsp;&nbsp;&nbsp;
                <select name="seq" id="seq" style="height:40px;width:100%">
                <option value="#">&nbsp;&nbsp;&nbsp;&nbsp;------Select------</option>
                <option value="Who is your Favourite Cricketer?">&nbsp;Who is your Favourite Cricketer?&nbsp;</option>
                <option value="Which is your Favourite number?">&nbsp;Which is your Favourite number?</option>
                <option value="What is your 12th Std % ?">&nbsp;What is your 12th Std % ?</option>
                </select>
            </div>
            
			<div class="inputBox">
				<input type="text" name='seqans'  required="required">
				<span>Answer Of Security question:</span>
				<i></i>
			</div>
	
			<input type="submit" value="Submit" name="btnsub">
		</form>
	</div>
</body>
</html>
<?php
include("connection.php");

if(isset($_POST['btnsub']))
{
extract($_POST);
$email=$_POST['email'];
$seq=$_POST['seq'];
$seqans=$_POST['seqans'];

$q="select * from signup where email='$email'and seq='$seq' and seqans='$seqans'";
$result=mysqli_query($cn,$q);
if($a=mysqli_fetch_array($result))
{
$firstname=$a['firstname'];
$password=$a['password'];
echo"<script>alert('Hello $firstname your password is= $password');window.location='login.php'</script>";
}
else
{
echo"<center><b><font color=red>Incorrect username </font></b></center>";
}
mysqli_close($cn);
}
?>