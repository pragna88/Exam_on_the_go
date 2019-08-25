<?php
 $con=mysql_connect('localhost','root','') or die(mysql_error());
	mysql_select_db('user_registration') or die("cannot select DB");
   
  $action=$_POST["action"];
 
  if($action=="showcomment"){
     $show=mysql_query("Select * from comment order by id desc");
 
     while($row=mysql_fetch_array($show)){
        echo "<li><b>$row[name]</b> : $row[message]</li>";
     }
  }
  else if($action=="addcomment"){
    $name=$_POST["name"];
    $message=$_POST["message"];
 
     $query=mysql_query("INSERT INTO comment(name,message) values('$name','$message') ");
 
     if($query){
        echo "Your comment has been sent";
     }
     else{
        echo "Error in sending your comment";
     }
  }
?>