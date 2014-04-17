<?php
$link = mysql_connect("localhost","root","root","0");
mysql_select_db("users",$link);
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$exec = "insert into user values('$username','$pwd')";
mysql_query($exec);
mysql_close($link);
header("Location:index.php");
?>