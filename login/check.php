<?php
error_reporting(E_ALL ^ E_NOTICE);
$link = mysql_connect("localhost","root","root","0");
mysql_select_db("users",$link);
$username = $_POST['username'];
$pwd = $_POST['pwd'];
$exec="select * from user";
$result = mysql_query($exec);
$n = 0;
while($row = mysql_fetch_array($result))
{
	if($row['username'] == $username)
	{
		if($row['pwd'] == $pwd)
		{
		    echo "<script>alert('欢迎进入！')</script>";		
			header("Location:1.php");
			$n=1;
			break;
		}
	}
}

if($n==0)
{
   echo "<script>alert('用户名不存在或密码错误！')</script>";
   header("Location:index.php");
}
mysql_close($link);
?>