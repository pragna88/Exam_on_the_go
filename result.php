<?php

$x=0;
$z=10;
if(isset($_POST['q1'])){
$ans1=($_POST['q1']);
if($ans1=='A')
{
	$x++;
}
}
if(isset($_POST['q2'])){
$ans2=($_POST['q2']);
if($ans2=='B')
{
	$x++;
}
}
if(isset($_POST['q3'])){
$ans3=($_POST['q3']);
if($ans3=='C')
{
	$x++;
}
}
if(isset($_POST['q4'])){
$ans4=($_POST['q4']);
if($ans4=='D')
{
	$x++;
}
}
if(isset($_POST['q5'])){
$ans5=($_POST['q5']);
if($ans5=='E')
{
	$x++;
}
}
if(isset($_POST['q6'])){
$ans6=($_POST['q6']);
if($ans6=='A')
{
	$x++;
}
}
if(isset($_POST['q7'])){
$ans7=($_POST['q7']);
if($ans7=='B')
{
	$x++;
}
}
if(isset($_POST['q8'])){
$ans8=($_POST['q8']);
if($ans8=='C')
{
	$x++;
}
}
if(isset($_POST['q9'])){
$ans9=($_POST['q9']);
if($ans9=='D')
{
	$x++;
}
}
if(isset($_POST['q10'])){
$ans10=($_POST['q10']);
if($ans10=='D')
{
	$x++;
}
}
$y=$x*$z;
switch ($y) {
     case "0":
     case "10":
      case "20":          
case "30":
case "40": $e="you must study much harder!";
	break;
case "50":$e="Good";break;
case "60":$e="Good";break;
case "70":$e="Good";break;
case "80":$e="well done";break;
case "90":$e="excellent!!";break;
case "100":$e="excellent!!";
             break;
     }
echo"<!DOCTYPE html>
<html>
<head>
<style>
body {
background:#FFD39B;
width:100%;
height:auto;
}
#div{
    border-radius: 15px 15px;
background-image:url('result.jpg');
    padding: 20px; 
margin-top:10px;
    width: 460px;
    height: 400px;
margin-left:2.5cm;
}
h1 {
margin-left:6cm;
    margin-top:30px;
   }
h2 {
	margin-left:7.5cm;
}
h3{
	margin-left:5.5cm;
}
p {
		font-size:28px;
	margin-left:7cm;
}
a{
  display: inline-block;
  padding: 15px 25px;
  font-size: 20px;
  cursor: pointer;
  text-align: center;	
  text-decoration: none;
  outline: none;
  color: #fff;
  background-color: #CC3300;
  border: none;
   height:18px; 
    width: 250px; 
    padding-right:15px; 
    padding-left:15px; 
margin-left:5.5cm;
margin-top:20px;
border: 1px solid #4C3C1B;
border-top-right-radius: 30px;
border-bottom-left-radius: 30px;
border-top-left-radius: 15px;
border-bottom-right-radius: 15px;
box-shadow: 0px 0px 15px #777;
}
#rcorners6{
   border-radius: 15px 15px;
   border: 1px solid #4C3C1B;
	box-shadow: 0px 0px 8px #777;
    background: #FF7F50;
    padding: 20px; 
margin-top:30px;
    width: 700px;
    height: 520px;
margin-left:6.5cm;
}
a:hover {background-color: #3e8e41}

</style>
</head>
<body><div id='rcorners6'><div id='div'>
<h1>RESULT</h1>
<p>$x of 10</p>
<h2>$y %</h2>
<h3>$e</h3></div>
<b><a href='firstpage.html'>TRY AGAIN</a></b><div>
</body>
</html>";
?>